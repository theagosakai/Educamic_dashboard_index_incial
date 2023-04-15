<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educamic</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

    <!-- navbar -->

    <header><!--logo -->

        <img src="logo.png" class="img-logo">

        <!--logo -->

        <div class="navigation">
            <input type="checkbox" id="nav-checkbox">
            <label for="nav-checkbox" class="nav-toggle">
                <img src="open.png" alt="open menu" class="open">
                <img src="close.png" alt="close.menu" class="close">
            </label>


            <ul class="nav-menu">
                <li><a href="sobre.html">Sobre</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Entrar</a></li>

            </ul>
        </div>
    </header>
    <!-- navbar -->

    <div class="hero">

        <div class="content">

            <h2> Bem-vindo ao</h2>
            <h1> Educamic</h1>
        </div>



        <script>
            $(document).ready(function () {
                $(window).bind('scroll', function () {
                    var gap = 50;
                    if ($(window).scrollTop() > gap) {
                        $('header').addClass('active');
                    } else {
                        $('header').removeClass('active');
                    }
                });
            });

        </script>
    </div>

    <div class="header1">
        
        <h2>Conheça nossa plataforma</h2>
    <h5>E tudo que podemos proporcionar para o seu controle financeiro.</h5>
  
    </div>


    <!-- vídeo -->
    <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/u9NE0jInb_c" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
    </div>
    <!-- vídeo -->

    <div class="header2">
    </div>
    <div class="aside-img">
        <br>
        <br>
        <aside>
            <div class="titulo1">
                <h3> Controle seus gastos de forma rápida e fácil! </h3>
            </div>
            <div class="text1">
                <p> Esta ferramenta te ajudará com a organização e planejamento financeiro, pessoal e familiar, além
                    disso voce poderá separar seus gastos em categorias.</p>
            </div>


        </aside>
        <img src="controle-removebg-preview - Editado (1).png" class="img-aside1">
    </div>

    <div class="aside-img-2">
        <img src="planejamento-removebg-preview - Editado.png" class="img-aside2">
        <aside>
            <div class="titulo2">
                <h3> Planejamento e metas </h3>
            </div>
            <div class="text2">
                <p> Ajudará você a se planejar financeiramente para realizar um obejtivo, como uma viagem com a família.</p>
            </div>
        </aside>
    </div>

    <div class="aside-img">
        <aside>
            <div class="titulo3">
                <h3> Dicas e informações sobre educação financeira </h3>
            </div>
            <div class="text3">
                <p> Informações e dicas para você ficar informado sobre o mundo financeiro, como economizar e investir.</p>
            </div>
        </aside>
        <img src="estudando-removebg-preview.png" class="img-aside3">
    </div>

    <footer>
        <div class="container-footer">
            <div class="row-footer">
                <div class="footer-col">
                    <h4>Empresa</h4>
                    <ul>
                        <li> <a href=""> Quem somos</a></li>
                        <li> <a href=""> Nossos serviços</a></li>
                        <li> <a href=""> política de privacidade</a></li>
                        <li> <a href=""> programa afliados</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Suporte</h4>
                    <ul>
                        <li> <a href=""> FAQ</a></li>
                        <li> <a href="">Telefone</a></li>
                        <li> <a href=""> Sobre</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Informações</h4>
                    <ul>
                        <li> <a href=""> Blog</a></li>
                        <li> <a href="">Contato</a></li>
                        <li> <a href=""> Email</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Obter ajuda</h4>
                    <div class="form-sub">
                        <form>
                            <input type="email" placeholder="Digite seu email" required>
                            <button> Subscrever</button>
                        </form>
                    </div>

                    <div class="medias-sociais">
                        <a href=""> <i class="fa fa-facebook"></i> </a>
                        <a href=""> <i class="fa fa-instagram"></i> </a>
                        <a href=""> <i class="fa fa-twitter"></i> </a>
                        <a href=""> <i class="fa fa-facebook"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>