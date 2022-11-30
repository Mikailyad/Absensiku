<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <style>
        :root {
            --background-dark: #2d3548;
            --text-light: rgba(255, 255, 255, 0.6);
            --text-lighter: rgba(255, 255, 255, 0.9);
            --spacing-s: 8px;
            --spacing-m: 16px;
            --spacing-l: 24px;
            --spacing-xl: 32px;
            --spacing-xxl: 64px;
            --width-container: 1200px;
        }

        * {
            border: 0;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            height: 100%;
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
        }

        body {
            height: 100%;
            background-image: linear-gradient(15deg, #AE67FA 0%, #F49867 150%);
        }

        .navbar{
            background-color: #a56477;
        }
        .navbar-brand{
            color: white;
        }

        .nav-link{
            color: white;
        }

        .hero-section {
            align-items: flex-start;
            background-image: linear-gradient(15deg, #0f4667 0%, #2a6973 150%);
            display: flex;
            min-height: 100%;
            justify-content: center;
            padding: var(--spacing-xxl) var(--spacing-l);
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            grid-column-gap: var(--spacing-l);
            grid-row-gap: var(--spacing-l);
            max-width: var(--width-container);
            width: 100%;
        }

        @media(min-width: 540px) {
            .card-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media(min-width: 960px) {
            .card-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        .card {
            list-style: none;
            position: relative;
        }

        .card:before {
            content: '';
            display: block;
            padding-bottom: 150%;
            width: 100%;
        }

        .card__background {
            background-size: cover;
            background-position: center;
            border-radius: var(--spacing-l);
            bottom: 0;
            filter: brightness(0.75) saturate(1.2) contrast(0.85);
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            transform-origin: center;
            transform: scale(1) translateZ(0);
            transition:
                filter 200ms linear,
                transform 200ms linear;
        }

        .card:hover .card__background {
            transform: scale(1.05) translateZ(0);
        }

        .card-grid:hover>.card:not(:hover) .card__background {
            filter: brightness(0.5) saturate(0) contrast(1.2) blur(20px);
        }

        .card__content {
            left: 0;
            padding: var(--spacing-l);
            position: absolute;
            top: 0;
        }

        .card__category {
            color: var(--text-light);
            font-size: 0.9rem;
            margin-bottom: var(--spacing-s);
            text-transform: uppercase;
        }

        .card__heading {
            color: var(--text-lighter);
            font-size: 1.9rem;
            text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.2);
            line-height: 1.4;
            word-spacing: 100vw;
        }
    </style>

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

    <div class="container" style="width: 600px;">
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
