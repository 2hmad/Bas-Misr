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
    <a class="nav-link" href="admin-panel.php" style="color:#333b77;font-family:'sans-serif',Cairo;padding-bottom: 16px;font-size: 17px;font-weight: 400;">اضافة موضوع</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="delete-article.php" style="color:#333b77;font-family:'sans-serif',Cairo;padding-bottom: 16px;font-size: 17px;font-weight: 400;">حذف موضوع</a>
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
<form method="post">
<label style="display: block;font-family: 'sans-serif', Cairo;color: #333b77;">عنوان المقال</label>
<select name="title-article-delete" style="width:100%;
    padding: 8px;
    background: #efefef;
    border: 1px solid black;
    border-radius: 4px;
    outline: none;
    font-family: 'sans-serif', Cairo;">
<?php
$sql = "SELECT * FROM articles";
$query = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_array($query)){
    $id = $row['id'];
    $title = $row['title'];
    echo "<option>$title</option>";
}
?>
</select>
<br><br>
<button type="submit" name="delete-article" style="width: 100%;
    min-height: 40px;
    border: 1px solid gray;
    border-radius: 5px;
    font-family: 'sans-serif', Cairo;
    background-color: #333b77;
    color: white;
    font-weight:bold">حذف المقال</button>
<br>
<?php
if(isset($_POST['delete-article'])){
  $sql = "DELETE FROM articles WHERE id = $id";
  $query = mysqli_query($connect, $sql);  
  echo "<div class='alert alert-success'>تم الحذف بنجاح</div>";
}
?>
  </form>
</div>
<br><br><br>
<?php include('footer.php') ?>

    </body>
    <?php include('../scripts.php') ?>
</html>