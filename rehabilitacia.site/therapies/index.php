<?php
session_start([
]);
?>
<!DOCTYPE html>

<html lang="bg-BG">
    <head>
        <title>Rehabilitacia|Terapii</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Рехабилитация,Кинезитерапия,Лечебни масажи,Индивидуални програми за възстановяване след травми.Онлайн-записване."/>
        <meta name="author" content="Илиан Георгиев"/>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                <h2>ТЕРАПИИ</h2>
            </section>

            <main class="row">



                <div class="col-6">
                    <img class="img_therapy" src="../images/handache.jpg" alt="физиотерапия" title="физиотерапия"/> 
                </div>
                <div class="col-6">
                    <p>Поради гореизложените значения е възприето схващането, че нормата при живите организми е „функционален оптимум“. Това означава протичането на всички процеси в живата система при максимално възможно съгласуване, сигурност, икономичност и ефективност. Оптималното състояние е най-доброто от реално възможните еднородни състояния, което най-пълно съответства на конкретните условия и на задачите за функциониране на системите при тези условия. Понятието „норма“ представлява мерната характеристика на взаимодействието между организма и средата. Определя динамичното самосъхранение при различни условия на съществуване и има за основа закрепени от генотипа и проявяващи се чрез фенотипа форми на реакция и организация на реагиращия субстрат.</p>   
                </div>

                <div class="row">
                    <div class="col-6">
                        <p>Нормата не е неизменна и не е лишена от противоречия. Представлява диалектическо единство на устойчивост и променливост. Съществени параметри на жизнена дейност могат да варират в рамките на нормата и същевременно да получават оптимални значения по отношение на съответните условия на средата. Вариациите представляват възможност за по-добро приспособяване към средата. В определени случаи обаче могат да излязат от границите на оптималното състояние, при което възниква ново качество – патологичен процес.
                        </p>   
                    </div>
                    <div class="col-6">
                        <img class="img_therapy" src="../images/rehabili.jpg" alt="рехабилитация" title="рехабилитация"/> 
                    </div>
                </div>
            </main>

            <?php
            require_once "../footer/footer.html";
            ?>  
        </div>
    </body>
</html>





