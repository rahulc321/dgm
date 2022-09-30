<?php include('header.php'); ?>
<!-- Page Header Start -->
<div
   class="container-fluid page-header py-5 mb-5 wow fadeIn"
   data-wow-delay="0.1s"
   >
   <div class="container py-5">
      <h1 class="display-4 animated slideInDown mb-4">Our Members</h1>
      <nav aria-label="breadcrumb animated slideInDown">
         <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Our Members</li>
         </ol>
      </nav>
   </div>
</div>
<!-- Page Header End -->
<!-- Features Start -->
<div class="container-xxl py-10">
   <div class="container">
      <div class="row g-10">
         <div class="ibox-content">
            <table class="table table-bordered mg-b-0" id="example">
               <thead>
                  <tr>
                     <th>S.NO</th>
                     <th>Name</th>
                     <th>Village</th>
                     <th>District</th>
                     <th>City</th>
                     <th>State</th>
                     <th>Country</th>
                  </tr>
               </thead>
               <?php
                  $ret=mysqli_query($conn,"select * from users where type=2 order By id desc");
                  $cnt=1;
                  while ($row=mysqli_fetch_array($ret)) {
                  
                  ?>
               <tbody>
                  <tr>
                     <td><?php echo $cnt;?></td>
                     <td><?php  echo $row['firstName'];?></td>
                     <td><?php  echo $row['village'];?></td>
                     <td><?php  echo $row['district'];?></td>
                     <td><?php  echo $row['city'];?></td>
                     <td><?php  echo $row['state'];?></td>
                     <td><?php  echo $row['country'];?></td>
                     </td>
                  </tr>
                  <?php 
                     $cnt=$cnt+1;
                     }?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
<!-- Features End -->
<?php include('footer.php'); ?>