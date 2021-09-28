<?php
session_start([
]);
?>
<!DOCTYPE html>

<html lang="bg-BG">
    <head>

        <meta charset="UTF-8"/>
        <title>Рехабилитация</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="Рехабилитация,Кинезитерапия,Лечебни масажи,Индивидуални програми за възстановяване след травми.Онлайн-записване."/>
        <meta name="author" content="Илиан Георгиев"/>
       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
        <link rel="stylesheet" type="text/css" href="./assets/style/style.css"/>
        <link rel="stylesheet" type="text/css" href="nav.css"/>
        

    </head>

    <body>
        <div class="container shell">
            <header class="row">

                <?php
                require_once "./header/header.html";
                ?> 

            </header>

             <?php
            require_once "./nav/nav.html";
            ?>

            <main class="row">

                <div class="col-12 img_home">
                    <img class="img_responsive" src="./images/fizio.jpg" alt="Физиотерапия" title="Физиотерапия"/> 
                </div>
                <div class="col-12">  

                    <p class="paragraf">Ние сме специалисти работещи по най-новите тенденции в областта на мануалната терапия и като цяло всичко свързано с кинезитерапията и рехабилитацията.
                        Работим с кинезиотейпинг (еластични ленти). В зависимост от това как се поставят могат да имат различен ефект. Като противоотчен, релаксиращ мускулите и болките до коригиращ гръбначно изкривяване, стабилизиращ или мобилизиращ.
                        Работим и с концепцията на Мълиган която е втора генерация мануална терапия, комбинира движението с мануалната терапия с мобилизация на ставата. Това е най-безопасната и ефективна маунална терапия. Ако имате болки в някои движения и никой не успява да ви помогне може би имате нужда от нас.</p>
                </div>

            </main>

            <?php
            require_once "./footer/footer.html";
            ?> 
        </div>
    </body>
</html>








