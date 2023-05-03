<?php
require __DIR__ . '/header.php';
?>

<body onload="renderProducts();">
    <?php
    require __DIR__ . '/content_header.php';
    ?>
    <main>
        <h1>Produkter</h1>

        <div class="product-headings">
            <div class="img-div">
                <h4>Bild</h4>
            </div>
            <div class="title-div">
                <h4>Namn</h4>
            </div>
            <div class="category-div">
                <h4>Kategori</h4>
            </div>
            <div class="price-div">
                <h4>Pris</h4>
            </div>
        </div>
        <div id="content-products">

        </div>
    </main>

</body>

</html>