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
                Editions
            </h1>
        </div>
    </div>
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
    <div class="container-fluid">
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
    <br>
    @include('partials.fr.footerFr')
</body>
</html>