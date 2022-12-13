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
						<a href="courseplaylist.php?playlistid=<?php echo $value['course_id']?>">
						<div style="height: 150px;" class="course-thumb set-bg" data-setbg="<?php echo $value['course_image']; ?>">
							<div class="price">Price: <?php echo $value['price']; ?> Taka</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5><?php echo $value['course_title']; ?></h5>
								
								<div class="students"> <?php 
								echo $viewcourse = $viewcls->enrolestudentcount($value['course_id']);
								 
								 ?> Students</div><span>
								 	<div class="star-rating">
								 	<?php 
								 if ($value['rat_total']>0) {
								 	
								 
								  $ratting = ceil($value['rat_total']/$value['rat_hit']); 
								  
								 		 for ($i=1; $i <= $ratting; $i++) { 
								 		 	 
								 		 	echo "<i style='color:red;' class='fa fa-star'></i>";
								 		 }for ($i=1; $i <= 5-$ratting; $i++) { 
								 		 	 
											echo "<i style='color:black;' class='fa fa-star'></i>";
										}}else{
								 		 	echo "Not Rated";
								 		 }



								 		?>			
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