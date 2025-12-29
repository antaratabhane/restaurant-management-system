<?php
    include('connection/db.php');
    include('connection/operation.php');

    $db_connect=new db_connect();
    $db= $db_connect->connect();

    $operation=new operation($db);
    $orders=$operation->import_orders();

    $vacancies=$operation->import_vacancies();
?>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <style>
            body{
                background-color: #F2EDD7;
                font-family:'Times New Roman', Times, serif;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid mt-4 mb-3">
            <div class="fs-2 fw-bold text-center mb-3" style="background-color: #755139; color: #F2EDD7;">  Orders & Vacancy</div>
        </div>
        <div class="container w-75 pt-3 pb-3 mb-4">
            <table class="table table-bordered caption-top w-75 mx-auto">
                <caption class="text-center fs-3 fw-bold mb-3" style="color: #755139;">Orders</caption>
                <thead>
                    <tr>
                        <th class="text-center fs-5 fw-bold" style="background-color: #755139; color: #F2EDD7;">Uername</th>
                        <th class="text-center fs-5 fw-bold" style="background-color: #755139; color: #F2EDD7;">Order</th>
                        <th class="text-center fs-5 fw-bold" style="background-color: #755139; color: #F2EDD7;">Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($orders as $row){ ?>
                        <tr>
                            <td class="text-center" style="background-color: #755139; color: #F2EDD7;"> <?php echo $row['username']; ?> </td>
                            <td class="text-center" style="background-color: #755139; color: #F2EDD7;"> <?php echo $row['ordered_items']; ?> </td>
                            <td class="text-center" style="background-color: #755139; color: #F2EDD7;"> <?php echo $row['quantity']; ?> </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="container w-75 pt-3 pb-3">
            <table class="table table-bordered caption-top w-75 mx-auto">
                <caption class="text-center fs-3 fw-bold mb-3" style="color: #755139;">Vacancy</caption>
                <thead>
                    <tr>
                        <th class="text-center fs-5 fw-bold" style="background-color: #755139; color: #F2EDD7;">uername</th>
                        <th class="text-center fs-5 fw-bold" style="background-color: #755139; color: #F2EDD7;">table_no</th>
                        <th class="text-center fs-5 fw-bold" style="background-color: #755139; color: #F2EDD7;">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($vacancies as $row){ ?>
                        <tr>
                            <td class="text-center" style="background-color: #755139; color: #F2EDD7;"> <?php echo $row['username']; ?> </td>
                            <td class="text-center" style="background-color: #755139; color: #F2EDD7;"> <?php echo $row['table_no']; ?> </td>
                            <form method="POST" action="edit_vacancy.php">
                                <td class="text-center" style="background-color: #755139; color: #F2EDD7;"> 
                                    <input type="hidden" value="<?php echo $row['id']; ?>" name="id" class="d-none">
                                    <input type="submit" value="Delete" name="delete" class="btn btn-danger">
                                </td>
                            </form>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>