<!DOCTYPE html>
<html lang="ar">
    <head>
    <title>ارسال مقال | جريدة إخباري بالعربي الإلكترونية</title>
        <?php include('links.php') ?>
    </head>
    <body style="direction:rtl;text-align:right">
        <?php include('navbar.php') ?>
<br>
    <h4 style="font-family: 'sans-serif', Cairo;color: #333b77;font-weight: bold;padding:10px">ارسال مقال للمراجعة</h4>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg">
<div id="contact-form">
<form method="POST">
<label style="display: block;font-family: 'sans-serif', Cairo;color: #333b77;">اسم الكاتب</label>
<input type="text" name="full-name-article" style="width:100%;
    padding: 8px;
    background: #efefef;
    border: 1px solid black;
    border-radius: 4px;
    outline: none;
    font-family: 'sans-serif', Cairo;" placeholder="ادخل اسمك بالكامل هنا">
<br><br>
<label style="display: block;font-family: 'sans-serif', Cairo;color: #333b77;">البريد الالكتروني</label>
<input type="email" name="email-article" style="width:100%;
    padding: 8px;
    background: #efefef;
    border: 1px solid black;
    border-radius: 4px;
    outline: none;
    font-family: 'sans-serif', Cairo;" placeholder="ادخل بريدك الالكتروني">
<br><br>
<label style="display: block;font-family: 'sans-serif', Cairo;color: #333b77;">نبذة مختصرة عنك</label>
<textarea type="text" name="detail-writer" id="word_count" style="width:100%;
    padding: 8px;
    background: #efefef;
    border: 1px solid black;
    border-radius: 4px;
    outline: none;
    font-family: 'sans-serif', Cairo;
    min-height: 140px;" placeholder="نبذه مختصرة عنك (حد اقصي للكلمات 15 كلمة)"></textarea>
    <br>
    مجموع الكلمات المكتوبة : <span id="display_count">0</span> كلمة ... الكلمات الباقية: <span id="word_left">15</span>
<br><br>
<label style="display: block;font-family: 'sans-serif', Cairo;color: #333b77;">نص المقال</label>
<textarea type="text" name="article" style="width:100%;
    padding: 8px;
    background: #efefef;
    border: 1px solid black;
    border-radius: 4px;
    outline: none;
    font-family: 'sans-serif', Cairo;
    min-height: 140px;" placeholder="المقال"></textarea>
<br><br>
    <div class="g-recaptcha" data-sitekey="6LeRg78ZAAAAACAVPC9VNGQfatbO9SCLwywWVXRD"></div>
    <br><br>
<div class="input-file-container">  
    <input class="input-file" id="my-file" type="file" accept=".doc, .docx" required>
    <label tabindex="0" for="my-file" class="input-file-trigger">رفع المقال بصيغة ملف Word</label>
  </div>
  <p class="file-return"></p>
<br>
    <button type="submit" style="width: 100%;
    min-height: 40px;
    border: 1px solid gray;
    border-radius: 5px;
    font-family: 'sans-serif', Cairo;
    background-color: #333b77;
    color: white;
    font-weight:bold">ارسال</button>
</form>

</div>
        </div>
        <div class="col-lg"><br><br><br>
<img src="img/contact-us-img.jpg" style="max-width: 300px;
    border-radius: 12px;
    margin-left: auto;
    margin-right: auto;
    display: block;
    -webkit-box-shadow: -74px -80px 0 -41px #333b76;
    -moz-box-shadow: -74px -80px 0 -41px #333b76;
    -o-box-shadow: -74px -80px 0 -41px #333b76;
    box-shadow: -74px -80px 0 -41px #333b76;">
        </div>
    </div>
</div>
 <br><br><br>
        <?php include('footer.php') ?>
    </body>
    <?php include('scripts.php') ?>
</html>