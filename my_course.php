	<?php include 'include/header.php'; ?>

	<!-- Page info end -->


<div style="margin-top:180px;" class="row">
	<div class="col-md-12">
		<a href="add_course.php" class="btn btn-success float-right">Create New Course</a>		
			 <div class="row">
			 	
			 
					<?php 
					 
						$viewcourse = $viewcls->allcoursesbyauthId($student_id);
						foreach ($viewcourse as $value) {
					?> 

				<div style="margin: 5px;" class=" col-lg-3 col-md-4 col-sm-6">
					<div class="course-item">
						<a href="">
						<div style="height: 150px;" class="course-thumb set-bg" data-setbg="<?php echo $value['course_image']; ?>">
							<div class="price">Price: $<?php echo $value['price']; ?></div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5><?php echo $value['course_title']; ?></h5>
								
								<div class="students"> 0 Students</div><span>
								 	<div class="star-rating">
								 		
								 		
									<!--   <label for="5-stars" class="star">&#9733;</label> 
									  <label for="4-stars" class="star">&#9733;</label>
									  <label for="3-stars" class="star">&#9733;</label>
									  <label for="2-stars" class="star">&#9733;</label>
									  <label for="1-star" class="star">&#9733;</label> -->
									</div>   
								 </span>
							</div>
						
						</div>

					</a>
					</div>
				</div>
		<?php } ?>
	</div>
	 
		
	</div>
 
	
</div>






	<?php include 'include/footer.php'; ?>