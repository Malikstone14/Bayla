@extends('layout')


@section('content')

    {{-- <body>
        <div class="choix">
            <i class='bx bxs-dish bx-lg bx-border-circle'></i>
            <i class='bx bx-wine bx-lg bx-border-circle'></i>
            <i class='bx bx-drink bx-lg bx-border-circle'></i>
            <i class='bx bx-cheese bx-lg bx-border-circle'></i>
        </div>
        <hr>
        <div class='photomenu'>
            <img src="image/menu.png"alt="Menu du midi">
        </div> --}}
        <div class="index-top">
          <h1 class='index-titre'>Nos Cartes</h1>
        </div>
            <div class="conteudo-general js-conteudo-general">
              <div class="content-interne-general">
                <div class="content">
                  <div class="content-sem-rolagem">
                    <div class="content-interne">
                      <div class="content-image"></div>
                      <div class="content-visual-inicial">
                        <h2 class="content-titulo"><i class='bx bxs-dish bx-lg bx-border-circle'></i></h2>
                      </div>
                      <div class="content-content scroller">
                        <div class="content-text">
                          <div>   
                             @auth
                            <a href="cartemidi">
                                <box-icon class='btn-edit-carte' name='edit' class='edit-carrousel' color='white' type='solid' animation='tada'>
                                </box-icon>
                            </a>
                            @endauth
                            </div>
                            <h1>Carte du Midi</h1>
                            <h3>Entrée</h3>
                            <hr class="separator-carte">
                            @foreach ($cartemidientree as $entree)
                           
                            <p class='cartetitre'>{{$entree->nom}}</p>
                            <p class='carteingredient'>{{$entree->ingredient}}</p>
                            @endforeach
                            <hr class="separator-carte">
                            <h3>Plat</h3>
                            <hr class="separator-carte">
                            @foreach ($cartemidiplat as $plat)

                            <p class='cartetitre'>{{$plat->nom}}</p>
                            <p class='carteingredient'>{{$plat->ingredient}}</p>

                            @endforeach
                            <hr class="separator-carte">
                            <h3>Dessert</h3>
                            <hr class="separator-carte">
                            @foreach ($cartemididessert as $dessert)
                           
                            <p class='cartetitre'>{{$dessert->nom}}</p>
                            <p class='carteingredient'>{{$dessert->ingredient}}</p>
                            @endforeach 
                            <p class=carteprix>Entrée ou Plat - Dessert 14,50€</p>
                            <p class="carteprix">Entrée - Plat - Dessert 18,50€</p>
                            <p class="carteprix">Expresso 1€</p>
                        </div>
                        <div class="content-botao-fechar"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <div class="content-sem-rolagem">
                    <div class="content-interne">
                      <div class="content-image"></div>
                      <div class="content-visual-inicial">
                        <h2 class="content-titulo"><i class='bx bx-wine bx-lg bx-border-circle'></i></h2>
                      </div>
                      <div class="content-content">
                        <div class="content-text">Carte des Vins</div>
                        <div class="content-botao-fechar"></div>
                      </div>
                    </div>
                  </div>
                  <div class="content-index">
                    <div class="content-index-back"></div>
                    <div class="content-index-front">
                      <div class="content-index-overlay" data-index="2"></div>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <div class="content-sem-rolagem">
                    <div class="content-interne">
                      <div class="content-image"></div>
                      <div class="content-visual-inicial">
                        <h2 class="content-titulo"><i class='bx bx-drink bx-lg bx-border-circle'></i></h2>
                      </div>
                      <div class="content-content">
                        <div class="content-text">Carte des Boissons</div>
                        <div class="content-botao-fechar"></div>
                      </div>
                    </div>
                  </div>
                  <div class="content-index">
                    <div class="content-index-back"></div>
                    <div class="content-index-front">
                      <div class="content-index-overlay" data-index="3"></div>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <div class="content-sem-rolagem">
                    <div class="content-interne">
                      <div class="content-image"></div>
                      <div class="content-visual-inicial">
                        <h2 class="content-titulo"><i class='bx bx-cheese bx-lg bx-border-circle'></i></h2>
                      </div>
                      <div class="content-content scroller">
                        <div class="content-text">
                          <div>   
                            @auth
                           <a href="carteapero">
                               <box-icon class='btn-edit-carte' name='edit' class='edit-carrousel' color='white' type='solid' animation='tada'>
                               </box-icon>
                           </a>
                         @endauth
                         </div>
                          <h1>Carte des Tapas</h1>
                          <br>
                          @foreach ($carteapero as $tapas)
                          <div class='lignecarte'>
                            <div class="intitule">
                              <p class="cartetitre">{{$tapas->nom}}</p>
                              <p class="carteingredient">{{$tapas->ingredient}}</p>
                            </div>
                            <div>
                              <p class="prix">{{$tapas->prix}}€</p>
                            </div>
                          </div>
                          @endforeach
                        </div>
                        <div class="content-botao-fechar"></div>
                      </div>
                    </div>
                  </div>
                  <div class="content-index">
                    <div class="content-index-back"></div>
                    <div class="content-index-front">
                      <div class="content-index-overlay" data-index="4"></div>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <div class="content-sem-rolagem">
                    <div class="content-interne">
                      <div class="content-image"></div>
                      <div class="content-visual-inicial">
                        <h2 class="content-titulo">React</h2>
                      </div>
                      <div class="content-content">
                        <div class="content-text">Carte du Soir</div>
                        <div class="content-botao-fechar"></div>
                      </div>
                    </div>
                  </div>
                  <div class="content-index">
                    <div class="content-index-back">5</div>
                    <div class="content-index-front">
                      <div class="content-index-overlay" data-index="5">5</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
            <script src="/js/carte.js"></script>
          
          



    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endsection
