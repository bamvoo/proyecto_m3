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
        <?php
            include_once '../controllers/GameController.php';

            //mostrar enemigo

            //vida      //Ataque

            //bolsa

            //generar ficha
            //subir ficha

        ?>
        <div id="formulario">
            <form action = "" method="GET">
                <div id="mob_div">
                    <!-- mostrar enemigo -->
                    <input type="text" name="mob" value="" readonly>
                    <img src="../public/img/<?php //imagen ?>">
                </div>
                <div id="pj_div">
                    <!-- vida -->
                    HP:<input type="text" name="hp" value="" readonly>
                    <!-- attack btn-->
                    <input type="button" name="attack_btn" value="Atacar">
                </div>
                <div id="bag_div">
                    <!-- juegos -->
                </div>

                <input type="button" value="Dormir" id="get_txt" />
                <input type="button" value="Generar ficha" id="get_txt" />
                <input type="button" value="Subir ficha" id="post_txt" />
            </form>
        </div>
    </article>
</section>

<footer class="bottom">
</footer>
</body>
</html>