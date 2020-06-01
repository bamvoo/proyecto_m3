<!DOCTYPE html>
<html lang="es">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="title" content="Portal del Modul 3">
    <link href="../public/css/RonenNess-RPGUI-062bee8/dist/rpgui.css" rel="stylesheet" type="text/css"/>
    <script src="../public/css/RonenNess-RPGUI-062bee8/dist/rpgui.js"></script>
    <link href="../public/css/l&r.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<section  class="rpgui-content grid_body">
    <article class="rpgui-container framed-golden medio">
        <div>
            <h3>ESTOS SON LOS CAMPEONES QUE HAN SALIDO VIVOS!</h3>
            <?php
            include_once '../adapters/DataBaseConect.php';

            $winners = [];

            $query = "SELECT * FROM winners ORDER BY name DESC";
            $db=DataBaseConect::getConnection();
            $db->executeQuery($query, $winners);
            echo '<ul id="background-select-rpgui-list" class=" rpgui-list-imp" style="height: 140px;">';
                foreach ($winners as $win)
                {
                    echo '<li data-rpguivalue="Blacksmith" >'.$win['name'].'</li>';
                }
            echo '</table>';

            ?>
        </div>
        <input type="button" name="btn1" class="rpgui-cursor-point" onclick="location.href='../../ProyectoM3/index.html'"; value="Volver atrás" >
    </article>
</section>

</body>
</html>