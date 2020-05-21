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
                <input type="button" value="SI" name="si_btn">
                <input type="button" value="NO" name="no_btn">
            </div>

            <div class="message" id="p3r">
                <p>Intenta recordar</p>
                <input type="text" name="name_user_register">
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
                    nombres, así que piensa en algún código con el que saber que eres tu por sia caso</p>
                <input type="password" name="passw_user_register">
                <input type="button" class="next_btn" name="next" value="Siguiente">
            </div>

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
                    no? A que esperas? Avanza!</p>
                <input type="button" class="next_btn" name="next" value="Siguiente">
            </div>
        </section>

        <footer class="bottom">
        </footer>
    </body>
</html>