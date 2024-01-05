<?php
require_once "../layout/admin-header.php";
showHeader("main2");
?>
    <div class="header">
        <div class="panel">
            <h2>پنل مدیریت خودروها</h2>
            <div class="line"></div>
            <ul>
                <li><a href="">داشبورد</a></li>
                <li><a href="index.php">خودرو ها</a></li>
            </ul>
        </div>
        <div class="inner-header">
            <div></div>
            <h1>افزودن خودروی جدید</h1>
            <form action="add-car-process.php" method="post" class="input">
                <div>
                    <label for="title">عنوان</label>
                    <input type="text" name="title" id="title" dir="rtl">
                </div>
                <input type="submit" value="افزودن" class="add">
            </form>
            <div class="back">
                <a href="index.php">بازگشت</a>
            </div>
        </div>
    </div>
<?php
require_once "../layout/admin-footer.php";