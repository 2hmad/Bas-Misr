<!DOCTYPE html>
<html lang="ar">
    <head>
    <title>إخباري بالعربي - حيث الاخبار لا تنتهي</title>
        <?php include('links.php') ?>
    </head>
    <body style="direction:rtl;text-align:right">
        <?php include('navbar.php') ?>
        <div id="article" style="padding: 10px;">
        <?php
        $id = $_GET['id'];
$sql = "SELECT * FROM articles WHERE id = $id";
$query = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_array($query)){
            $views = $row['views'] + 1;
}
$query_views = mysqli_query($connect, "UPDATE articles SET views = $views WHERE id = $id");
    ?>
        </div>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="home.php" style="color:#333b77;font-family:'sans-serif',Cairo;padding-bottom: 16px;font-size: 17px;font-weight: 400;">الرئيسية</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="latest-article.php" style="color:#333b77;font-family:'sans-serif',Cairo;padding-bottom: 16px;font-size: 17px;font-weight: 400;">اخر الاخبار</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="business.php" style="color:#333b77;font-family:'sans-serif',Cairo;padding-bottom: 16px;font-size: 17px;font-weight: 400;">أعمال</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="education.php" style="color:#333b77;font-family:'sans-serif',Cairo;padding-bottom: 16px;font-size: 17px;font-weight: 400;">تعليم</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="technology.php" style="color:#333b77;font-family:'sans-serif',Cairo;padding-bottom: 16px;font-size: 17px;font-weight: 400;">تكنولوجيا</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="health.php" style="color:#333b77;font-family:'sans-serif',Cairo;padding-bottom: 16px;font-size: 17px;font-weight: 400;">صحة</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="culture.php" style="color:#333b77;font-family:'sans-serif',Cairo;padding-bottom: 16px;font-size: 17px;font-weight: 400;">فن وثقافة</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="commerce.php" style="color:#333b77;font-family:'sans-serif',Cairo;padding-bottom: 16px;font-size: 17px;font-weight: 400;">اقتصاد</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="worldwide.php" style="color:#333b77;font-family:'sans-serif',Cairo;padding-bottom: 16px;font-size: 17px;font-weight: 400;">العرب والعالم</a>
  </li>
</ul>

<br>
<div style="overflow: hidden;">
<img src="img/728x90.jpg" alt="اعلان مساحة 728*90 بيكسل" style="margin-right: auto;margin-left: auto;display: block;">
</div>

<div class="container" style="max-width:100%">
  <div class="row">
    <div class="col-lg">
      <?php include('breaking-news.php') ?>
    </div>
    <div class="col-lg-4" style="text-align:left">
    <button type="button" data-toggle="modal" data-target="#exampleModal" style="max-width: 170px;
    width: 170px;
    max-height: 45px;
    height: 45px;
    font-family: 'Sans-serif', Cairo;
    background: #333b76;
    color: white;
    font-weight: bold;
    border: #333b76;
    border-radius: 6px;
    margin-top: 3rem!important;"><i class="fas fa-search"> بحث</i></button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">البحث عن مقال</h5>
      </div>
      <div class="modal-body">
        <form method="post">
          <input type="text" name="search-field" id="search-field" placeholder="عنوان المقال"><br>
          <input type="submit" name="search-button" value="بحث" style="max-width: 150px;
          width: 150px;
          margin-left: auto;
          margin-right: auto;
          display: block;
          background: #333b76;
          color: white;
          border: 1px solid #333b76;
          height: 34px;
          border-radius: 4px;
          outline: none;">
          <?php
          if(isset($_POST['search-button'])){
              $search_field = $_POST['search-field'];
              header("Location: search-resault.php?word=$search_field");
            }
          ob_end_flush();
          ?>
        </form>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>


<div class="container" style="max-width:100%">
  <div class="row">
    <div class="col-lg">
          <div id="article-head" style="padding: 10px;">
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM articles WHERE id = $id";
$query = mysqli_query($connect, $sql);
while($row = mysqli_fetch_array($query)){
  $cover = $row['cover'];
  $title = $row['title'];
  $body = $row['body'];
  $date = $row['date'];
  $writer = $row['writer'];
  echo "
  <h1 style='font-size: 20px;letter-spacing: .025em;font-family: Cairo;font-weight: bold;'>$title</h1>
  <blockquote><i class='fas fa-calendar-alt'></i> اخر تحديث : $date</blockquote>
  <img src='data:image/jpeg;base64,".base64_encode( $cover )."' alt='غلاف الموضوع' style='width:100%;max-height: 400px;height:400px'>
  ";
}
?>
<div style='border-bottom: 1px solid #d2d2d2;margin-top: 10px;'></div>
<h5 style="color: #333b76;
    font-weight: bold;
    font-size: 1.1rem;
    margin-top: 10px;
    margin-bottom: 10px;"><i class="fas fa-pen"></i> <?php echo "$writer" ?></h5>
<div style='border-bottom: 1px solid #d2d2d2;margin-bottom: 10px'></div>

<div style="text-align: justify;
    word-spacing: 2px;
    font-family: Tajawal;
    line-height: 2em;
    font-size: 1.2rem;">
    <?php echo "$body" ?>
</div>

<img src="img/728x90.jpg" alt="اعلان مساحة 300*600 بيكسل" style="width:100%;max-height:160px;height:160px;display: block;">
<br>
<p style="float:right;font-weight: bold;font-family: cairo;">مشاركة الخبر : </p>
<!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style" style="float:right">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_email"></a>
<a class="a2a_button_pinterest"></a>
<a class="a2a_button_whatsapp"></a>
<a class="a2a_button_copy_link"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
            </div>
          <br>
    </div>
  
    <div class="col-md-4"><br><br>
      <img src="img/300x600.jpg" alt="اعلان مساحة 300*600 بيكسل" style="margin-right: auto;margin-left: auto;display: block;">
      <br>
      <?php include("facebook-plugin.php") ?>
      <br><br>
      <img src="img/300x250.jpg" alt="اعلان مساحة 300*250 بيكسل" style="margin-right: auto;margin-left: auto;display: block;">
      <br>
      <img src="img/300x600.jpg" alt="اعلان مساحة 300*600 بيكسل" style="margin-right: auto;margin-left: auto;display: block;">
    </div>
  </div>
</div>
        <br><br>
        <?php include('footer.php') ?>
    </body>
    <?php include('scripts.php') ?>
</html>