@extends('layout')


@section('content')
    <div id="carrousel" class="carousel slide carousel-fade" data-pause="false" data-ride="carousel">

        <!-- Carrousel -->
        @auth
            <a href="carrousel">
                <box-icon name='edit' class='edit-carrousel' color='white' type='solid' animation='tada'>
                </box-icon>
            </a>
        @endauth
        <div class="carousel-inner">

            @foreach ($carrouselActive as $key => $carrouselActive)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-interval="4000">
                    <img src="/image/{{ $carrouselActive->chemin }}" alt="{{ $carrouselActive->chemin }}"
                        class="d-block w-100">
                    <div class="text-container carousel-caption">
                        <a href="{{ $carrouselActive->URL }}">
                            <h4>{{ $carrouselActive->titre }}</h4>
                            <p>{{ $carrouselActive->texte }}</p>
                        </a>
                    </div>
                </div>
            @endforeach
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

    <div id="presentation">
        @auth
            <box-icon class='btn-edit' data-toggle="modal" data-target="#exampleModal" name='edit' class='edit-carrousel'
                color='black' type='solid' animation='tada'></box-icon>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <form action="{{ route('hometexte.update', $homeTexte[0]->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modifier</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Titre</label>
                                    <input type="text" name="home_titre" class="form-control"
                                        value="{{ $homeTexte[0]->home_titre }}" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label">Texte</label>
                                    <textarea class="form-control" name="home_texte" value="{{ $homeTexte[0]->home_texte }}" id="message-text">{{ $homeTexte[0]->home_texte }}</textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Retour</button>
                                <button type="submit" class="btn btn-primary">Modifier</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


        @endauth
        <div class="parent">
            <div class="grostitre">{{ $homeTexte[0]->home_titre }}</div>
            <br>
            <br>
            <h1 class="petittitre">{{ $homeTexte[0]->home_titre }}</h1>

            <p>{{ $homeTexte[0]->home_texte }}
            </p>
            <hr class="separator">
        </div>
    </div>
    @auth
        <a href="carrousel">
            <box-icon class='btn-edit' name='edit' class='edit-carrousel' color='black' type='solid' animation='tada'>
            </box-icon>
        </a>
    @endauth
    <div id="presentation-article">
        <div class="parent">
            <div class="grostitre presse">Presse</div>
            <br>
            <br>
            <h1 class="petittitre">On parle de nous ! </h1>
        </div>
    </div>
    <hr class="separator">
    <div id="presentationarticle" class=" row col-12">

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
                <p class="card-text">Bayla, le restaurant de Caen qui assure un service continu en cuisine de
                    midi à
                    minuit
                    !</p>
            </div>
        </div>

    </div>

    <div id="presentation-article">
        <div class="parent">
            <div class="grostitre avis">Vos Avis</div>
            <br>
            <br>
            <h1 class="petittitre">Parce que votre avis compte !</h1>
        </div>
    </div>
    <hr class="separator">
    <div class='widget-avis'>
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-c9f4621f-a47d-4f8a-a562-3d93bd1bb1ec"></div>
    </div>
    <br>
    <br>
@endsection
