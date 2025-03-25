<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <!-- MENU DE NAVEGAÇÃO -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cardapio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Procurar</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- CAROUSEL -->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/food1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/food2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/food3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- CATEGORIAS -->
    <section class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-4 d-flex">
                <div class="card h-100 d-flex flex-column">
                    <img src="images/pizza.png" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Pizzas</h5>
                        <p class="card-text">Massa crocante, ingredientes frescos e muito sabor! Escolha entre opções clássicas e especiais para um momento delicioso. 🍽️😋</p>
                        <a href="#" class="btn btn-primary mt-auto">Veja mais</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="card h-100 d-flex flex-column">
                    <img src="images/bugue.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Hambúrgueres</h5>
                        <p class="card-text">Suculentos, saborosos e feitos com ingredientes selecionados! Escolha o seu favorito e aproveite cada mordida. 😋🔥</p>
                        <a href="#" class="btn btn-primary mt-auto">Veja mais</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="card h-100 d-flex flex-column">
                    <img src="images/bebida.jpg" class="card-img-top" alt="...">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Bebidas</h5>
                        <p class="card-text">Refrescantes e perfeitas para acompanhar sua refeição! Escolha entre sucos, refrigerantes e drinks especiais. 🍹✨</p>
                        <a href="#" class="btn btn-primary mt-auto">Veja mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>