<?php require 'include/header.php'; ?>
		<div class="page-title" style="background-image: url('images/background01.jpg');">
			<div class="inner">
				<div class="container">
					<div class="title">Submit Your Car</div> <!-- end .title -->
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
											<label class="col-sm-5 control-label">Enter Mileage</label>
											<div class="col-sm-7">
												<div class="input-group">
													<input type="text">
													<span class="input-group-addon">KMS</span>
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
										<div class="form-group">
											<label class="col-sm-5 control-label">Enter Interior Color</label>
											<div class="col-sm-7">
												<input type="text">
											</div> <!-- end .col-sm-7 -->
										</div> <!-- end .form-group -->
										<div class="form-group">
											<label class="col-sm-5 control-label">Is your car registered</label>
											<div class="col-sm-7">
												<div class="radio inline">
													<label>
														<input type="radio" name="radios" value="option1" checked>
														<div></div>
														Yes
													</label>
												</div> <!-- end .radio -->
												<div class="radio inline">
													<label>
														<input type="radio" name="radios" value="option2">
														<div></div>
														No
													</label>
												</div> <!-- end .radio -->
											</div> <!-- end .col-sm-7 -->
										</div> <!-- end .form-group -->
										<div class="form-group">
											<label class="col-sm-5 control-label">Enter Registration Plate Number</label>
											<div class="col-sm-7">
												<input type="text">
											</div> <!-- end .col-sm-7 -->
										</div> <!-- end .form-group -->
										<div class="form-group">
											<label class="col-sm-5 control-label">Select Registration</label>
											<div class="col-sm-4">
												<div class="select-wrapper">
													<select class="selectpicker" required>
														<option>Expiry Month</option>
														<option>Option 1</option>
														<option>Option 2</option>
													</select>
													
												</div> <!-- end .select-wrapper -->
											</div> <!-- end .col-sm-4 -->
											<div class="col-sm-3">
												<div class="select-wrapper">
													<select class="selectpicker" required>
														<option>Expiry Year</option>
														<option>Option 1</option>
														<option>Option 2</option>
													</select>
													
												</div> <!-- end .select-wrapper -->
											</div> <!-- end .col-sm-3 -->
										</div> <!-- end .form-group -->
									</div> <!-- end .form-horizontal -->
								</div> <!-- end .col-sm-7 -->
								<div class="col-sm-5">
									<div class="price">
										<div class="form-group">
											<label>Enter Your Expected Price</label>
											<div class="input-group">
												<input type="text">
												<span class="input-group-addon green">$</span>
											</div> <!-- end .input-group -->
										</div> <!-- end .form-group -->
										<small>Price guide between: $20000 - $28000</small>
									</div> <!-- end .price -->
								</div> <!-- end .col-sm-5 -->
							</div> <!-- end .row -->
							<hr class="light" />
							<h6 class="add-car-heading no-line">How Can Buyers Contact You</h6>
							<div class="row">
								<div class="col-sm-7">
									<div class="form-horizontal">
										<div class="form-group">
											<label class="col-sm-5 control-label">Enter Your Phone Number</label>
											<div class="col-sm-7">
												<input type="text">
											</div> <!-- end .col-sm-7 -->
										</div> <!-- end .form-group -->
										<div class="form-group">
											<label class="col-sm-5 control-label">Enter Your Email Address</label>
											<div class="col-sm-7">
												<input type="text">
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