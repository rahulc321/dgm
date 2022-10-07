 <?php include('header.php'); ?>
 <!-- Team Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
          <h1 class="display-6 mb-5">Blogs Details</h1>
        </div>
        <div class="row g-4">
          <?php
$ret=mysqli_query($conn,"select * from blogs where id=".$_GET['id']);
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>



          <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
          <a href="">
            <div class="team-item rounded">
              <img class="img-fluid" src="<?=IMG.$row['file']?>" alt="" style="width: 50%"/>
              <div class="text-center p-4">
                <h5><?=$row['title']?></h5>
                </a>
                <span><?=$row['description']?></span>
              </div>
               
            </div>

          </div>

<?php } ?>           
           
          
        </div>
      </div>
    </div>
    <!-- Team End -->
<?php include('footer.php'); ?>