<!DOCTYPE HTML>
<html>
<head><meta name="viewport" content="width=device-width"/>
<meta name="description" content="Delhi Gram Panchayat Sangh, Delhi Pradesh">
<meta name="keywords" content="Delhi Gram Panchayat Sangh, Delhi Pradesh">
 <meta name="author" content="Than Singh Yadav">
 <meta name="google-translate-customization" content="27b47551e8919a1f-db3a124bdc655f54-g6f871dbb7cf1036f-e"></meta>
<title>Delhi Gram Panchayat Sangh</title>

 <script language="javascript">
function 
Check()
{
if
(document.Mail_form.name.value=="")
{
alert(
'Please Enter Your Name')
document.Mail_form.name.focus();

return false;
}


if
(document.Mail_form.email.value=="")
{
alert(
'Please enter your Email-ID')
document.Mail_form.email.focus();

return false;
}

else {


var pattern = /^[a-zA-Z0-9][a-zA-Z0-9._-]*\@[a-zA-Z0-9][a-zA-Z0-9._-]*\.[a-zA-Z0-9]{2,3}$/;

if (pattern.exec(document.Mail_form.email.value)== null)
{
alert(
"Please enter a valid Email address.\nExamples: mary@yahoo.com, mary.jones@mail-17.com, mary-jones@hotmail.com");
document.Mail_form.email.focus();


return false;
}

if

(document.Mail_form.comment.value=="")
{
alert(
'Please enter your Comments/Questions / Concerns')
document.Mail_form.comment.focus();

return false;
}
}
return
true;
}
</script>

<!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/icons.css"/>
<link rel="stylesheet" type="text/css" href="css/slider.css"/>
<link rel="stylesheet" type="text/css" href="css/skinblue.css"/><!-- change skin color -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<link rel="shortcut icon" href="images/favicon.ico">
<script src="js/jquery-1.9.0.min.js"></script><!-- the rest of the scripts at the bottom of the document -->
</head>
<body>


<!-- TOP LOGO & MENU
================================================== -->
<div class="grid">
    <div class="row space-bot">
        <!--Logo-->
        <div class="c4">
            <a href="index.php">
            <img src="images/logo.png" class="logo" alt="">
            </a>
        </div>
        <!--Menu-->
        <div class="c8">
            <nav id="topNav">
            <ul id="responsivemenu">
                <li class="active"><a href="index.php"><i class="icon-home homeicon"></i><span class="showmobile">Home</span></a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="joinus.php">Join Us</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="newspaper.php">News Paper</a></li>            
                <li class="last"><a href="joinus.php">Contact Us</a></li>
                
            </ul>
            </nav>
        </div>    
    </div>
</div>