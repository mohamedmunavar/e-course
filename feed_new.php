


<html lang= "en">
<head>
<meta charset="utf-8"/>
<title>Main</title>
<link rel="stylesheet" type="text/css" href="main.css"/>
<meta name ="viewport" content="width=device-width, initial-scale=1.0">
<!--[if IE]>s
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<div id="wrapper">
<body background="wallpaper4.jpg">
<header><center><a href="index.html"><img src="http://37.media.tumblr.com/tumblr_m46salxOCJ1qz72ywo1_1280.png" width="1000" height="150"/></a></header>
<nav>
<ul>
<li><a href="home.html"><b>Home</b></a></li>
<li><a href="test.html"><b>Take Test</b></a></li>
<li><a href="contact.html"><b>Contact Us</b></a></li>
<li><a href="feed_new.php"><b>Feedback</b></a></li>
</ul>
</nav>
</div>



<!--<form  method="POST" action="#contactus">
Your name:<br><input type="text" name="realname"><br>
Your email:<br><input type="text" name="email"><br>
Your comments:<br>
<textarea name="comments" id="comments" rows="10" cols="35">
</textarea> <br>
</form>

<input type="submit" name="chumma" value="Submit"> 
<form action="URL to form script" method="POST">
<marquee>FEEDBACK IS THE BREAKFAST OF CHAMPIONS - <B>KEN BLANCHARD</B> </marquee>
</form>


-->
<div class="panel" id="contactus">
                        <h1>Feel free to send us a message</h1>
                        <div id="contact_form">
                            <form method="post" name="contact" action="#contactus">
                                
                                <label for="author">Your Name:</label> <input type="text" id="author" name="author"  />
                                <div class="cleaner_h10"></div><br>
                                
                                <label for="email">Your Email:</label> <input type="text" id="email" name="email"  />
                                <div class="cleaner_h10"></div><br>
                                
                                <label for="text">Message:</label><br>  <textarea id="text" name="text" rows="15" cols="70"></textarea>
                                <div class="cleaner_h10"></div>
                                
                               <!--  <button type="submit" name="save">Send</button>  -->
                                <input type="submit" class="submit_btn" name="submit" value="Send" />
                                <input type="reset" class="submit_btn" name="reset" id="reset" value="Reset" />
                            </form>
						</div>
                    </div>
                </div>
			</div>
            
            <?php
            if(isset($_POST["submit"]))
            {
                $name = $_POST["author"];
                $email = $_POST["email"];
                $msg = $_POST["text"];
                
                // database name = blood
                // table name feedback
                // columns = sno,name,email,message
                $con=mysqli_connect("localhost","root","","muna");

                if(mysqli_query($con,"INSERT into feedback values ('$name','$email','$msg')"))
                {
                    echo '<script> alert("Feedback Received! Thank You!");</script>';
                }
                else
                {
                    echo mysqli_error($con);
                }
            }
            ?>

        <title>test</title>
        <body>
            <div style="position: relative">
<font color="black">
                <p style="position: bottom; bottom: 0; width:100%; text-align: center"> SkillShare is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding.While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy.
Copyright 2015-2017 by Refsnes Data. <br>All Rights Reserved.</br>

                </p>
</font>
            </div>
        </body>

		  