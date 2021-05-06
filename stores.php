<?php
include_once 'nav.php';

?>
<section>
    <h2>انبار های موجود</h2>
    <button><a href="add-store.php">اضافه کردن انبار</a></button>

    <table>
        <thead style="background-color: #1c7430;">
        <th>نام انبار</th>
        <th>نام شهر</th>
        <th>ادرس</th>
        <th>نام محصول</th>
        </thead>
        <tbody>
        <?php

        $objView = new View();
        $leftjoin = $objView->showStoreWithProduct();

        if ($leftjoin >0) {
            foreach ($leftjoin as $JOIN) {
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