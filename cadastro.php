<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylecadastro.css">
    <title>Cadastro - Educamic</title>
</head>
<body>
    <form action="conexao.php" method="post">
     <!-- navbar -->

   <header><!--logo -->
    
    <img src="logo.png"  class="img-logo">
  
<!--logo -->

<div class="navigation">
    <input type="checkbox" id="nav-checkbox">
    <label for="nav-checkbox" class="nav-toggle">
        <img src="open.png" alt="open menu" class="open">
        <img src="close.png" alt="close.menu" class="close">
    </label>

    
    <ul class="nav-menu">
        <li><a href="#">Sair</a></li>
       
    </ul>
</div>
</header>
<!-- navbar -->

<script>
    $(document).ready(function(){
       $(window).bind('scroll', function(){
           var gap = 50;
           if($(window).scrollTop() > gap){
               $('header').addClass('active');
           } else{
               $('header').removeClass('active');
           }
       });
   });
     
  </script>

    <div class="container">
        <div class="form-image">
            <img src="imagem cadastro.png" alt="">
        </div>
        <div class="form">
           
            </form>

            <div class="form-header">
                <div class="title">
                    <h1>Cadastre-</h1>
                    
                </div>
            </div>
            <div class="title1">
            <h1>se</h1>
            </div>
            <br>
            <br>
            <br>
                <div class="input-group">
                <div class="input-group1">
                    <div class="input-box1">
                        <label for="firstName">Nome Completo</label>
                        <input id="firstName" type="firstName" name="firstName" placeholder="Digite seu nome completo" required>
                    </div>
                    
                    <div class="input-box1">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box1">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                    </div>

                    
                </div>

                <div class="input-group2">
                <div class="input-box2">
                    <label for="nasc">Data de Nascimento</label>
                    <input id="nasc" type="nasc" name="nasc" placeholder="  __/__/__" required>
                </div>

                <div class="input-box2">
                    <label for="telefone">Telefone</label>
                    <input id="telefone" type="" name="telefone" placeholder="  (xx) xxxx-xxxx" required>
                </div>
            </div>
        </div>
       
            <button><a href="#">Cadastrar</a> </button>

        </div>
    </div>
    <br>
    <br>
    <br>
</body>
</html>

