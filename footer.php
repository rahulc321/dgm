    <div class="row space-bot">
        <div class="c12">
            <div class="wrapaction">
                <div class="c9">
                    <h1 class="subtitles">Have a question or need a concerns?</h1>
                     If you have any questions or concerns, please contact Mr. Than Singh Yadav @ 9811 570 416 or E-mail us <a href="mailto:delhigrampanchayatsangh@gmail.com">delhigrampanchayatsangh@gmail.com</a> we will assist you.
                </div>
                <div class="c3 text-center" style="margin-top:40px;">
                    <div class="actionbutton">
                        <a href="joinus.php" target="_self" title="Contact Us"><i class="icon-hand-up"></i> CONTACT NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- FOOTER
================================================== -->
<div id="wrapfooter">
    <div class="grid">
        <div class="row" id="footer">
            <!-- to top button  -->
            <p class="back-top floatright">
                <a href="#top"><span></span></a>
            </p>
            <!-- 1st column -->
            <div class="c3">
                <img src="images/logo-footer.png" style="padding-top: 70px;" alt="">
            </div>
            <!-- 2nd column -->
            <div class="c3">
                <h2 class="title"><i class="icon-link"></i>Links</h2>
                <hr class="footerstress">
                <ul>
                    <li><a href="index.php" title="Home">Home</a></li>
                    <li><a href="aboutus.php" title="About Us">About Us</a></li>
                    <li><a href="visionmission.php" title="Vision / Mission">Vision / Mission</a></li>
                    <li><a href="gallery.php" title="Gallery">Gallery</a></li>
                    <li><a href="makeadonation.php" title="Make a Donation">Make a Donation</a></li>
                    <li><a href="joinus.php" title="Online Membership">Online Membership</a></li>
                    <li><a href="presidentmessage.php" title="President Message">President Message</a></li>
                    <li><a href="newspaper.php" title="News Paper">News Paper</a></li>
                    <li><a href="termsandconditions.php" title="Terms & Conditions">Terms & Conditions</a></li>
                    <li><a href="privacypolicy.php" title="Privacy Policy">Privacy Policy</a></li>
                    <li><a href="joinus.php" title="Contact Us">Contact Us</a></li>

                </ul>
                
            </div>
            <!-- 3rd column -->
            <div class="c3">
                <h2 class="title"><i class="icon-envelope-alt"></i> Contact</h2>
                <hr class="footerstress">
                <dl>
                    <dt>RZ-239, Nangloi Saidan, Paschim Vihar, Delhi</dt>
                    <dt>New Delhi - 110087</dt>
                    <dd><span>Telephone:</span> 9811 570 416</dd>
                    <dd>E-mail: <a href="mailto:delhigrampanchayatsangh@gmail.com" title="delhigrampanchayatsangh@gmail.com">delhigrampanchayatsangh@gmail.com</a></dd>
                    <dd>Web: <a href="#" target="_self" title="www.delhigrampanchayatsangh.com">www.delhigrampanchayatsangh.com</a></dd>
                </dl>
                <ul class="social-links" style="margin-top:15px;">
                    <li class="twitter-link smallrightmargin">
                    <a href="#" class="twitter has-tip" target="_blank" title="Follow Us on Twitter">Twitter</a>
                    </li>
                    <li class="facebook-link smallrightmargin">
                    <a href="https://www.facebook.com/pages/Than-Singh-Yadav/1569241183321983" class="facebook has-tip" target="_blank" title="Join us on Facebook">Facebook</a>
                    </li>
                    <li class="google-link smallrightmargin">
                    <a href="#" class="google has-tip" title="Google +" target="_blank">Google</a>
                    </li>
                    
                </ul>
            </div>
            <!-- 4th column -->
            <div class="c3">
                <h2 class="title"><i class="icon-paper-clip"></i>Quick Contact</h2>
                <hr class="footerstress">
                 <form action="quickcontact.php" name="Mail_form" method="post" onSubmit="return Check();">
                        <div class="form">
                            <div class="c6 noleftmargin">
                                <label>Name</label>
                                <input type="text" name="name">
                            </div>
                            <div class="c6 noleftmargin">
                                <label>E-mail address</label>
                                <input type="text" name="email">
                            </div>
                            <label>Message</label>
                            <textarea name="comment" class="ctextarea" rows="4"></textarea>
                            <input type="submit" id="submit" class="button" style="font-size:12px;" value="SUBMIT">
                        </div>
                    </form>
            </div>
            <!-- end 4th column -->
        </div>
    </div>
</div>
<!-- copyright area -->
<div class="copyright">
    <div class="grid">
        <div class="row">
            <div class="c6">
                 Delhi Gram Panchayat Sangh &copy; 2022 - 2023. All Rights Reserved.
            </div>
            <div class="c6">
                <span class="right">
                 </span>
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT AREA -->
<!-- JAVASCRIPTS
================================================== -->
<!-- all -->
<script src="js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="js/common.js"></script>

<!-- slider -->
<script src="js/jquery.cslider.js"></script>

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>

<!-- carousel items -->
<script src="js/jquery.carouFredSel-6.0.3-packed.js"></script>

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>

<!-- Call Showcase - change 4 from min:4 and max:4 to the number of items you want visible -->
<script type="text/javascript">
$(window).load(function(){          
            $('#recent-projects').carouFredSel({
                responsive: true,
                width: '100%',
                auto: true,
                circular    : true,
                infinite    : false,
                prev : {
                    button      : "#car_prev",
                    key         : "left",
                        },
                next : {
                    button      : "#car_next",
                    key         : "right",
                            },
                swipe: {
                    onMouse: true,
                    onTouch: true
                    },
                scroll : 2000,
                items: {
                    visible: {
                        min: 4,
                        max: 4
                    }
                }
            });
        }); 
</script>

<!-- Call opacity on hover images from carousel-->
<script type="text/javascript">
$(document).ready(function(){
    $("img.imgOpa").hover(function() {
      $(this).stop().animate({opacity: "0.6"}, 'slow');
    },
    function() {
      $(this).stop().animate({opacity: "1.0"}, 'slow');
    });
  });
</script>
</body>
</html>