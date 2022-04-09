	<?php include 'include/header.php'; 

$protocol = $_SERVER['SERVER_PROTOCOL'];
if (strpos($protocol,"HTTPS")) {
   $protocol = "HTTPS://";
}else{
    $protocol = "HTTP://";
}
$redirect_link_var = $protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];



	if (!isset($_SESSION['true'])) {
		echo "<script> window.location = 'login.php?link=$redirect_link_var';</script>";
		  
	}  
	if (isset($_POST['buycourse'])) {
		 $enrollmsg = $senddata->enrollfunk($_POST);
	}

	if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['comment_action'])) {
		$sendcom = $senddata->sendcomment($_POST,$student_id,$_GET['playlistid']);
	}
	if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['replay_action'])) {
		$sendcom = $senddata->sendreplay($_POST,$student_id,$_GET['playlistid']);
	}



	?>
<style type="text/css">
	body { padding-top:30px; }
.widget .panel-body { padding:0px; }
.widget .list-group { margin-bottom: 0; }
.widget .panel-title { display:inline }
.widget .label-info { float: right; }
.widget li.list-group-item {border-radius: 0;border: 0;border-top: 1px solid #ddd;}
.widget li.list-group-item:hover { background-color: rgba(86,61,124,.1); }
.widget .mic-info { color: #666666;font-size: 11px; }
.widget .action { margin-top:5px; }
.widget .comment-text { font-size: 12px; }
.widget .btn-block { border-top-left-radius:0px;border-top-right-radius:0px; }
</style>
	<!-- Page info -->
	
<?php include 'include/background.php'; ?>

	<!-- single course section -->
	<?php 
	$coursesid =$_GET['playlistid'];
	$viewcat = $viewcls->coursecatjoin($coursesid);
	if ($viewcat) {
		foreach ($viewcat as $value) {
	
	 ?>
	<section class="single-course spad pb-0">
		<div class="container">
			<div class="course-meta-area">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="course-note">Featured Course</div>
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
									<p><?php  $catid = $value['category_id']; ?></p>
								</div>
							</div>
							<div class="course-meta">
								<div class="cm-info">
									<h6>Students</h6>
									<p>120 Registered Students</p>
								</div>
							</div>
							<div class="course-meta">
								<div class="cm-info">
									<h6>Reviews</h6>
									<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>
								</div>
							</div>
						</div>
						
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
						.commentbox{
							border: 2px solid #02bc28;
							border-radius: 25px;
    background-color: #02bc28;
    color: white;
    margin: 5px;
						}
						.commentbox p,span{
							color: white;
						}
						.replaycom{
							    margin-left: 30px;
    border: 7px solid white;
    margin: 5px;
						}
						.comment-frm textarea{
							 
								  width: 50%;
								  height: 100px;
								  padding: 12px 20px;
								  box-sizing: border-box;
								  border: 2px solid #02bc28;
								  border-radius: 4px;
								 
								  resize: none;
								  box-sizing: border-box;
								  border: none;
								  background-color: #474747;
								  color: white;
								

						}
						.commentbtn{
							margin-bottom: 90px; 
						}
						.replay-frm textarea{
							margin-left: 30px;
							 
								  width: 70%;
								  height: 70px;
								  padding: 12px 20px;
								  box-sizing: border-box;
								  border: 2px solid #02bc28;
								  border-radius: 4px;
								  
								  resize: none;
								  box-sizing: border-box;
								  border: none;
								  background-color: #474747;
								  color: white;
								

						}
						.replaybtn{
							/*margin-top: 10px;*/
							margin-left: 100px;
							margin-bottom:50px; 
						}
						.commenterimg{
							height: 50px;
							width: 50px;
							border-radius: 50%;
						}
					</style>
					<div class="cl-item">
						<h4>Comment 4</h4>


						
							  
						   

										
						








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
<?php }}  ?>
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
					<div class="course-thumb set-bg" data-setbg="<?php echo $crs['course_image'] ?>">
						<div class="price"><?php echo $crs['price']; ?></div>
					</div>
					<div class="course-info">
						<div class="course-text">
							<h5>Art & Crafts</h5>
							<p>Lorem ipsum dolor sit amet, consectetur</p>
							<div class="students">120 Students</div>
						</div>
						<div class="course-author">
							<div class="ca-pic set-bg" data-setbg="img/authors/1.jpg"></div>
							<p>William Parker, <span>Developer</span></p>
						</div>
					</div>
				</div>

			<?php }} ?>
				<!-- course -->

			</div>
		</div>
	</section>
	<!-- Page end -->


	<!-- banner section -->
 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
 
	 
	<?php include 'include/footer.php'; ?>