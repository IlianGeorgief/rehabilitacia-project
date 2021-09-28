<?php
session_start([
]);
?>
<!DOCTYPE html>

<html lang="bg-BG">
    <head>
        <title>Rehabilitacia | Diagnostica</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="Рехабилитация,Кинезитерапия,Лечебни масажи,Индивидуални програми за възстановяване след травми.Онлайн-записване."/>
        <meta name="author" content="Илиан Георгиев"/>


        <link rel="stylesheet" type="text/css" href="../assets/style/style.css"/>
        <link rel="stylesheet" type="text/css" href="../nav/nav.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
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
                <h2>ДИАГНОСТИКА</h2>
            </section>

            <main class="row">
                <div class="col-4 img_home">
                    <img class="img_responsive" src="../images/orthopedics.jpg" alt="Лечебни масажи" title="Лечебни масажи"/>
                    <img class="img_responsive" src="../images/kineziterapiya.jpg" alt="Кинезитерапия" title="Кинезитерапия"/>
                </div>
                <div class="col-8">
                    <p>Както всички знаете, за да може да се преодолее даден проблем, най- важното е да се разбере какво го предизвиква.В нашия кабинет ние можем да Ви помогнем да се справите със следните заболявания:</p>  



                    <p>Ортопедични:</p>
                    <p>– фрактури (счупвания на кост или кости)
                        – луксацио (изкълчване)
                        – дископатия
                        – дискова херния
                        – гръбначни изкривявания
                        – болки в ставите и трудна подвижност
                        – възстановявания след скъсвания на сухожилия, мускули, лигаменти (предни кръстни връзки, връзки с всяка една става), ставни капсули, менисци тендинити, тендовагинити, инсреционит, импийджмънт, адхезивен капсулит, периартрит и др.</p>

                    <p>Ревматологични:</p> 
                    <p>– коксартроза,
                        – гонартроза,
                        – спондилоартроза,
                        – остеохондроза,
                        – спондилолистеза,
                        – латерален епилокондилит (тенис лакът),
                        – голф лакът,
                        – виене на свят, причинено от движение във врата,
                        – главоболие (ако е свързано с врата), бехтерев и всички други.</p>

                    <p>Неврологични:</p> 
                    <p>– Хемипареза (ИНСУЛТ),
                        – Множествена склероза (МС),
                        – Паркинсон,
                        – Миастения гравис,
                        – Хорея на Хънтингтън,
                        – мускулна дистрофия,
                        – засягане на нервно коренче или периферен нерв (радикулит, неврит),
                        – диабетна полиневропатия.</p>


                </div>
            </main>
            <?php
            require_once "../footer/footer.html";
            ?>  
        </div>
    </body>
</html>



