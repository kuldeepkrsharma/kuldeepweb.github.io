<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="index.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<title>Kuldeep</title>
</head>

<body>
	<nav>
		<div class="heading">Welcome</div>
	</nav>

	
	<div class="line" id="Home">
		<div class="side1">
			<h1>Kuldeep Kumar Sharma</h1>
			
		</div>
		<div class="side2">
			<img src="portfolio/man_smoke.jpg"
				width="500">
		</div>
	</div>

	<section class="about" id="My Projects">
		<div class="content">
			<center >
				<h2>My works</h2>
			</center>
			<div class="boxes">
			    
<?php
$directory = '/storage/ssd1/696/21001696/public_html'; // Replace with the actual path to your directory

// Get a list of all directories
$folders = array_diff(scandir($directory), array('..', '.'));

// Display the folders on the webpage
foreach ($folders as $folder) {
    if (is_dir($directory . '/' . $folder)) {
        echo "
            
            <div class=\"box\">
					<div class=\"topic\">
						<a href=\"$folder\" target=\"_blank\">
							$folder
						</a>
					</div>
					<p>
					    
					</p>
				</div>
        ";
    }
}
?>
				
			</div>
		</div>
	</section>

<!--	<section class="contact" id="contact">-->
<!--		<div class="content">-->
<!--			<div class="title"><span>Sign Up</span></div>-->
<!--			<div class="contactMenu">-->
<!--				<div class="input1">-->
<!--					<div class="label1">Your Name</div>-->
<!--					<div class="input2">-->
<!--						<input type="text"-->
<!--							placeholder="Enter your Name here">-->
<!--					</div>-->
<!--					<div class="label1">-->
<!--						<label>Your Email</label>-->
<!--					</div>-->
<!--					<div class="input2">-->
<!--						<input type="text"-->
<!--							placeholder="Enter your Email here">-->
<!--					</div>-->
<!--					<div class="label1">-->
<!--						<label>Your Password</label>-->
<!--					</div>-->
<!--					<div class="input2">-->
<!--						<input type="text"-->
<!--							placeholder="Enter your Password here">-->
<!--					</div>-->
<!--					<div class="button">-->
<!--						<button>Sign Up</button>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="input3">-->
<!--					<div class="rightside1">-->
<!--						<div class="title1">-->
<!--							<span>-->
<!--								Contact Us-->
<!--							</span>-->
<!--						</div>-->
<!--						<div class="content1">-->
<!--						    <a href="mailto:kuldeepkrsharma00@gmail.com">kuldeepkrsharma00@gmail.com</a>-->

<!--						</div>-->
<!--						<div class="title1">-->
<!--							<span>More Information</span>-->
<!--						</div>-->
<!--						<div class="content1">-->
<!--Currently working as a software trainee at Nathcorp Inc. with working related fields such as ASP .NET MVC, Office 365.-->
<!--Having hands-on experience in creating and executing test scenarios and test cases for web, mobile, and desktop applications. I am proficient in test automation using Selenium and Appium, as well as desktop automation tools. My knowledge of programming languages and testing frameworks enables me to write robust and efficient automated tests, test scenarios and test cases.-->
<!--Skilled in Core java, HTML, JavaScript, CSS, and PHP along with good knowledge in frameworks such as Bootstrap, W3.css. Eager to learn new skills and help the organization in the development and deployment of websites. Worked with PHP framework Laravel, Animate.css along with wow.js-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</section>-->
	<!-- Footer section -->
	<footer>
		
	</footer>
	<script src="index.js"></script>
	<div style="display:none">
</body>

</html>





