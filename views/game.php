<!DOCTYPE html>
<html lang="es">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="title" content="Portal del Modul 3">
    <!--    <link href="/public/css/RonenNess-RPGUI-062bee8/dist/rpgui.css" rel="stylesheet" type="text/css"/>-->
    <!--    <script src="/public/css/RonenNess-RPGUI-062bee8/dist/rpgui.js"></script>-->
</head>

<body>
<header class="top">
</header>

<aside class="leftside">

</aside>

<aside class="rightside">

</aside>

<section class="central">
    <h3>Dentro del Calabozo</h3>
    <article>
        <div id="formulario">

            <?php

                include_once '../controllers/GameController.php';

                if(isset($_POST['attack_btn'])){
                    simulateCombat();
                }

                generateMob();

                echo "
                    <div id='mob_div'>
                        <div>".$_SESSION['mobname']."</div>
                        <div>HP:".$_SESSION['mobhp']."</div>
                        <div><img src='../public/img/".$_SESSION['mobname']."'></div>
                    </div>
                    <div id='pj_div'>
                        <div>HP:".$_SESSION['userhp']."</div>
                    </div>
                    <div id='bag_div'>
                        
                    </div>
                ";


            ?>
            <form action = "" method="POST">
                <input type='submit' name='attack_btn' value='Atacar' id='attack_btn'>
            </form>
            <form action = "../controllers/" method="GET">
                <input type="submit" name="gen_txt" value="Generar ficha" id="get_txt" />
            </form>
            <form action = "../controllers/" method="GET">
                <input type="submit" name="update_pj" value="Subir ficha" id="update_pj" />
            </form>
        </div>
    </article>
</section>

<footer class="bottom">
</footer>
</body>
</html>