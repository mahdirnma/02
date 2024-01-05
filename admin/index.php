<?php
require_once "../layout/admin-header.php";
showHeader("main2");
require_once "Cars.php";
$car=new car("cars");
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
            <h1>خودروها</h1>
            <div class="back">
                <a href="add-car.php">افزودن خودروی جدید</a>
            </div>
            <table class="header-table">
                <tr>
                    <td>حذف</td>
                    <td>ویرایش</td>
                    <td>کشور</td>
                    <td>برند</td>
                    <td>نام خودرو</td>
                    <td>شماره</td>
                </tr>
                <?php
                foreach ($car->selectSpecial() as $vec){
                    echo "<tr>
                <td><a href='delete-category.php?id={$vec["id"]}'>حذف</a></td>
                <td><a href='update-category.php?id={$vec["id"]}'>ویرایش</a></td>
                <td>{$vec["country"]}</td>
                <td>{$vec["brand"]}</td>
                <td>{$vec["title"]}</td>
                <td>{$vec["id"]}</td>
                </tr>
";
                }
                ?>
            </table>
        </div>
    </div>
<?php
require_once "../layout/admin-footer.php";