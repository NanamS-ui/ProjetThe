<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <style>
    /* Reset default margin and padding */
    body,

    h1 {
        margin: 0;
        padding: 0;
        font-family: "Pink Bloom", sans-serif;
    }

    p {
        margin: 0;
        padding: 0;

    }

    @font-face {
        font-family: 'Pink Bloom';
        src: url('../assets/Font/Pink Bloom.otf') format('opentype');
    }

    @font-face {
        font-family: 'Pantry';
        src: url('../assets/Font/Pantry.otf') format('opentype');
    }

    /* Style for the slider area */
    .slider-area {
        width: 100%;
        height: 100vh;
        /* Adjust the height as needed */
        background-size: cover;
        background-position: center;
        position: relative;
    }

    /* Style for the hero caption */
    /* Style for the hero caption */
    .hero__caption {
        position: absolute;
        top: 60%;
        /* Réglage pour décaler le texte vers le bas */
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #fff;
        font-family: Arial, sans-serif;
        margin-top: 320px;
        margin-left: 170px;
        /* Change to your desired font family */
    }

    .hero__caption h1 {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 10px;
        /* Ajout de marge en bas */
    }

    .hero__caption p {
        font-size: 1.5rem;
        margin-top: 10px;
        /* Ajout de marge en haut */
    }


    /* Responsive styles */
    @media (max-width: 768px) {
        .hero__caption {
            width: 80%;
            /* Adjust width for smaller screens */
        }

        .hero__caption h1 {
            font-size: 2rem;
            /* Adjust font size for smaller screens */
        }
    }

    /* Additional styles can be added as needed */
    </style>
</head>

<body>
    <header>
        <?php include 'headerUser.html'; ?>
    </header>

    <!-- slider Area Start-->
    <div class="slider-area" style="background-image: url('../assets/home.jpg');">
        <!-- Mobile Menu -->
        <div class="slider-active">
            <div class="single-slider hero-overly  slider-height d-flex align-items-center"
                data-background="../assets/home.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="hero__caption">
                                <h1>Welcome <span>Tea Agency!</span> </h1>
                                <p>Your best tea production</p>
                            </div>
                        </div>
                    </div>
                    <!-- Search Box -->
                </div>
            </div>
        </div>
    </div>

    <footer>
        <?php include 'footer.html'; ?>
    </footer>
</body>

</html>