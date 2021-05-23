<!DOCTYPE html>
<html lang="ar">
    <head>
    <title>تواصل معنا | جريدة إخباري بالعربي الإلكترونية</title>
        <?php include('links.php') ?>
    </head>
    <body style="direction:rtl;text-align:right">
        <?php include('navbar.php') ?>
<br>
    <h4 style="font-family: 'sans-serif', Cairo;color: #333b77;font-weight: bold;padding:10px">تواصل معنا</h4>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg">
<div id="contact-form">
<form method="POST">
<label style="display: block;font-family: 'sans-serif', Cairo;color: #333b77;">الاسم بالكامل</label>
<input type="text" name="full-name-contact" style="width:100%;
    padding: 8px;
    background: #efefef;
    border: 1px solid black;
    border-radius: 4px;
    outline: none;
    font-family: 'sans-serif', Cairo;" placeholder="ادخل اسمك بالكامل هنا">
<br><br>
<label style="display: block;font-family: 'sans-serif', Cairo;color: #333b77;">البريد الالكتروني</label>
<input type="email" name="email-contact" style="width:100%;
    padding: 8px;
    background: #efefef;
    border: 1px solid black;
    border-radius: 4px;
    outline: none;
    font-family: 'sans-serif', Cairo;" placeholder="ادخل بريدك الالكتروني">
<br><br>
<label style="display: block;font-family: 'sans-serif', Cairo;color: #333b77;">رقم الهاتف</label>
<input type="text" name="phone-contact" style="width:100%;
    padding: 8px;
    background: #efefef;
    border: 1px solid black;
    border-radius: 4px;
    outline: none;
    font-family: 'sans-serif', Cairo;" placeholder="اكتب رقم الهاتف مع رمز الدولة">
<br><br>
<label style="display: block;font-family: 'sans-serif', Cairo;color: #333b77;">نص الرسالة</label>
<textarea type="text" name="message-contact" style="width:100%;
    padding: 8px;
    background: #efefef;
    border: 1px solid black;
    border-radius: 4px;
    outline: none;
    font-family: 'sans-serif', Cairo;
    min-height: 140px;" placeholder="اكتب نص الرسالة"></textarea>
<br><br>
    <div class="g-recaptcha" data-sitekey="6LeRg78ZAAAAACAVPC9VNGQfatbO9SCLwywWVXRD"></div>
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