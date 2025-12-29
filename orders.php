<?php
    session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <style>
            body{
                background-color: #F2EDD7;
                color: #755139;
                font-family:'Times New Roman', Times, serif;
            }
            .border-radius{
                border-radius: 10px;
            }
        </style>
    </head>
    <body>
        <div class="fluid-container mb-4">
            <div class="row mt-4 mb-4">
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="fs-2 fw-bold text-center mb-3">Order Summary</div>
                </div>
                <div class="col-4 text-end">
                    <button type="button" class="btn mt-2 me-4 fw-bold" id="cancel" style="background-color: #755139; color:#F2EDD7">Cancel Order</button>
                </div>
            </div>
            <table class="table table-bordered w-75 mx-auto" >
                <thead>
                    <tr>
                        <th class='text-center'style="background-color: #755139; color: #F2EDD7">Ordered Item</th>
                        <th class='text-center'style="background-color: #755139; color: #F2EDD7">Quantity</th>
                        <th class='text-center' style="background-color: #755139; color: #F2EDD7">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(!empty($_SESSION['orders'])){
                            $total=0;
                            foreach($_SESSION['orders'] as $item){
                                echo "<tr>";
                                echo "<td class='text-center' style='background-color: #755139; color:#F2EDD7'>" . $item['name'] . "</td>";
                                echo "<td class='text-center' style='background-color: #755139; color:#F2EDD7'>" . "<input type='number' value='1' class='form-control form-control-sm w-25 text-center  mx-auto' oninput='quantity(this)' >" . "</td>";
                                echo "<td class='text-center price' style='background-color: #755139; color:#F2EDD7' data-price='{$item['amount']}'>" . $item['amount'] . "</td>";
                                echo "</tr>";
                            }
                            foreach($_SESSION['orders'] as $item){
                                $total += (int)$item['amount'];
                            }
                            echo "<tr>";
                            echo "<td colspan='2' class='ps-3' style='background-color: #755139; color:#F2EDD7'>" . "Total" . "</td>";
                            echo "<td class='text-center grandTotal' style='background-color: #755139; color:#F2EDD7'>" . $total . "/-" ."</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <?php if(!empty($_SESSION['orders'])) { ?>
        <div class="container bg-light w-50 pb-4 border-radius pt-3">
            <div class="fs-3 fw-bold text-center mb-4">Select Payment Method</div>
            <form>
                <div class="row">
                    <div class="col">
                        <div class="form-check mb-3">
                            <div class="d-inline-block ms-4">
                                <input type="radio" class="form-check-input form-check-input-lg" name="optradio" id="radio1" value="Pay Online">
                                <label class="form-check-label fw-bold" for="radio1">Pay Online</label>
                            </div>
                        </div>
                        <div class="form-check">
                            <div class="d-inline-block ms-4">
                                <input type="radio" class="form-check-input form-check-input-lg" name="optradio" id="radio2" value="Pay at Counter">
                                <label class="form-check-label fw-bold" for="radio2">Pay at Counter</label>
                            </div>
                        </div>
                    </div>
                </div>     
            </form>
        </div>
        <?php } ?>

        <div class="modal fade" id="onlinePay">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Pay Online</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <img style="height: 200px; width: 200px;" src="pixel_qr.jpg">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="offlinePay">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Pay Offline</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        Pay at the counter to confirm Order!
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            const r1=document.getElementById('radio1');
            const r2=document.getElementById('radio2');
            const modal=new bootstrap.Modal(document.getElementById('onlinePay'));
            const modal2=new bootstrap.Modal(document.getElementById('offlinePay'));

            function getquantity(){
                const quantities = [];
                document.querySelectorAll('input[type="number"]').forEach(input => {
                    quantities.push(Number(input.value));
                });
                return quantities;
            }
            
            function send(quantities){
                fetch("orders_db.php",
                    {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json"
                        },
                        body: JSON.stringify({quantities})
                    }
                )
                .then(res => res.text())
                .then(data => {
                    console.log(data);
                });
            }

            r1.addEventListener("click", () =>{
                console.log('Clicked');
                modal.show();
                send(getquantity());
            });

            r2.addEventListener("click", () =>{
                modal2.show();
                send(getquantity());
            });

            document.getElementById('cancel').addEventListener("click", () =>{
                fetch("orders_cancel.php", {method: "POST"})
                .then(res => res.text())
                .then(data => {
                    console.log(data);
                });
                window.location.href="menu.php";
            });

            function quantity(input){
                const row=input.closest('tr');
                const priceCell=row.querySelector('.price');
                const basePrice=Number(priceCell.dataset.price);

                priceCell.innerText= input.value * basePrice;

                let grandTotal=0;
                document.querySelectorAll('.price').forEach(cell =>{
                    const qty=cell.closest('tr').querySelector('input').value;
                    const price=Number(cell.dataset.price); 
                    grandTotal += qty * price;
                });

                document.querySelector('.grandTotal').innerText=grandTotal  + '/-';
            }
        </script>
    </body>
</html>