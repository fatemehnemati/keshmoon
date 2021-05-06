<?php
include_once 'nav.php';

?>
<section>
    <h2>محصولات موجود در انبارها</h2>
    <button><a href="add-product.php">اضافه کردن محصول</a></button>

    <table>
    <thead style="background-color: #1c7430;">
        <th>نام محصول</th>
        <th>تعداد محصول</th>
        <th>نام انبار</th>
    </thead>
    <tbody>
    <?php

    $objView = new View();
    $rightjoin = $objView->showProducteWithStore();
    if($rightjoin >0){
    foreach ($rightjoin as $JOIN) {
        echo '<tr>';
        foreach ($JOIN as $item) {

            echo '<td>' . $item . '</td>';
        }
        echo '</tr>';
    }
    }
    ?>
    </tbody>
</table>
</section>

<?php
include_once 'footer.php'
?>