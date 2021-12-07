<?php
include_once("conexao.php");

$filtro = isset($_GET['filtro']) ? $_GET['filtro'] : "";

$sql = "select * from serviços where profissao like '%$filtro%' order by nome";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Florence Services</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="buton.js" async></script>
</head>

<!--Menu navegação-->

<body>
    <header>
        <div class="navbar">
            <h2 class="logo">florence.services</h2>
            <nav class="ferramentas">
                <ul id="menu-nav">
                    <li><a href="#busca">Serviços</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="cadast.html">Cadastro</a></li>
                    <li><a href="login.html">Login</a></li>
                </ul>
                <div id="btn-mob"><i class="fa fa-bars"></i></div>
            </nav>
        </div>
    </header>

    <!--Transição de imagens-->
    <section class="slideshow">
        <div class="main">
            <div id="slider">
                <img class="selected" src="https://i.ibb.co/0K1vcfB/video-oficina-mecanica-limpa-5-dicas-para-voce-aplicar.jpg" alt="Image1">
                <img src="https://i.ibb.co/ctCWHhd/Manuten-o-el-trica.jpg" alt="Image2">
                <img src="https://i.ibb.co/Fm5NRmW/1613771470603032ce0a9dc435439238.jpg" alt="Image3">
                <img src="https://i.ibb.co/Gt0GBKB/tic-nas-empresas-1024x538.jpg" alt="Image4">
            </div>
        </div>
    </section>
    <script src="slider.js"></script>
    <!--Imagens fixas-->

    <section class="corpo">
        <div class="containers">
            <div class="container_img">
                <div class="img1"></div>
            </div>
            <div class="container_img">
                <div class="img2">

                </div>
            </div>
            <div class="container_img">
                <div class="img3">


                </div>
            </div>
            <div class="container_img">
                <div class="img4">
                </div>
            </div>
        </div>

        <!--Busca de serviços-->

        <div class="serv__">
            <h1>Nossos serviços
            </h1>
            <p class="serv_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br> Fugit numquam doloremque
                temporibus
                facilis
                nemo
                libero ipsam ullam quo nobis,<br> magnam maiores incidunt a velit neque in odio quidem debitis autem!
            </p>
        </div>
        <form method="get" action="">
            <div id="busca">
                <div class="busca__">
                    <input class="busca_input" type="text" name="filtro" placeholder="Buscar serviços...">
                    <span class="busca_input_border"></span>
                    <button class="busca_submit">Buscar</button>
                </div>
            </div>
        </form>

        <!--filtro de busca-->

        <div class="filtros">
            <button class="excluir">Excluir</button>
            <button class="editar">Editar</button>

            <?php
            echo "$registros registros encontrados<br>";
            echo "<br>";

            while ($exibe = mysqli_fetch_array($consulta)) {

                $nome = $exibe[1];
                $email = $exibe[2];
                $profissao = $exibe[3];
                $tel = $exibe[4];

                print "<article>";
                echo "Nome: $nome<br>";
                echo "E-mail: $email<br>";
                echo "Serviço: $profissao<br>";
                echo "Telefone: $tel<br><br>";
                print "</article>";
            }
            ?>
        </div>

        <footer class="footer">
            <h1>Autor: Gabriel Comassetto Scariot</h1>
            <p>© Copyright 2021 - All rights reserved.</p>
        </footer>
    </section>


</body>

</html>