 <?php include('header.php'); ?>
 <!-- Team Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
          <h1 class="display-6 mb-5">Blogs</h1>
        </div>
        <div class="row g-4">
          <?php
$ret=mysqli_query($conn,"select * from blogs order By id desc");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>



          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <a href="blog-details.php?id=<?=$row['id']?>">
            <div class="team-item rounded">
              <img class="img-fluid" src="<?=IMG.$row['file']?>" alt="" />
              <div class="text-center p-4">
                <h5><?=$row['title']?></h5>
                </a>
                <span><?=substr($row['description'],0,50)?></span>
              </div>
               
            </div>

          </div>

<?php } ?>           
           
          
        </div>
      </div>
    </div>
    <!-- Team End -->
<?php include('footer.php'); ?>