<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/style.css">


</head>

<body>

    <nav class="navbar navbar-expand-lg mb-3">
        <div class="container">
            <a class="navbar-brand" href="#">AbsenKita</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="width: 400px;">
        <div class="row row-cols-3 row-cols-lg-3">
            <div class="col">
                <a class="card border-0" href="/kelas-satu" target="_blank">
                    <div class="card__background"
                        style="background-image: url(https://images.unsplash.com/photo-1557177324-56c542165309?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80)">
                    </div>
                    <div class="card__content">
                        <p class="card__category">Kelas</p>
                        <h3 class="card__heading">1</h3>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="card border-0" href="/kelas-dua" target="_blank">
                    <div class="card__background"
                        style="background-image: url(https://images.unsplash.com/photo-1557177324-56c542165309?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80)">
                    </div>
                    <div class="card__content">
                        <p class="card__category">Kelas</p>
                        <h3 class="card__heading">2</h3>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="card border-0" href="/kelas-tiga" target="_blank">
                    <div class="card__background"
                        style="background-image: url(https://images.unsplash.com/photo-1557177324-56c542165309?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80)">
                    </div>
                    <div class="card__content">
                        <p class="card__category">Kelas</p>
                        <h3 class="card__heading">3</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
