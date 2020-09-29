<nav class="navbar navbar-expand-lg" id="header">
    <!--    <a class="navbar-brand" href="#">Navbar</a>-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item<?= $controllerType == '' ? ' active' : '' ?>">
                <a class="nav-link" href="?action=show&type=usercar" style="margin-left: 368px"><h5>CarMarket</h5><span
                            class="sr-only">(current)</span></a>
            </li>
            <!-- <li class="nav-item<?= $controllerType == 'car' ? ' active' : '' ?>">
                    <a class="nav-link" href="?action=show&type=usercar">Автомобили</a>
                </li> -->
            <!--                <li class="nav-item--><? //= $controllerType == 'guestbook' ? ' active' : '' ?><!--">-->
            <!--                    <a class="nav-link" href="?action=show&type=guestbook">Гостевая книга</a>-->
            <!--                </li>-->
        </ul>
            <div>
                <ul class="navbar-nav mr-auto">
                <span class="navbar-text" style="padding-right: 0.5rem">
                    <?= !empty($_SESSION['user']) ? $_SESSION['user']['FIO'] . '(' . $_SESSION['user']['name'] . ')' : '' ?>
                </span>
                    <li class="nav-item addBtn<?= $controllerType == 'auth' ? ' active' : '' ?>">
                        <a class="nav-link" href="?action=show&type=newad">Добавить объявление</a>
                    </li>
<!--                    <li class="nav-item--><?//= $controllerType == 'auth' ? ' active' : '' ?><!--">-->
<!--                        <a class="nav-link" href="?action=loginform&type=auth">Авторизация</a>-->
<!--                    </li>-->
                    <li class="nav-item<?= $controllerType == 'auth' ? ' active' : '' ?>">
                        <a class="nav-link" href="?action=logout&type=auth">🚪</a>
                    </li>
                </ul>
            </div>
    </div>
</nav>
