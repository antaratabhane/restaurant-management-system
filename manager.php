<?php
    include('connection/db.php');
    include('connection/operation.php');

    $db_connect=new db_connect();
    $db= $db_connect->connect();

    $operation=new operation($db);

    $orders=$operation->import_orders();
    $vacancies=$operation->import_vacancies();
    $stats=$operation->statistics();
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
            .class{
                border: 1px solid black;
            }
            .border-radius{
                border-radius: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid mt-4 mb-4">
            <div class="fs-2 fw-bold text-center" style="background-color: #755139; color: #F2EDD7;">Admin Panel</div>
        </div>
        <div class="container w-75 mb-3">
            <div class="row">
                <div class="col-sm border text-center border-radius" style="background-color: #755139; color: #F2EDD7;">
                    <div class="fs-5 fw-bold mb-3 mt-2">Orders</div>
                    <div class="mb-3 fs-5"> <?php echo $stats['order'] ?></div>
                </div>
                <div class="col-sm border text-center border-radius" style="background-color: #755139; color: #F2EDD7;">
                    <div class="fs-5 fw-bold mb-3 mt-2">Total Sales</div>
                    <div class="mb-3 fs-5"> <?php echo $stats['sale'] ?> </div>
                </div>
                <div class="col-sm border text-center border-radius" style="background-color: #755139; color: #F2EDD7;">
                    <div class="fs-5 fw-bold mb-3 mt-2">Booked Tables</div>
                    <div class="mb-3 fs-5"> <?php echo $stats['vacancy'] ?> </div>
                </div>
            </div>
        </div>
        <div class="container w-75 pt-3 pb-3 mb-4">
            <table class="table table-bordered caption-top w-75 mx-auto">
                <caption class="text-center fs-3 fw-bold mb-3" style="color: #755139;">Orders</caption>
                <thead>
                    <tr>
                        <th class="text-center fs-5 fw-bold" style="background-color: #755139; color: #F2EDD7;">Uername</th>
                        <th class="text-center fs-5 fw-bold" style="background-color: #755139; color: #F2EDD7;">Order</th>
                        <th class="text-center fs-5 fw-bold" style="background-color: #755139; color: #F2EDD7;">Quantity</th>
                        <th class="text-center fs-5 fw-bold" style="background-color: #755139; color: #F2EDD7;">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($orders as $row){ ?>
                        <tr>
                            <td class="text-center" style="background-color: #755139; color: #F2EDD7;"> <?php echo $row['username']; ?> </td>
                            <td class="text-center" style="background-color: #755139; color: #F2EDD7;"> <?php echo $row['ordered_items']; ?> </td>
                            <td class="text-center" style="background-color: #755139; color: #F2EDD7;"> <?php echo $row['quantity']; ?> </td>
                            <td class="text-center" style="background-color: #755139; color: #F2EDD7;"> 
                                <form method="POST" action="edit_order.php">
                                    <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                                    <input type="submit" value="delete" name="submit" class="btn btn-danger">
                                </form>
                            </td>
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
                        <th class="text-center fs-5 fw-bold" style="background-color: #755139; color: #F2EDD7;">Uername</th>
                        <th class="text-center fs-5 fw-bold" style="background-color: #755139; color: #F2EDD7;">Table_no</th>
                        <th class="text-center fs-5 fw-bold" style="background-color: #755139; color: #F2EDD7;">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($vacancies as $row){ ?>
                        <tr>
                            <td class="text-center" style="background-color: #755139; color: #F2EDD7;"> <?php echo $row['username']; ?> </td>
                            <td class="text-center" style="background-color: #755139; color: #F2EDD7;"> <?php echo $row['table_no']; ?> </td>
                            <td class="text-center" style="background-color: #755139; color: #F2EDD7;"> 
                                <form method="POST" action="edit_vacancy.php">
                                    <input type="hidden" value="<?php echo $row['id']; ?>" name="id" class="d-none">
                                    <input type="submit" value="Delete" name="delete" class="btn btn-danger">
                                </form>
                            </td>    
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>