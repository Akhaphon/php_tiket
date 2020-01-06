<!-- test -->
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
<meta charset="UTF-8">
<title>Buy Ticket</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stepper.js"></script>

<style type="text/css">
.outer-container {
	padding: 60px;
	background-color: white;
}

.step-content {
	padding: 40px 0;
}

.nav {
	padding-left: 0;
	margin-bottom: 0;
	list-style: none;
}

.stage {
	padding-left: 150px;
	padding-right: 150px;
	margin-right: 40px;
}

.stage-1 {
	background-color: #EEE5DE;
	text-align: center;
	height: 120px;
	vertical-align: middle;
	padding: 50px;
}

.zone-A {
	margin-top: 15px;
	margin-right: 150px;
}

.zone-A-1 {
	height: 150px;
	background-color: #FAF0E6;
	text-align: center;
	padding: 60px;
	cursor: pointer;
}

.zone-B {
	height: 150px;
	background-color: #FFDAB9;
	text-align: center;
	padding: 60px;
	cursor: pointer;
}

.font {
	font-size: 28px;
	font-weight: bold;
}
</style>

<script type="text/javascript">

</script>



</head>

<body>
	<div id="header">
		<div>
			<div id="logo">
				<a href="Home.php"><img src="images/logo.png" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				<li><a href="Home.php">Home</a></li>
				<li class="selected"><a href="Buy.php">Buy Ticket</a></li>
				<li><a href="Register.php">Register</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
	</div>
	<div id="contents" style="padding-top: 30px;">
		<div class="outer-container">
			<div id="wizard" class="aiia-wizard" style="display: none;">

				<div class="aiia-wizard-step">
					<h1>แผนผังการแสดง</h1>
					<div class="step-content">
						<div class="shadow-sm p-3 mb-5 bg-white rounded">
							<div class="row" style="background-color: #EEE9E9; padding: 10px">
								<div class="col-md-3 col-md-push-9">
									<img src="images/1_1.jpg" alt="Img"
										style="width: 180px; height: 250px">
								</div>
								<div class="col-md-9 col-md-pull-3">
									<div class="row">
										<div class="col-md-12">
											<label
												style="font-size: 24px; color: red; font-weight: bold;">Khalid
												Free Spirit World Tour Live in Bangkok 2020</label>
										</div>
									</div>

									<div class="row">
										<div class="col-md-4">
											<label style="color: red; font-weight: bold;">สถานที่แสดง /
												Venue :</label>
										</div>
										<div class="col-md-8">เซ็นทรัลลาดพร้าว ฮอล์ 5</div>
									</div>

									<div class="row">
										<div class="col-md-4">
											<label style="color: red; font-weight: bold;">ผู้จัด /
												Promoter</label>
										</div>
										<div class="col-md-8">Thai TV 3</div>
									</div>

									<div class="row">
										<div class="col-md-7">
											<label style="color: red; font-weight: bold;">วันและเวลาการแสดง
												/ Show Date & Time : </label>
										</div>
										<div class="col-md-5">วัน เสาร์ ที่ 24 มีนาคม 2563</div>
									</div>
								</div>
							</div>
						</div>

						<div class="shadow-sm p-3 mb-5 bg-white rounded">
							<div class="row stage">
								<div class="col-md-9 stage-1">
									<label style="font-size: 20px; font-weight: bold;">STAGE</label>
								</div>
								<div class="col-md-3"></div>
							</div>

							<div class="row zone-A">
								<div
									class="col-md-5 pull-right aiia-wizard-button-next zone-A-1">
									<label class="font">A1</label>
								</div>
								<div class="col-md-2"></div>
								<div
									class="col-md-5 pull-right aiia-wizard-button-next zone-A-1">
									<label class="font">A2</label>
								</div>
							</div>

							<div class="row zone-A">
								<div class="col-md-5  pull-right aiia-wizard-button-next zone-B">
									<label class="font">B1</label>
								</div>
								<div class="col-md-2"></div>
								<div class="col-md-5 pull-right aiia-wizard-button-next zone-B">
									<label class="font">B2</label>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="aiia-wizard-step">
					<h1>เลือกที่นั่ง</h1>
					<div class="step-content">The aiiaWizard plugin is Twitter
						Bootstrap 3.x oriented, thus responsive. It takes your input form
						elements (or any other HTML element for that matter) and breaks
						them down into as many steps as you set them to. In fact, in some
						way the result is very similar to the "Twitter Bootstrap tab
						plugin, but instead of tabs and corresponding content panels, you
						have progress buttons and steps. Steps are the elements that hold
						your form / HTML content.</div>
				</div>

				<div class="aiia-wizard-step">
					<h1>ยืนยันการชำระเงิน / Confirm</h1>
					<div class="step-content">You can also compare this plugin to a
						carousel, but then again it is not a carousel. Well, maybe I'll
						update the plugin so that it will have different modes (tabs,
						slider, carousel...). But right now it serves for one purpose only
						and that is creating a Wizard with steps, plain and simple. The
						aiiaPlugin may as well be a hybrid between the Tabs Twitter
						Bootstrap and the carousel plugin if you like.</div>
				</div>



			</div>
		</div>
	</div>
	<div id="footer">
		<div id="connect">
			<a href="http://freewebsitetemplates.com/go/facebook/"
				target="_blank" class="facebook"></a><a
				href="http://www.freewebsitetemplates.com/misc/contact/"
				target="_blank" class="email"></a><a
				href="http://freewebsitetemplates.com/go/twitter/" target="_blank"
				class="twitter"></a><a
				href="http://freewebsitetemplates.com/go/googleplus/"
				target="_blank" class="googleplus"></a>
		</div>
		<p>© 2023 Vistida. All Rights Reserved.</p>
	</div>
</body>
</html>

