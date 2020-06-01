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
        <link href="../public/css/RonenNess-RPGUI-062bee8/dist/rpgui.css" rel="stylesheet" type="text/css"/>
        <script src="../public/css/RonenNess-RPGUI-062bee8/dist/rpgui.js"></script>

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

        <section class="central rpgui-content">
            <div id="p1" class="rpgui-container framed-golden">ff
                <p>Tu consciencia está volviendo a tí</p>
                <input type="button" class="next_btn" name="next" value="Siguiente">
            </div>
            <div id="p2" class="message rpgui-container framed-golden">
                <p>Recuerdas quien eres?</p>
                <input type="button" value="SI" name="si_btn" id="si_btn">
                <input type="button" value="NO" name="no_btn" id="no_btn">
            </div>


            <!--------------REGISTER------------------>
            <form action="../controllers/AccessController.php" method="POST">
                <div class="message rpgui-container framed-golden" id="p3r">
                    <p>Intenta recordar anda...</p>
                        <input type="text"  id="new_user"  name="name_user_register" >
                        <input type="button" class="next_btn" name="next" value="Siguiente">
                </div>

                <div class="message rpgui-container framed-golden" id="p4r">
                    <p>Te llamas <span id="name"></span>
                        ? No es el mejor de los nombres...
                    </p>
                    <input type="button" class="next_btn" name="next" value="Siguiente">
                </div>

                <div class="message rpgui-container framed-golden" id="p5r">
                    <p>Siento decirte que has caído en un lugar muy peligroso
                        y la única forma de salir es avanzando sin mirar atrás</p>
                    <input type="button" class="next_btn" name="next" value="Siguiente">
                </div>

                <div class="message rpgui-container framed-golden" id="p6r">
                    <p>Hay muchas cosas aquí abajo y soy horrible con los
                        nombres, así que piensa en algún código con el que saber que eres tu por si acaso</p>
                    <input type="password" id="new_passw" name="passw_user_register" >
                    <input type="button" class="next_btn" name="next" value="Siguiente">
                </div>

                <div class="message rpgui-container framed-golden" id="p7r">
                    <p>Habrá algo que se te de bien no? Qué eres? </p>
                    <div id="warrior">
                        <img src="">
                        <p> Un valeroso guerrero con mucha vitalidad </p>
                        <input type="radio" class="next_btn " name="clases" value="warrior">
                    </div>
                    <div id="wizard">
                        <img src="">
                        <p> Un poderoso e intelectual mago </p>
                        <input type="radio" class="next_btn " name="clases" value="wizard">
                    </div>
                    <div id="thief">
                        <img src="">
                        <p> Un escurridizo y hábil ladrón </p>
                        <input type="radio" class="next_btn " name="clases" value="thief">
                    </div>
                    <div>
                        <input type="submit" class="next_btn" name="next" value="Comenzar">
                    </div>
                </div>
            </form>
            <!----------------LOGIN-------------------->
            <form action="../controllers/AccessController.php" method="POST">
                <div class="message" id="p3l">
                    <p>Pues yo no la verdad ¿Cómo te llamabas?</p>
                    <input type="text" name="name_user_login" id="name_l">
                    <input type="button" class="next_btn" name="next" value="Siguiente">
                </div>
                <div class="message" id="p4l">
                    <p>Ese nombre me suena... No hicimos algo como un código por si me olvidaba de ti?</p>
                    <input type="password" name="passw_user_login">
                    <input type="button" class="next_btn" name="next" value="Siguiente">
                </div>
                <div class="message" id="p5l">
                    <p>Ahhhh! Ya te recuerdo si... Te quedaste dormido no? A que esperas? Despierta!</p>
                    <input type="submit" class="next_btn" name="next" value="Despertar" onclick="$(location).attr('href','../views/game.php')">
                </div>
            </form>

        </section>

        <footer class="bottom">
        </footer>
    </body>
</html>