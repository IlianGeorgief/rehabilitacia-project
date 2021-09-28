<?php
session_start([
]);
?>
<!DOCTYPE html>

<html lang="bg-BG">
    <head>

        <meta charset="UTF-8"/>
        <title>Rehabilitacia | Fizioterapia</title>
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
                <h2>ФИЗИОТЕРАПИЯ</h2>
            </section>
            <main class="row">
                <div class="col">
                    <div class="backgroundimage">
                        <p class="position">ФИЗИОТЕРАПИЯ</p>
                    </div>


                </div> 
            </main>
            <footer>
                <?php
                require_once "../footer/footer.html";
                ?>  
            </footer>
        </div>


    </body>
</html>