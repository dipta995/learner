<?php include 'layouts/header.php'; ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row" id="main" >
                    <div class="col-sm-12 col-md-12 well" id="content">
                        <table class="table">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Teacher Name</th>
                                <th scope="col">Course Name</th>
                                <th scope="col">Course Fee</th>
                                <th scope="col">Student Account(Payment Type)</th>
                                <th scope="col">Teacher Payable Fee</th>
                                <td>Payement</td>
                                <th scope="col">Button</th>
                              </tr>
                            </thead>
                            <tbody>
                    <?php 
                     if (isset($_POST['enroll'])) {

                      echo $senddata->paymentconfirm($_POST);
                        }
                    $viewcat = $viewcls->teachersell();
                    if ($viewcat) {
                      $i = 0;
                      foreach ($viewcat as $value) {
                       
                        $i++;
                                 ?>
                              <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $value['teacher_name']; ?></td>
                                <td><?php echo $value['course_title']; ?></td>
                                <td><?php echo ($value['price']); ?> Taka</td>
                                <td><?php echo $value['student_account']; ?>(<?php echo $value['student_payment_type']; ?>)</td>
                                <td><?php echo ($value['price'])-($value['price']*.2); ?> Taka</td>
                                <form method="post" action="">
                                  <td>
                                  <?php if ($value['t_pay']==0) { ?>
                                    <div class="form-group">
                                      <select name="teacher_payment_type"  class="from-controll" id="">
                                      <option value="Bkash">Bkash</option>
									                    <option value="Nogod">Nogod</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <input type="hidden" value="<?php echo $value['enrole_id']; ?>" name="enrole_id">
                                      <input type="hidden" value="<?php echo ($value['price'])-($value['price']*.2); ?>" name="teacher_pay">
                                      <input type="text" name="teacher_account" class="from-controll" readonly value="<?php echo  $value['account_no'] ?>" >
                                    </div>
                                    <?php }else{ ?>
                                      <?php echo $value['teacher_account']; ?>(<?php echo $value['teacher_payment_type']; ?>)
                                      <?php } ?>
                                  </td>
                                  <td>
                                    <?php if ($value['t_pay']==0) { ?>
                                      <button name="enroll" class="btn btn-danger" >Confirm Now</button>
                                      <?php  }else{ 
                                        echo "<button class='btn btn-success'>Paid</button>";
                                      } ?>
                                     
                                   </td>
                                  </form>
                              </tr>
             
                     <?php }} ?>
                            </tbody>
                          </table>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
<?php include 'layouts/footer.php'; ?>