<?php
include('connection/db.php');
$db_connect=new db_connect();
$db= $db_connect->connect();

$booked_tables = [];

$result = mysqli_query($db, "SELECT table_no FROM vacancy");

while($row = mysqli_fetch_assoc($result)){
    $booked_tables[] = (int)$row['table_no'];   
}
$booked_tables_json = json_encode($booked_tables);
?>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            body{
                background-color: #F2EDD7;
                font-family:'Times New Roman', Times, serif;
            }
            .border-radius{
                border-radius: 25px;
            }
            .col-sm, .btn{
               background-color: #755139;
               color: #F2EDD7;
            }
        </style>
    </head>
    <body>
     <div class="container-fluid mt-3 mb-4">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="fs-1 fw-bold text-center" style="color: #755139;">Book Table</div>
                </div>
                <div class="col-4 text-end mt-3">
                    <button class="btn me-3 fw-bold" id="submit">Confirm Table</button>
                    <button type="button" class="btn me-3 fw-bold" id="cancel">Unconfirm Table</button>
                </div>
            </div>
        </div>
        <div class="row w-75 h-25 mx-auto mb-4" style="row-gap: 20px; column-gap:100px;">
            <div class="col-sm border-radius d-flex justify-content-center align-items-center fs-4" data-number="1">Table-1</div>
            <div class="col-sm border-radius d-flex justify-content-center align-items-center fs-4" data-number="2">Table-2</div>
            <div class="col-sm border-radius d-flex justify-content-center align-items-center fs-4" data-number="3">Table-3</div>
            <div class="col-sm border-radius d-flex justify-content-center align-items-center fs-4" data-number="4">Table-4</div>
        </div>
        <div class="row w-75 h-25 mx-auto mb-4" style="row-gap: 20px; column-gap:100px;">
            <div class="col-sm border-radius d-flex justify-content-center align-items-center fs-4" data-number="5">Table-5</div>
            <div class="col-sm border-radius d-flex justify-content-center align-items-center fs-4" data-number="6">Table-6</div>
            <div class="col-sm border-radius d-flex justify-content-center align-items-center fs-4" data-number="7">Table-7</div>
            <div class="col-sm border-radius d-flex justify-content-center align-items-center fs-4" data-number="8">Table-8</div>
        </div>
        <div class="row w-75 h-25 mx-auto mb-4" style="row-gap: 20px; column-gap:100px;">
            <div class="col-sm border-radius d-flex justify-content-center align-items-center fs-4" data-number="9">Table-9</div>
            <div class="col-sm border-radius d-flex justify-content-center align-items-center fs-4" data-number="10">Table-10</div>
            <div class="col-sm border-radius d-flex justify-content-center align-items-center fs-4" data-number="11">Table-11</div>
            <div class="col-sm border-radius d-flex justify-content-center align-items-center fs-4" data-number="12">Table-12</div>
        </div>
        <div class="row w-75 h-25 mx-auto mb-4" style="row-gap: 20px; column-gap:100px;">
            <div class="col-sm border-radius d-flex justify-content-center align-items-center fs-4" data-number="13">Table-13</div>
            <div class="col-sm border-radius d-flex justify-content-center align-items-center fs-4" data-number="14">Table-14</div>
            <div class="col-sm border-radius d-flex justify-content-center align-items-center fs-4" data-number="15">Table-15</div>
            <div class="col-sm border-radius d-flex justify-content-center align-items-center fs-4" data-number="16">Table-16</div>
        </div>
        <div class="row w-75 h-25 mx-auto mb-4" style="row-gap: 20px; column-gap:100px;">
            <div class="col-sm border-radius d-flex justify-content-center align-items-center fs-4" data-number="17">Table-17</div>
            <div class="col-sm border-radius d-flex justify-content-center align-items-center fs-4" data-number="18">Table-18</div>
            <div class="col-sm border-radius d-flex justify-content-center align-items-center fs-4" data-number="19">Table-19</div>
            <div class="col-sm border-radius d-flex justify-content-center align-items-center fs-4" data-number="20">Table-20</div>
        </div>

        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title">Vacancy</div>
                        <button type="button" class="btn btn-close btn-primary" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">Your vacancy is confirmed!</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="myModalCancel">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title">Vacancy</div>
                        <button type="button" class="btn btn-close btn-primary" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">Your vacancy is <span class="text-danger">Canceled!</span></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
        let number = [];
        let isLocked = false;   // 🔒 lock after confirm

        const tables = document.querySelectorAll(".col-sm");
        const cancel = document.getElementById("cancel");

        tables.forEach(table => {
            table.addEventListener("click", () => {

                if (isLocked) return;   // ❌ prevent color change

                const value = table.dataset.number;

                if (table.style.backgroundColor === "rgb(183, 157, 127)") {
                    table.style.backgroundColor = "#755139";
                    number = number.filter(num => num !== value);
                } else {
                    table.style.backgroundColor = "#B79D7F";
                    number.push(value);
                }
            });
        });

        document.getElementById("submit").addEventListener("click", () => {
            if (number.length === 0) {
                alert("Please select table!");
                return;
            }

            isLocked = true; // 🔒 lock tables after confirm

            const bodyData = number.map(n => "number[]=" + n).join("&");

            fetch("vacancy_handle.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: bodyData
            });

            new bootstrap.Modal(document.getElementById("myModal")).show();
        });

        cancel.addEventListener("click", () => {
            isLocked = false; // 🔓 unlock tables

            tables.forEach(table => {
                const value = table.dataset.number;
                if (number.includes(value)) {
                    table.style.backgroundColor = "#755139"; // unbooked color
                }
            });

            number = [];
            
            fetch("vacancy_cancel.php", { method: "POST" });

            new bootstrap.Modal(document.getElementById("myModalCancel")).show();
        });

        let booked_tables = <?php echo $booked_tables_json; ?>;
        tables.forEach(table => {
            let table_no = parseInt(table.dataset.number);
            if (booked_tables.includes(table_no)) {
                table.style.backgroundColor = "#B79D7F";
            }
        });
    </script>

    </body>
</html>