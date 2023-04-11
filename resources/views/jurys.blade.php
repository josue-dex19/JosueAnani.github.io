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
    @include('partials.en.nav')
    <div class="container-fluid">
        <div class="text-center" id="juryHeader">
            <h1>
                Lorem Ipsum dolor <br>
                sit amet consectur
            </h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit blanditiis illo facere similique
                minus, cum! Suscipit blanditiis illo facere similique minus, cum! Suscipit blanditiis illo facere
                similique minus, cum!
            </p>
        </div>
        <br>
    </div>
    <div class="container-fluid" style="background-color: #FF6066">
        <div id="conclusion">
            <h1>
                Lorem Ipsum dolor <br>
                sit amet consectur
            </h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit blanditiis illo facere similique
                minus, voluptatibus maxime esse ea id, est doloribus quos consequatur illum qui voluptatum enim quo
                asperiores accusamus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, sed soluta tempora
                recusandae nobis eum. Qui adipisci id ratione, consequatur saepe ipsum, veritatis blanditiis sint
                suscipit vitae recusandae? Unde, cum!
            </p>
        </div>

        <div class="container text-center my-3">
            <div class="row mx-auto my-auto justify-content-center ">
                <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4 mx-2">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="images/download.png" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4 mx-2">
                                <div class="card">
                                    <div class="card-img"> <img src="images/download.png"
                                            class="img-fluid"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4 mx-2">
                                <div class="card">
                                    <div class="card-img"> <img src="images/download.png"
                                            class="img-fluid"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4 mx-2">
                                <div class="card">
                                    <div class="card-img"> <img src="images/download.png "
                                            class="img-fluid"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4 mx-2">
                                <div class="card">
                                    <div class="card-img"> <img src="images/download.png"
                                            class="img-fluid"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4 mx-2">
                                <div class="card">
                                    <div class="card-img"> <img src="images/download.png"
                                            class="img-fluid"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div id="btnDirection">
                        <button data-bs-slide="prev" href="#recipeCarousel" role="button"><i
                                class="fas fa-arrow-left align-middle"></i> </button>

                        <div class="space"></div>
                        <button data-bs-slide="next" role="button" href="#recipeCarousel"><i
                                class="fas fa-arrow-right align-middle"></i> </button>

                    </div>
                    <br>

                </div>

            </div>

        </div>


    </div>
    <br>
    @include('partials.en.footer')
</body>

</html>
{{-- <div class="container" style="background-color: red">
    <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
    data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </a>
<a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
    data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </a>
 </div>  --}}
