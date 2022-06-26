@extends('layout')


@section('content')
    <div>
        <div id="carrousel" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- Indicateurs -->
            <ul class="carousel-indicators">
                <li data-target="carrousel" data-slide-to="0" class="active"></li>
                <li data-target="carrousel" data-slide-to="1"></li>
                <li data-target="carrousel" data-slide-to="2"></li>
            </ul>

            <!-- Carrousel -->
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="4000">
                    <img src="image/slide1.jpg" alt="Carrousel slide 1" class="d-block w-100">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="image/slide2.jpg" alt="Carrousel slide 2" class="d-block w-100">
                </div>
                <div class="carousel-item" data-interval="1000">
                    <img src="image/slide1.jpg" alt="Carrousel slide 3" class="d-block w-100">
                </div>
            </div>

            <!-- Contrôles -->
            <a class="carousel-control-prev" href="#carrousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
            <a class="carousel-control-next" href="#carrousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
        </div>
    </div>

    <div id="presentation">
        <h1>Bienvenue chez Bayla Restaurant</h1>
        <hr class="separator">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere omnis eveniet, tempore nostrum unde adipisci
            recusandae placeat accusantium voluptatibus, eligendi illum minima. Ex neque vitae tempora quia reprehenderit
            iste ipsum!Laboriosam harum expedita nisi officiis non accusantium, exercitationem beatae repellat dignissimos.
            Perspiciatis excepturi repellat laboriosam exercitationem, expedita praesentium eaque nihil deserunt sequi omnis
            tempora ratione quis neque dicta maiores obcaecati. Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Earum aliquid nihil at rerum voluptate? Facere perferendis eius, inventore velit corrupti voluptates delectus,
            debitis ipsa earum architecto culpa perspiciatis quo dolorem!
            Commodi alias quod veritatis consectetur. Adipisci aliquam nemo vitae pariatur cum laborum ipsam nulla tempore!
        </p>
        <hr class="separator">
    </div>
    <h1 class="titre-block">On parle de nous ! </h1>
    <div id="présentationArticle" class=" row col-12">

        <div class="card card-home col-3">

            <a href="https://www.ouest-france.fr/normandie/caen-14000/a-caen-bayla-la-belle-un-nouveau-restaurant-va-ouvrir-rue-ecuyere-0e3ad3d8-ae87-11ec-9246-65b3a25ae7f9"
                target="_blank">
                <img src="/image/Article-Ouest.jpg" class="card-img-top" alt="articleOuestFrance"></a>

            <div class="card-body">
                <h5 class="card-title">Ouest France</h5>
                <p class="card-text">À Caen, Bayla la belle, un nouveau restaurant, va ouvrir rue Écuyère</p>
            </div>
        </div>

        <div class="card card-home col-3">

            <a href="https://www.tendanceouest.com/actualite-397240-bonne-table-a-caen-bayla-une-table-sophistiquee-mais-decontractee"
                target="_blank">
                <img src="/image/Article-Tendance.jpg" class="card-img-top" alt="articleActu"></a>
            <div class="card-body">
                <h5 class="card-title">Tendance Ouest</h5>
                <p class="card-text">Bonne table à Caen. Bayla, une table sophistiquée mais décontractée
                    !</p>
            </div>
        </div>

        <div class="card card-home col-3">

            <a href="https://www.tendanceouest.com/actualite-397240-bonne-table-a-caen-bayla-une-table-sophistiquee-mais-decontractee"
                target="_blank">
                <img src="/image/Article-Actu.jpg" class="card-img-top" alt="articleActu"></a>
            <div class="card-body">
                <h5 class="card-title">Liberté</h5>
                <p class="card-text">Bayla, le restaurant de Caen qui assure un service continu en cuisine de midi à minuit
                    !</p>
            </div>
        </div>

    </div>
@endsection
