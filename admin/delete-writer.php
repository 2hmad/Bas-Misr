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
    <a class="nav-link" href="add-writer.php" style="color:#333b77;font-family:'sans-serif',Cairo;padding-bottom: 16px;font-size: 17px;font-weight: 400;">اضافة مُدون</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="delete-writer.php" style="color:#333b77;font-family:'sans-serif',Cairo;padding-bottom: 16px;font-size: 17px;font-weight: 400;">حذف مُدون</a>
  </li>
</ul>
<br><br><br>
<div class="container">
  <form method="post">
<label style="display: block;font-family: 'sans-serif', Cairo;color: #333b77;">اسم الكاتب</label>
<select name="writer-delete-article" style="width:100%;
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
<button type="submit" name="delete-writer" style="width: 100%;
    min-height: 40px;
    border: 1px solid gray;
    border-radius: 5px;
    font-family: 'sans-serif', Cairo;
    background-color: #333b77;
    color: white;
    font-weight:bold">حذف الكاتب</button>

    <?php
if(isset($_POST['delete-writer'])) {
  $sql = "DELETE FROM writers WHERE name = '$name'";
  $query = mysqli_query($connect, $sql);
  echo "<div class='alert alert-success'>تم حذف الكاتب</div>";
}
    ?>
  </form>
</div>
<br><br><br>
<?php include('footer.php') ?>

    </body>
    <?php include('../scripts.php') ?>
</html>