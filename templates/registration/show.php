<div class="nav-item">
    <div class="containerLog">
        <form action="?type=reg&action=add" method="post" id="loginform">
            <div class="formGroup">
                <h1>Регистрация</h1>
                <label>
                    <input type="text" name="login" placeholder="Логин" class="form-control">
                </label><br>
            </div>
            <div class="formGroup">
                <label>
                    <input type="text" class="form-control" name=" password" placeholder="Пороль">
                </label><br>
            </div>
            <div class="formGroup">
                <label>
                    <input type="text" class="form-control" name="city" placeholder="Город">
                </label><br>
            </div>
            <div class="formGroup">
                <label>
                    <input type="text" class="form-control" name="FIO" placeholder="Ваше имя">
                </label><br>
            </div>
            <div class="formGroup">
                <label>
                    <input type="text" class="form-control" name="phone" placeholder="Номер телефона">
                </label><br>
            </div>
            <div class="formGroup">
                <label>
                    <input type="submit" class="btn btn-secondary btn-lg btn-block" value="Зарегестрироваться">
                </label>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('login').addEventListener("keyup", function () {
        // alert(this.value);

        // let loginForm = document.getElementById("loginform");

        let xhr = new XMLHttpRequest();

        xhr.open("post", "?type=reg&action=checklogin&login=" + this.value);

        xhr.send();

        xhr.onload = function () {
            if (xhr.status == 200) {
                // console.log(xhr.response)
                var obj = JSON.parse(xhr.response);
                document.getElementById('response').innerHTML = obj.response;
                let input = document.getElementById('login');
                if (obj.response == "Yes") {
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