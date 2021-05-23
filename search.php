<!DOCTYPE html>
<html lang="ar">
    <head>
    <title>البحث عن مقال | جريدة إخباري بالعربي الإلكترونية</title>
        <?php include('links.php') ?>
    </head>
    <body style="direction:rtl;text-align:right">
        <?php include('navbar.php') ?>

    <h3 style="text-align: center;font-family: 'sans-serif', Cairo;color: #333b77;font-weight: bold;font-size: 32px;">البحث عن مقال</h3>
<br><br><br><br>
    <div id="search-div" style="text-align: center;">
        <form method="get">
    <input type="text" name="search-field" id="search-field" placeholder="بحث ..">
        <br><br>
    <h2 style="font-family: Cairo;
    font-weight: 700;
    font-size: 22px;
    color: #333b77;
    text-align: right;
    padding: 15px;">نتائج البحث</h2>
<div class="container">
    <div class="row">
<?php
$sql = "SELECT * FROM articles";
$query = mysqli_query($connect, $sql);
while($row = mysqli_fetch_array($query)){
  $id = $row['id'];
  $cover = $row['cover'];
  $title = $row['title'];
  $date = $row['date'];
  $section = $row['section'];
  echo "
  <div class='col-lg-4' style='margin-bottom: 20px;'>
  <a href='article.php?id=$id'>
  <div class='card' style='border:1px solid #e4e4e4;'>
  <img src='data:image/jpeg;base64,".base64_encode( $cover )."' class='card-img-top' alt='غلاف الموضوع' style='max-height: 130px;height: 130px;'>
  <div class='card-body' style='line-height: 0;padding: 1px 2.5px 0.5px;'>
  <h5 class='card-text' style='font-size: 15px;line-height:1.5em;font-family: Tajawal;font-weight: bold;color: #333b77'>$title</h5>
  </div>
  </div>
  </a>
  </div>";
}
?>
    </div>
    </div>
    </form>
    </div>
</body>
</html>