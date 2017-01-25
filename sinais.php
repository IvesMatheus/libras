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
            <h1>GLOSSÁRIO</h1>
        </header>
        <form id="frmCategorias" name="categorias" action="videos.php" method="POST">
            <input id='inpCategoria' name="categoria" type="hidden" value=""/>
        </form>
        <h1 id="title_menu">CATEGORIAS</h1>
        <div class="itens_menu">
            <figure id="saudacoes">
                <img src="img/saudacoes.jpg" />
                <figcaption>
                    <h1>SAUDAÇÕES</h1>
                </figcaption>
            </figure>
            <figure>
                <img src="img/pronomes.jpg" />
                <figcaption>
                    <h1>PRONOMES</h1>
                </figcaption>
            </figure>
            <figure>
                <img src="img/verbos.jpg" />
                <figcaption>
                    <h1>VERBOS</h1>
                </figcaption>
            </figure>
        </div>
        <div class="itens_menu">
            <figure>
                <img src="img/alimento.jpg" />
                <figcaption>
                    <h1>ALIMENTOS</h1>
                </figcaption>
            </figure>
            <figure>
                <img src="img/meios_de_comunicacao.jpg" />
                <figcaption>
                    <h1>MEIOS DE COMUNICAÇÃO</h1>
                </figcaption>
            </figure>
            <figure>
                <img src="img/materias_escolares.jpg" />
                <figcaption>
                    <h1>MATÉRIAS ESCOLARES</h1>
                </figcaption>
            </figure>
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
        <script type="text/javascript">
            var fgrSaudacoes = document.getElementById("saudacoes");
            fgrSaudacoes.onclick = function ()
            {
                //alert("test");
                document.getElementById("inpCategoria").value = 0;
                document.getElementById("frmCategorias").submit();
            }
        </script>
    </body>
</html>
