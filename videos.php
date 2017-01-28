 <?php
    include "array_videos.php";
    $categoria = $_POST["categoria"];

    session_start();
    $_SESSION["indice_video"] = 0;
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>LIBRAS</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <header id="cabecalho_menor">
            <a href="index.php">
                <figure id="logo">
                    <img src=""/>
                    <figcaption></figcaption>
                </figure>
            </a>
            <nav id="menu">
                <ul id="opcoes">
                    <li><a href="sobre_libras.php">Sobre LIBRAS</a></li>
                    <li><a href="sinais.php">Sinais</a></li>
                    <li><a href="index.php">Projetos para LIBRAS</a></li>
                </ul>
            </nav>
            <h1>VÍDEOS</h1>
        </header>
        <div id="video_principal">
            <div id="video_anterior" class="video_anterior">
                <img id="anterior" src="img/anterior.jpg" />
            </div>
            <div id="video">asd</div>
            <div id="video_proximo" class="video_anterior">
                <img id="proximo" src="img/proximo.jpg" />
            </div>
        </div>
        <div id="outros_videos">
        </div>
        <footer id="rodape">
            <figure>
                <a href="http://icomp.ufam.edu.br/site/" target="_blank">
                    <img src="img/icomp.png" />
                </a>
                <a href="http://ufam.edu.br/" target="_blank">
                    <img src="img/logoufam.png" />
                </a>
            </figure>
        </footer>
    </body>
    <script type="text/javascript">
        var video = document.getElementById("video");
        video.innerHTML = '<?= $videos[$categoria][$_SESSION['indice_video']]."<br><h1>".$titulos[$categoria][$_SESSION['indice_video']]."</h1>" ?>';

        var proximo = document.getElementById("proximo");
        proximo.onclick = function ()
        {
            "<?php $_SESSION['indice_video']++; ?>";
            video.innerHTML = '<?= $videos[$categoria][$_SESSION['indice_video']]."<br><h1>".$titulos[$categoria][$_SESSION['indice_video']]."</h1>" ?>';
        }

        var anterior = document.getElementById("anterior");
        anterior.onclick = function ()
        {
            "<?php $_SESSION['indice_video']--; ?>";
            video.innerHTML = '<?= $videos[$categoria][$_SESSION['indice_video']]."<br><h1>".$titulos[$categoria][$_SESSION['indice_video']]."</h1>" ?>';
        }
    </script>
</html>
