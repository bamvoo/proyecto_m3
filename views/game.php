<!DOCTYPE html>
<html lang="es">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="title" content="Portal del Modul 3">
    <link href="../public/css/RonenNess-RPGUI-062bee8/dist/rpgui.css" rel="stylesheet" type="text/css"/>
    <link href="../public/css/game.css" rel="stylesheet" type="text/css"/>
    <script src="../public/css/RonenNess-RPGUI-062bee8/dist/rpgui.js"></script>
</head>

<body id="body_grid">
<aside class="leftside">

</aside>

<aside class="rightside">

</aside>

<section class="central rpgui-content">
    <h3>Dentro del Calabozo</h3>
    <article id="caja_grid">
            <?php

                include_once '../controllers/GameController.php';

                if(!isset($_SESSION['obj_name_1'])){
                    generateMob();
                    $_SESSION['obj_name_1'] = "vacio" ;
                    $_SESSION['obj_name_2'] = "vacio" ;
                    $_SESSION['obj_name_3'] = "vacio" ;
                    $_SESSION['obj_name_4'] = "vacio" ;
                }

                if(isset($_POST['attack_btn'])){
                    simulateCombat();
                }
                if(isset($_POST['obj_btn_1'])){
                    $var = 1;
                    useObject($_SESSION['obj_name_1'], $var);
                }
                if(isset($_POST['obj_btn_2'])){
                    $var = 2;
                    useObject($_SESSION['obj_name_2'], $var);
                }
                if(isset($_POST['obj_btn_3'])){
                    $var = 3;
                    useObject($_SESSION['obj_name_3'], $var);
                }
                if(isset($_POST['obj_btn_4'])){
                    $var = 4;
                    useObject($_SESSION['obj_name_4'], $var);
                }

                echo "

                    <div id='mob_div' class='rpgui-container framed-golden'>
                        <div>".$_SESSION['mobname']."</div>
                        <div>HP:".$_SESSION['mobhp']."</div>
                        <div><img src='../public/img/".$_SESSION['mobname'].".jpg'></div>
                    </div>
                    <div id='pj_div' class='rpgui-container framed-golden'>
                        <div>HP:".$_SESSION['userhp']."</div>
                        <div>Planta:".$_SESSION['userfloor']."</div>
                    </div>
                    <div id='bag_div' class='rpgui-container framed-golden'>
                        <form>
                            <input type='text' name='obj_btn_1_t' value='".$_SESSION['obj_name_1']."' disabled>
                            <input type='text' name='obt_btn_2_t' value='".$_SESSION['obj_name_2']."' disabled>
                            <input type='text' name='obt_btn_3_t' value='".$_SESSION['obj_name_3']."' disabled>
                            <input type='text' name='obt_btn_4_t' value='".$_SESSION['obj_name_4']."' disabled>
                        </form>    
                    </div>
                ";

            ?>
            <div id='botones'>
                <form action = "" method="POST">
                    <input type='submit' name='obj_btn_1' value='objeto 1' id='obj_btn_1' class="rpgui-button">
                    <input type='submit' name='obj_btn_2' value='objeto 2' id='obj_btn_2' class="rpgui-button">
                    <input type='submit' name='obj_btn_3' value='objeto 3' id='obj_btn_3' class="rpgui-button">
                    <input type='submit' name='obj_btn_4' value='objeto 4' id='obj_btn_4' class="rpgui-button">
                </form>

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
</body>
</html>