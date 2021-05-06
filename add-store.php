<?php
include_once 'nav.php';

?>

<section>

    <h2>اضافه کردن انبار</h2>
    <button><a href="stores.php">تمام انبارها</a></button>

    <div class="form">
        <h5>انبار مورد نظرتان وارد کنید</h5>
        <form action="include/getStore.inc.php" method="post">
            <p>نام شهر</p>
            <input type="text" name="cityName" placeholder="نام شهر را وارد کنید">
            <p>نام انبار</p>
            <input type="text" name="StoreName" placeholder="نام انبار را وارد کنید">
            <p>ادرس</p>
            <input type="text" name="Address" placeholder="آدرس را وارد کنید">
            <button name="submited" value="submit">اضافه کردن انبار</button>
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
        echo "<div class='success'>انبار با موفقیت ثبت شد</div>";
    }
}
?>

    </div>
</section>
<?php
include_once 'footer.php'
?>