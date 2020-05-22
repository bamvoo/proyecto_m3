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
                });
                // register
                //hacer que solo se active al tener un nombre
                $("#p3r .next_btn").click(function(){
                    $("#p3r").hide();
                    $("#p4r").show();
                });
                $("#p4r .next_btn").click(function(){
                    $("#p4r").hide();
                    $("#p5r").show();
                });
                $("#p5r .next_btn").click(function(){
                    $("#p5r").hide();
                    $("#p6r").show();
                });
                //hacer que solo se active al tener una contraseña
                $("#p6r .next_btn").click(function(){
                    $("#p6r").hide();
                    $("#p7r").show();
                });

                // login
                //hacer que solo se active al tener un nombre
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
            <div id="p1">
                <p>Tu consciencia está volviendo a tí</p>
                <input type="button" class="next_btn" name="next" value="Siguiente">
            </div>
            <div class="message" id="p2" >
                <p>Recuerdas quien eres?</p>
                <input type="button" value="SI" name="si_btn" id="si_btn">
                <input type="button" value="NO" name="no_btn" id="no_btn">
            </div>


            <!--------------REGISTER------------------>
            <div class="message" id="p3r">
                <p>Intenta recordar anda...</p>
                <input type="text"  id="new_user"  name="name_user_register">
                <input type="button" class="next_btn" name="next" value="Siguiente">
            </div>

            <div class="message" id="p4r">
                <p>Te llamas <?php /*meter nombre recién escrito*/ ?> ? No es el mejor de los nombres...</p>
                <input type="button" class="next_btn" name="next" value="Siguiente">
            </div>

            <div class="message" id="p5r">
                <p>Siento decirte que has caido en un lugar muy peligroso
                    y la única forma de salir es avanzando sin mirar atrás</p>
                <input type="button" class="next_btn" name="next" value="Siguiente">
            </div>

            <div class="message" id="p6r">
                <p>Hay muchas cosas aquí abajo y soy horrible con los
                    nombres, así que piensa en algún código con el que saber que eres tu por si acaso</p>
                <input type="password" id="new_passw" name="passw_user_register" >
                <input type="button" class="next_btn" name="next" value="Siguiente">
            </div>

            <div class="message" id="p7r">
                <p>Habrá algo que se te de bien no? Qué eres? </p>
                <div id="warrior">
                    <img src="">
                    <p> Un valeroso guerrero con mucha vitalidad </p>
                    <input type="button" class="next_btn" name="next" value="Esto">
                </div>
                <div id="wizard">
                    <img src="">
                    <p> Un poderoso e intelectual mago </p>
                    <input type="button" class="next_btn" name="next" value="Esto">
                </div>
                <div id="thief">
                    <img src="">
                    <p> Un escurridizo y hábil ladrón </p>
                    <input type="button" class="next_btn" name="next" value="Esto">
                </div>
            </div>

            <!----------------LOGIN-------------------->
            <div class="message" id="p3l">
                <p>Pues yo no la verdad ¿Cómo te llamabas?</p>
                <input type="text" name="name_user_login">
                <input type="button" class="next_btn" name="next" value="Siguiente">
            </div>
            <div class="message" id="p4l">
                <p>Hay mucha gente con ese nombre... No hicimos algo como un código por si me olvidaba de ti?</p>
                <input type="password" name="passw_user_login">
                <input type="button" class="next_btn" name="next" value="Siguiente">
            </div>
            <div class="message" id="p5l">
                <p>Ahhhh! Ya te recuerdo si... Estabas en la planta <?php /*meter planta dónde lo dejó el jugador*/ ?>
                    no? A que esperas? Despierta!</p>
                <input type="button" class="next_btn" name="next" value="Siguiente">
            </div>
        </section>

        <footer class="bottom">
        </footer>
    </body>
</html>