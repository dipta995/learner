<?php include 'include/header.php'; ?>


<?php include 'include/background.php'; ?>

	<!-- course section -->
	<section class="course-section spad pb-0">
		<div class="course-warp">
		 
<?php
$total = 0;
 $viewcat = $viewcls->teacherAmountDetails($_SESSION['student_id']);
   foreach ($viewcat as $value) { 
	$total+=($value['teacher_pay']);
   }
?>
		                                    
			<div class="row course-items-area">
				<table class="table">
				<tr>
                                
                                <th colspan="3" class="text-right">Total</th>
                                <th class="text-right"><?php echo $total; ?> Taka</th>
                              </tr>
					<th colspan="3" class="text-right">Total Paid</th>
										<th class="text-right"><?php echo $viewcls->teacherAmount($_SESSION['student_id'],1); ?>Taka</th>
									  </tr>
									  <tr>
										
										<th colspan="3" class="text-right">Total Due</th>
										<th class="text-right"><?php echo $viewcls->teacherAmount($_SESSION['student_id'],0); ?>Taka</th>
									  </tr>
				</table>

			<table class="table">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Course Name</th>
                                <th scope="col">Course Fee</th>
                                <th scope="col"> Payable Fee</th>
                                <th scope="col">Payement Details</th>
                              </tr>
                            </thead>
                            <tbody>
                    <?php 
                    $viewcat = $viewcls->teacherAmountDetails($_SESSION['student_id']);
                    if ($viewcat) {
                      $i = 0;
                      foreach ($viewcat as $value) {
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                      echo $senddata->paymentconfirm($value['enrole_id'],$_POST);
                        }
						$total+=($value['teacher_pay']);
                        $i++;
                                 ?>
                              <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $value['course_title']; ?></td>
                                <td><?php echo ($value['price']); ?> Taka</td>
                                <td><?php echo $value['teacher_pay']; ?> Taka</td>
                                  <td class="text-center">
                                  <?php if ($value['t_pay']==0) { ?>
                                    <p class="btn-danger text-center">Pending</p>
                                    
                                    <?php }else{ ?>
                                      <?php echo $value['teacher_account']; ?>(<?php echo $value['teacher_payment_type']; ?>)
									  <button class=' btn-success'>Paid</button>
                                      <?php } ?>
                                  </td>
                                 
                              </tr>
             
                     <?php }} ?>
					
							  <tr> 
								
							  <tr>
                            </tbody>
							
                          </table>
				
						 
                                
                              
			 
			 
			 
			</div>
		 
		</div>
	</section>
	<!-- course section end -->


 

	<?php include 'include/footer.php'; ?>