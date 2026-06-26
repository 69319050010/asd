<?php
session_start();
session_
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<link rel="stylesheet" href="bt5/css/bootstrap.min.css">
<script src="bt5/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
</head>
<body>

<!-- เริ่มต้น ส่วนเน้อหา จะเปลี่ยนได้ตลอด -->

    <?php include('nav.php'); ?>

<?php
$link = $_GET ['link'] ?? '';
if($link == '')
    {include ('banner.php');}
elseif($link == 's_product')
    {include ('s_product.php');}
elseif($link == 's_detail')
    {include ('s_detail.php');}

?>

<!-- สิ้นสุด ส่วนเน้อหา จะเปลี่ยนได้ตลอด -->

    <?php include('footer.php'); ?>

</body>
</html>

<?php include('f_login.php'); ?>
<?php include('f_register.php'); ?>