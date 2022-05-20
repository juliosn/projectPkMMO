<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
    if(isset($_GET['opcao']) == FALSE ) 
    { 
      echo "PokeMMO";
    } elseif($_GET['opcao'] == 2){
      echo "PokeMMO - About";
    }elseif($_GET['opcao'] == 3){
      echo "PokeMMO - Downloads";
    }elseif($_GET['opcao'] == 4){
      echo "Pokemmo - Account";
    }else{
      echo "Página não encontrada";
    } ?></title>
    <link rel="icon" type="image/x-icon" href="img/será.ico"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      .dropdown-item:hover{
        background-color: #ffd45e;
      }
      .dropdown:hover .dropdown-menu{
        display: block;
      }
      .fa {
      padding: 20px;
      font-size: 30px;
      text-align: center;
      text-decoration: none;
      margin: 5px 2px;
      width: 60px;
      border-radius: 50%;
      }
      .fa:hover {
          opacity: 0.7;
      }
      .fa-facebook {
        background: #072a47;
        color: white;
      }
      .fa-twitter {
        background: #072a47;
        color: white;
      }
      .fa-instagram {
        background: #072a47;
        color: white;
      }
      .fa-reddit {
        background: #072a47;
        color: white;
      }
       .column#caption {
      position: relative;
      }
      .column#caption .text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 10;
        opacity: 0;
        transition: all 0.8s ease;
      }
      .column#caption .text h1 {
        margin: 0;
        color: whitesmoke;
      }
      .column#caption:hover .text {
        opacity: 1;
      }
      .column#caption:hover img {
        filter: sepia(65%);
        -webkit-filter: sepia(65%);
      }
      .btn {
      background-color: rgb(255, 108, 55);
      border: none;
      color: white;
      padding: 12px 30px;
      cursor: pointer;
      font-size: 20px;
      }
      .btn:hover {
        background-color: orangered;
        color: rgb(177, 177, 177);
      }
    </style>
  </head>
