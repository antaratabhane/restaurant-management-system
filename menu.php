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
            font-family:'Times New Roman', Times, serif;
        }
    </style>
</head>
<body class="fs-5">
    <div class="fluid-container navbar navbar-expand-lg navbar-dark">
        <ul class="navbar-nav pt-2 ms-3 fw-bold pb-1">
            <li class="nav-item"><a class="nav-link fs-5" style="color: #755139;" href="menu.php">Coffee</a></li>
            <li class="nav-item"><a class="nav-link fs-5" style="color: #755139;" href="desert.php">Desert</a></li>
        </ul>
        <div class="d-flex justify-content-end w-100">
            <a href="orders.php" class="btn me-5 type-button text-decoration-none fw-bold" id="submit_button" style="background-color: #755139; color: #F2EDD7;">Check Order</a>
        </div>
    </div>

    <div class="container mt-2 h-100" style="width: 95%;">
        <div class="row ms-3">
            <div class="col-md-3">
                <div class="card mt-5" style="border-radius: 11%; width: 83%; background-color: #755139; color: #F2EDD7; border: 2px solid #755139;" data-name="Expresso" data-amount="230"> 
                    <img src="img_cards/Espresso Coffee Recipe - Edited.jpg" class="card-img-top" style="height: 200px; border-radius: 13%;">
                    <div class="card-body fw-bold" style="border-top: 2px solid #F2EDD7; border-bottom: 2px solid #F2EDD7;">Expresso</div>
                    <div class="card-footer fw-bold">₹230.00</div>
                </div>
            </div>
            <div class="col-md-3 mt-5">
                <div class="card" style="border-radius: 11%; width: 83%; background-color: #755139; color: #F2EDD7; border: 2px solid #755139;" data-name="Americano" data-amount="270">
                    <img src="img_cards/719ce638-94ac-4b3e-aa15-bc482875b215.jpg" style="height: 200px; border-radius: 13%" class="card-img-top">
                    <div class="card-body fw-bold" style="border-top: 2px solid #F2EDD7; border-bottom: 2px solid #F2EDD7;">Americano</div>
                    <div class="card-footer fw-bold">₹270.00</div>
                </div>
            </div>
            <div class="col-md-3 mt-5">
                <div class="card" style="border-radius: 11%; width: 83%; background-color: #755139; color: #F2EDD7; border: 2px solid #755139;" data-name="Latte" data-amount="220">
                    <img src="img_cards/d7a6150f-5ea6-4cc2-9bc1-00654b83b477.jpg" style="height: 200px; border-radius: 13%" class="card-img-top">
                    <div class="card-body fw-bold" style="border-top: 2px solid #F2EDD7; border-bottom: 2px solid #F2EDD7;">Latte</div>
                    <div class="card-footer fw-bold">₹220.00</div>
                </div>
            </div>
            <div class="col-md-3 mt-5">
                <div class="card" style="border-radius: 11%; width: 83%; background-color: #755139; color: #F2EDD7; border: 2px solid #755139;" data-name="Cappuccino" data-amount="200">
                    <img src="img_cards/f34d1ebf-a9cc-4344-9f17-04c4a741be20.jpg" style="height: 200px; border-radius: 13%" class="card-img-top">
                    <div class="card-body fw-bold" style="border-top: 2px solid #F2EDD7; border-bottom: 2px solid #F2EDD7;">Cappuccino</div>
                    <div class="card-footer fw-bold">₹200.00</div>
                </div>
            </div>
        </div>

        <div class="row ms-3">
            <div class="col-md-3">
                <div class="card mt-5" style="border-radius: 11%; width: 83%; background-color: #755139; color: #F2EDD7; border: 2px solid #755139;" data-name="Black Coffee" data-amount="85">
                    <img src="img_cards/download - Edited.jpg" class="card-img-top " style="height: 200px; border-radius: 13%">
                    <div class="card-body fw-bold" style="border-top: 2px solid #F2EDD7; border-bottom: 2px solid #F2EDD7;">Black Coffee</div>
                    <div class="card-footer fw-bold">₹85.00</div>
                </div>
            </div>
            <div class="col-md-3 mt-5">
                <div class="card" style="border-radius: 11%; width: 83%; background-color: #755139; color: #F2EDD7; border: 2px solid #755139;" data-name="Mocha" data-amount="299">
                    <img src="img_cards/6e262558-4589-4dc1-83a3-6ce29941d240.jpg" style="height: 200px; border-radius: 13%" class="card-img-top">
                    <div class="card-body fw-bold" style="border-top: 2px solid #F2EDD7; border-bottom: 2px solid #F2EDD7;">Mocha</div>
                    <div class="card-footer fw-bold">₹299.00</div>
                </div>
            </div>
            <div class="col-md-3 mt-5">
                <div class="card" style="border-radius: 11%; width: 83%; background-color: #755139; color: #F2EDD7;" data-name="Flat White" data-amount="235">
                    <img src="img_cards/b644f7eb-4caf-4248-8a8c-16dfcbd3dcff.jpg" style="height: 200px; border-radius: 13%" class="card-img-top">
                    <div class="card-body fw-bold" style="border-top: 2px solid #F2EDD7; border-bottom: 2px solid #F2EDD7;">Flat White</div>
                    <div class="card-footer fw-bold">₹235.00</div>
                </div>
            </div>
            <div class="col-md-3 mt-5">
                <div class="card" style="border-radius: 11%; width: 83%; background-color: #755139; color: #F2EDD7;" data-name="Espresso Shake" data-amount="250">
                    <img src="img_cards/9df9c1c2-919f-443e-bcf1-70f7a7b0ccf4.jpg" style="height: 200px; border-radius: 13%" class="card-img-top">
                    <div class="card-body fw-bold" style="border-top: 2px solid #F2EDD7; border-bottom: 2px solid #F2EDD7;">Espresso Shake</div>
                    <div class="card-footer fw-bold">₹250.00</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const cards=document.querySelectorAll(".card");
        const submit_button=document.getElementById('submit_button');
        let selected=[];
        cards.forEach(card => {
            card.addEventListener("click", () => {
                if(card.style.border == "7px solid rgb(183, 157, 127)"){
                    card.style.border="2px solid #755139";
                }
                else{
                    card.style.border="7px solid #B79D7F";
                    selected.push({
                        name: card.dataset.name,
                        amount: card.dataset.amount
                    });
                }
            });
            
        });

        submit_button.addEventListener("click", () =>{
            selected.forEach(item => {
                fetch("orders_session.php", {
                    method: "POST",
                    headers: { 
                        "Content-Type": "application/x-www-form-urlencoded"
                    },
                    body: "name=" + item.name + "&amount=" + item.amount
                })
                .then(res => res.text())
                .then(data => {
                    console.log(data);
                });
            });
            selected=[];
        });
    </script>
</body>
</html>