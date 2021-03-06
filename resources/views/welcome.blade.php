<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Yakizakana - Comida Japonesa</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@400;600&display=swap" rel="stylesheet">

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">

        <!-- bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>

        <div class="fixed-top opacity-dark" id="navmenu">
            <div class="d-none d-md-flex justify-content-center align-items-center pt-3" id="show">
                <div>
                    <a class="d-flex text-reset text-decoration-none user-select-none" href="{{ route('welcome') }}">
                        <h3 class="mr-3 font-weight-bolder text-wine">焼き魚</h3>
                        <h3 class="text-white sources-serif-font">Yakizakana</h3>
                    </a>
                </div>
            </div>
            <nav class="navbar navbar-expand-md navbar-dark">
                <a class="d-block d-md-none sources-serif-font navbar-brand" href="#"><span class="mr-3 font-weight-bolder text-wine">焼き魚</span>Yakizakana</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto">
                        <li class="active m-2 lead">
                            <a class="nav-link click-scroll" href="#home">Home</a>
                        </li>
                        <li class="active nav-item m-2 lead">
                            <a class="nav-link click-scroll" href="#sobre">Sobre</a>
                        </li>
                        <li class="active nav-item m-2 lead">
                            <a class="nav-link click-scroll" href="#contato">Contato</a>
                        </li>
                        <li class="active nav-item m-2 lead">
                            <a class="nav-link click-scroll" href="{{ route('cardapio') }}">Cardápio</a>
                        </li>
                        <li class="active nav-item m-2 lead">
                            <a class="nav-link click-scroll" href="{{ route('fornecedores') }}">Fornecedores</a>
                        </li>
                        <li class="nav-item m-2 lead">
                            <a class="nav-link click-scroll" href="{{ route('login') }}">Controle</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="vh-100 parallax text-center d-flex flex-column justify-content-center align-items-center user-select-none" id="topo" style="background-image: url('../img/background-blur.jpg');">
            <h3 class="mt-5 mx-2 dancing-font title-logo text-shadow" id="home">Bem vindo à <span class="sources-serif-font">Yakizakana!</span></h3>
            <p class="text-white text-shadow mx-1" style="font-size: 20px">O melhor da culinário oriental a<b> seu dispor!</b></p>
        </div>

        <div class="container my-5" id="sobre">
            <p style="font-size: 25px" class="mt-5 sources-serif-font">Conheça um pouco mais sobre <b class="text-wine font-italic">Yakizakana.</b><br/>O melhor em comida japonesa do Brasil.</p>
            <div class="row border my-5 shadow-sm rounded">
                <div class="col-12 col-md-12 col-lg-3 text-center">
                    <img class="img-fluid my-4" src="img/yakizakana.png" width="150" heigth="150" alt="Missao">
                    <div class="p-1">
                        <h5 class="border-bottom pb-3">Por que comida japonesa?</h5>
                        <ul class="text-left mt-3">
                            <li class="border-bottom"><p>Inviabilidade.</p></li>
                            <li class="border-bottom"><p>Culinaria e cultira difrente.</p></li>
                            <li class="border-bottom"><p>Evidencia no mercado.</p></li>
                            <li class="border-bottom"><p>Curiosidade em conhecer.</p></li>
                            <li class="border-bottom"><p>Culinaria saudavel.</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3 text-center">
                    <img class="img-fluid" src="img/missao.png" width="150" heigth="150" alt="Missao">
                    <div class="p-3">
                        <ul class="text-left">
                            <li class="border-bottom"><p>Trazer mais acessibilidade a culinaria oriental.</p></li>
                            <li class="border-bottom"><p>Atingir um publico maior.</p></li>
                            <li class="border-bottom"><p>Promover uma inovacao na culinaria Brasileira</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3 text-center">
                    <img class="img-fluid" src="img/visao.png" width="150" heigth="150" alt="Visao">
                    <div class="p-3">
                        <ul class="text-left">
                            <li class="border-bottom"><p>Se <b>tornar referência</b>, ser a <b>maior</b> e <b>melhor</b> empresa no ramo alimentício, com foco em <b>comida japonesa.</b></p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3 text-center">
                    <img class="img-fluid" src="img/valores.png" width="150" heigth="150" alt="Valores">
                    <div class="p-3">
                        <ul class="text-left">
                            <li class="border-bottom"><p>Diversidade.</p></li>
                            <li class="border-bottom"><p>Confianca.</p></li>
                            <li class="border-bottom"><p>Responsabilidade.</p></li>
                            <li class="border-bottom"><p>Integridade.</p></li>
                            <li class="border-bottom"><p>Simplicidade e acessibilidade.</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container border my-5 rounded" id="contato">
            <div class="col-12 col-md-7 my-5 ml-auto shadow-sm">
                <h1>Contato 1</h1>
            </div>
            <div class="col-12 col-md-7 my-5 mr-auto shadow-sm">
                <h1>Contato 2</h1>
            </div>
            <div class="col-12 col-md-7 my-5 ml-auto shadow-sm">
                <h1>Contato 3</h1>
            </div>
        </div>

        <div class="bg-dark d-flex justify-content-center align-items-center flex-column py-4">
            <div class="d-flex justify-content-center align-items-center mb-2">
                <a class="d-flex text-reset text-decoration-none" href="{{ route('welcome') }}">
                    <h3 class="mr-3 font-weight-bolder text-wine">焼き魚</h3>
                    <h3 class="text-white sources-serif-font">Yakizakana</h3>
                </a>
            </div>
            <div class="d-flex justify-content-center align-items-center flex-wrap">
                <a class="mx-2 text-decoration-none text-white click-scroll" href="#home">Home</a>
                <a class="mx-2 text-decoration-none text-white click-scroll" href="#sobre">Sobre</a>
                <a class="mx-2 text-decoration-none text-white click-scroll" href="#contato">Contato</a>
                <a class="mx-2 text-decoration-none text-white click-scroll" href="#comida">Comida</a>
                <a class="mx-2 text-decoration-none text-white click-scroll" href="#fornecedores">Fornecedores</a>
            </div>
        </div>
        <div class="container-fluid p-2" style="background: #000">
            <div class="container mt-3">
                <p class="text-muted">© 2020 Yakizakana. Todos os direitos reservados. Termos de uso e politica de privacidade </p>
            </div>
        </div>

        <a href="#topo" class="buttonTop-hidden buttonTop shadow click-scroll" id="buttonTop">Subir!</a>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="js/app.js"></script>
    </body>
</html>
