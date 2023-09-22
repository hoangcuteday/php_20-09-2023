<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa</title>
</head>

<body>
    <?php
    include('menu.php');
    $id = $_GET['id'];
    $conn = mysqli_connect("localhost", "root", "123456", "banhang122023", "3306");
    $sql = 'DELETE FROM sanpham where ID=' . $_GET['iddm'];
    $result = mysqli_query($conn, $sql);
    ?>
    <h1>Xóa thành công</h1>
</body>

</html>