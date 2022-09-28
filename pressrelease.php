<?php include('header.php'); ?>
    <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
          <h1 class="display-6 mb-5">
            Press Release
          </h1>
        </div>
        <div class="row g-4 justify-content-center">
          <?php
          $ret=mysqli_query($conn,"select * from press order By id desc");
          $cnt=1;
          while ($row=mysqli_fetch_array($ret)) {

          ?>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
                >
                  <img
                    class="img-fluid"
                    src="img/icon/icon-news1.png"
                    alt=""
                  />
                </div>
                <h4 class="mb-0"><?=$row['title']?></h4>
              </div>
              <p class="mb-4"><?=substr_replace($row['description'],'...',150)?>
              </p>
              <a target="_blank" download class="btn btn-light px-3" href="<?=IMG.$row['file']?>">Download</a>
            </div>
          </div>
           
           
          <?php } ?>
          
          
                          
                
                
        </div>
      </div>
    </div>
    <!-- Service End -->

 


<?php include('footer.php'); ?>