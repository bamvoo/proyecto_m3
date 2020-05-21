<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="title" content="Portal del Modul 3">
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <header>
<!--            <section id="menu">-->
<!--                <nav  class="darkstyle">-->
<!--                    <div>-->
<!--                        <a href="UserAccountView.php" class="optmenu">COMPTE USUARI</a>-->
<!--                        <a href="MathChallengeView.php" class="optmenu">MATEMÀTIQUES</a>-->
<!--                        <a href="BlankPage.php" class="optmenu">PUZZLES</a>-->
<!--                        -->
            <?php
//                            include '../adapterspackage/MySQLAdapter.php';
//                            include '../controllerspackage/LevelController.php';
//
//                            $data=[];
//                            $data2=[];
//                            $db = DBConnectionFactory::getConnection();
//
//                            $level = filter_input(INPUT_COOKIE, 'userlevel');
//
//                            lvlFibo($data);
//                            lvlPrimo($data2);
//
//                            if ((int)$level >= $data[0]['nivell']) {
//                                echo '<a href="Tests_Fibo_View.php" class="optmenu">TEST NUM FIBOS</a>';
//                            }
//                            if ((int)$level >= $data2[0]['nivell']) {
//                                echo '<a href="Tests_Primo_View.php" class="optmenu">TEST NUM PRIMOS</a>';
//                            }
//
//
            ?>
<!--                        <a href="BlankPage.php" class="optmenu">JOCS</a>-->
<!--                        <a href="Clasifications.php" class="optmenu">CLASSIFICACIONS</a>-->
<!---->
<!--                    </div>-->
<!--                </nav>-->
<!--            </section>-->
        </header>

        <aside id="leftside">

        </aside>

        <aside id="rightside">

        </aside>

        <section id="central">
            <h3>Bienvenido al Calabozo</h3>
            <article>
                <?php
                $username = filter_input(INPUT_COOKIE, 'username');
                $level = filter_input(INPUT_COOKIE, 'userlevel');
                $points = filter_input(INPUT_COOKIE, 'userpoints');
                print "<h3>Usuari: $username </h3>";
                print "Nivell: $level";
                print "<br><br>Punts: ".(int)$points."<br><br>";
                ?>
            </article>
        </section>

        <footer>
        </footer>
    </body>
</html>