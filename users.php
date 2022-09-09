<?php include('header.php');
	
	if(isset($_POST['submit']))
	{
	 
	$sql = "insert into users(firstName,email,phone,dob,type,state,city,country) values('".$_POST['firstName']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['dob']."',2,'".$_POST['state']."','".$_POST['city']."','".$_POST['country']."')";
	$query=mysqli_query($conn, $sql);
	if ($query) {
	$msg="You have successfully register, when admin will approve then you will list in users section";
	}
	else
	{
	  $msg="Something Went Wrong. Please try again";
	}


}

		
 ?>
 
<div class="grid">
	<div class="row space-bot">
		<!--INTRO-->
		<p style="color: green"><?=$msg?></p>
		<!--Box 1-->
		 <diiv class="wrapper wrapper-content animated fadeInRight">
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                    <?php
                     if(isset($_SESSION['success']) && $_SESSION['success'] !="")
                     {
                         echo '<h2>' .$_SESSION['success']. '</h2>';
                         unset($_SESSION['success']);
                     }
                     if(isset($_SESSION['status']) && $_SESSION['status'] !="")
                     {
                        echo '<h2>'. $_SESSION['status'].'</h2>';
                        unset($_SESSION['status']);
                     }
                     ?>
                        <div class="ibox-content">
                                 <table class="table table-bordered mg-b-0" id="example">
                                    <p style="color: blue; text-align: center;  font-size: 30px">Approved Users List </p>
              <thead>
                <tr>
                  <th>S.NO</th>
                  <th>First Name</th>
                   
                  <th>Mobile Number</th>
                  <th>Email</th>
              
                   <th>DOB</th>
                   <th>City</th>
                   <th>State</th>
                   <th>Country</th>
                    
                </tr>
              </thead>
              <?php
$ret=mysqli_query($conn,"select * from users where type=2");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              <tbody>
                 <tr>
                  <td><?php echo $cnt;?></td>
              
                  <td><?php  echo $row['firstName'];?></td>
                   
                  <td><?php  echo $row['phone'];?></td>
                  <td><?php  echo $row['email'];?></td>
                  
                
                 <td><?php  echo $row['dob'];?></td>
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
            </div>
		
	</div>
	 
</div>
<?php include('footer.php'); ?>