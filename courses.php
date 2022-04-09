<?php include 'include/header.php'; ?>
<?php include 'include/background.php'; ?>



	<!-- course section -->
	<section class="course-section spad pb-0">
		<div class="course-warp">
			<ul class="course-filter controls">
				<?php 
					$viewcat = $viewcls->catview();
					if ($viewcat) {
						
					foreach ($viewcat as $value) {
					
				 ?>
				<li class="control"><a href="?catid=<?php echo $value['category_id'] ?>"><?php echo $value['category_name'] ?></a></li>
				<?php } }  ?>
				
			</ul>  

		                                    
			<div class="row course-items-area">
					<?php 
					if (!isset($_GET['catid']) || $_GET['catid']==NULL) {
						$viewcourse = $viewcls->allcourses();
						foreach ($viewcourse as $value) {
					?> 
				<div class="mix col-lg-3 col-md-4 col-sm-6 finance">
					<div class="course-item">
					<a href="single-course.php?playlistid=<?php echo $value['course_id'] ?>">
						<div class="course-thumb set-bg" data-setbg="<?php echo $value['course_image']; ?>">
							<div class="price">Price: $<?php echo $value['price']; ?></div>
						</div>
						<div class="course-info">
							<div class="course-text">
		 						<h5><?php echo $value['course_title']; ?></h5>
								<div class="students"><?php 
								 

								 
								 ?> Students</div>
								 <i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>
							</div>
							<div class="course-author">
								<?php $teacher = $value['teacher_id'];
								 echo $teacher = $viewcls->teacherview($teacher);
								?>, <span>Teacher</span></p>
							</div>
						</div>
				</a>
					</div>
				</div>
				<?php  } }elseif (isset($_GET['catid'])) {
					$viewcourse = $viewcls->coursefeaturebycatid($_GET['catid']);
						foreach ($viewcourse as $values) {
				 ?>
				 
			 <div class="mix col-lg-3 col-md-4 col-sm-6 finance">
					<div class="course-item">
						<a href="single-course.php?playlistid=<?php echo $values['course_id'] ?>">
						<div class="course-thumb set-bg" data-setbg="<?php echo $values['course_image']; ?>">
							<div class="price">Price: $<?php echo $values['price']; ?></div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5><?php echo $values['course_title']; ?></h5>
								<p><?php echo $viewcls->shorter($values['course_details'],50); ?></p>
								<div class="students"><?php 
								
								 
								 ?> Students</div>
								<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>
							</div>
							<div class="course-author">
								<?php $teacher = $values['teacher_id'];
								 echo $teacher = $viewcls->teacherview($teacher);
								


								 ?>, <span>Teacher</span></p>
							</div>
						</div>
					</a>
					</div>
				</div>
			<?php } }  ?>
			 
			</div>
			 
		</div>
	</section>


	<?php include 'include/footer.php'; ?>