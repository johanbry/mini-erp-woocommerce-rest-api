<?php
require __DIR__ . '/header.php';
?>

<body onload="renderOrders();">
    <?php
    require __DIR__ . '/content_header.php';
    ?>
    <main>
        <h1>Beställningar</h1>

        <div class="order-headings">
            <div class="orderId-div">
                <h4>Order id</h4>
            </div>
            <div class="status-div">
                <h4>Status</h4>
            </div>
            <div class="totalPrice-div">
                <h4>Totalbelopp</h4>
            </div>
            <div class="date-div">
                <h4>Datum</h4>
            </div>
        </div>
        <div id="content-orders">

        </div>
    </main>

</body>

</html>