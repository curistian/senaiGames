<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="fale_conosco.css".css>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Secular+One&display=swap"
            rel="stylesheet">

        <title>Fale Conosco</title>
    </head>

    <body>
        <header class="cabecalho">
            <nav class="cabecalho-menu">
                <a class="cabecalho-menu-item" href="./senaigames.html">Página
                    inicial</a>
                <a class="cabecalho-menu-item" href="./paginadenoticias.html">NOTÍCIAS</a>
                <img class="logoimg cabecalho-menu-item" src="Senaigamespng.png"
                    alt="">
                <a class="cabecalho-menu-item" href="">FALE CONOSCO</a>
                <a class="cabecalho-menu-item" href="./music player/index.html"
                    target="_blank">MUSIC
                    PLAYER</a>
            </nav>
        </header>


        <main class="texto-principal">
            <section class="texto-principal1">
                <h1 class="titulo">Fale Conosco!</h1>
                <h4 class="subtitulo">Em que podemos ser úteis?</h4>
                <h4 class="subtitulo">Relate o seu feedback</h4>
            </section>

            <section class = "formulario">
                <form action = "validarUsuario.php" method="POST"> 
                    <label name = "nome">Nome: </label>
                    <input type = "text" placeholder="Digite o seu nome" name = "txtName" maxlength="30" size="10px">

                    <label name = "email">Email: </label>
                    <input type = "email" placeholder="Digite o seu email" name = "txtEmail" maxlenght = "30" size="10px">

                    <label name = "telefone">Telefone: </label>
                    <input type = "tel" placeholder = "(00) 0000-0000" name ="txtTel" maxlength="11" size = "45px"> 

                    <label name = "comment"> Deixe seu comentário </label>
                    <textarea name  ="coment" cols = "20" rows = "7"></textarea>
                    <button class = "botao-enviar" type = "submit">Enviar</button>
                </form>

         
        </main>
        <footer class="rodape">
            <div class="manosinc"> 
                <img id="logomanos" src="manos inc.png" alt="">
                <p id="copyright">© Copyright 2001-2023 Manos Inc. Produções</p>
            </div>
        </footer>

    </body>

</html>