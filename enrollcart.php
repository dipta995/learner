<?php include 'include/header.php'; ?>


<?php include 'include/background.php'; ?>

	<!-- course section -->
	<section class="course-section spad pb-0">
		<div class="course-warp">
		 

		                                    
			<div class="row course-items-area">
			<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Course Name</th>
      <th scope="col">Teacher</th>
      <th scope="col">Students</th>
      <th scope="col">Price</th>
      <th scope="col">Banner</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
					<?php 
					if (isset($_GET['remove'])) {
						if($viewcls->removeEnrole($_GET['remove']))  	
						{

							echo "<script>window.location='enrollcart.php';</script>";
						}
					}
					
						$viewcourse = $viewcls->allcoursesenroll($student_id);
						foreach ($viewcourse as $value) {
					?> 

    <tr>
      <th scope="row">1</th>
      <td><?php echo $value['course_title']; ?></td>
      <td>
		<?php $teacher = $value['teacher_id']; 
	  echo $teacher = $viewcls->teacherview($teacher); ?>
	  </td>
      <td><?php echo $viewcourse = $viewcls->enrolestudentcount($value['course_id']);?>
	  </td>
	  <td><?php echo $value['price']; ?> Taka</td>
	  <td><img style="height: 60px;" src="<?php echo $value['course_image']; ?>" alt=""></td>
	  <td><?php if ($value['pay_status']==1) { ?>
			<a class="btn btn-info" href="courseplaylist.php?playlistid=<?php echo $value['course_id'] ?>">Preview</a>
			<?php }else{ ?>
			<button class="btn btn-success" href="">Pending</button> 
			<a class="btn btn-danger" href="?remove=<?php echo $value['enrole_id']; ?>">Remove</a> <?php } ?>
		</td>
    </tr>
   
	<?php }   ?>
  </tbody>
</table>
				
				
			 
			 
			 
			</div>
		 
		</div>
	</section>
	<!-- course section end -->


 

	<?php include 'include/footer.php'; ?>