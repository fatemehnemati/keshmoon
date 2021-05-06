<?php
include_once 'nav.php'
?>

    <header>
        <form action="include/dbBuild.inc.php" method="post">
            <button name="db" value="submit">ساخت database </button>
        </form>
        <form action="include/tableBuild.inc.php" method="post">
            <button name="table" value="submit" style="margin-top:5px;">ساخت table </button>
        </form>
        <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "none") {
                echo "<div class='success'> دیتا بیس با موفقیت ساخته شد</div>";
                echo"<div class='success'> name : keshmoon </div>";
            }
            if ($_GET['error'] == "success") {
                echo "<div class='success'>جداول انبار، محصول و جدول رابط ساخته شدند</div>";
            }
        }
        ?>
    </header>

<!-- <?php
// include_once 'footer.php'
?> -->