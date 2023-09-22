<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh mục</title>
</head>

<body>
    <?php
    include('menu.php');
    ?>
    <h1>Danh sách danh mục</h1>
    <?php
    $conn = mysqli_connect("localhost", "root", "123456", "banhang122023", "3306");
    $sql = 'SELECT * FROM danhmuc';
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo '<a href="' . 'danhmucsanpham.php?iddm=' . $row['ID'] . '">' . $row['danhmuc'] . '</a><br>';
    }
    ?>
</body>

</html>