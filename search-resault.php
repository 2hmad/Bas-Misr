<!DOCTYPE html>
<html lang="ar">
    <head>
    <title>نتائج البحث | جريدة إخباري بالعربي الإلكترونية</title>
        <?php include('links.php') ?>
    </head>
    <body style="direction:rtl;text-align:right">
        <?php include('navbar.php') ?>
<br>
<h2 style="font-family: Cairo;
    font-weight: 700;
    font-size: 22px;
    color: #333b77;
    text-align: right;
    padding: 15px;">نتائج البحث</h2>
<div id="search-resault" style="padding: 15px;">
<div class="container">
  <div class="row">
<?php
$title_link = $_GET['word'];
$sql = "SELECT * FROM articles WHERE title LIKE '%".$title_link."%'";
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
  <div class='card-body' style='overflow: hidden;height: 75px;line-height: 0;padding: 1px 2.5px 0.5px;'>
  <h5 class='card-text' style='font-size: 15px;line-height:1.5em;font-family: Tajawal;font-weight: bold;color: #333b77'>$title</h5>
  </div>
  </div>
  </a>
  </div>";
}
?>
</div>
</div>
</div>
        <br><br><br>
        <?php include('footer.php') ?>
    </body>
    <?php include('scripts.php') ?>
</html>