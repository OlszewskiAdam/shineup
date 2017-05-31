<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Shine Up - Nasze Realizacje</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://use.typekit.net/gom0psh.js"></script>
        <script>
            try{
                Typekit.load({ async: true });
            }
            catch(e){}
        </script>
        <link rel="stylesheet" href="css/realizationsMain.css">
    </head>
    <body>
        <div class="body_backgrounds background_top">
            <img src="images/top.png" alt="background">
        </div>
        <header class="clearfix">
            <div class="container">
                <nav class="header_nav">
                    <div class="menu_button">
                        <a href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                            <p class="menu_text brandon_text">Menu</p>
                        </a>
                    </div>
                    <ul class="menu_list">
                        <li><a href="services.html">Usługi</a></li>
                        <li><a href="realizacje.php">Realizacje</a></li>
                        <li><a href="about.html">O nas</a></li>
                        <li><a href="kontakt.html">Kontakt</a></li>
                        <li class = "mobile_logo">
                            <a href="index.html">
                                <img src="images/LogoSmooth.svg" alt="Shine Up Detaling">
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="header_logo">
                    <a href="index.html">
                        <img src="images/LogoSmooth.svg" alt="Shine Up Detaling">
                    </a>
                </div>
            </div>
        </header>
        <section class="section_top clearfix">
            <div class="container">
                <h1>Nasze realizacje</h1>
                <p>
                    Poniżej znajdziecie Państwo przykładowe realizacje,
                    wykonane przez zespół Shine Up.
                    Do każdej realizacji podchodzimy indywidualnie,
                    tak aby dzięki wykonanej pracy, wygląd auta stał się źródłem
                    satysfakcji naszych klientów.
                </p>
                <a href="#" class="popup_button">
                    <div class="button_white">
                        Rezerwuj termin
                    </div>
                </a>
            </div>
        </section>
        <section class="section_realizations clearfix">
            <h2 class="section_header">Nasze realizacje</h2>
            <nav class="realizations_category clearfix">
                <ul class="container category_list">
                    <li class="category">Kategoria: </li>
                    <li class="category_active">
                        <a href="#">Wszystkie <img src="images/arrowWhite.png" alt=">"></a>
                    </li>
                    <li>
                        <a href="#">Piękny wygląd <img src="images/arrowWhite.png" alt=">"></a>
                    </li>
                    <li>
                        <a href="#">Zadbane wnętrze <img src="images/arrowWhite.png" alt=">"></a>
                    </li>
                </ul>
            </nav>
            <div class="realization_container clearfix">
                <div class="realization_photo">
                    <img src="images/car_desktop.jpg" alt="Car">
                </div>
                <div class="realization_description">
                    <h3></h3>
                    <ul>
                        <li class="list_text"></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>

            <article class="realizations_box col-1 active_realization">
                <div class="realizations_photo">
                    <img src="images/mercedes_gle_amg/1.jpg" alt="Mercedes GLE AMG" class="min_photo">
                    <?php
                        if ($handle = opendir('images/mercedes_gle_amg/')) {
                           while (false !== ($file = readdir($handle))) {
                               if ($file != "." && $file != "..") {
                                   if ($file == "1.jpg") {
                                       echo "<img src=images/mercedes_gle_amg/$file class='gallery_photo gallery_photo_main'>";
                                   }
                                   else{
                                       echo "<img src=images/mercedes_gle_amg/$file class='gallery_photo'>";
                                   }
                               }
                           }
                           closedir($handle);
                        }
                    ?>
                </div>
                <h3>Mercedes GLE AMG</h3>
                <ul>
                    <li class="list_text">Wykonane Zabiegi:</li>
                    <li>
                        Piękny wygląd:
                        <ol>
                            <li>
                                Korekta lakieru
                            </li>
                            <li>
                                Zabezpieczenie powłoką ceramiczną
                            </li>
                            <li>
                                Powłoka hydrofobowa na szyby
                            </li>
                        </ol>
                    </li>
                    <li>
                        Zadbane wnętrze:
                        <ol>
                            <li>
                                Zabezpieczenie skór powłoką
                            </li>
                            <li>
                                Impregnacja wszystkich elementów
                            </li>
                        </ol>
                    </li>
                </ul>
            </article>
            <article class="realizations_box col-1">
                <div class="realizations_photo">
                    <img src="images/bmw_7/11.jpg" alt="BMW 7" class="min_photo">
                    <?php
                        if ($handle = opendir('images/bmw_7/')) {
                           while (false !== ($file = readdir($handle))) {
                               if ($file != "." && $file != "..") {
                                   if ($file == "1.jpg") {
                                       echo "<img src=images/bmw_7/$file class='gallery_photo gallery_photo_main'>";
                                   }
                                   else{
                                       echo "<img src=images/bmw_7/$file class='gallery_photo'>";
                                   }
                               }
                           }
                           closedir($handle);
                        }
                    ?>
                </div>
                <h3>BMW 7</h3>
                <ul>
                    <li class="list_text">Wykonane Zabiegi:</li>
                    <li>
                        Piękny wygląd:
                        <ol>
                            <li>
                                Zabezpieczenie powłoką ceramiczną
                            </li>
                            <li>
                                Powłoka hydrofobowa na szyby
                            </li>
                        </ol>
                    </li>
                    <li>
                        Zadbane wnętrze:
                        <ol>
                            <li>
                                Zabezpieczenie skór powłoką
                            </li>
                            <li>
                                Impregnacja wszystkich elementów
                            </li>
                        </ol>
                    </li>
                </ul>
            </article>
            <article class="realizations_box col-1">
                <div class="realizations_photo">
                    <img src="images/bmw_m5/1.jpg" alt="BMW M5" class="min_photo">
                    <?php
                        if ($handle = opendir('images/bmw_m5/')) {
                           while (false !== ($file = readdir($handle))) {
                               if ($file != "." && $file != "..") {
                                   if ($file == "1.jpg") {
                                       echo "<img src=images/bmw_m5/$file class='gallery_photo gallery_photo_main'>";
                                   }
                                   else{
                                       echo "<img src=images/bmw_m5/$file class='gallery_photo'>";
                                   }
                               }
                           }
                           closedir($handle);
                        }
                    ?>
                </div>
                <h3>BMW M5</h3>
                <ul>
                    <li class="list_text">Wykonane Zabiegi:</li>
                    <li>
                        Piękny wygląd:
                        <ol>
                            <li>
                                Korekta lakieru
                            </li>
                            <li>
                                Zabezpieczenie powłoką ceramiczną
                            </li>
                        </ol>
                    </li>
                </ul>
            </article>

            <article class="realizations_box col-1 desktop_box">
                <div class="realizations_photo">
                    <img src="images/ferrari_458_italia/2.jpg" alt="Ferrari 458 Italia" class="min_photo">
                    <?php
                        if ($handle = opendir('images/ferrari_458_italia/')) {
                           while (false !== ($file = readdir($handle))) {
                               if ($file != "." && $file != "..") {
                                   if ($file == "1.jpg") {
                                       echo "<img src=images/ferrari_458_italia/$file class='gallery_photo gallery_photo_main'>";
                                   }
                                   else{
                                       echo "<img src=images/ferrari_458_italia/$file class='gallery_photo'>";
                                   }
                               }
                           }
                           closedir($handle);
                        }
                    ?>
                </div>
                <h3>Ferrari 458 Italia</h3>
                <ul>
                    <li class="list_text">Wykonane Zabiegi:</li>
                    <li>
                        Piękny wygląd:
                        <ol>
                            <li>
                                Zabezpieczenie powłoką ceramiczną
                            </li>
                        </ol>
                    </li>
                </ul>
            </article>
            <article class="realizations_box col-1 desktop_box">
                <div class="realizations_photo">
                    <img src="images/honda_civic_typer/2.jpg" alt="Honda Civic Type R" class="min_photo">
                    <?php
                        if ($handle = opendir('images/honda_civic_typer/')) {
                           while (false !== ($file = readdir($handle))) {
                               if ($file != "." && $file != "..") {
                                   if ($file == "1.jpg") {
                                       echo "<img src=images/honda_civic_typer/$file class='gallery_photo gallery_photo_main'>";
                                   }
                                   else{
                                       echo "<img src=images/honda_civic_typer/$file class='gallery_photo'>";
                                   }
                               }
                           }
                           closedir($handle);
                        }
                    ?>
                </div>
                <h3>Honda Civic Type R</h3>
                <ul>
                    <li class="list_text">Wykonane Zabiegi:</li>
                    <li>
                        Piękny wygląd:
                        <ol>
                            <li>
                                Zabezpieczenie powłoką ceramiczną
                            </li>
                            <li>
                                Powłoka hydrofobowa na szyby
                            </li>
                            <li>
                                zabezpieczenie zacisków hamulcowych oraz felg
                            </li>
                        </ol>
                    </li>
                </ul>
            </article>
            <article class="realizations_box col-1 desktop_box">
                <div class="realizations_photo">
                    <img src="images/maserati_4200/10.jpg" alt="Maserati 4200" class="min_photo">
                    <?php
                        if ($handle = opendir('images/maserati_4200/')) {
                           while (false !== ($file = readdir($handle))) {
                               if ($file != "." && $file != "..") {
                                   if ($file == "1.jpg") {
                                       echo "<img src=images/maserati_4200/$file class='gallery_photo gallery_photo_main'>";
                                   }
                                   else{
                                       echo "<img src=images/maserati_4200/$file class='gallery_photo'>";
                                   }
                               }
                           }
                           closedir($handle);
                        }
                    ?>
                </div>
                <h3>Maserati 4200</h3>
                <ul>
                    <li class="list_text">Wykonane Zabiegi:</li>
                    <li>
                        Piękny wygląd:
                        <ol>
                            <li>
                                Pełna korekta lakieru
                            </li>
                            <li>
                                Zabezpieczenie powłoką ceramiczną
                            </li>
                            <li>
                                Powłoka hydrofobowa na szyby
                            </li>
                            <li>
                                Zabezpieczenie zacisków hamulcowych oraz felg
                            </li>
                            <li>
                                Dokładne mycie silnika
                            </li>
                        </ol>
                    </li>
                    <li>
                        Zadbane wnętrze:
                        <ol>
                            <li>
                                Pranie tapicerki
                            </li>
                            <li>
                                Czyszczenie oraz zabezpieczenie skór powłoką
                            </li>
                            <li>
                                Impregnacja wszystkich elementów
                            </li>
                        </ol>
                    </li>
                </ul>
            </article>
            <article class="realizations_box col-1 desktop_box gallery_unvis">
                <div class="realizations_photo">
                    <img src="images/mercedes_g_amg/16.jpg" alt="Maserati G AMG" class="min_photo">
                    <?php
                        if ($handle = opendir('images/mercedes_g_amg/')) {
                           while (false !== ($file = readdir($handle))) {
                               if ($file != "." && $file != "..") {
                                   if ($file == "1.jpg") {
                                       echo "<img src=images/mercedes_g_amg/$file class='gallery_photo gallery_photo_main'>";
                                   }
                                   else{
                                       echo "<img src=images/mercedes_g_amg/$file class='gallery_photo'>";
                                   }
                               }
                           }
                           closedir($handle);
                        }
                    ?>
                </div>
                <h3>Mercedes G AMG</h3>
                <ul>
                    <li class="list_text">Wykonane Zabiegi:</li>
                    <li>
                        Piękny wygląd:
                        <ol>
                            <li>
                                Korekta lakieru
                            </li>
                            <li>
                                Zabezpieczenie powłoką ceramiczną
                            </li>
                            <li>
                                Powłoka hydrofobowa na szyby
                            </li>
                            <li>
                                Zabezpieczenie zacisków hamulcowych oraz felg
                            </li>
                        </ol>
                    </li>
                </ul>
            </article>
            <article class="realizations_box col-1 desktop_box gallery_unvis">
                <div class="realizations_photo">
                    <img src="images/maserati_granturismo/19.jpg" alt="Maserati Granturismo" class="min_photo">
                    <?php
                        if ($handle = opendir('images/maserati_granturismo/')) {
                           while (false !== ($file = readdir($handle))) {
                               if ($file != "." && $file != "..") {
                                   if ($file == "1.jpg") {
                                       echo "<img src=images/maserati_granturismo/$file class='gallery_photo gallery_photo_main'>";
                                   }
                                   else{
                                       echo "<img src=images/maserati_granturismo/$file class='gallery_photo'>";
                                   }
                               }
                           }
                           closedir($handle);
                        }
                    ?>
                </div>
                <h3>Maserati GranTurismo</h3>
                <ul>
                    <li class="list_text">Wykonane Zabiegi:</li>
                    <li>
                        Piękny wygląd:
                        <ol>
                            <li>
                                Korekta lakieru
                            </li>
                            <li>
                                Zabezpieczenie powłoką ceramiczną
                            </li>
                            <li>
                                Powłoka hydrofobowa na szyby
                            </li>
                            <li>
                                Zabezpieczenie zacisków hamulcowych oraz felg
                            </li>
                        </ol>
                    </li>
                    <li>
                        Zadbane wnętrze:
                        <ol>
                            <li>
                                Zabezpieczenie skór powłoką
                            </li>
                            <li>
                                Impregnacja wszystkich elementów
                            </li>
                        </ol>
                    </li>
                </ul>
            </article>
            <article class="realizations_box col-1 desktop_box gallery_unvis">
                <div class="realizations_photo">
                    <img src="images/mercedes_c_coupe/4.jpg" alt="Mercedes C Coupe" class="min_photo">
                    <?php
                        if ($handle = opendir('images/mercedes_c_coupe/')) {
                           while (false !== ($file = readdir($handle))) {
                               if ($file != "." && $file != "..") {
                                   if ($file == "1.jpg") {
                                       echo "<img src=images/mercedes_c_coupe/$file class='gallery_photo gallery_photo_main'>";
                                   }
                                   else{
                                       echo "<img src=images/mercedes_c_coupe/$file class='gallery_photo'>";
                                   }
                               }
                           }
                           closedir($handle);
                        }
                    ?>
                </div>
                <h3>Mercedes C Coupe</h3>
                <ul>
                    <li class="list_text">Wykonane Zabiegi:</li>
                    <li>
                        Piękny wygląd:
                        <ol>
                            <li>
                                Mycie detailingowe
                            </li>
                            <li>
                                Aplikacja wosku do lakierów matowych
                            </li>

                        </ol>
                    </li>

                </ul>
            </article>

            <article class="realizations_box col-1 desktop_box gallery_unvis">
                <div class="realizations_photo">
                    <img src="images/mercedes_s_coupe/1.jpg" alt="Mercedes S Coupe" class="min_photo">
                    <?php
                        if ($handle = opendir('images/mercedes_s_coupe/')) {
                           while (false !== ($file = readdir($handle))) {
                               if ($file != "." && $file != "..") {
                                   if ($file == "1.jpg") {
                                       echo "<img src=images/mercedes_s_coupe/$file class='gallery_photo gallery_photo_main'>";
                                   }
                                   else{
                                       echo "<img src=images/mercedes_s_coupe/$file class='gallery_photo'>";
                                   }
                               }
                           }
                           closedir($handle);
                        }
                    ?>
                </div>
                <h3>Mercedes S Coupe</h3>
                <ul>
                    <li class="list_text">Wykonane Zabiegi:</li>
                    <li>
                        Piękny wygląd:
                        <ol>
                            <li>
                                Zabezpieczenie lakieru powłoką ceramiczną
                            </li>
                            <li>
                                Powłoka hydrofobowa na szyby
                            </li>

                        </ol>
                    </li>

                </ul>
            </article>
            <article class="realizations_box col-1 desktop_box gallery_unvis">
                <div class="realizations_photo">
                    <img src="images/porsche_carrera_964/1.jpg" alt="Porsche Carrera 964" class="min_photo">
                    <?php
                        if ($handle = opendir('images/porsche_carrera_964/')) {
                           while (false !== ($file = readdir($handle))) {
                               if ($file != "." && $file != "..") {
                                   if ($file == "1.jpg") {
                                       echo "<img src=images/porsche_carrera_964/$file class='gallery_photo gallery_photo_main'>";
                                   }
                                   else{
                                       echo "<img src=images/porsche_carrera_964/$file class='gallery_photo'>";
                                   }
                               }
                           }
                           closedir($handle);
                        }
                    ?>
                </div>
                <h3>Porsche Carrera 964</h3>
                <ul>
                    <li class="list_text">Wykonane Zabiegi:</li>
                    <li>
                        Piękny wygląd:
                        <ol>
                            <li>
                                Korekta lakieru
                            </li>
                            <li>
                                Zabezpieczenie powłoką ceramiczną
                            </li>
                            <li>
                                Powłoka hydrofobowa na szyby
                            </li>
                            <li>
                                Zabezpieczenie zacisków hamulcowych oraz felg
                            </li>
                        </ol>
                    </li>

                </ul>
            </article>
            <article class="realizations_box col-1 desktop_box gallery_unvis">
                <div class="realizations_photo">
                    <img src="images/volvo_xc90_rdesign/1.jpg" alt="Volvo XC90 RDesign" class="min_photo">
                    <?php
                        if ($handle = opendir('images/volvo_xc90_rdesign/')) {
                           while (false !== ($file = readdir($handle))) {
                               if ($file != "." && $file != "..") {
                                   if ($file == "1.jpg") {
                                       echo "<img src=images/volvo_xc90_rdesign/$file class='gallery_photo gallery_photo_main'>";
                                   }
                                   else{
                                       echo "<img src=images/volvo_xc90_rdesign/$file class='gallery_photo'>";
                                   }
                               }
                           }
                           closedir($handle);
                        }
                    ?>
                </div>
                <h3>Volvo XC90 RDesign</h3>
                <ul>
                    <li class="list_text">Wykonane Zabiegi:</li>
                    <li>
                        Piękny wygląd:
                        <ol>
                            <li>
                                Zabezpieczenie powłoką ceramiczną
                            </li>
                            <li>
                                Powłoka hydrofobowa na szyby
                            </li>
                        </ol>
                    </li>
                    <li>
                        Zadbane wnętrze:
                        <ol>
                            <li>
                                Zabezpieczenie skór powłoką
                            </li>
                            <li>
                                Impregnacja wszystkich elementów
                            </li>
                        </ol>
                    </li>
                </ul>
            </article>
            <article class="realizations_box col-1 desktop_box gallery_unvis">
                <div class="realizations_photo">
                    <img src="images/landrover_discovery/1.jpg" alt="Land Rover Discovery" class="min_photo">
                    <?php
                        if ($handle = opendir('images/landrover_discovery/')) {
                           while (false !== ($file = readdir($handle))) {
                               if ($file != "." && $file != "..") {
                                   if ($file == "1.jpg") {
                                       echo "<img src=images/landrover_discovery/$file class='gallery_photo gallery_photo_main'>";
                                   }
                                   else{
                                       echo "<img src=images/landrover_discovery/$file class='gallery_photo'>";
                                   }
                               }
                           }
                           closedir($handle);
                        }
                    ?>
                </div>
                <h3>Land Rover Discovery</h3>
                <ul>
                    <li class="list_text">Wykonane Zabiegi:</li>
                    <li>
                        Piękny wygląd:
                        <ol>
                            <li>
                                Mycie detalingowe
                            </li>
                            <li>
                                Szybkie odświeżenie lakieru tzw. One Step
                            </li>
                        </ol>
                    </li>
                    <li>
                        Zadbane wnętrze:
                        <ol>
                            <li>
                                Pranie tapicerki
                            </li>
                            <li>
                                Czyszcenie oraz zabezpieczenie skór powłoką
                            </li>
                            <li>
                                Impregnacja wszystkich elementów
                            </li>
                        </ol>
                    </li>
                </ul>
            </article>
            <article class="realizations_box col-1 desktop_box gallery_unvis">
                <div class="realizations_photo">
                    <img src="images/audi_rs5/1.jpg" alt="Land Rover Discovery" class="min_photo">
                    <?php
                        if ($handle = opendir('images/audi_rs5/')) {
                           while (false !== ($file = readdir($handle))) {
                               if ($file != "." && $file != "..") {
                                   if ($file == "1.jpg") {
                                       echo "<img src=images/audi_rs5/$file class='gallery_photo gallery_photo_main'>";
                                   }
                                   else{
                                       echo "<img src=images/audi_rs5/$file class='gallery_photo'>";
                                   }
                               }
                           }
                           closedir($handle);
                        }
                    ?>
                </div>
                <h3>Audi RS5</h3>
                <ul>
                    <li class="list_text">Wykonane Zabiegi:</li>
                    <li>
                        Piękny wygląd:
                        <ol>
                            <li>
                                Korekta lakieru
                            </li>
                            <li>
                                Zabezpieczenie powłoką ceramiczną
                            </li>
                            <li>
                                Powłoka hydrofobowa na szyby
                            </li>
                            <li>
                                Zabezpieczenie zacisków hamulcowych oraz felg
                            </li>
                            <li>
                                Dokładne mycie silnika
                            </li>
                        </ol>
                    </li>
                    <li>
                        Zadbane wnętrze:
                        <ol>
                            <li>
                                Zabezpieczenie skór powłoką
                            </li>
                            <li>
                                Impregnacja wszystkich elementów
                            </li>
                        </ol>
                    </li>
                </ul>
            </article>
            <div class="button_box clearfix">
                <div class="button_white button_black">
                    Wczytaj więcej
                </div>
            </div>
        </section>
        <section class="section_reviews clearfix">
            <div class="reservation_box">
                <div class="container">
                    <div class="reservation_description">
                        <p>
                            Co możemy zrobić dla Twojego samochodu?
                        </p>
                    </div>
                    <a href="#" class="popup_button">
                        <div class="button_white">
                            Rezerwuj termin
                        </div>
                    </a>
                </div>
                <div class="gradient_box">
                </div>
            </div>
            <div class="container">
                <div class=" opinion_container">
                    <h2>Opinie Klientów</h2>
                    <article class="opinion_box opinion_box_active">
                        <h3>Mercedes Warszawa</h3>
                        <p>
                            "Lorem Ipsum jest tekstem stosowanym
                            jako przykładowy wypełniacz w
                            przemyśle poligraficznym. Został po raz
                            pierwszy użyty w XV w. przez
                            nieznanego drukarza do wypełnienia
                            tekstem próbnej książki. Pięć wieków
                            później zaczął być używany przemyśle
                            elektronicznym, pozostając praktycznie
                            niezmienionym. Spopularyzował się w
                            latach 60. XX w. wraz z publikacją
                            arkuszy Letrasetu, zawierających
                            fragmenty Lorem Ipsum."
                        </p>
                    </article>
                    <article class="opinion_box">
                        <h3>Mercedes Warszawa</h3>
                        <p>
                            "Lorem Ipsum jest tekstem stosowanym
                            jako przykładowy wypełniacz w
                            przemyśle poligraficznym. Został po raz
                            pierwszy użyty w XV w. przez
                            nieznanego drukarza do wypełnienia
                            tekstem próbnej książki. Pięć wieków
                            później zaczął być używany przemyśle
                            elektronicznym, pozostając praktycznie
                            niezmienionym. Spopularyzował się w
                            latach 60. XX w. wraz z publikacją
                            arkuszy Letrasetu, zawierających
                            fragmenty Lorem Ipsum."
                        </p>
                    </article>
                    <article class="opinion_box">
                        <h3>BMW Warszawa</h3>
                        <p>
                            "BMW Ipsum jest tekstem stosowanym
                            jako przykładowy wypełniacz w
                            przemyśle poligraficznym. Został po raz
                            pierwszy użyty w XV w. przez
                            nieznanego drukarza do wypełnienia
                            tekstem próbnej książki. Pięć wieków
                            później zaczął być używany przemyśle
                            elektronicznym, pozostając praktycznie
                            niezmienionym. Spopularyzował się w
                            latach 60. XX w. wraz z publikacją
                            arkuszy Letrasetu, zawierających
                            fragmenty Lorem Ipsum."
                        </p>
                    </article>
                    <article class="opinion_box">
                        <h3>BMW Warszawa</h3>
                        <p>
                            "BMW Ipsum jest tekstem stosowanym
                            jako przykładowy wypełniacz w
                            przemyśle poligraficznym. Został po raz
                            pierwszy użyty w XV w. przez
                            nieznanego drukarza do wypełnienia
                            tekstem próbnej książki. Pięć wieków
                            później zaczął być używany przemyśle
                            elektronicznym, pozostając praktycznie
                            niezmienionym. Spopularyzował się w
                            latach 60. XX w. wraz z publikacją
                            arkuszy Letrasetu, zawierających
                            fragmenty Lorem Ipsum."
                        </p>
                    </article>
                </div>
                <div class="reviews_nav">
                    <span>Następna opinia</span>
                    <div class="reviews_button">
                        <a href="#">
                            <img src="images/blackArrow.png" alt=">">
                        </a>
                    </div>
                    <ul class="opinion_list">

                    </ul>
                </div>
            </div>
        </section>
        <section class="section_contact clearfix">
            <h2 class="section_header">Kontakt</h2>
            <div class="container">
                <div class="logo_box">
                    <img src="images/logoBlack.svg" alt="Shine Up Detailing">
                </div>
                <ul class="contact_list">
                    <li><a href="tel://+48223657888">22 365 78 88</a></li>
                    <li><a href="tel://+48223657890">22 365 78 90</a></li>
                    <li>Pon. - Pt. 9.00 - 17.00</li>
                    <li><a href="mailto:shine@shineup.pl">shine@shineup.pl</a></li>
                    <li>
                        <a href="#">
                            Warszawa <br>
                            ul. Marszałkowska 1/35
                        </a>
                    </li>
                </ul>
            </div>
            <div id="map"></div>
        </section>
        <footer>
            <div class="container">
                <div class="social_media_box">
                    <a href="#">
                        <img src="images/facebook.png" alt="Facebook">
                    </a>
                </div>
                <div class="social_media_box">
                    <a href="#">
                        <img src="images/google.png" alt="Google+">
                    </a>
                </div>
                <div class="social_media_box">
                    <a href="#">
                        <img src="images/youtube.png" alt="YouTube">
                    </a>
                </div>
                <div class="social_media_box">
                    <a href="#">
                        <img src="images/pinterest.png" alt="Pinterest">
                    </a>
                </div>
            </div>
        </footer>
        <div class="popup_box">
            <div class="container popup_options">
                <div class="popup_option">
                    <div class="popup_icon">
                        <img src="images/phone_icon.png" alt="Zadzwoń">
                    </div>
                    <a href="tel://+48223657890">
                        <div class="button_white button_popup">
                            22 365 78 90
                        </div>
                    </a>
                    <p class="popup_description">
                        Skontaktuj się - po jego naciśnięciu pojawi się telefon do biura i będzie można na niego kliknąć i zadzwonić.
                    </p>
                </div>
                <div class="popup_option">
                    <div class="popup_icon">
                        <img src="images/contact_icon.png" alt="Poproś o kontakt">
                    </div>
                    <div class="button_white button_popup">
                        Poproś o kontakt
                    </div>
                    <p class="popup_description">
                        Po naciśnięciu przycisku okno zamieni się w prosty formularz
                        kontaktowy.
                    </p>
                </div>
                <div class="popup_option inactive_service">
                    <div class="popup_icon">
                        <img src="images/calendar_icon.png" alt="Zarezerwuj Termin">
                    </div>
                    <div class="button_white button_popup">
                        Zarezerwuj termin
                    </div>
                    <p class="popup_description">
                        Zarezerwuj termin usługi - po jego kliknięciu pojawi się kalendarz na którym będzie można dokonać rezerwacji.
                    </p>
                </div>
                <a href="#">
                    <div class="button_exit">
                        <img src="images/exit_gray.png" alt="Wyjście">
                    </div>
                </a>
            </div>
            <div class="container popup_form">
                <form class="" action="index.html" method="post">
                    <div class="float_box">
                        <input type="text" name="name" value="" placeholder="Imię i nazwisko">
                        <input type="text" name="mark" value="" placeholder="Marka samochodu">
                        <select class="" name="service">
                            <option value="">Rodzaj usługi</option>
                            <option value="">Ipsum</option>
                            <option value="">Dolor</option>
                            <option value="">Lorem</option>
                        </select>
                    </div>
                    <div class="float_box">
                        <span>Wiadomość</span>
                        <textarea name="name">
                        </textarea>
                    </div>
                    <button type="button" name="button">Wyślij wiadomość</button>
                </form>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/indexApp.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
        <script src="js/mapApp.js"></script>
    </body>
</html>
