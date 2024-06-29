<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <!-- build:css css/styles.min.css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- endbuild -->
    <!-- Fonts -->

</head>

<body>
    <!-- build:js js/main.min.js -->
    <script type="module" src="js/main.js"></script>
    <script type="module" src="js/lib/show-remove.js"></script>
    <script type="module" src="js/lib/header.js"></script>
    <script type="module" src="js/lib/burger.js"></script>
    <!-- endbuild -->
    <div class="wrapper">
    <?php 
    include 'header.html'
    ?>
    
    <main>
        <div class="container">
            <div class="columns row row-cols-lg-3 row-cols-sm-1 justify-content-between ">
                <div class="columns__column column col-sm col-md-5 gx-4 gy-4">
                    <div class="column__inner">
                        <div class="column__number">1</div>
                        <ul class="column__list">
                            <li>text 1</li>
                        </ul>
                        <a href="" class="column__button">Button</a>
                    </div>
                </div>
                <div class="columns__column column col-sm col-md-5 gx-4 gy-4">
                    <div class="column__inner">
                        <div class="column__number">2</div>
                        <ul class="column__list">
                            <li>text 1</li>
                            <li>text 2</li>
                        </ul>
                        <a href="" class="column__button">Button</a>
                    </div>
                </div>
                <div class="columns__column column col-12 gx-4 gy-4">
                    <div class="column__inner">
                        <div class="column__number">3</div>
                        <ul class="column__list">
                            <li>text 1</li>
                            <li>text 2</li>
                            <li>text 3</li>
                        </ul>
                        <a href="" class="column__button">Button</a>
                    </div>
                </div>
            </div>
            <div id="carouselContainer" class="carousel-container d-none d-md-block">
                <div id="carouselExample" class="carousel slide d-block">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./images/cozy-home.webp" class="d-block w-100 h-100 carousel-image" alt="Slide 1">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/forest-landscape.jpg" class="d-block w-100 h-100 carousel-image" alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/peak-autumn-sunset.jpg" class="d-block w-100 h-100 carousel-image" alt="Slide 3">
                        </div>
                    </div>
                    <button class="carousel__custom-control carousel__custom-control--prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <img src="./images/right-arrow.svg" alt="Previous slide" class="carousel__arrow carousel__arrow--backwards">
                    </button>
                    <button class="carousel__custom-control carousel__custom-control--next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <img src="./images/right-arrow.svg" alt="Next slide" class="carousel__arrow">
                    </button>

                </div>
                <button id="carouselRemove" class="carousel-button carousel-button--remove" type="button">remove</button>
                <button id="carouselShow" class="carousel-button carousel-button--show" type="button">show</button>
            </div>
            <div class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis amet maxime voluptatem inventore neque, deserunt ut assumenda ducimus cum a autem repellendus ad. Expedita distinctio ullam perspiciatis voluptatum ratione, exercitationem, numquam magnam autem repellendus, possimus non incidunt quibusdam suscipit cumque quae? Est rerum mollitia iusto? Error, soluta? Labore incidunt at consequuntur maiores asperiores ipsum rem voluptatum tempora quidem ipsam assumenda esse odio nihil omnis excepturi nam tenetur, doloremque, explicabo voluptate quis adipisci! Reiciendis iste omnis, blanditiis voluptas inventore dolore ducimus natus consequatur vel voluptatum laborum laudantium architecto cupiditate ipsam maiores soluta quas consectetur. Molestias, nobis facere. Ab nulla dolor illum, repellendus atque nisi eius mollitia, non, suscipit officiis dolores ad veniam! Repellendus molestias in odit quod iure minima commodi ullam.
            </div>

        </div>

    </main>
    <?php
    include 'footer.html'
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" type="module" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>