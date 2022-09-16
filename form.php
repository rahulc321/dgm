<?php
if(isset($_POST['submit'])){
      $to = 'rahul@yopmail.com';
      $subject = $_POST['subject'];
      $from = 'peterparker@email.com';
       
      // To send HTML mail, the Content-type header must be set
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
       
      // Create email headers
      $headers .= 'From: '.$from."\r\n".
          'Reply-To: '.$from."\r\n" .
          'X-Mailer: PHP/' . phpversion();
       
      // Compose a simple HTML email message
      $message = '<html><body>';
      $message .= '<p style="color:#080;font-size:18px;">Name : '.$_POST['name'].'</p>';
      $message .= '<p style="color:#080;font-size:18px;">Email : '.$_POST['email'].'</p>';
      $message .= '<p style="color:#080;font-size:18px;">Phone : '.$_POST['phone'].'</p>';
      $message .= '<p style="color:#080;font-size:18px;">Message : '.$_POST['message'].'</p>';
      $message .= '</body></html>';
       
      // Sending email
      if(mail($to, $subject, $message, $headers)){
          echo '<p style="color:green">Your mail has been sent successfully.</p>';
      } else{
          echo '<p style="color:red">Unable to send email. Please try again.</p>';
      }
}
?>
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
                        type="text"
                        class="form-control"
                        id="cage"
                        placeholder="Child Age"
                     name="subject" />
                      <label for="cage">Help Subject</label>
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