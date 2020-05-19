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
                    <a class="d-flex text-reset text-decoration-none" href="{{ route('welcome') }}">
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
                        <li class="m-2 lead">
                            <a class="nav-link click-scroll" href="{{ route('welcome') }}">Home</a>
                        </li>
                        <li class="active nav-item m-2 lead">
                            <a class="nav-link click-scroll" href="{{ route('cardapio') }}">Cardápio</a>
                        </li>
                        <li class="nav-item m-2 lead">
                            <a class="nav-link click-scroll" href="{{ route('fornecedores') }}">Fornecedores</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="vh-100 parallax text-center d-flex flex-column justify-content-center align-items-center" id="home" style="background-image: url('../img/background-cardapio-blur.jpg');">
            <h3 class="mt-5 mx-2 dancing-font title-logo text-shadow">Bem vindo à <span class="sources-serif-font">Yakizakana!</span></h3>
            <p class="text-white text-shadow mx-1" style="font-size: 20px">O melhor da culinário oriental a<b> seu dispor!</b></p>
        </div>

        <div class="bg-dark d-flex justify-content-center align-items-center flex-column py-4">
            <div class="d-flex justify-content-center align-items-center mb-2">
                <a class="d-flex text-reset text-decoration-none" href="{{ route('welcome') }}">
                    <h3 class="mr-3 font-weight-bolder text-wine">焼き魚</h3>
                    <h3 class="text-white sources-serif-font">Yakizakana</h3>
                </a>
            </div>
            <div class="d-flex justify-content-center align-items-center flex-wrap">
                <a class="mx-2 text-decoration-none text-white click-scroll" href="{{ route('welcome') }}">Home</a>
                <a class="mx-2 text-decoration-none text-white click-scroll" href="{{ route('cardapio') }}">Cardápio</a>
                <a class="mx-2 text-decoration-none text-white click-scroll" href="{{ route('fornecedores') }}">Fornecedores</a>
            </div>
        </div>
        <div class="container-fluid p-2" style="background: #000">
            <div class="container mt-3">
                <p class="text-muted">© 2020 Yakizakana. Todos os direitos reservados. Termos de uso e politica de privacidade </p>
            </div>
        </div>

        <a href="#home" class="buttonTop-hidden buttonTop shadow click-scroll" id="buttonTop">Subir!</a>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="js/app.js"></script>
    </body>
</html>
