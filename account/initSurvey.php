<?php 
   include('config.php');
   include('const/check.php');

   if($profileRow['surveyCompleted'] == 1){
      echo "<script>window.location.href='dashboard'</script>";
   }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Limmo - Register, Reservation, Questionare, Reviews, Quotation form Multipurpose Wizard with SMTP and HTML email support">
		<meta name="author" content="Ansonika">
		<title>SIT BBSR Survey</title>
		<!-- Favicon -->
		<link rel="icon" href="https://silicon.ac.in/wp-content/themes/sit/favicon.ico" type="image/x-icon">
		<!-- GOOGLE WEB FONT -->
		<link rel="preconnect" href="https://fonts.gstatic.com/">
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
		<!-- BASE CSS -->
		<link href="formAssets/css/bootstrap.min.css" rel="stylesheet">
		<link href="formAssets/css/style.css" rel="stylesheet">
		<link href="formAssets/css/vendors.css" rel="stylesheet">
		<!-- ALTERNATIVE COLORS CSS -->
		<link href="#" id="colors" rel="stylesheet">
	</head>
	<body class="bg_color_gray">
		<div id="preloader">
			<div data-loader="circle-side"></div>
		</div>
		<!-- /Preload -->
		<div id="loader_form">
			<div data-loader="circle-side-2"></div>
		</div>
		<!-- /loader_form -->
		<div class="min-vh-100 d-flex flex-column">
			<header>
				<div class="container-fluid">
					<div class="row d-flex align-items-center">
						<div class="col-4">
						</div>
						<div class="col-4 text-center">
							<a href="https://www.silicon.ac.in" target="_blank"><img src="https://silicon.ac.in/wp-content/themes/sit/assets/img/sit-logo.svg" alt="" class="img-fluid" width="95" height="30"></a>
						</div>
						<div class="col-4">
							<div id="social">
								<ul>
									<li><a href="https://www.facebook.com/siliconite/" target="_blank"><i class="bi bi-facebook"></i></a></li>
									<li><a href="https://twitter.com/Silicontech_bbs?s=08" target="_blank"><i class="bi bi-twitter"></i></a></li>
									<li><a href="https://www.instagram.com/silicontech_bbs/" target="_blank"><i class="bi bi-instagram" target="_blank"></i></a></li>
								</ul>
							</div>
							<!-- /social -->
						</div>
					</div>
				</div>
				<!-- /container -->
			</header>
			<!-- /header -->
			<!-- /offcanvas nav -->
			<div class="container-fluid d-flex flex-column my-auto">
				<div id="wizard_container">
					<div id="top-wizard">
						<div id="progressbar"></div>
					</div>
					<!-- /top-wizard -->
					<form name="example-1" id="wrapped" method="POST" action="dataHandler">
                  <input type="hidden" name="intent" value="submitReviewForm">
                  <input type="hidden" name="user" value="<?php echo $username; ?>">
                  <input id="website" name="website" type="text" value="">
						<div id="middle-wizard">
                     <!-- Step -->
							<div class="step">
								<div class="question_title">
									<h3>Admission Process and Exams Info</h3>
								</div>
								<div class="row justify-content-center mt-5">
									<div class="col-md-10">
										<div class="review_block_smiles">
											<ul class="clearfix">
												<li>
													<div class="container_smile">
														<input type="radio" id="very_bad_1" name="question_1" class="required" value="1">
														<label class="radio smile_1" for="very_bad_1"><span>Very bad</span></label>
													</div>
												</li>
												<li>
													<div class="container_smile">
														<input type="radio" id="bad_1" name="question_1" class="required" value="2">
														<label class="radio smile_2" for="bad_1"><span>Bad</span></label>
													</div>
												</li>
												<li>
													<div class="container_smile">
														<input type="radio" id="average_1" name="question_1" class="required" value="3">
														<label class="radio smile_3" for="average_1"><span>Average</span></label>
													</div>
												</li>
												<li>
													<div class="container_smile">
														<input type="radio" id="good_1" name="question_1" class="required" value="4">
														<label class="radio smile_4" for="good_1"><span>Good</span></label>
													</div>
												</li>
												<li>
													<div class="container_smile">
														<input type="radio" id="very_good_1" name="question_1" class="required" value="5">
														<label class="radio smile_5" for="very_good_1"><span>Very Good</span></label>
													</div>
												</li>
											</ul>
											<div class="row justify-content-between mb-4">
												<div class="col-4">
													<small><em>Very Bad</em></small>
												</div>
												<div class="col-4 text-end">
													<small><em>Excellent</em></small>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Step -->

                     <!-- Step -->
							<div class="step">
								<div class="question_title">
									<h3>Course Curriculum and Faculty Members</h3>
								</div>
								<div class="row justify-content-center mt-5">
									<div class="col-md-10">
										<div class="review_block_smiles">
											<ul class="clearfix">
												<li>
													<div class="container_smile">
														<input type="radio" id="very_bad_2" name="question_2" class="required" value="1">
														<label class="radio smile_1" for="very_bad_2"><span>Very bad</span></label>
													</div>
												</li>
												<li>
													<div class="container_smile">
														<input type="radio" id="bad_2" name="question_2" class="required" value="2">
														<label class="radio smile_2" for="bad_2"><span>Bad</span></label>
													</div>
												</li>
												<li>
													<div class="container_smile">
														<input type="radio" id="average_2" name="question_2" class="required" value="3">
														<label class="radio smile_3" for="average_2"><span>Average</span></label>
													</div>
												</li>
												<li>
													<div class="container_smile">
														<input type="radio" id="good_2" name="question_2" class="required" value="4">
														<label class="radio smile_4" for="good_2"><span>Good</span></label>
													</div>
												</li>
												<li>
													<div class="container_smile">
														<input type="radio" id="very_good_2" name="question_2" class="required" value="5">
														<label class="radio smile_5" for="very_good_2"><span>Very Good</span></label>
													</div>
												</li>
											</ul>
											<div class="row justify-content-between mb-4">
												<div class="col-4">
													<small><em>Very Bad</em></small>
												</div>
												<div class="col-4 text-end">
													<small><em>Excellent</em></small>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Step -->

                     <!-- Step -->
							<div class="step">
								<div class="question_title">
									<h3>Fee Structure, Scholarships, Financial Assistance</h3>
								</div>
								<div class="row justify-content-center mt-5">
									<div class="col-md-10">
										<div class="review_block_smiles">
											<ul class="clearfix">
												<li>
													<div class="container_smile">
														<input type="radio" id="very_bad_3" name="question_3" class="required" value="1">
														<label class="radio smile_1" for="very_bad_3"><span>Very bad</span></label>
													</div>
												</li>
												<li>
													<div class="container_smile">
														<input type="radio" id="bad_3" name="question_3" class="required" value="2">
														<label class="radio smile_2" for="bad_3"><span>Bad</span></label>
													</div>
												</li>
												<li>
													<div class="container_smile">
														<input type="radio" id="average_3" name="question_3" class="required" value="3">
														<label class="radio smile_3" for="average_3"><span>Average</span></label>
													</div>
												</li>
												<li>
													<div class="container_smile">
														<input type="radio" id="good_3" name="question_3" class="required" value="4">
														<label class="radio smile_4" for="good_3"><span>Good</span></label>
													</div>
												</li>
												<li>
													<div class="container_smile">
														<input type="radio" id="very_good_3" name="question_3" class="required" value="5">
														<label class="radio smile_5" for="very_good_3"><span>Very Good</span></label>
													</div>
												</li>
											</ul>
											<div class="row justify-content-between mb-4">
												<div class="col-4">
													<small><em>Very Bad</em></small>
												</div>
												<div class="col-4 text-end">
													<small><em>Excellent</em></small>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Step -->

                     <!-- Step -->
							<div class="step">
								<div class="question_title">
									<h3>Campus Life, Social Life, Clubs and Infrastructure</h3>
								</div>
								<div class="row justify-content-center mt-5">
									<div class="col-md-10">
										<div class="review_block_smiles">
											<ul class="clearfix">
												<li>
													<div class="container_smile">
														<input type="radio" id="very_bad_4" name="question_4" class="required" value="1">
														<label class="radio smile_1" for="very_bad_4"><span>Very bad</span></label>
													</div>
												</li>
												<li>
													<div class="container_smile">
														<input type="radio" id="bad_4" name="question_4" class="required" value="2">
														<label class="radio smile_2" for="bad_4"><span>Bad</span></label>
													</div>
												</li>
												<li>
													<div class="container_smile">
														<input type="radio" id="average_4" name="question_4" class="required" value="3">
														<label class="radio smile_3" for="average_4"><span>Average</span></label>
													</div>
												</li>
												<li>
													<div class="container_smile">
														<input type="radio" id="good_4" name="question_4" class="required" value="4">
														<label class="radio smile_4" for="good_4"><span>Good</span></label>
													</div>
												</li>
												<li>
													<div class="container_smile">
														<input type="radio" id="very_good_4" name="question_4" class="required" value="5">
														<label class="radio smile_5" for="very_good_4"><span>Very Good</span></label>
													</div>
												</li>
											</ul>
											<div class="row justify-content-between mb-4">
												<div class="col-4">
													<small><em>Very Bad</em></small>
												</div>
												<div class="col-4 text-end">
													<small><em>Excellent</em></small>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Step -->

                     <!-- Step -->
							<div class="step">
								<div class="question_title">
									<h3>Hostel Facility</h3>
								</div>
								<div class="row justify-content-center mt-5">
									<div class="col-md-10">
										<div class="review_block_smiles">
											<ul class="clearfix">
												<li>
													<div class="container_smile">
														<input type="radio" id="very_bad_5" name="question_5" class="required" value="1">
														<label class="radio smile_1" for="very_bad_5"><span>Very bad</span></label>
													</div>
												</li>
												<li>
													<div class="container_smile">
														<input type="radio" id="bad_5" name="question_5" class="required" value="2">
														<label class="radio smile_2" for="bad_5"><span>Bad</span></label>
													</div>
												</li>
												<li>
													<div class="container_smile">
														<input type="radio" id="average_5" name="question_5" class="required" value="3">
														<label class="radio smile_3" for="average_5"><span>Average</span></label>
													</div>
												</li>
												<li>
													<div class="container_smile">
														<input type="radio" id="good_5" name="question_5" class="required" value="4">
														<label class="radio smile_4" for="good_5"><span>Good</span></label>
													</div>
												</li>
												<li>
													<div class="container_smile">
														<input type="radio" id="very_good_5" name="question_5" class="required" value="5">
														<label class="radio smile_5" for="very_good_5"><span>Very Good</span></label>
													</div>
												</li>
											</ul>
											<div class="row justify-content-between mb-4">
												<div class="col-4">
													<small><em>Very Bad</em></small>
												</div>
												<div class="col-4 text-end">
													<small><em>Excellent</em></small>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Step -->

                      <!-- Step -->
							<div class="submit step">
								<div class="question_title">
									<h3>Internship / Placement Oppurtunity</h3>
								</div>
								<div class="row justify-content-center mt-5">
									<div class="col-md-10">
										<div class="review_block_smiles">
											<ul class="clearfix">
												<li>
													<div class="container_smile">
														<input type="radio" id="very_bad_6" name="question_6" class="required" value="1">
														<label class="radio smile_1" for="very_bad_6"><span>Very bad</span></label>
													</div>
												</li>
												<li>
													<div class="container_smile">
														<input type="radio" id="bad_6" name="question_6" class="required" value="2">
														<label class="radio smile_2" for="bad_6"><span>Bad</span></label>
													</div>
												</li>
												<li>
													<div class="container_smile">
														<input type="radio" id="average_6" name="question_6" class="required" value="3">
														<label class="radio smile_3" for="average_6"><span>Average</span></label>
													</div>
												</li>
												<li>
													<div class="container_smile">
														<input type="radio" id="good_6" name="question_6" class="required" value="4">
														<label class="radio smile_4" for="good_6"><span>Good</span></label>
													</div>
												</li>
												<li>
													<div class="container_smile">
														<input type="radio" id="very_good_6" name="question_6" class="required" value="5">
														<label class="radio smile_5" for="very_good_6"><span>Very Good</span></label>
													</div>
												</li>
											</ul>
											<div class="row justify-content-between mb-4">
												<div class="col-4">
													<small><em>Very Bad</em></small>
												</div>
												<div class="col-4 text-end">
													<small><em>Excellent</em></small>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Step -->
						</div>
						<!-- /middle-wizard -->
						<div id="bottom-wizard">
							<button type="button" name="backward" class="backward btn_1">Previous</button>
							<button type="button" name="forward" class="forward btn_1">Next</button>
							<button type="submit" name="process" class="submit btn_1">Submit</button>
						</div>
						<!-- /bottom-wizard -->
					</form>
				</div>
				<!-- /Wizard container -->
			</div>
			<!-- /Container -->
			<footer>
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-sm-6">
							<p>Developed by <strong>Soumit Das</strong>, CSE batch of 2023</p>
						</div>
					</div>
					<!-- /Row -->
				</div>
				<!-- /Container -->
			</footer>
			<!-- /Footer -->
		</div>
		<!-- /flex-column -->
		<!-- COMMON SCRIPTS -->
		<script src="formAssets/js/common_scripts.min.js"></script>
		<script src="formAssets/js/common_functions.js"></script>
		<script src="formAssets/assets/validate.js"></script>
		<!-- COLOR SWITCHER  -->
		<script src="formAssets/js/switcher.js"></script>
	</body>
</html>