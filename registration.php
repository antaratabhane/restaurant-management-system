<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <style>
            body{
                background-color: #F2EDD7;
            }

            .border-radius{
                border-radius: 10px;
                background-color: #755139;
                color: #F2EDD7;
            }
        </style>
    </head>
    <body class="d-flex justify-content-center align-items-center">
        <div class="container w-25 h-75 d-flex justify-content-center align-items-center border-radius">
            <form class="h-100 w-100 my-auto ps-3 pt-3" action="user_info.php" method="POST">
                <h3>Registration Form</h3>
                <label class="form-label">Username</label>
                <input class="form-control form-control w-75 mb-3" type="text" name="username">
                <label class="form-label">Email</label>
                <input class="form-control form-control w-75 mb-3" type="email" name="email">
                <label class="form-label">Contact</label>
                <input class="form-control form-control w-75 mb-3" type="tel" name="contact">
                <label class="form-label">Pasword</label>
                <input class="form-control form-control w-75 mb-3" type="password" name="unique_id" id="password">
                <label class="form-label">Confirm pasword</label>
                <input class="form-control form-control w-75 mb-4" type="password" id="confirm_password">
                <div class="row">
                    <div class="col">
                        <input type="submit" value="submit" class="btn" style="background-color: #F2EDD7; color: #755139;">
                    </div>
                    <div class="col text-end me-3 mt-1 mb-0">
                        <a href="login.php" class="text-decoration-none fw-bold" style="color: #F2EDD7;">Login</a>
                    </div>
                </div>
                
            </form>
        </div>
    </body>
</html>