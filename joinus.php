<?php include('header.php');

if(isset($_POST['submit']))
  {
   
  $sql = "insert into users(firstName,email,phone,dob,type,state,city,country) values('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['dob']."',2,'".$_POST['state']."','".$_POST['city']."','".$_POST['country']."')";
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

    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <h1 class="display-4 animated slideInDown mb-4">Join Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            
            <li class="breadcrumb-item active" aria-current="page">Join Us</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->


    <div class="container-xxl py-12">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
            
            <p class="mb-12">
              Delhi Gram Panchayat Sangh (DGPS) is dedicated to the all-round uplift of women, education, farmers, labourers, all class of people...
            </p>
            <p style="color: green"><?=$msg?></p>
            <form action="" method="post">
                <div class="row g-3">
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="gname"
                        placeholder="Gurdian Name"
                       name="name"/>
                      <label for="gname">Your Name</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="email"
                        class="form-control"
                        id="gmail"
                        placeholder="Gurdian Email"
                     name="email" />
                      <label for="gmail">Your Email</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="cname"
                        placeholder="Child Name"
                      name="phone" />
                      <label for="cname">Your Mobile</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="date"
                        class="form-control"
                        id="cname"
                        placeholder="Child Name"
                      name="dob" />
                      <label for="cname">DOB</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="cage"
                        placeholder="Child Age"
                     name="state" />
                      <label for="cage">State</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="cage"
                        placeholder="Child Age"
                     name="city" />
                      <label for="cage">City</label>
                    </div>
                  </div>
                   <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="cage"
                        placeholder="Child Age"
                     name="country" />
                      <label for="cage">Country</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea
                        class="form-control"
                        placeholder="Leave a message here"
                        id="message"
                        style="height: 80px"
                     name="message" ></textarea>
                      <label for="message">Message</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary py-3 px-5" type="submit" name="submit">
                      Submit
                    </button>
                  </div>
                </div>
              </form>
          </div>
           
        </div>
      </div>
    </div>


 


<?php include('footer.php'); ?>