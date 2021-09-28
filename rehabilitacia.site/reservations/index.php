<?php
require_once "../boot.php";

?>
<!DOCTYPE html>
<html lang="bg-BG">
    <head>
        <title>Rehabilitacia | Zapisvane</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="Рехабилитация,Кинезитерапия,Лечебни масажи,Индивидуални програми за възстановяване след травми.Онлайн-записване."/>
        <meta name="author" content="Илиан Георгиев"/>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
        <link rel="stylesheet" type="text/css" href="../assets/style/style.css"/>
        <link rel="stylesheet" type="text/css" href="../nav/nav.css"/>

    </head>

    <body>
        <div class="container shell">
            <header class="row">
                <?php
                require_once "../header/header.html";
                ?>  

            </header>

            <?php
            require_once "../nav/nav.html";
            ?>
            <section class="text-center">

             
                <h2 id="headInfo">Регистрация</h2>
            </section>
            <main>
                <div class="row">
                    

                    <div class="col" ng-app="myApp" ng-controller="myCtrl">
                       
                        <div id="regDiv" class="container bg-light border" ng-show="showMe">
                            <p>Ако имате регистрация, логнете се <button class="mt-2 bg-info text-white rounded" ng-click="myFunc()">ТУК</button></p>



                            <form id="regForm" action="../reservations/registration.php" method="post">
                                <p>Регистрация:</p>

                                <div class="form-group">
                                    <label for="name">Име</label>
                                    <input type="text" name="reg_ime" class="form-control" id="name" placeholder="Име">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div>
                                <div class="form-group">
                                    <label for="family">Фамилия</label>
                                    <input type="text" name="reg_familia" class="form-control" id="family" placeholder="Фамилия">
                                    <small class="form-text text-muted"></small>
                                </div>
                                <div class="form-group">
                                    <label for="adres">Адрес</label>
                                    <input type="text" name="reg_adres" class="form-control" id="adres" placeholder="Адрес">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Телефон</label>
                                    <input type="tel" name="reg_phone" class="form-control" id="phone" placeholder="Телефон">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div>
                                <div class="form-group">
                                    <label for="usName">Username</label>
                                    <input type="text" name="reg_usName" class="form-control" id="usName" placeholder="Потребителско име">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div>
                                <div class="form-group">
                                    <label for="ps_wd">Password</label>
                                    <input type="password" name="reg_ps_wd" class="form-control" id="ps_wd" placeholder="Парола">
                                </div>

                                <button id="registracia" type="submit" class="btn btn-primary mb-2">РЕГИСТРАЦИЯ</button>

                            </form>

                            <!--Ако имате регистрация, логнете се:-->
                            <form action="../views/loginView.php" method="post">

                            </form>
                        </div>
                        <div id="logDiv" class="container bg-light border" ng-show="hideMe">
                            <p>Ако нямате регистрация, регистрирайте се <button class="mt-2 bg-info text-white rounded" ng-click="myFunc()">ТУК</button></p>
                            <div id="errorLogin" class='mb-3 bg-warning text-danger'></div>
                            <form id="logForm" action="../reservations/login.php" method="post">
                    <!--<p>Ако имате регистрация влезте със своето потребителско име и парола</p>-->
                                <div class="form-group">
                                    <label for="usName1">Username</label>
                                    <input type="text" name="usName1" class="form-control" id="usName1" placeholder="Потребителско име">
                                    <small id="emailHelp" class="form-text text-muted"></small>
                                </div>
                                <div class="form-group">
                                    <label for="pswd1">Password</label>
                                    <input type="password" name="pswd1" class="form-control" id="pswd1" placeholder="Парола">
                                </div>

                                <button id="loginForm" type="submit" class="btn btn-primary mb-2">ВЛЕЗ</button>

                            </form>

                        </div>
                    </div>
                   

                    <div id="userDiv" class="container bg-light mb-3 border">
                        <div class="row">
                            <div class="col text-black-50">
                                Потребителско име: 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p id="user" class="font-weight-bold profil_info"></p> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-black-50">
                                Име:

                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p id="ime" class="font-weight-bold profil_info"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-black-50">
                                Фамилия:
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p id="familia" class="font-weight-bold profil_info"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-black-50">
                                Адрес:
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p id="adresna" class="font-weight-bold profil_info"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-black-50">
                                Телефон:
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p id="tel" class="font-weight-bold profil_info"></p>
                            </div>
                        </div>
                        <form class="text-center mb-2" action="../reservations/loginOut.php" method="post">
                            <button type="submit" class="btn btn-primary mx-auto">ИЗЛЕЗ</button>
                        </form>

                    </div>





                </div>
            </main>
<?php
require_once "../footer/footer.html";
?> 
        </div>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <script src="./reg_app.js"></script>
        <script src="./userInfo.js"></script>
        <!--<script src="./userReg.js"></script>-->
    </body>
</html>