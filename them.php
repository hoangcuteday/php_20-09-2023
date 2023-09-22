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
    $ten = $_GET['tensanpham'];
    $gia = $_GET['gia'];
    $soluong = $_GET['soluong'];
    $iddanhmuc = $_GET['iddanhmuc'];
    $conn = mysqli_connect("localhost", "root", "123456", "banhang122023", "3306");
    $sql = "INSERT INTO sanpham (sanpham, gia, soluong, IDdanhmuc) VALUES ('$ten', $gia, $soluong, $iddanhmuc)";
    $result = mysqli_query($conn, $sql);
    header("Location: danhmucsanpham.php?iddm=$iddanhmuc");
    ?>
</body>

</html>