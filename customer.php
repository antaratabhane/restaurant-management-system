<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body{
            background-color: #F2EDD7;
            color: #755139;
        }
        .greeting-font{
            font-family:'Times New Roman', Times, serif;
        }
        .rounded-corner{
            border-radius: 30px;
        }
        .rounded-carousel{
            border-radius: 25px;
        }
    </style>
</head>
<body>
    <div class="container-fluid navbar navbar-expand-lg">
        <a class="navbar-brand d-flex">
            <div class="fs-3 fw-bold mt-1 ms-3">
                <img src="grace_logo.jpg" style="height: 60px; width: 140px;">
            </div>
        </a>
        <ul class="navbar-nav ms-auto me-3">
            <button class="btn me-5 type-button" id="submit_button" style="background-color: #755139; color: #F2EDD7;" onclick="window.location.href='contact_help.php'">Contact & Help</button>
        </ul>
    </div>

    <div class="fluid-container content pt-2 text-center pb-4">
        <div class="display-6  greeting-font text-center mb-4">Grace — Brewed with elegance!</div>
        <div id="demo" class="carousel slide bg-dark mx-auto mb-3 rounded-carousel" data-bs-ride="carousel" style="height: 70%; width: 100%">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="carousel/carousel_image1.png" class="d-block w-100 rounded-carousel" style="height: 100%">
                </div>
                <div class="carousel-item">
                <img src="carousel/carousel_image2.png" class="d-block w-100 rounded-carousel" style="height: 100%">
                </div>
                <div class="carousel-item">
                <img src="carousel/carousel_image3.png" class="d-block w-100 rounded-carousel" style="height: 100%">
                </div>
            </div>
        
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
     
    <div class="fluid-container pt-2 pb-2">
        <div class="row">
            <div class="col-sm d-flex justify-content-end">
                <a href="menu.php" class="greeting-font text-decoration-none fw-bold fs-2" style="color: #F2EDD7;">
                <div style="height: 150px; width: 250px; background-color: #755139;" class="me-5 rounded-corner d-flex justify-content-center align-items-center">
                    Menu 
                </div>
                </a>
            </div>

            <div class="col-sm">
                <a href="vacancy.php" class="greeting-font text-decoration-none fw-bold fs-2" style="color: #F2EDD7;">
                <div style="height: 150px; width: 250px; background-color: #755139;" class="ms-5 rounded-corner  d-flex justify-content-center align-items-center">
                    Vacancy
                </div>
                </a>
            </div>
        </div>
    </div>

    <div class="fluid-container text-center pb-3 pt-3" style="font-size: 1rem;">© 2025 GRACE Coffee Shop. All rights reserved. Crafted with love and caffeine.</div>
</body>
</html>