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
    <a class="nav-link" href="delete-article.php" style="color:#333b77;font-family:'sans-serif',Cairo;padding-bottom: 16px;font-size: 17px;font-weight: 400;">حذف موضوع</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="edit-article.php" style="color:#333b77;font-family:'sans-serif',Cairo;padding-bottom: 16px;font-size: 17px;font-weight: 400;">تعديل موضوع</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="add-writer.php" style="color:#333b77;font-family:'sans-serif',Cairo;padding-bottom: 16px;font-size: 17px;font-weight: 400;">اضافة مُدون</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="delete-writer.php" style="color:#333b77;font-family:'sans-serif',Cairo;padding-bottom: 16px;font-size: 17px;font-weight: 400;">حذف مُدون</a>
  </li>

</ul>
<br><br><br>
<div class="container">
  <form method="post">
<label style="display: block;font-family: 'sans-serif', Cairo;color: #333b77;">اسم الكاتب</label>
<input type="text" name="writer-article-add" style="width:100%;
    padding: 8px;
    background: #efefef;
    border: 1px solid black;
    border-radius: 4px;
    outline: none;
    font-family: 'sans-serif', Cairo;" placeholder="اسم الكاتب">
<br><br>
<button type="submit" name="add-writer" style="width: 100%;
    min-height: 40px;
    border: 1px solid gray;
    border-radius: 5px;
    font-family: 'sans-serif', Cairo;
    background-color: #333b77;
    color: white;
    font-weight:bold">اضافة مدون</button>

<?php
if(isset($_POST['add-writer'])) {
  $writer_name = $_POST['writer-article-add'];
  if(!empty($_POST['writer-article-add'])) {
    $sql = "INSERT INTO writers (name) VALUES ('$writer_name')";
    $query = mysqli_query($connect, $sql);
    echo "<div class='alert alert-success'>تم اضافة الكاتب</div>";
  } else {
    echo "<div class='alert alert-danger'>لم يتم اضافة الكاتب</div>";
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