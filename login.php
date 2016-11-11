<?php require 'include/header.php'; ?>
		<div class="page-title" style="background-image: url('images/background01.jpg');">
			<div class="inner">
				<div class="container">
					<div class="title">Car Listing Grid</div> <!-- end .title -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .page-title -->
		<section class="section lighter">
			<div class="inner">
				<div class="container">
					<h6 class="add-car-heading">Tell Us More About Your Car Specific Details</h6>
					<div class="add-car-form">
						<form action="photos-videos.html">
							<div class="row">
								<div class="col-sm-7">
									<div class="form-horizontal">
										<div class="form-group">
											<label class="col-sm-5 control-label">Email</label>
											<div class="col-sm-7">
												<div class="input-group">
													<input type="text">
												</div> <!-- end .input-group -->
											</div> <!-- end .col-sm-7 -->
										</div> <!-- end .form-group -->
										<div class="form-group">
											<label class="col-sm-5 control-label">Select Exterior Color</label>
											<div class="col-sm-7">
												<div class="select-wrapper">
													<select class="selectpicker" required>
														<option>Select</option>
														<option>Option 1</option>
														<option>Option 2</option>
													</select>
													
												</div> <!-- end .select-wrapper -->
											</div> <!-- end .col-sm-7 -->
										</div> <!-- end .form-group -->
										
									</div> <!-- end .form-horizontal -->
									<div class="row">
										<div class="col-sm-7 col-sm-offset-5">
											<button type="submit" class="button solid green">Save and Continue</button>
										</div><!-- end .col-sm-7 -->
									</div> <!-- end .row -->
								</div> <!-- end .col-sm-7 -->
							</div> <!-- end .row -->
						</form>
					</div> <!-- end .add-car -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</section> <!-- end .section -->
<?php require 'include/footer.php'; ?>