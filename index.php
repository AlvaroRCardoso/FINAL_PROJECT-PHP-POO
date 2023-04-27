<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>FINAL BOSS</title>
</head>
<body>
    <pre>
        <?php 
        require_once 'Video.php';
        require_once 'Gafanhoto.php';
        require_once 'Visualizacao.php';

            $v[0] = new Video("Aula 01 de POO");
            $v[1] = new Video("Aula 01 PHP");
            $v[2] = new Video("FIQUE RICO EM 10 PASSOS! (rapido e facil)");

            $g[0] = new Gafanhoto("Álvaro", 19, "M", "zira");
            $g[1] = new Gafanhoto("Isadora", 16, "F", "isa");
            $g[2] = new Gafanhoto("Zé", 60, "M", "zeze");

            $vis[0] = new Visualizacao($v[0], $g[0]);

            echo "<br>";
            $v[0]->play();
            $g[0]->ganharExp();
            $g[0]->viuMaisUm();
            echo "<br>";
            $vis[0]->avaliarComentario("BOM!");
            

            echo "<br>";
            print_r($v[0]);
            print_r($g[0]);
            echo "<br>";
            print_r($v[1]);
            print_r($g[1]);
            echo "<br>";
            print_r($v[2]);
            print_r($g[2]);
            echo "<br>";
            
            
        ?>
    </pre>
</body>
</html>