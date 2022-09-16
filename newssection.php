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
    <!-- Page Header End -->

    <?php
          $ret=mysqli_query($conn,"select * from news order By id desc");
          $cnt=1;
          $row=mysqli_fetch_array($ret);

          ?>
    <!-- Features Start -->
    <div class="container-xxl py-10">
      <div class="container">
        <div class="row g-10">
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-6 mb-5"><?=$row['title']?></h1>
            <img src="<?=IMG.$row['file']?>" alt=""  style="width: 100%;height: 500px;"/>
            <p class="mb-4"><?=$row['description']?></p>            
          </div>
        </div>
      </div>
    </div>
    <!-- Features End -->


 


<?php include('footer.php');?>