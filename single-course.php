<?php include 'include/header.php';

$protocol = $_SERVER['SERVER_PROTOCOL'];
if (strpos($protocol, "HTTPS")) {
	$protocol = "HTTPS://";
} else {
	$protocol = "HTTP://";
}
$redirect_link_var = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];



if (!isset($_SESSION['true'])) {
	echo "<script> window.location = 'login.php?link=$redirect_link_var';</script>";
}
if (isset($_POST['buycourse'])) {
	$enrollmsg = $senddata->enrollfunk($_POST);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['comment_action'])) {
	$sendcom = $senddata->sendcomment($_POST, $student_id, $_GET['playlistid']);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['replay_action'])) {
	$sendcom = $senddata->sendreplay($_POST, $student_id, $_GET['playlistid']);
}



?>
<style type="text/css">
	body {
		padding-top: 30px;
	}

	.widget .panel-body {
		padding: 0px;
	}

	.widget .list-group {
		margin-bottom: 0;
	}

	.widget .panel-title {
		display: inline
	}

	.widget .label-info {
		float: right;
	}

	.widget li.list-group-item {
		border-radius: 0;
		border: 0;
		border-top: 1px solid #ddd;
	}

	.widget li.list-group-item:hover {
		background-color: rgba(86, 61, 124, .1);
	}

	.widget .mic-info {
		color: #666666;
		font-size: 11px;
	}

	.widget .action {
		margin-top: 5px;
	}

	.widget .comment-text {
		font-size: 12px;
	}

	.widget .btn-block {
		border-top-left-radius: 0px;
		border-top-right-radius: 0px;
	}
</style>
<!-- Page info -->

<?php include 'include/background.php'; ?>

