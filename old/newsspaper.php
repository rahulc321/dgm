<?php  include('header.php'); ?>
	<div class="boxedshadow">
	</div>
<!-- START content area
================================================== -->
<div class="grid">
	<div class="row space-bot">
		<!--INTRO-->



		
		<!--Box 1-->
		<div class="c12">
			<h2 class="title hometitlebg"><b>Gallery</b></h2>
			<div class="noshadowbox">
				<br>
				
<div class="c6 text-center" style="margin-top:40px;">
					<div class="actionbutton">
						<a href="#" target="_self" title="PREVIOUS"><i class="icon-hand-left"></i>PREVIOUS</a>
						<br>
					</div>
				</div>				
		
<div class="c6 text-center" style="margin-top:40px;">
					<div class="actionbutton">
						<a href="#" target="_self" title="NEXT"><i class="icon-hand-right"></i>NEXT</a>
						<br>
					</div>
				</div>		
	<br><br><br><br>

	
<div class="gallery">
  <figure>
    <img src="images/gallery1.jpg" alt="" />
    <figcaption>Nabharat Times <small>February 08, 2022</small></figcaption>
  </figure>
  <figure>
    <img src="images/gallery1.jpg" alt="" />
    <figcaption>Times of India <small>February 08, 2022</small></figcaption>
  </figure>
  <figure>
    <img src="images/gallery1.jpg" alt="" />
    
      <figcaption>Jansatta <small>February 08, 2022</small></figcaption>
    </figcaption>
  </figure>
  <figure>
    <img src="images/gallery1.jpg" alt="" />
    <figcaption>Sandhya Times <small>February 08, 2022</small></figcaption>
  </figure>
  <figure>
    <img src="images/gallery1.jpg" alt="" />
    <figcaption>Vaibhav Khabar <small>February 08, 2022</small></figcaption>
  </figure>
  <figure>
    <img src="images/gallery1.jpg" alt="" />
    <figcaption>Nabharat Times <small>February 08, 2022</small></figcaption>
  </figure>
  
</div>

<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
  <symbol id="close" viewBox="0 0 18 18">
    <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M9,0.493C4.302,0.493,0.493,4.302,0.493,9S4.302,17.507,9,17.507
			S17.507,13.698,17.507,9S13.698,0.493,9,0.493z M12.491,11.491c0.292,0.296,0.292,0.773,0,1.068c-0.293,0.295-0.767,0.295-1.059,0
			l-2.435-2.457L6.564,12.56c-0.292,0.295-0.766,0.295-1.058,0c-0.292-0.295-0.292-0.772,0-1.068L7.94,9.035L5.435,6.507
			c-0.292-0.295-0.292-0.773,0-1.068c0.293-0.295,0.766-0.295,1.059,0l2.504,2.528l2.505-2.528c0.292-0.295,0.767-0.295,1.059,0
			s0.292,0.773,0,1.068l-2.505,2.528L12.491,11.491z"/>
  </symbol>
</svg>
<script>
    popup = {
  init: function(){
    $('figure').click(function(){
      popup.open($(this));
    });
    
    $(document).on('click', '.popup img', function(){
      return false;
    }).on('click', '.popup', function(){
      popup.close();
    })
  },
  open: function($figure) {
    $('.gallery').addClass('pop');
    $popup = $('<div class="popup" />').appendTo($('body'));
    $fig = $figure.clone().appendTo($('.popup'));
    $bg = $('<div class="bg" />').appendTo($('.popup'));
    $close = $('<div class="close"><svg><use xlink:href="#close"></use></svg></div>').appendTo($fig);
    $shadow = $('<div class="shadow" />').appendTo($fig);
    src = $('img', $fig).attr('src');
    $shadow.css({backgroundImage: 'url(' + src + ')'});
    $bg.css({backgroundImage: 'url(' + src + ')'});
    setTimeout(function(){
      $('.popup').addClass('pop');
    }, 10);
  },
  close: function(){
    $('.gallery, .popup').removeClass('pop');
    setTimeout(function(){
      $('.popup').remove()
    }, 100);
  }
}

popup.init()

</script>
		
	</div>
</div>
				
			</div>
		
	
	<div class="row space-bot">
		<div class="c12">
			<div class="wrapaction">
				<div class="c9">
					<h1 class="subtitles">Have a question or need a concerns?</h1>
					 If you have any questions or concerns, please contact Mr. Than Singh Yadav @ 9811 570 416 or E-mail us <a href="mailto:delhigrampanchayatsangh@gmail.com">delhigrampanchayatsangh@gmail.com</a> we will assist you.
				</div>
				<div class="c3 text-center" style="margin-top:40px;">
					<div class="actionbutton">
						<a href="contactus.html" target="_self" title="Contact Us"><i class="icon-hand-up"></i> CONTACT NOW</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<?php  include('footer.php'); ?>