<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-light" style="background-color: rgb(7, 41, 71);">
          <a class="navbar-brand" href="index.html" target="_self">
            <img src="img/será.png" width="60" height="60" class="d-inline-block" style="margin-left: 5%">
            <img src="./img/texto.png" style="margin-left: 10%;">
           </a>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #072a47;">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav" style="margin-left: 5%">
              <li class="nav-item active">
                <a class="nav-link" style="font-family: 'Franklin Gothic Medium'" href="index.php" target="_self">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a style=" font-family: 'Franklin Gothic Medium'" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sobre
                </a>
                <div class="dropdown-menu" style="background-color: #f1b716;" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" style="font-family: 'Franklin Gothic Medium';" href="index.php?opcao=2" target="_self">O Jogo</a>
                  <a class="dropdown-item" style="font-family: 'Franklin Gothic Medium';" href="index.php?opcao=3" target="_self">Download</a>
                  <a class="dropdown-item" style="font-family: 'Franklin Gothic Medium';" href="index.php?opcao=4" target="_self">Conta</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col">
          &nbsp;
      </div>
    </div>

    <?php if(isset($_GET['opcao']) == FALSE){ ?>
        <div class="row">
            <div class="col">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="img/index/c01.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="img/index/c02.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="img/index/c03.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>
            </div>

            <div class="row">
            <div class="col">
                &nbsp
            </div>
            </div>

            <div class="row">
            <div class="col" style="text-align: left;">
                <figure class="figure">
                <a href = "index.php?opcao=2" class = "column" id = "caption" target="_self">
                    <span class = "text">
                        <h1>O Jogo</h1>
                    </span>
                    <img src = "img/index/f01.png" class="figure-img img-fluid rounded" alt="Imagem de uma batalha do jogo" style="height: 225px; width: 500px;" >
                </a>
                <figcaption class="figure-caption">Bem-vindo(a) a uma nova era de lutas de monstros online.</figcaption>
                </figure>
            </div>
            <div class="col" style="text-align: center;">
                <figure class="figure">
                <a href = "index.php?opcao=3" class = "column" id = "caption" target="_self">
                    <span class = "text">
                        <h1>Download</h1>
                    </span>
                    <img src = "img/index/f02.png" class="figure-img img-fluid rounded" alt="Imagem em que vários jogadores estão reunidos com o mesmo pokémon." style="height: 225px; width: 500px;" >
                </a>
                <figcaption class="figure-caption">Ele é MMO(Massively Multiplayer Online), ou seja, multiplayer. </figcaption>
                </figure>
            </div>
            <div class="col"  style="text-align: right;">
                <figure class="figure">
                <a href = "index.php?opcao=4" class = "column" id = "caption" target="_self">
                    <span class = "text">
                        <h1>Conta</h1>
                    </span>
                    <img src = "img/index/f03.png" class="figure-img img-fluid rounded" alt="Imagem em que vários jogadores estão reunidos." style="height: 225px; width: 500px;" >
                </a>
                <figcaption class="figure-caption">Então, pare de jogar sozinho e venha jogar com a gente!</figcaption>
                </figure>
            </div>
            </div>
            <p>
            &nbsp;
            </p>
            
    <?php } elseif($_GET['opcao'] == 2){ ?>
        <div class="row">
                <div class="col">
                    <img src="img/sobre_o_jogo/col 1.png" class="d-block w-100">
                    <br>
                    <h3 style="font-weight: bold; font-style: italic; text-align: center;">PokeMMO</h3>
                    <h5 style="font-size: 17.5px; font-style:oblique;">
                      PokéMMO: O universo de Pokémon em modo online
                    </h5>
                    <br>
                    <p style="text-align: justify;">PokéMMO é sem sombra de dúvidas uma das melhores versões online disponíveis do universo Pokémon. O jogo permite que o jogador jogue qualquer uma das versões. Funcionando depois, como qualquer outro jogo da série Pokémon, com a vantagem de ter um modo online similar a qualquer outro MMO (Massive Multiplayer Online).
                    </p>
                    <p style="text-align: justify;">
                      Esta versão fan made de Pokémon, e por isso mesmo susceptível a desaparecer do mapa, literalmente, se a Nintendo assim quiser, trás algo que há muito tempo é pedido pelos fãs da série. Um verdadeiro modo online.
                    </p>
                    <p style="text-align: justify;">
                      Começar a jogar é extremamente fácil, a parte menos imediata é a procura dos ROM’s, que não são fornecidos pelo PokéMMO, mas depois disso o processo corre sem problemas. Dado que utilizei o ROM do Pokémon Black & White, comecei a minha jornada em Nuvema Town, a partir de onde a história flui naturalmente, como se do jogo normal se tratasse.
                    </p>
                    <p style="text-align: justify;">
                      Começamos por criar a nossa personagem, seguido do nosso rival, falamos com a Professora Juniper, escolhemos o pokémon, fazemos a primeira batalha e depois disso… Somos livres de seguir a história original ou a nossa própria história. Criar parties, entrar em torneios, batalhar com outros jogadores, e claro, trocar pokémons.
                    </p>
                </div>

                <div class="col">
                  <h3 style="text-align: center; font-size: 30px; text-shadow: 2px 1px rgb(233, 193, 18); font-style: bold;">
                    Saiba mais:
                  </h3>
                  <p>
                    <!--Espaço em branco-->
                  </p>
                  <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne"
                        style="background-color: rgb(255, 160, 0);">
                          Trailer
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body" style="text-align: center;">
                            <iframe style="text-align: center;" width="550" height="400" src="https://www.youtube.com/embed/2UJnjYXu5x4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <figure class="text-end">
                              <blockquote class="blockquote">
                                </blockquote>
                              <figcaption class="blockquote-footer">
                                Vídeo produzido em 2016
                              </figcaption>
                            </figure>
                            <p>
                              &nbsp;
                            </p>
                            <p>
                             <strong>
                               <h4 style="text-align: center;">
                                Confira abaixo as todas regiões do jogo:
                               </h4>
                            </strong>  
                            </p>  
                            <p>
                              &nbsp;
                            </p>
                        </div>
                      </div>
                    </div>

                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo"
                            style="background-color: rgb(255, 170, 0);">
                              Kanto
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body" style="text-align: justify;">
                              <strong>
                                (OBS.: Para jogar esta região, você precisará de uma ROM de Pokémon FireRed/LeafGreen)
                              </strong> <br>
                              <p>
                                Kanto é a primeira região do universo Pokémon e nas populares séries, jogos e animes. Foi então seguido por Johto, Hoenn, Sinnoh, Unova, Kalos, Alola e Galar. É modelado e nomeado em homenagem à região de Kantō no Japão, que inclui, entre outras cidades, a capital Tōkyō, onde o Game Freak está  sediado.                             
                              </p>
                              <p>
                                &nbsp;
                              </p>
                              <img src="img/sobre_o_jogo/col 2 - 1.png" width="100%" height="100%">
                              <figure>
                                <blockquote class="blockquote">
                                </blockquote>
                                <figcaption class="blockquote-footer">
                                  Foto tirada em Vermilion, uma cidade em Kanto.  
                                </figcaption>
                              </figure>
                              <p>
                                <!--Espaço em branco-->
                              </p>
                              <p>
                                Kanto é o único que compartilha seu nome com uma localização do mundo real. A semelhança entre as formações da baía vistas no mapa do jogo e as formações reais da Baía de Sagami, Suruga e Da Baía de Tóquio é particularmente impressionante. Kanto também tem alguns elementos de Chūbu.
                              </p>  
                              <p>
                                &nbsp;
                              </p>

                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree"
                            style="background-color: rgb(255, 180, 0);">
                              Hoenn
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                              <strong>
                                (OBS.: Para jogar esta região, você precisará de uma ROM de Pokémon Emerald)
                              </strong> <br>
                              <p>
                                Hoenn é baseado na ilha de Kyūshū no Japão e fica a sudoeste de Kanto e Johto no mundo Pokémon. É a primeira das duas Regiões marítimas, a outra é Alola. De acordo com a lenda de Pokémon, a região de Hoenn foi formada pelo Lendário Continente Pokémon, Groudon levantando a terra e o Lendário Pokémon da Bacia marítima, Kyogre, expandindo o mar.
                              </p>
                              <p>
                                &nbsp;
                              </p>
                              <img src="img/sobre_o_jogo/col 2 - 2.png" width="100%" height="100%">
                              <figure>
                                <blockquote class="blockquote">
                                  </blockquote>
                                <figcaption class="blockquote-footer">
                                  Foto tirada em Rustboro, uma cidade em Hoenn.  
                                </figcaption>
                              </figure>
                              <p>
                                <!--Espaço em branco-->
                              </p>
                              <p>
                                A região de Hoenn contém sua própria Liga Pokémon chamada Hoenn League, e sua própria Elite Four, ao contrário de Johto e Kanto, que compartilham sua Elite Four nos videogames. As rotas em Hoenn estão numeradas de 101 a 134 e não seguem sequencialmente a partir de rotas em Kanto-Johto, que foram numeradas de 1 a 48.
                              </p>  
                              <p>
                                &nbsp;
                              </p>

                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour"style="background-color: rgb(255, 190, 0);">
                              Sinnoh
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                            <div class="accordion-body">
                              <strong>
                                (OBS.: Para jogar esta região, você precisará de uma ROM de Pokémon  Platinum)
                              </strong> <br>
                              <p>
                                Sinnoh é a quarta região da Série Pokémon e é o cenário dos jogos da Nintendo DS Pokémon Diamond, Pearl, Platinum, bem como seus remakes do Nintendo Switch Brilliant Diamond e Shining Pearl e o jogo prequel Legends: Arceus, onde era conhecido como Hisui durante os tempos antigos. É também o cenário da série Diamante e Pérola do anime.
                              </p>
                              <p>
                                &nbsp;
                              </p>
                              <img src="img/sobre_o_jogo/col 2 - 3.jpg" width="100%" height="100%">
                              <figure>
                                <blockquote class="blockquote">
                                  </blockquote>
                                <figcaption class="blockquote-footer">
                                  Foto tirada em Jubilife, uma cidade em Sinnoh. 
                                </figcaption>
                              </figure>
                              <p>
                                <!--Espaço em branco-->
                              </p>
                              <p>
                                Como as regiões anteriores nos jogos anteriores, Sinnoh apresenta uma ampla gama de ambientes para o personagem do jogador explorar. A região é montanhosa e temperada; pela primeira vez em um RPG Pokémon, ele apresenta rotas de neve.
                              </p>  
                              <p>
                                &nbsp;
                              </p>

                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive" style="background-color: rgb(255, 196, 0);">
                              Unova
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                            <div class="accordion-body">
                              <strong>
                                (OBS.: Para jogar esta região, você precisará de uma ROM de Pokémon Black/White)
                              </strong> <br>
                              <p>
                                Unova é a quinta região principal da série e é o cenário de Pokémon Black and White e Pokémon Black and White Versions 2. Ao contrário das regiões anteriores, que eram baseadas em diferentes ilhas ao redor do Japão, Unova foi baseada em uma área que abrange 3 Estados americanos: Virgínia, Nova York e Pensilvânia. Esta terra está distante de todas as outras regiões conhecidas atualmente e, portanto, tem pokémons diferentes.
                              </p>
                              <p>
                                &nbsp;
                              </p>
                              <img src="img/sobre_o_jogo/col 2 - 4.png" width="100%" height="100%">
                              <figure>
                                <blockquote class="blockquote">
                                  </blockquote>
                                <figcaption class="blockquote-footer">
                                  Foto tirada em Village Bridge, uma ponte em Unova. 
                                </figcaption>
                              </figure>
                              <p>
                                <!--Espaço em branco-->
                              </p>
                              <p>
                                Para quem não tem jogado os outros jogos, esse fato pode ser confuso. Tem uma paisagem incrivelmente variada; com duas cadeias de montanhas, áreas florestais, pântanos e um deserto espalhado por suas ilhas. O mapa de Unova tem dezenove grandes assentamentos, trinta e um locais de interesse e vinte e três rotas marcadas nele.
                              </p>  
                              <p>
                                &nbsp;
                              </p>

                            </div>
                          </div>
                        </div>
                  </div>
            </div>
            <p>
              &nbsp;
            </p>
    <?php }elseif($_GET['opcao'] == 3){ ?>
        <div class="row">
                <div class="col">
                  <h3 style="font-weight: bold; font-style: italic; text-align: center;">Tutorial de instalação:</h3>
                  <br>
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/45hTn6IRSmA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    
                  <p>
                    &nbsp;
                  </p>
                    <h3 style="text-align: center;">
                      <strong>
                        Créditos:
                      </strong>
                    </h3>
                    <h5>
                      <strong>
                        Autor do vídeo:
                      </strong> 
                      Takkiry <br>
                      <strong>
                        Link do canal:
                      </strong>  
                      <a href="https://www.youtube.com/channel/UCTEOqnPlfS9FQvLJUNBwqQA  
                      "> Aqui</a>
                    </h5>
                    <p>
                      &nbsp;
                    </p>
                </div>

                <div class="col">
                  <h3 style="text-align: center; font-size: 30px; text-shadow: 2px 1px rgb(233, 193, 18); font-style: bold;">
                    Arquivos:
                  </h3>
                  <p>
                    <!--Espaço em branco-->
                  </p>
                      <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne"
                            style="background-color: rgb(255, 140, 0);">
                              <strong>(Observações:)</strong>
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body" style="text-align: justify; background-color: #e6e6e6;">
                              <p style="font-style: italic;">
                                  A única ROM obrigatória é a de <strong>Pokémon Black/White</strong> 
                                  <br><br>
                                  A ROM de <strong>Pokémon HeartGold/SoulSilver</strong> é para melhoria gráfica 
                                  <br><br>
                                  Com as ROMs de <strong>Pokémon Emerald, Fire Red e Platinum</strong>, você poderá jogar as regiões de Hoenn, Kanto e Sinnoh, respectivamente.
                              </p>   
                            </div>
                          </div>
                        </div>  
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo"
                            style="background-color: rgb(255, 180, 0);">
                              Instaladores:
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body" style="text-align: justify; background-color: #e6e6e6;">
                              <h4 style="font-style: italic;">Windows:</h4>
                                <a href="downloads/pokemmo-installer-windows-x64.exe">
                                  <button class="btn">64-BIT (Recomendado)</button>
                                </a>
                                <br> <br>
                                <a href="downloads/pokemmo-installer-windows-x32.exe">
                                  <button class="btn">32-BIT (Para computadores antigos)</button>
                                </a>
                              <p>
                                &nbsp;
                              </p>
                              <h4 style="font-style: italic;">Android: </h4>
                              <a href="downloads/PokeMMO-Client.apk">
                                <button class="btn">Download - APK</button>
                              </a>
                              <p>
                                &nbsp;
                              </p>
                              <h4 style="font-style: italic;">MAC: </h4>
                              <a href="downloads/PokeMMO-v41.dmg">
                                <button class="btn">Download - DMG</button>
                              </a>
                                 
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree"
                            style="background-color: rgb(255, 190, 0);">
                              ROMs:
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                              <h4 style="font-style: italic;">Pokémon Black & White:</h4>
                              <a href="https://drive.google.com/file/d/1sIrO6hNH21RK57ggOrK-0i79EZqY-Tfw/view?usp=sharing" target="_blank">
                                <button class="btn">Black version</button>
                              </a>
                              <br> <br>
                              <a href="https://drive.google.com/file/d/1eZuzbaIXe5ApBfRLTxa1g1o_GCIN7BAf/view?usp=sharing" target="_blank">
                                <button class="btn">White version</button>
                              </a>
                              <p>
                                &nbsp;
                              </p>
                              <h4 style="font-style: italic;">Pokémon HeartGold & SoulSilver:</h4>
                              <a href="https://drive.google.com/file/d/1Jyb3DuMLKAzQ6OcGtnWOeVK7YnmC3YMx/view?usp=sharing" target="_blank">
                                <button class="btn">HeartGold version</button>
                              </a>
                              <br> <br>
                              <a href="https://drive.google.com/file/d/1nk7i3Co6eHglb4uFYRJMTTzDxRXk6tsF/view?usp=sharing" target="_blank">
                                <button class="btn">SoulSilver version</button>
                              </a>
                              <p>
                                &nbsp;
                              </p>
                              <h4 style="font-style: italic;">Pokémon Emerald:</h4>
                              <a href="https://drive.google.com/file/d/1Pg11Jbsu-NZccZumkpn-D-CRBivatm2K/view?usp=sharing" target="_blank">
                                <button class="btn">Emerald version</button>
                              </a>
                              <p>
                                &nbsp;
                              </p>
                              <h4 style="font-style: italic;">Pokémon Fire Red:</h4>
                              <a href="https://drive.google.com/file/d/1ieKonf_ow6qjgRdgARcK4yiec-UVM04d/view?usp=sharing" target="_blank">
                                <button class="btn">Fire Red version</button>
                              </a>
                              <p>
                                &nbsp;
                              </p>
                              <h4 style="font-style: italic;">Pokémon Platinum:</h4>
                              <a href="https://drive.google.com/file/d/1aVwtniO7V1mEvtOxWwoWOUPmGfqYqfDH/view?usp=sharing" target="_blank">
                                <button class="btn">Platinum version</button>
                              </a>
                              <p>
                                &nbsp;
                              </p>
                              
                            </div>
                          </div>
                        </div>

                  </div>
            </div>
            <p>
              &nbsp;
            </p>
    <?php }elseif($_GET['opcao'] == 4){ ?>
        <div class="row">
      <div class="col">
        <img src="./img/conta/c1.png" class="d-block w-100">
        <br>
        <h3 style="font-weight: bold; font-style: italic; text-align: center;">PokeMMO - Contas:</h3>
        <br>
        <p style="text-align: justify;">
          <strong>
            Em PokéMMO, o seu cadastro é feito no site, e o seu login apenas será exigido
            no jogo em si. Então, após o cadastro, confirme o registro no email colocado e assim você poderá realizar
            o login e desfrutar do nosso jogo!       
          </strong>
        </p>
        <p>&nbsp;</p>
      </div>

      <div class="col">
        <h3 style="text-align: center; font-size: 30px; text-shadow: 2px 1px rgb(233, 193, 18); font-style: bold;">
          Conta:
        </h3>
        <p>
          <!--Espaço em branco-->
        </p>
        <div class="accordion" id="accordionPanelsStayOpenExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                aria-controls="panelsStayOpen-collapseOne" style="background-color: rgb(255, 170, 0);">
                Crie uma nova conta:
              </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
              aria-labelledby="panelsStayOpen-headingOne">
              <div class="accordion-body" style="text-align: justify;">
                <form>
                  <div class="mb-3">
                    <label>Nome de usuário:</label>
                    <input type="text" class="form-control" aria-describedby="usernameHelp" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Senha:</label>
                      <input type="password" id="password" class="form-control" aria-describedby="passwordHelpBlock" required>
                  </div>
                  <button type="submit" class="btn btn-primary" style="background-color: orangered">Registre-se</button>
                </form>

              </div>
            </div>
          </div>
            </div>
      </div>
      <p>
        &nbsp;
      </p>
      <?php }else{ ?>
        <p>Conteúdo não identificado</p>
      <?php } ?>
    <footer class="w-100 py-1 flex-shrink-0" style="background-color: #072a47;">
      <div class="container py-3">
          <div class="row gy-3">
            <section class="mb-lg-3" style="text-align: center;">
              <div>
                <a class="fa fa-facebook" href="https://www.facebook.com/PokeMMORPG" role="button" target="_blank"></a>
                <a class="fa fa-twitter" href="https://twitter.com/pokemmo" role="button" target="_blank"></a>
                <a class="fa fa-instagram" href="https://www.instagram.com/pokemmo_official/" role="button" target="_blank"></a>
                <a class="fa fa-reddit" href="https://reddit.com/r/pokemmo" role="button" target="_blank"></a>  
              </div>
              </section>
          </div>
          <div class="row gy-4 gx-5" style="justify-content: center;">
              <div class="col-lg-4 col-md-6"> 
                  <p class="small text-muted mb-0" style="font-style: italic;">
                    PokeMMO não é afiliado ou associado a nenhuma outra empresa.
                    Todos os logotipos, marcas registradas e nomes comerciais usados ​​aqui são de propriedade de seus respectivos proprietários. <br><br>

                    &copy; Copyright 2022. Todos os direitos reservados. <a class="text-primary" href="index.html">pokemmo.com</a></p>
              </div>
              <div class="col-lg-2 col-md-6">
                  <h5 class="text-white mb-3">
                    Políticas de uso:
                  </h5>
                  <ul class="list-unstyled text-muted">
                      <li>
                        <a href="https://pokemmo.eu/video_policy/" target="_blank">Vídeo</a>
                      </li>
                      <li>
                        <a href="https://pokemmo.eu/privacy_policy/" target="_blank">Privacidade</a>
                      </li>
                      <li>
                        <a href="https://pokemmo.eu/code_of_conduct/" target="_blank">CDD</a>
                      </li>
                      <li><a href="https://pokemmo.eu/tos/" target="_blank">TOS</a>
                      </li>
                  </ul>
              </div>
              <div class="col-lg-4 col-md-6">
                  <p class="small text-muted" style="font-style: italic;">
                    PokeMMO is not affiliated or associated with any other company.
                    All logos, trademarks, and trade names used herein are the property of their respective owners. 
                    <br><br>
                    &copy; Copyright 2022. All rights reserved. <br>
                    <a class="text-primary" href="index.html">pokemmo.com</a>
                  </p>
              </div>
          </div>
      </div>
    </footer>
   
</body>
</html>