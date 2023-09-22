<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa</title>
</head>

<body>
    <form method="GET" action="/20-09-2023/sua.php">
        <?php
        include("menu.php");
        echo "<br>";
        $conn = mysqli_connect("localhost", "root", "123456", "banhang122023", "3306");
        $sql = 'SELECT * FROM sanpham WHERE id = ' . $_GET['id'];
        $result = mysqli_query($conn, $sql);
        $iddanhmuc;
        while ($row = mysqli_fetch_array($result)) {
            $iddanhmuc = $row['IDdanhmuc'];
            echo '<input type="hidden" name="id"' . 'value="' . $_GET['id'] . '"' . '/><br>';
            echo  ' Tên sản phẩm: <br>';
            echo '<input name="tensanpham"' . 'value="' . $row['sanpham'] . '"' . '/><br>';
            echo 'Giá: <br>';
            echo '<input name="gia"' . 'value="' . $row['gia'] . '"' . '/><br>';
            echo 'Số lượng: <br>';
            echo '<input name="soluong"' . 'value="' . $row['soluong'] . '"' . '/><br>';
        }
        $conn = mysqli_connect("localhost", "root", "123456", "banhang122023", "3306");
        $sql = 'SELECT * FROM danhmuc';
        $result = mysqli_query($conn, $sql);
        echo '<select name="iddanhmuc">';
        while ($row = mysqli_fetch_array($result)) {
            if ($row['ID'] == $iddanhmuc)
                echo '<option selected value="' . $row['ID'] . '">' . $row['danhmuc'] . '</option>';
            else
                echo '<option value="' . $row['ID'] . '">' . $row['danhmuc'] . '</option>';
        }
        echo "</select>";
        ?>
        <button>Sửa</button>
    </form>
</body>

</html>