<!-- single course section -->
<?php
$coursesid = $_GET['playlistid'];
$viewcat = $viewcls->coursecatjoin($coursesid);
if ($viewcat) {
	foreach ($viewcat as $value) {

?>
		<section class="single-course spad pb-0">
			<div class="container">
				<div class="course-meta-area">
					<div class="row">
						<div class="col-lg-10 offset-lg-1">
							<div class="course-note"> <?php echo $value['price']; ?> Taka</div>
							<h3><?php echo $value['course_title']; ?></h3>
							<div class="course-metas">
								<div class="course-meta">
									<div class="course-author">
										<?php $teacher = $value['teacher_id'];
										echo $teacher = $viewcls->teacherview($teacher);



										?>, <span>Teacher</span></p>
									</div>
								</div>
								<div class="course-meta">
									<div class="cm-info">
										<h6>Category</h6>
										<p><?php echo $value['category_name']; ?></p>
										<p><?php $catid = $value['category_id']; ?></p>
									</div>
								</div>
								<div class="course-meta">
									<div class="cm-info">
										<h6>Students</h6>
										<p><?php
											echo $viewcourse = $viewcls->enrolestudentcount($_GET['playlistid']);

											?> Registered Students</p>
									</div>
								</div>
								<div class="course-meta">
									<div class="cm-info">
										<h6>Reviews</h6>
										<p><?php echo $value['rat_hit'] ?> Reviews <span class="rating">


												<?php if ($value['rat_total'] > 0) {
													$ratting = ceil($value['rat_total'] / $value['rat_hit']);
													for ($i = 1; $i <= $ratting; $i++) {

														echo "<i style='color:red;' class='fa fa-star'></i>";
													}
													for ($i = 1; $i <= 5 - $ratting; $i++) {

														echo "<i style='color:black;' class='fa fa-star'></i>";
													}
												} else {
													echo "Not Rated";
												}



												?>
											</span></p>
									</div>
								</div>
							</div>
							<?php
							if (isset($enrollmsg)) {
								echo $enrollmsg;
							}
							?><br>
							<form method="post" action="">
								<!-- <a href="#" class="site-btn price-btn">Course Fee: <?php //echo $value['price']; 
																						?> Taka</a> -->
								<input type="hidden" value="<?php echo $value['course_id']; ?>" name="course_id">
								<input type="hidden" value="<?php echo $student_id;  ?>" name="student_id">
								<input type="hidden" value="<?php echo $value['price']; ?>" name="price">
								<?php
								if (isset($_SESSION['teacher_auth']) == 'teacher_auth') {
								} else {

								?>
								<span class="btn btn-info" id="payment-form">Enroll now</span>
								<div  class="row" style="background:rgb(166 160 166); border-radius: 10px; display: none;">
									<div class="col-md-6">
									<select style="width: 300px; padding: 10px; margin-top: 23px; border-radius: 10px;" name="student_payment_type" id="">
									<option value="Bkash">Bkash</option>
									<option value="Nogod">Nogod</option>
								</select>
									</div>
									<div  class="col-md-6">
									<input style="width: 300px; padding: 10px; margin-top: 23px; border-radius: 10px;" placeholder="account-number" type="text" name="student_account">
									</div>
									<input style="margin: 0 auto; margin-top : 10px;" type="submit" class="site-btn buy-btn" name="buycourse" value="Pay Ane Confirm">

								</div>
								
								<?php } ?>
							</form>
							<!-- <a href="payment.php" class="site-btn buy-btn">Buy This Course</a> -->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-10 offset-lg-1 course-list">
						<div class="cl-item">
							<h4>Course Description</h4>
							<p><?php echo $value['course_details']; ?> </p>
						</div>
						<style type="text/css">
							.commentbox {
								/* border: 1px solid #02bc28; */
								border-radius: 25px;
								color: black;
								margin: 5px;
							}

							.commentbox p,
							span {
								color: black;
							}

							.replaycom {
								margin-left: 30px;
								border: 1px solid green;
								border-radius: 25px;
								margin: 5px;
							}

							.comment-frm textarea {

								width: 50%;
								height: 100px;
								padding: 12px 20px;
								box-sizing: border-box;
								border: 1px solid #02bc28;
								border-radius: 4px;

								resize: none;
								box-sizing: border-box;
								border: none;
								background-color: #474747;
								color: black;


							}

							.commentbtn {
								margin-bottom: 90px;
							}

							.replay-frm textarea {
								margin-left: 30px;

								width: 70%;
								height: 70px;
								padding: 12px 20px;
								box-sizing: border-box;
								border: 1px solid #02bc28;
								border-radius: 4px;

								resize: none;
								box-sizing: border-box;
								border: none;
								background-color: #474747;
								color: black;


							}

							.replaybtn {
								margin-top: 10px;
								margin-left: 100px;
								margin-bottom: 50px;
							}

							.commenterimg {
								height: 50px;
								width: 50px;
								border-radius: 50%;
							}
						</style>
						<div class="cl-item">
							<h4>Comment's</h4>



							<?php
							$commentview = $viewcls->viewcommentbyid($_GET['playlistid']);
							if ($commentview) {
								foreach ($commentview as $comval) {
							?>

									<div style="border: 1px solid black;" class="commentbox row">
										<div class="col-md-8">
											<h5 style="color: #02bc28;">
												<!-- <img class="commenterimg" src="img/authors/6.jpg"> -->
												<?php echo $comval['student_name']; ?></h5>
											<p style="margin-left: 20px;">Comment: <?php echo $comval['comment']; ?></p>
											<?php $comid = $comval['comment_id'] ?>

												<?php
												$replayview = $viewcls->viewreplayid($comid);
												if ($replayview) {
													?>											
													<div class="replaycom row">
													<?php
													foreach ($replayview as $rview) {
												?>
														<div class="col-sm-8">
															<h5 style="color: #02bc28;">Name: <?php echo $rview['teacher_name']; ?></h5>
															<p style="margin-left: 20px;">Replay: <?php echo $rview['replay']; ?></p>
															<hr>
														</div>

														<div class="col-sm-4">
															<p>date: <?php echo $rview['date']; ?></p>
															<hr>
														</div>
														
														<?php } ?>
												 </div>
												<?php } ?>
												<?php
												if (isset($_SESSION['teacher_auth']) == 'teacher_auth') {

												?>
													<form method="post" action="" class="replay-frm">
														<textarea name="replay"></textarea>
														<input type="hidden" value="<?php echo $comid; ?>" name="comment_id">
														<input class="btn btn-success replaybtn" type="submit" value="Replay" name="replay_action">
													</form>
												<?php } else {
												} ?>

										</div>
										<div class="col-md-4">
											<span>Date: <p><?php echo $comval['date']; ?></p></span>
										</div>

									</div>

							<?php }
							} ?>

							<form method="post" action="" class="comment-frm">
								<textarea name="comment"></textarea>
								<input class="btn btn-success commentbtn" type="submit" value="Comment" name="comment_action">
							</form>









							<!--  <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="row">

                            <div class="col-xs-2 col-md-1">
                                <img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>
                            <div class="col-xs-10 col-md-11">
                                <div>
                                   <h4>Dipta Dey</h4>
                                </div>
                                <div class="comment-text">
                                    Awesome design
                                </div>
                                 
                                <div class="action">
                                    <form>
                                    	<textarea style="background-color:#ffa6a6;"></textarea>
                                    	<input type="submit" value="Replay" name="subcomment">

                                    </form>
                                    
                                </div>
                            </div>



                        </div>


                         <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-2 col-md-1">
                                <img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>
                            <div class="col-xs-10 col-md-11">
                                <div>
                                   <h4>Dipta Dey</h4>
                                </div>
                                <div class="comment-text">
                                    Awesome design
                                </div>
                                 
                            </div>
                        </div>
						</li>
						</ul>
	               </div>
					</li>
						</ul>
						<form>
                                    	<textarea style="width:400px;background-color:#ffa6a6;"></textarea>
                                    	<input type="submit" class="btn btn-success" value="Comment" name="subcomment">
                                    	
                                    </form>
               </div> -->
						</div>

					</div>
				</div>
			</div>
		</section>
<?php }
}  ?>
<!-- single course section end -->


