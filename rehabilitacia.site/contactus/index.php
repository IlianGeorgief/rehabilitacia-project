<?php
session_start(
);
?>

<!DOCTYPE html>

<html lang="bg-BG">
    <head>
        <title>Rehabilitacia | Kontakti</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="Рехабилитация,Кинезитерапия,Лечебни масажи,Индивидуални програми за възстановяване след травми.Онлайн-записване."/>
        <meta name="author" content="Илиан Георгиев"/>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
        <link rel="stylesheet" type="text/css" href="../assets/style/form.css"/>
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
                <h2>КОНТАКТИ</h2>
            </section>
            <main>
                <div class="row">
                    <div class="col">
                        <p>Работно време:</p>
                        <address>
                            <p>Адрес:</p>
                        </address>

                        <p>Телефони:</p>
                    </div>
                    <div class="col">



                        <form id="system1-out" method="post" action="../data/sendmail.php"> 

                            <div>
                                <label for="name">Вашето име:</label>
                                <input type="text" name="from_name" id="name" title="Вашето име" value="">
                            </div>

                            <div>
                                <label for="mail">Вашият имейл:</label>
                                <input type="text" name="email" id="mail" title="Вашият имейл" value="">
                            </div>

                            <div>
                                <label for="msg">Вашето съобщение:</label>
                                <textarea name="text1" cols="25" rows="5" id="msg" title="Вашето съобщение"></textarea>
                            </div>

                            <div>
                                <button type="submit">ИЗПРАТИ</button>
                            </div>
                            <div>преместване на формата</div>

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
        <script src="../assets/contacts.js"></script>
    </body>
</html>