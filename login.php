<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .border-radius{
            border-radius: 10px;
        }
        body{
            background-color: #F2EDD7;
        }
        .formColour{
            background-color: #755139;
            color: #F2EDD7;
        }
    </style>
</head>
<body class="d-flex justify-content-centre align-items-center">
    <div class="container w-25 h-75 ps-4 pt-3 border-radius position-relative formColour">
        <h3 class="mb-3">LogIn</h3>
        <form action="session_check.php" method="POST">
            <label class="form-label">Username</label>
            <input type="text" class="form-control w-75 mb-3" name="username">

            <label class="form-label">Password</label>
            <input type="password" class="form-control w-75 mb-4" name="unique_id">

            <input type="submit" value="submit" class="btn fw-bold" style="color: #755139; background-color: #F2EDD7;">

            <div class="text-end mt-3 me-3">
                <a href="registration.php" class="text-decoration-none" style="color: #F2EDD7;">Register</a>
            </div>
        </form>
    </div>
</body>
</html>