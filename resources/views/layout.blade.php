<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bayla Restaurant</title>
</head>


<title>Laravel</title>

<!-- Fonts -->

<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="/css/home.css">
<link rel="stylesheet" href="/css/layout.css">
<script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>


</head>


</head>

{{-- NAVBAR LAYOUT --}}


<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="image/logo.png" alt="logo" margin-right=20% width="130" height="60">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            {{-- LES DIFFERENTES SECTIONS DE LA NAVBAR --}}

            <ul class="navbar-nav row col-12">

                <li class="nav-item first-item col-2">
                    <a class="nav-link " href="carte">Notre Carte</a>
                </li>
                <li class="nav-item col-2">
                    <a class="nav-link " href="reservation">R??servation</a>
                </li>
                <li class="nav-item col-2">
                    <a class="nav-link" href="galerie">Galerie Photo</a>
                </li>
                <li class="nav-item col-2">
                    <a class="nav-link" href="evenement">Ev??nements</a>
                </li>
                <li class="nav-item dropdown me-5">

                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        A Propos
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <li><a class="dropdown-item" href="contact">Contactez-Nous</a></li>
                        <li><a class="dropdown-item" href="recrutement">Rejoignez-Nous</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item logo-item col-1">

                    {{-- LOGO FB ET INSTA DE LA NAVBAR --}}

                    <a href="https://www.instagram.com/bayla_restaurant/?hl=fr">
                        <box-icon name='instagram' color="black" type='logo' animation='tada-hover'>
                        </box-icon>
                    </a>
                    <a href="https://www.facebook.com/baylarestaurant">
                        <box-icon name='facebook' color='black' type='logo' animation='tada-hover'>
                        </box-icon>
                    </a>

                </li>
            </ul>
        </div>
    </div>
</nav>



@yield('content')


{{-- FOOTER DU LAYOUT --}}

<footer class="col-12">

    {{-- PARTIE CONTACT DU FOOTER --}}
    <div class="row">
        <div id="footer-contact" class="block-foot col-4">

            <p>Bayla Restaurant <br>
                47 Rue ??cuy??re, 14000 Caen <br>
                02.31.91.20.83 <br>
                <a href="reservation">R??servation</a>
            </p>

        </div>

        {{-- LOGO CENTRAL DU LAYOUT AVEC LOGO FB ET INSTA --}}

        <div class="block-foot col-4">

            <img src="/image/logoB.png" alt="logoB" style="padding-bottom: 3%"><br>
            <a href="https://www.facebook.com/baylarestaurant">
                <box-icon name='facebook-circle' color='white' type='logo' animation='tada-hover'></box-icon>
            </a>
            <a href="https://www.instagram.com/bayla_restaurant/?hl=fr">
                <box-icon name='instagram' color="white" type='logo' animation='tada-hover'></box-icon>
            </a>

        </div>

        {{-- PARTIE DEDIEE A LA CONNEXION ADMIN --}}

        <div class="block-foot col-4">

            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus accusantium atque quo, totam maiores
                iure
            </p>

        </div>
    </div>
</footer>

</html>
