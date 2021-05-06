<?php
include_once 'nav.php';

?>

<section>

    <h2>اضافه کردن محصول به انبار</h2>
    <button><a href="products.php">تمام محصولات</a></button>

    <div class="form">
        <h5>محصول مورد نظرتان وارد کنید</h5>

        <form action="include/insertInProduct.inc.php" method="post">
            <p>نام محصول</p>
            <input type="text" name="pName" placeholder="نام محصول را وارد کنید">
            <p>تعداد محصول</p>
            <input type="text" name="pQuantity" placeholder="تعداد محصول را مشخص کنید">
            <p>انبار مورد نظر را انتخاب کنید</p>
            <select name="Storeid" id="">
                <option value="">نام انبار</option>
                <?php
                include_once 'class/view.class.php';
                $objView=new View();
                $store_info=$objView->showStore();
                foreach ($store_info as $item){
                    echo '<option value="'.$item[0].'">'.$item[1].'</option>';
                }
                ?>
            </select>
            <button name="submit" value="submit">اضافه کردن محصول</button>
        </form>
<?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == "empty") {
        echo "<div class='error'>لطفا تمام فیلد ها را پر کنید</div>";
    }
    if ($_GET['error'] == "statementFailed") {
        echo "<div class='error'>خطایی در پایگاه داده رخ داده است</div>";
    }
    if ($_GET['error'] == "none") {
        echo "<div class='success'>محصول با موفقیت ثبت شد</div>";
    }
}
?>
    </div>
</section>
<?php
include_once 'footer.php'
?>
