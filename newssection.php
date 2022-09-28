<?php include('header.php');?>

    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <h1 class="display-4 animated slideInDown mb-4">News Section</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            
            <li class="breadcrumb-item active" aria-current="page">News Section</li>
          </ol>
        </nav>
      </div>
    </div>
     <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
          <h1 class="display-6 mb-5">
            Our News Section
          </h1>
        </div>
        <div class="row g-4 justify-content-center">

          <?php
          $ret=mysqli_query($conn,"select * from news order By id desc");
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
              <a class="btn btn-light px-3" href="<?=$row['url']?>">Read More</a>
            </div>
          </div>
           
           
          <?php } ?>             
                
                
        </div>
      </div>
    </div>
    <!-- Service End -->


 


<?php include('footer.php');?>