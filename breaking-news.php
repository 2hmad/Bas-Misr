<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
                <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 news"><span class="d-flex align-items-center" style="font-family: 'Sans-serif', Cairo">&nbsp;أخر الاخبار</span></div>
                <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                <?php
$sql = "SELECT * FROM articles ORDER BY id DESC LIMIT 6";
$query = mysqli_query($connect, $sql);
while($row=mysqli_fetch_array($query)){
  $id=$row['id'];
  $title=$row['title'];
  echo "
  <a href='article.php?id=$id'><span style='font-family: Cairo;color: #e12412;'>$title</span></a>
  <span class='dot'></span>
  ";
}
                ?>
              </marquee>
            </div>
        </div>
    </div>
</div>
