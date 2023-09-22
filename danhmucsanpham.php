<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Sản phẩm</title>
</head>

<body>
    <?php
    include('menu.php');
    ?>
    <h1>Danh sách sản phẩm</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect("localhost", "root", "123456", "banhang122023", "3306");
            $sql = 'SELECT * FROM sanpham where IDdanhmuc=' . $_GET['iddm'];
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo '<tr>';
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['sanpham'] . "</td>";
                echo "<td>" . $row['soluong'] . "</td>";
                echo "<td>" . $row['gia'] . "</td>";
                echo "<td>" . '<a href="/20-09-2023/xoaspham.php?id=' . $row['ID'] . '">Xóa</a>' . "</td>";
                echo "<td>" . '<a href="/20-09-2023/suaspham.php?id=' . $row['ID'] . '">Sửa</a>' . "</td>";
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>

</html>