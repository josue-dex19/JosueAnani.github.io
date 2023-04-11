<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/evolventa" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/09bfc2dee5.js" crossorigin="anonymous"></script>    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>

<body>
@include('partials.fr.navFr')
       <div class="container">
        <div class="container ps">
            <div>
                <h1>Lorem Ipsum</h1>
                <h1>Connecting</h1>
                <h1>the world</h1>
            </div>
            <p id="text">Lorem ipsum dolor sit amet
                consectetur. In tellus tincidunt in
                sapien cursus. Tristique at lorem
                neque nibh elementum. Nibh turpis
                pharetra massa quis erat interdum
                dolor diam.</p>
           </div>
       </div>
       
    <br>
    <br>
    <div class="container js"></div>
    <br>
    <div class="container text-center">
        <p>
            <h1>Our big</h1>
        <h1>challenge is</h1>
        <h1> small problems</h1>
        </p>
    </div>
    <br>
    <div id="textTwo">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, impedit maiores voluptatem nemo non assumenda inventore labore accusantium provident deserunt fugiat facilis! Expedita iste maiores molestiae! Voluptas atque repudiandae cumque.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis eos ducimus cupiditate, itaque fuga similique eum expedita corporis ipsa provident aliquid corrupti eius inventore numquam labore dolores quod quis. Maxime.</p>
    </div>
    <br>
    <div class="container" id="edition">
        <h1>
            Watch our editions
        </h1>
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-1"></div>
            <div class="col-md-5"></div>
        </div>
    </div><br>
    <div class="container" id="avantLast">
        <h1>Lorem Ipsum dolor
            </h1>
            <h1>sit amet consectur</h1>
            <br>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis temporibus aliquam earum impedit incidunt voluptatibus sint, atque eligendi maxime blanditiis totam nobis perferendis praesentium numquam illum nemo tenetur enim est. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet eos magnam accusantium rerum perferendis cumque, consequuntur molestiae perspiciatis quis vitae saepe quos, maiores fuga optio explicabo veritatis ipsum quae itaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident hic modi suscipit iusto eos voluptatibus sit corporis nihil quis fugiat. Praesentium enim nostrum tempora ut facere sapiente quos neque placeat?</p>
    </div>
    <br>
    @include('partials.fr.footerFr')
</body>

</html>