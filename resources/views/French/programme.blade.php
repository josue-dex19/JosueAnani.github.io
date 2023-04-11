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
    <div class="container">
        <div class="text-center" id="titrePrograms">
            <h1>
                Awards <br>
                Programs
            </h1>
        </div>
    </div>
    <div class="container">
        <div id="textHeader">
            <div class="card w-25">
                <div class="card-body">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta nisi, nemo minima sapiente aut voluptatem quae minus placeat a quos repellat, id quo velit, officia distinctio atque quisquam! Exercitationem, rem!</p>

                </div>
            </div>
            <div class="space"></div>
            <div class="card w-50">
                <div class="card-body">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta nisi, nemo minima sapiente aut voluptatem quae minus placeat a quos repellat, id quo velit, officia distinctio atque quisquam! Exercitationem, rem!</p>

                </div>
            </div>
            <div class="space"></div>
            <div class="card w-25">
                <div class="card-body">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta nisi, nemo minima sapiente aut voluptatem quae minus placeat a quos repellat, id quo velit, officia distinctio atque quisquam! Exercitationem, rem!</p>

                </div>
            </div>
        </div>
        
    </div>
    <br>
    <div class="container" id="imgHeader">

    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6" id="imgbcg"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <p style="padding: 50px 50px 20px 50px">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad quidem sunt consectetur deleniti sint nemo minima commodi aperiam quam voluptatem praesentium placeat, enim nisi eius earum impedit dolor laborum illum.
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet, laboriosam quasi! Repudiandae consectetur accusamus quo sit neque, soluta, fuga sunt quisquam itaque quidem praesentium eum. Voluptas suscipit totam dolor? Quasi!</p>                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid" style="background-color: #FF6066">
        <div id="conclusion">
            <h1>
                Lorem Ipsum dolor <br>
                sit amet consectur
            </h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit blanditiis illo facere similique minus, voluptatibus maxime esse ea id, est doloribus quos consequatur illum qui voluptatum enim quo asperiores accusamus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, sed soluta tempora recusandae nobis eum. Qui adipisci id ratione, consequatur saepe ipsum, veritatis blanditiis sint suscipit vitae recusandae? Unde, cum!
            </p>
        </div>
    </div>
    <br>
    @include('partials.fr.footerFr')
</body>
</html>