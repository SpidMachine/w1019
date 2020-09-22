<nav class="navbar navbar-expand-lg" id="header">
    <!--    <a class="navbar-brand" href="#">Navbar</a>-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="margin-left: 150px">
            <li class="nav-item<?= $controllerType == '' ? ' active' : '' ?>">
                <a class="nav-link" href="?action=show&type=usercar"><h5>CarMarket</h5><span
                            class="sr-only">(current)</span></a>
            </li>
        </ul>
        <div>
            <ul class="navbar-nav mr-auto"  style="margin-right: 150px">
                <li class="nav-item<?= $controllerType == 'auth' ? ' active' : '' ?>">
                    <a class="nav-link" href="?action=loginform&type=auth">Авторизация</a>
                </li>
                <li class="nav-item<?= $controllerType == 'add' ? ' active' : '' ?>">
                    <a class="nav-link" href="?action=show&type=signup">Регистрация</a>
                </li>
                <span class="navbar-text">
                    <?= !empty($_SESSION['user']) ? $_SESSION['user']['FIO'] . '(' . $_SESSION['user']['name'] . ')' : '' ?>
                </span>
            </ul>
        </div>
    </div>
</nav>