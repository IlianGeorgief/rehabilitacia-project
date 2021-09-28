<?php
session_start([
]);
?>
<!DOCTYPE html>

<html lang="bg-BG">
    <head>

        <meta charset="UTF-8"/>
        <title>Rehabilitacia|Lechebni masazi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="Рехабилитация,Кинезитерапия,Лечебни масажи,Индивидуални програми за възстановяване след травми.Онлайн-записване."/>
        <meta name="author" content="Илиан Георгиев"/>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
        <link rel="stylesheet" type="text/css" href="../nav/nav.css"/>
        <link rel="stylesheet" type="text/css" href="../assets/style/style.css"/>


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
                <h2>ЛЕЧЕБНИ МАСАЖИ</h2>
            </section>
            <main class="row">
                <div class="col">
                    <div id="carouselExampleIndicators" class="carousel slide col" data-ride="carousel">
                        <ol class= "carousel-indicators" >
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">

                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1">

                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2">

                            </li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../images/individualni-programi.jpg" class="d-block w-100" alt="Рехабилитация"/>
                            </div>

                            <div class="carousel-item">
                                <img src="../images/page-lechenie-travmi-845x300.jpg" class= "d-block w-100" alt="Физиотерапия"/>
                            </div>
                            <div class="carousel-item">
                                <img src="../images/fizioterapiqta.jpg" class= "d-block w-100" alt="Кинезитерапия"/>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true" >

                            </span>
                            <span class="sr-only"> Previous </span>
                        </a> 
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only"> Next </span></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
<!--                        <img class="img_home" src="../images/fizioterapiqta.jpg" alt="физиотерапия" title="физиотерапия">-->
                        <!--<img class="img_home" src="images/lechenie.jpg" alt="лечение" title="лечение">-->
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <ul>
                                <li><a href="../">За Нас</a></li>
                                <li><a href="../diagnostic/">Диагностика</a></li>
                                <li><a href="../therapies/">Терапии</a></li>
                                <li><a href="../fiziotherapy/">Физиотерапия</a></li>
                                <li><a href="../kinezitherapy/">Кинезитерапия</a></li>
                                <li><a href="../massages/">Лечебни масажи</a></li>
                                <li><a href="../individual/">Индивидуални програми</a></li>
                                <li><a href="../reservations/">Записване</a></li>
                                <li><a href="../contactus/">За контакти</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-8"> 


                        <p class="paragraf">Ние сме специалисти работещи по най-новите тенденции в областта на мануалната терапия и като цяло всичко свързано с кинезитерапията и рехабилитацията.</p>
                        <p class="paragraf">Работим с кинезиотейпинг (еластични ленти). В зависимост от това как се поставят могат да имат различен ефект. Като противоотчен, релаксиращ мускулите и болките до коригиращ гръбначно изкривяване, стабилизиращ или мобилизиращ.</p>
                        <p class="paragraf">Работим и с концепцията на Мълиган която е втора генерация мануална терапия, комбинира движението с мануалната терапия с мобилизация на ставата. Това е най-безопасната и ефективна маунална терапия. Ако имате болки в някои движения и никой не успява да ви помогне може би имате нужда от нас.</p>
                    </div>
                </div>
            </main>
            <footer>
                <?php
                require_once "../footer/footer.html";
                ?>  
            </footer>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">

        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">

        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">

        </script>


    </body>
</html>



