<div class="container">
    <form action="?type=reg&action=add" method="post" id="loginform">
        <label for="login"></label><input type="text" name="login" placeholder="login" id="login"><br>
        <label>
            <input type="text" name="password" placeholder="password">
        </label><br>
        <label>
            <input type="text" name="FIO" placeholder="FIO">
        </label><br>
        <label>
            <input type="email" name="email" placeholder="email">
        </label><br>
        <input type="submit" value="ok">
    </form>
    <div id="response"></div>
</div>

<script>
    document.getElementById('login').addEventListener("keyup", function () {
        // alert(this.value);

        // let loginForm = document.getElementById("loginform");

        let xhr = new XMLHttpRequest();

        xhr.open("post", "?type=reg&action=checklogin&login=" + this.value);

        xhr.send();

        xhr.onload = function () {
            if (xhr.status === 200) {
                // console.log(xhr.response)
                var obj = JSON.parse(xhr.response);
                document.getElementById('response').innerHTML = obj.response;
                let input = document.getElementById('login');
                if (obj.response === "Yes") {
                    input.classList.add("logAlert")
                } else {
                    input.classList.remove("logAlert")
                }
            } else {
                console.log(xhr.statusText)
            }
        };
    })
</script>