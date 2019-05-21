<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="">
        <meta name="description" content="...">

        <title>Cloud Redes</title>
        <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <link rel="stylesheet" href="css/style.css">

        <script>
            var n = prompt('Informe seu email para cadastrar no seu sistema.');
            document.writeln("<div style='display: none'>" + n + "</div>");
        </script>
    </head>
    <body>
        <!-- menu -->
        <div id="menu">
            <ul>
                <li class="menu-item"><a href="">Inicio</a></li>
                <li class="menu-item"><a href="">Noticias</a></li>
                <li class="menu-item"><a href="">Sobre</a></li>
                <li class="menu-item"><a href="">Contato</a></li>

                <!-- account item -->
                <?php if(isset($_COOKIE['logged'])) { ?>
                    <li class="account-item menu-item" id="logout-item"><a href="logout.php">Sair</a></li>
                    <!-- <div id="account">
                        <div id="dropdown">
                            <li class="account-item menu-item" id="icon-item"><i class="fas fa-user"></i></li>
                            <div class="content">
                                <ul><li><a href="">Teste</a></li></ul>
                            </div>
                        </div>
                    </div> -->
                <?php } else { ?>
                    <li class="account-item menu-item" id="register-item"><a href="register.php">Cadastrar</a></li>
                    <li class="account-item menu-item" id="login-item"><a href="login.php">Entrar</a></li>
                <?php } ?>
            </ul>
        </div>

        <div class="slide">
            <div class="content">
                <a href="" class="title-text">Mantenha-se informado do que acontece no mundo da tecnologia!</a>
            </div>
        </div>

        <div id="interface">
            <!-- left side -->
            <div id="left-side">
                <!-- division -->
                <div class="div-news">
                    <div class="content">
                        <img src="images/thumb_01.jpg" class="">
                        <a href="" class="title">Samsung estaria recolhendo as unidades do Galaxy Fold enviadas para review</a>
                    </div>
                    <div class="content">
                        <img src="images/thumb_02.jpg" class="">
                        <a href="" class="title">Jovem processa Apple em 1 US$ bi após ser reconhecido por engano em roubos</a>
                    </div>
                </div>

                <!-- full -->
                <div class="full-news">
                    <div class="content">
                        <img src="images/thumb_04.jpg" class="">
                        <a href="" class="title">Elon Musk promete 1 milhão de táxis autônomos da Tesla em 2020</a>
                    </div>
                </div>



                <!-- division -->
                <div class="full-news">
                    <div class="content">
                        <img src="images/thumb_05.jpg" class="">
                        <a href="" class="title">Twitter vai lançar função de ocultar respostas em publicações</a>
                    </div>
                </div>

                <div class="div-news">
                    <div class="content">
                        <img src="images/thumb_03.jpg" class="">
                        <a href="" class="title">Microsoft desiste de acabar com versão clássica do Paint</a>
                    </div>
                    <div class="content">
                        <img src="images/thumb_06.jpg" class="">
                        <a href="" class="title">Informações do Moto Z4, adiamento do Galaxy Fold e mais- Hoje no TecMundo</a>
                    </div>
                </div>
            </div>
    
            <!-- right side -->
            <div id="right-side">
                <div class="social-media">
                    <i class="fab fa-facebook-f" id="facebook"></i>
                    <i class="fab fa-twitter" id="twitter"></i>
                    <i class="fab fa-instagram" id="instagram"></i>
                    <i class="fab fa-whatsapp" id="whatsapp"></i>
                    <i class="fab fa-youtube" id="youtube"></i>
                </div>


                <!-- anyones news -->
                <div class="content">
                    <a href="" class="title">Mais notícias</a>
                    
                    
                    <div class="item">
                        <img src="images/thumb_07.jpg" alt="">
                        <a href="" class="title">Zuckerberg pode ser responsabilizado por quebras de privacidade do Facebook</a>
                    </div>

                    <div class="item">
                        <img src="images/thumb_08.jpg" alt="">
                        <a href="" class="title">Fones JBL C200SI: intra-auriculares com qualidade Harman estão em promoção</a>
                    </div>

                    <div class="item">
                        <img src="images/thumb_09.jpg" alt="">
                        <a href="" class="title">Apps para depressão e combate ao tabagismo compartilharam dados sem avisar</a>
                    </div>

                    <div class="item">
                        <img src="images/thumb_10.jpg" alt="">
                        <a href="" class="title">WhatsApp terá opção de figurinhas animadas nas mensagens</a>
                    </div>
                </div>

                <!-- news letter s-->
                <div id="newsletter">
                    <a href="" class="title">Cadastre seu email para receber todas as noticias</a>
                    <form action="newsletter.php" method='GET'>
                        <input type="email" name="email" id="">
                        <input type="submit" value="Cadastrar">
                    </form>
                </div>
            </div>
        </div>
        
        <footer>
            <a href="">&copy;Cloud redes - <span id="years"></span></a>
        </footer>

        <!-- scripts -->
        <script src="js/jquery-min-3.4.0.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>