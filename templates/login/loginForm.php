<?php
/** @var string $action
 * @var string $massage
 */

?>
<div class="nav-item">
    <div class="containerLog">
        <form action="<?= $action ?>" method="post">
            <div class="form-group">
                <h1>Вход</h1>
                <label for="exampleInputEmail1"></label>
                <input type="text" class="form-control" name="login" placeholder="Логин">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"></label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                       placeholder="Пороль">
                 <label></label>
            </div>
            <button type="submit" class="btn btn-secondary btn-lg btn-block">Войти</button>
        </form>
    </div>
</div>