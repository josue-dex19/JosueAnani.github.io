<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/evolventa" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/09bfc2dee5.js" crossorigin="anonymous"></script>
    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>

<body>
@include('partials.fr.navFr')
        <header>
            
            <h1>
                Lorem Ipsum Connecting
            </h1>

            <h1>
                the world
            </h1>
            
            <p>
                Lorem ipsum dolor sit amet consectetur. In tellus tincidunt in sapien
                cursus. Tristique at lorem neque nibh elementum. Nibh turpis pharetra
                massa quis erat interdum dolor diam.
                            </p>
        
        </header>
    <div class="jumbottron">
       
        <div id="divImgBackground">
            <button >
                <i class="fa-light fa fa-arrow-down fa-2xl"></i>
            </button>
        </div>
    </div><br>
    <div class="container jumbottron">
        <ul id="cardInfo">
            <li><button></button><span>Info 1</span></li>
            <li><button></button><span>Info 2</span></li>
            <li><button></button><span>Info 3</span></li>
            <li><button></button><span>Info 4</span></li>
        </ul>
    </div>
    <br>
    <div class="jumbottron">
        <div class="container" id="winnerHead">
            <div id="textTitreWinner">
                <h1>Winners</h1>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis mollitia nemo cumque omnis magnam, animi, fugit, molestiae rem corrupti voluptate laborum commodi recusandae porro similique fugiat. Corporis voluptatem sunt ratione.</p>
            </div>
            <div id="btnWinner"><button>Winners</button></div>
        </div>
    </div>
    <div class="jumbottron container-fluid" >
            <div class="row">
                <div class="col-md-8" id="black">
                    <div class="container" >
                        <h1>Winner 1</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, iste mollitia iusto nemo veroLorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, iste mollitia iusto nemo vero</p>
                        
                    </div>
                    <br>
                    <div class="container">
                        <h1>Winner 2</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, iste mollitia iusto nemo veroLorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, iste mollitia iusto nemo vero</p>
                        
                    </div>
                    <br>
                    <div class="container">
                        <h1>Winner 3</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, iste mollitia iusto nemo veroLorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, iste mollitia iusto nemo vero</p>
                        
                    </div>
                    <br>
                </div>
                <div class="col-md-4" id="divImg"></div>
            </div>
    </div>
    <div class="container-fluid" id="bannierCouleur">
        <div class="text-center">
            <h2>Lorem Ipsum</h2>
            <h2>dolor sit amet consectur</h2>
        </div>
    </div>
    <br>
    <br>
    @include('partials.fr.footerFr')
</body>

</html>