<!-- Page -->
<section class="realated-courses spad">
	<div class="course-warp">
		<h2 class="rc-title">Realated Courses</h2>
		<div class="rc-slider owl-carousel">
			<!-- course -->
			<?php
			$relatedcrs = $viewcls->relatedcourse($catid);
			if ($relatedcrs) {
				foreach ($relatedcrs as $crs) {
			?>




					<div class="course-item">
						<a href="single-course.php?playlistid=<?php echo $value['course_id'] ?>">
							<div class="course-thumb set-bg" data-setbg="<?php echo $value['course_image']; ?>">
								<div class="price">Price: $<?php echo $value['price']; ?></div>
							</div>
							<div class="course-info">
								<div class="course-text">
									<h5><?php echo $value['course_title']; ?></h5>

									<div class="students"><?php
															echo $viewcourse = $viewcls->enrolestudentcount($value['course_id']);

															?> Students</div><span>
										<div class="star-rating">

											<?php
											if ($value['rat_total'] > 0) {


												$ratting = ceil($value['rat_total'] / $value['rat_hit']);
												for ($i = 1; $i <= 5 - $ratting; $i++) {

													echo "<i style='color:black;' class='fa fa-star'></i>";
												}
												for ($i = 1; $i <= $ratting; $i++) {

													echo "<i style='color:red;' class='fa fa-star'></i>";
												}
											} else {
												echo "Not Rated";
											}



											?> </div>
									</span>
								</div>
								<div class="course-author">

									<?php $teacher = $value['teacher_id'];
									echo $teacher = $viewcls->teacherview($teacher);



									?>, <span>Teacher</span></p>
								</div>
							</div>

						</a>
					</div>















			<?php }
			} ?>
			<!-- course -->

		</div>
	</div>
</section>
<!-- Page end -->


<!-- banner section -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	$(document).ready(function() {
		$("#flip").click(function() {
			$("#panel").slideToggle("slow");
		});

		$("#payment-form").click(function() {
			$(".row").show();
			$("#payment-form").hide ();
		});
	});
</script>


<?php include 'include/footer.php'; ?>