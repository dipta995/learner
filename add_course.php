	<?php include 'include/header.php'; ?>

	<!-- Page info end -->


<div style="margin-top:180px;" class="row">
 
	
	<div style="margin: 0 auto;" class="">
			<div class="card-body">
				<h3 class="card-title text-center"></h3>
				<div class="card-text">
					<?php 
					include_once 'include/InsertClass.php';
					//$senddata = new InsertClass();
					if ($_SERVER['REQUEST_METHOD']=='POST') {
					$sending = $senddata->createcourse_t($_POST,$_FILES,$student_id);
					}
					?>
				<form method="post" action=""  enctype="multipart/form-data">
					<span class="login100-form-title p-b-40">
						Create a new course
					</span>
					<?php if (isset($sending)) {
								echo $sending;
							} ?>

					<div class="form-group" >
						<input class="form-control" type="text" name="course_title" placeholder="Course Title">
						
					</div>

					<div class="form-group" data-validate="Please enter email: ex@abc.xyz">
						<input class="form-control" type="text" name="price" placeholder="price">
						
					</div>

					<div class="form-group" data-validate="Please enter Phone number">
						<select name="category_id" class="form-control">
							<option value="0">--CHOOSE CATEGORY--</option>
							 <?php 
					$viewcat = $viewcls->catview();
					if ($viewcat) {
						
					foreach ($viewcat as $value) {
					
				 ?>
							<option  value="<?php echo $value['category_id'] ?>"><?php echo $value['category_name'] ?></option>
							<?php } }  ?>
						</select>
						
					</div>

					<div class="form-group" data-validate = "Please enter password">
					 
						<textarea class="form-control"  cols="50" placeholder="course_details" name="course_details"></textarea>
						
					</div>
					<div class="form-group" data-validate = "Please enter password">
					 
						 <input class="form-control" type="file" name="image">
						
					</div>

				  
						<button class="btn btn-success">
							Create Course
						</button>
			 

				 

				</form>
	 
				</div>
			
		</div>
	</div>
	
	
</div>






	<?php include 'include/footer.php'; ?>