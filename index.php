<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

<!-- header -->
<?php  include ('include/header.php')?>
<!-- end header -->

<!-- nav -->
<?php  include ('include/nav.php')?>
<!-- end nav -->

<!-- content -->
<?php 
    if(isset($_GET['page']) &&$_GET['page'] == 'beranda'){
        include('pages/beranda.php');
    } else{
        include('pages/kategori.php');
    }
?>
<!-- end content -->


<!-- footer -->
<?php  include ('include/footer.php')?>
<!-- end footer -->


</body>

</html>