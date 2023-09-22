<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
</head>

<body>
    <form method="GET" action="/20-09-2023/them.php">
        Tên sản phẩm: <br>
        <input name="tensanpham" /><br>
        Giá: <br>
        <input name="gia" /><br>
        Số lượng: <br>
        <input name="soluong" /><br>
        <?php 
         $conn = mysqli_connect("localhost", "root", "123456", "banhang122023", "3306");
         $sql = 'SELECT * FROM danhmuc';
         $result = mysqli_query($conn, $sql);
         echo "<select name='iddanhmuc'>";
         while ($row = mysqli_fetch_array($result)) {
            echo '<option value="' . $row['ID'] . '">' . $row['danhmuc'] . '</option>';
        }
         echo "</select>";
        ?>
        <button>Thêm</button>
    </form>
</body>

</html>