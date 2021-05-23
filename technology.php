<!DOCTYPE html>
<html lang="ar">
    <head>
    <title>أعمال - حيث الاخبار لا تنتهي</title>
        <?php include('links.php') ?>
        <style>
  .read-article {
  border-radius: 4px;
  background-color: #f38d35;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 17px;
  padding: 10px;
  min-width: 115px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  font-family: 'sans-serif', Cairo;
}

.read-article span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.read-article span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.read-article:hover span {
  padding-right: 25px;
}

.read-article:hover span:after {
  opacity: 1;
  right: 0;
}
.text-widget {
  padding: 4px 14px 5px;
  border-radius: 2px 2px 0 0;
  display: inline-block;
  text-transform: none;
  position: relative;
  width: 100%;
  margin-bottom: 20px;
}
.text-widget span {
  color: #ffffff;
  background-color: #333333;
  padding: 4px 14px 5px;
  border-radius: 2px 2px 0 0;
  display: inline-block;
  font-family: 'Sans-serif', Cairo;
  font-size: 20px;
}
.text-widget:after {
  color: #ffffff;
  background-color: #333333;
  position: absolute;
  content: "";
  height: 5px;
  width: 20%;
  bottom: 5px;
}
.card-img-overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #008cbab3;
}
.card:hover .card-img-overlay {
  opacity: 1;
}
.card-title {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
        </style>
    </head>
    <body style="direction:rtl;text-align:right">
        <?php include('navbar.php') ?>
        
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
    <a class="nav-link active" href="technology.php" style="color:#333b77;font-family:'sans-serif',Cairo;padding-bottom: 16px;font-size: 17px;font-weight: 400;">تكنولوجيا</a>
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

          <div id="latest-news" style="padding: 10px;">
            <div style="background: #edf0f6;border-right: 10px solid #ca0606;max-height: 45px;height: 45px;">
              <a href="latest-article.php"><h3 style="color:#333b77;font-family: 'sans-serif', Cairo;font-size: 25px;padding: 7px;font-weight: 700;">تكنولوجيا</h3></a>
            </div>
            <br>
            <div class="container" style="max-width: 100%;">
              <div class="row">
<?php
$sql = "SELECT * FROM articles WHERE section = 'تكنولوجيا' ORDER BY id DESC LIMIT 21";
$query = mysqli_query($connect, $sql);
while($row = mysqli_fetch_array($query)){
  $id = $row['id'];
  $cover = $row['cover'];
  $title = $row['title'];
  $date = $row['date'];
  echo "
  <div class='col-lg-4' style='margin-bottom: 20px;'>
  <a href='article.php?id=$id'>
  <div class='card' style='border:1px solid #e4e4e4;'>
  <img src='data:image/jpeg;base64,".base64_encode( $cover )."' class='card-img-top' alt='غلاف الموضوع' style='height: 130px;object-fit: cover'>
  <div class='card-body' style='overflow: hidden;height: 75px;line-height: 0;padding: 1px 2.5px 0.5px;'>
  <h5 class='card-text' style='font-size: 15px;line-height:1.5em;font-family: Tajawal;font-weight: bold;color: #333b77'>$title</h5>
  </div>
  </div>
  </a>
  </div>
  ";
}
?>
</div>
            </div>
          </div>
          <br>
  <br>
    </div>
    <div class="col-md-4"><br><br>
    <?php include("facebook-plugin.php") ?>
      <br><br>
      <img src="img/300x600.jpg" alt="اعلان مساحة 300*600 بيكسل" style="margin-right: auto;margin-left: auto;display: block;">
      <br>
      <img src="img/300x250.jpg" alt="اعلان مساحة 300*250 بيكسل" style="margin-right: auto;margin-left: auto;display: block;">
    </div>
  </div>
</div>
   <br><br>
        <?php include('footer.php') ?>
    </body>
    <?php include('scripts.php') ?>
</html>