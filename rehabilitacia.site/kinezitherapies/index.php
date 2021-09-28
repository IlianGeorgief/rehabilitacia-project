<?php
session_start([
]);
?>
<!DOCTYPE html>

<html lang="bg-BG">
    <head>
        <title>Rehabilitacia | Kineziterapia</title>
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
                <h2>КИНЕЗИТЕРАПИЯ</h2>
            </section>
            <main class="row">

                <div class="col">
                    <img src="../images/lechenie.jpg" alt="лечение" title="лечение"/>  
                </div>
                <div class="col">
                    <p>Кинезитерапията представлява лечение чрез движение. В съвременната медицина в цял свят се набляга изключително много на консервативното лечение. Всеки търси „хапчето“ което има силен терапевтичен ефект и без никакви странични ефекти. Много често това „хапче“ е кинезитерапията. За съжаление в България все още този метод е слабо познат и развит. В цял свят той се развива изключителни темпове и добре образованите кинезитерапевти знаят това и могат да използват този метод изключително ефикасно.</p>
                </div>
                <div class="row">
                    <div class="col">
                        <p>На база това, което сме диагностицирали,  поставяме краткосрочни и дългосрочни цели. Обединяваме усилията си с Вашите близки, като ги обучаваме какво трябва да правят, така че дори когато не сме до Вас да имате лечение, което ще подобри резултатите които искаме да постигнем. Изграждаме подходяща обстановка така, че можете да сте напълно самостоятелни ако е възможно.</p>  
                    </div>
                    <div class="col">
                        <img src="../images/page-kinezi845x300.jpg" alt="кинезитерапия" title="кинезитерапия">
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


