<?php
session_start();
if(!isset($_SESSION['email-admin'])){
  header("Location: home.php");
}
?>
<!DOCTYPE html>
<html lang="ar">
    <head>
    <title>ادارة بوابة إخباري بالعربي</title>
        <?php include('links.php') ?>
    </head>
    <body style="direction:rtl;text-align:right">
    <?php include('navbar.php') ?>
    <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="admin-panel.php" style="color:#333b77;font-family:'sans-serif',Cairo;padding-bottom: 16px;font-size: 17px;font-weight: 400;">اضافة موضوع</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="delete-article.php" style="color:#333b77;font-family:'sans-serif',Cairo;padding-bottom: 16px;font-size: 17px;font-weight: 400;">حذف موضوع</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="edit-article.php" style="color:#333b77;font-family:'sans-serif',Cairo;padding-bottom: 16px;font-size: 17px;font-weight: 400;">تعديل موضوع</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="add-writer.php" style="color:#333b77;font-family:'sans-serif',Cairo;padding-bottom: 16px;font-size: 17px;font-weight: 400;">اضافة مُدون</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="delete-writer.php" style="color:#333b77;font-family:'sans-serif',Cairo;padding-bottom: 16px;font-size: 17px;font-weight: 400;">حذف مُدون</a>
  </li>
</ul>
<br><br><br>
<div class="container">
  <form method="POST" enctype="multipart/form-data">
<label style="display: block;font-family: 'sans-serif', Cairo;color: #333b77;">عنوان الموضوع</label>
<input type="text" name="title-article-add" style="width:100%;
    padding: 8px;
    background: #efefef;
    border: 1px solid black;
    border-radius: 4px;
    outline: none;
    font-family: 'sans-serif', Cairo;" placeholder="عنوان الموضوع المضاف">
<br><br>
<label style="display: block;font-family: 'sans-serif', Cairo;color: #333b77;">الكاتب</label>
<select type="text" name="writer-article-add" style="width:100%;
    padding: 8px;
    background: #efefef;
    border: 1px solid black;
    border-radius: 4px;
    outline: none;
    font-family: 'sans-serif', Cairo;">
<?php
$sql = "SELECT * FROM writers";
$query = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_array($query)){
    $name = $row['name'];
    echo "<option>$name</option>";
}
?>
</select>
<br><br>
<label style="display: block;font-family: 'sans-serif', Cairo;color: #333b77;">الكاتب</label>
<select type="text" name="article-section" style="width:100%;
    padding: 8px;
    background: #efefef;
    border: 1px solid black;
    border-radius: 4px;
    outline: none;
    font-family: 'sans-serif', Cairo;">
<option>اعمال</option>
<option>تعليم</option>
<option>تكنولوجيا</option>
<option>صحة</option>
<option>فن وثقافة</option>
<option>اقتصاد</option>
<option>العرب والعالم</option>
</select>
<br><br>
<label style="display: block;font-family: 'sans-serif', Cairo;color: #333b77;">صورة للموضوع</label>
<div class="input-file-container">  
    <input class="input-file" id="my-file" name="file-article" type="file" accept=".jpg, .png" required>
    <label tabindex="0" for="my-file" class="input-file-trigger">رفع صورة للمقال مساحة 987*330</label>
  </div>
  <p class="file-return"></p>
<br><br>
<label style="display: block;font-family: 'sans-serif', Cairo;color: #333b77;">نص الموضوع</label>
<textarea name="article-body" style="width:100%;
    padding: 8px;
    background: #efefef;
    border: 1px solid black;
    border-radius: 4px;
    outline: none;
    font-family: 'sans-serif', Cairo;
    height: 300px;
    text-align: left;
    direction: ltr;"></textarea>
<br><br>
<button type="submit" name="accept-article" style="width: 100%;
    min-height: 40px;
    border: 1px solid gray;
    border-radius: 5px;
    font-family: 'sans-serif', Cairo;
    background-color: #333b77;
    color: white;
    font-weight:bold">نشر المقال</button>

<?php
if(isset($_POST['accept-article'])){
  $article_name = $_POST['title-article-add'];
  $article_writer = $_POST['writer-article-add'];
  $article_section = $_POST['article-section'];
  $article_image = addslashes(file_get_contents($_FILES['file-article']['tmp_name']));
  $article_body = $_POST['article-body'];
  $article_date = date("Y/m/d");
  if (!empty($_POST['title-article-add']) && !empty($_FILES['file-article']['name']) && !empty($_POST['article-body'])) {
    $sql = "INSERT INTO articles (title, writer, cover, body, section, date) VALUES ('$article_name', '$article_writer', '$article_image', '$article_body', '$article_section', '$article_date')";
    $query = mysqli_query($connect, $sql);
    echo "<div class='alert alert-success' role='alert'>تم اضافة المقال بنجاح</div>";  
  } else {
    echo "<div class='alert alert-danger' role='alert'>لم يتم اضافة المقال</div>";
}
}
?>

  </form>
</div>
<br><br><br>
<?php include('footer.php') ?>
    </body>
    <?php include('../scripts.php') ?>

</html>
