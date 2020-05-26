<!DOCTYPE html>
<html lang="es">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="log&reg" content="Login y Registro">
    <!--    <link href="/public/css/RonenNess-RPGUI-062bee8/dist/rpgui.css" rel="stylesheet" type="text/css"/>-->
    <!--    <script src="/public/css/RonenNess-RPGUI-062bee8/dist/rpgui.js"></script>-->
    <link href="../public/css/l&r.css" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            // $("#p1") .show(); .hide();
            $("#p1 .next_btn").click(function(){
                $("#p1").hide();
                $("#p2").show();
            });
            $("#si_btn").click(function(){
                $("#p2").hide();
                $("#p3l").show();
            });
            $("#no_btn").click(function(){
                $("#p2").hide();
                $("#p3r").show();
                $("#p3r .next_btn").hide();
            });
            // register
            //HACER LUEGO
            //hacer que no se active al tener un nombre creado

            $("#new_user").change(function(){
                if($("#new_user").val().length >= 1 ){
                    $("#p3r .next_btn").show();
                }
                else{
                    $("#p3r .next_btn").hide();
                }
            });
            $("#p3r .next_btn").click(function(){
                $("#p3r").hide();
                $("#p4r").show();
                $("#name").html($("#new_user").val());
            });

            $("#p4r .next_btn").click(function(){
                $("#p4r").hide();
                $("#p5r").show();
            });
            $("#p5r .next_btn").click(function(){
                $("#p5r").hide();
                $("#p6r").show();
                $("#p6r .next_btn").hide();
            });

            $("#new_passw").change(function(){
                if($("#new_passw").val().length >= 5 ){
                    $("#p6r .next_btn").show();
                }
                else{
                    $("#p6r .next_btn").hide();
                }
            });

            //hacer que solo se active al tener una contraseña
            $("#p6r .next_btn").click(function(){
                $("#p6r").hide();
                $("#p7r").show();
            });

            // login
            $("#p3l .next_btn").hide();

            $("#name_l").change(function(){
                if($("#name_l").val().length > 0 ){
                    $("#p3l .next_btn").show();
                }
                else{
                    $("#p3l .next_btn").hide();
                }

            });

            $("#p3l .next_btn").click(function(){
                $("#p3l").hide();
                $("#p4l").show();
            });
            //hacer que solo se active al tener una contraseña
            $("#p4l .next_btn").click(function(){
                $("#p4l").hide();
                $("#p5l").show();
            });
            $("#p5l .next_btn").click(function(){
                $("#p4l").hide();
                $("#p5l").show();
            });



        });
    </script>
</head>

<body>
<header class="top">
</header>

<aside class="leftside">

</aside>

<aside class="rightside">

</aside>

<section class="central">

    <div class="message" id="p5l">
        <p>Ahhhh! Ya te recuerdo si... Estabas en la planta
            <?php
                echo $_SESSION['userfloor'];
            ?> no? A que esperas? Despierta!</p>
        <input type="button" class="next_btn" name="next" value="Siguiente" onclick="$(location).attr('href','../views/game.php')">
    </div>

</section>

<footer class="bottom">
</footer>
</body>
</html>