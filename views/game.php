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
    <h3>Bienvenido al Calabozo</h3>
    <article>
        <div id="formulario">

            <?php
                include_once '../controllers/GameController.php';

                //mostrar enemigo
                generateMob();

                //vida      //Ataque

                //bolsa

                //generar ficha
                //subir ficha


                echo "
                    <div id='mob_div'>
                        <div>$_SESSION['mobname']</div>
                        <input type='text' name='mob_life' value='$_SESSION['mobname']' readonly>
                        <img src='../public/img/$_SESSION['mobname']'>
                    </div>
                    <div id='pj_div'>
                    <input type="text" name="hp" value="HP:$_SESSION['userhp']" readonly>
                        <!-- attack btn-->
                        <input type="submit" name="attack_btn" value="Atacar">
                    </div>
                    <div id="bag_div">
                        <!-- juegos -->
                    </div>
                "
            ?>
            <form action = "" method="GET">
                <input type="submit" name="dormir" value="Dormir" id="get_txt" />
                <input type="submit" name="gen_txt" value="Generar ficha" id="get_txt" />
                <input type="submit" name="update_pj" value="Subir ficha" id="update_pj" />
            </form>
        </div>
    </article>
</section>

<footer class="bottom">
</footer>
</body>
</html>