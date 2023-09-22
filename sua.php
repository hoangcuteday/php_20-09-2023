<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm</title>
</head>

<body>
    <?php
    include('menu.php');
    $id = $_GET['id'];
    $ten = $_GET['tensanpham'];
    $gia = $_GET['gia'];
    $soluong = $_GET['soluong'];
    $iddanhmuc = $_GET['iddanhmuc'];
    $conn = mysqli_connect("localhost", "root", "123456", "banhang122023", "3306");
    $sql = "UPDATE sanpham SET sanpham = '$ten', gia = $gia, soluong = $soluong, IDdanhmuc = $iddanhmuc WHERE ID = $id ";
    $result = mysqli_query($conn, $sql);
    header("Location: danhmucsanpham.php?iddm=$iddanhmuc");
    ?>
</body>

</html>