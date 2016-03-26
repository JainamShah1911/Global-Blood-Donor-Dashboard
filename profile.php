<?php
	include "session.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>donate blood</title>
<meta name="keywords" content="glossy box, services, free templates, website templates, CSS, HTML" />
<meta name="description" content="Glossy Box Services - free website template by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />

</head>
<body>

<div id="templatemo_wrapper_outer">
	<div id="templatemo_wrapper">
    
    	<div id="templatemo_header">
            <div id="site_title">
                <h1><a href="http://www.templatemo.com" rel="nofollow"><strong>Vadodara Donation</strong><span>Donate Once</span></a></h1>
            </div> <!-- end of site_title -->
           
            <ul id="social_box">
                <li><a href="http://www.facebook.com/templatemo"><img src="images/facebook.png" alt="facebook" /></a></li>
                <li><a href="#"><img src="images/twitter.png" alt="twitter" /></a></li>
                <li><a href="#"><img src="images/linkedin.png" alt="linkin" /></a></li>
                <li><a href="#"><img src="images/technorati.png" alt="technorati" /></a></li>
                <li><a href="#"><img src="images/myspace.png" alt="myspace" /></a></li>                
            </ul>
			<div class="cleaner"></div>
		</div>
        
    <div id="templatemo_menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">about us</a></li>
                <li><a href="profile.php"class="current">Profile</a></li>
                <li><a href="services.php">search donor</a></li>
                <li><a href="contact.php">Contact us</a></li>
				<li><a href="logout.php">Logout</a></li>
            </ul>    	
        </div> <!-- end of templatemo_menu -->
        
        <div id="templatemo_slider_wrapper">
        
        	<div id="templatemo_slider">
            
				<div id="one" class="contentslider">
                    <div class="cs_wrapper">
                        <div class="cs_slider">
                        
                            <div class="cs_article">
                            	<div class="slider_content_wrapper">
									
									<div class="slider_image">
										<img src="images/slider/templatemo_slide01.jpg" alt="Mauris quis eros arcu" />
									</div>
									
									<div class="slider_content">
                                       <h2>News</h2>
                                        <p><marquee behavior="slide" scrollamount="3" direction="up">Bload donation at ahmdavad organized by "value life" organization for more details click <a href="www.blooddonate.com"><br/>value life</a><br/><br/>Save the girl child campaign...heres a link for more details <a href="www.girlchild.com"> Save The Girl Child</a></p></marquee>
										
									</div>
                                
								</div>
                            </div><!-- End cs_article -->
                            
                            <div class="cs_article">
                            	<div class="slider_content_wrapper">
									
									<div class="slider_image">
										<img src="images/slider/templatemo_slide02.jpg" alt="Cras porta porta turpis" />
									</div>
                     			
									<div class="slider_content">
                                         <h2>When Donate?</h2>
                                        <p>
										<marquee behavior="slide" scrollamount="3" direction="up">
										-	You are between age group of 18-60 years. <br/>
										-	Your weight is 45 kgs or more.<br/>
										-	Your hemoglobin is 12.5 gm% minimum.<br/>
										-	Your last blood donation was 3 or more months earlier.<br/>
										-	You are healthy and have not suffered from malaria typhoid or other transmissible disease in the recent past.</p></marquee>
                                    </div>
                                
								</div>
                            </div><!-- End cs_article -->
                            
                            <div class="cs_article">
                            	<div class="slider_content_wrapper">
									
									<div class="slider_image">
										<img src="images/slider/templatemo_slide03.jpg" alt="Nullam ac mi id massa consectetur" />
									</div>
									
									<div class="slider_content">
                                       <h2>Why Donate ?</h2>
                                        <p><marquee behavior="slide" scrollamount="3" direction="up">
										   Donating blood is a life saving measure especially when you have a rare blood type.<br/>
										   Blood donation is safe and simple.<br/>
										   It takes only about 10 minutes to donate blood - less than the time of an average telephone call.<br/>
										   We can save upto 3 to 4 precious lives by donating blood.</p></marquee>
                                    </div>
                                
								</div>
                            </div><!-- End cs_article -->
                            
                            <div class="cs_article">
                            	<div class="slider_content_wrapper">
									
									<div class="slider_image">
										<img src="images/slider/templatemo_slide04.jpg" alt="Maecenas venenatis viverra nisi" />
									</div>
									
									<div class="slider_content">
                                        <h5>blood match...</h5>
                                        <p><img src="./images/bloodmatch.png" height="150px" width="300px"></img></p>
                                        <div class="btn_more"><a href="#">More...</a></div>
                                    </div>
                                
								</div>
                            </div><!-- End cs_article -->
                      
                        </div><!-- End cs_slider -->
                    </div><!-- End cs_wrapper -->
                </div><!-- End contentslider -->
                
                <!-- Site JavaScript -->
                <script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
                <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
                <script type="text/javascript" src="js/jquery.ennui.contentslider.js"></script>
                <script type="text/javascript">
                    $(function() {
                    $('#one').ContentSlider({
                    width : '940px',
                    height : '240px',
                    speed : 400,
                    easing : 'easeOutSine'
                    });
                    });
                </script>
                <script src="js/jquery.chili-2.2.js" type="text/javascript"></script>
                <script src="js/chili/recipes.js" type="text/javascript"></script>
                <div class="cleaner"></div>
            	
            </div>
        
        </div>         
		<div id="templatemo_content_wrapper">
            <div id="content">
				<div style="border:1px solid;background:white;color:black">
					<form action="user_edit.php" method="post">
					<table cellspacing="15px">
						<?php
							include "connect.php";
							$un = $_SESSION["uname"];
							$q = mysql_query("SELECT * FROM project.users WHERE uname='$un'") or die(mysql_error());
							while($u=mysql_fetch_array($q))
							{	
								print "<tr><td>Full Name : </td><td><input type='text' name='name' value='".$u['name']."' /></td></tr>";
								print "<tr><td>User Name : </td><td><input type='text' name='uname' value='".$u['uname']."' /></td></tr>";
								print "<tr><td>Password : </td><td><input type='text' name='upwd' value='".$u['password']."' /></td></tr>";
								print "<tr><td>DOB : </td><td><input type='text' name='dob' value='".$u['dob']."' /></td></tr>";
								print "<tr><td>Blood Group : </td><td><input type='text' name='bld_grp' value='".$u['bld_grp']."' /></td></tr>";
								print "<tr><td>Gender : </td><td><input type='text' name='gender' value='".$u['gender']."' /></td></tr>";
								print "<tr><td>Weight : </td><td><input type='text' name='weight' value='".$u['weight']."' /></td></tr>";
								print "<tr><td>Res. no. : </td><td><input type='text' name='r_phn' value='".$u['r_phn']."' /></td></tr>";
								print "<tr><td>Office no. : </td><td><input type='text' name='o_phn' value='".$u['o_phn']."' /></td></tr>";
								print "<tr><td>Mobile no. : </td><td><input type='text' name='m_phn' value='".$u['m_phn']."' /></td></tr>";
								print "<tr><td>Email : </td><td><input type='text' name='email' value='".$u['email']."' /></td></tr>";
								print "<tr><td>Address : </td><td><input type='text' name='address' value='".$u['address']."' /></td></tr>";
							}
						?>	
						<tr>
							<td align="center"><input type="submit" value="Save" /></td>
							<td align="center"><a href="delete_user.php" value="Delete Acoount" >Delete Account ?</a></td>
						</tr>
					</table>
				</div>
					
				</div>
			</div>
			
            <div class="cleaner"></div>        
        </div>
		
		<div id="templatemo_content_wrapper_bottm"></div>
   
       	<div id="templatemo_footer">
		
             Copyright © 2048 <a href="#">Your Company Name</a> | Designed by <a href="http://www.templatemo.com" rel="nofollow" target="_parent">Free CSS Templates</a>
			 
		</div>
        
    </div> <!-- end of wrapper -->
</div> <!-- end of wrapper_outer -->



<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>