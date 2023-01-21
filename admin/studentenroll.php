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
                                <th scope="col">Studnet Name</th>
                                <th scope="col">Course Name</th>
                                <th scope="col">Course Fee</th>
                                <th scope="col">Student Account(Payment Type)</th>

                                <th scope="col">Action</th>

                              </tr>
                            </thead>
                            <tbody>
                    <?php 
                 if (isset($_GET['remove'])) {
                  if($viewcls->removeEnrole($_GET['remove']))  	
                  {
      
                    echo "<script>window.location='studentenroll.php';</script>";
                  }
                }
                    if (isset($_GET['accept'])) {
                        echo $senddata->confirmenrole($_GET['accept']);
                    }
                    $viewcat = $viewcls->enrolldcourseapprove();
                    if ($viewcat) {
                        $i = 0;
                    foreach ($viewcat as $value) {
                        $i++;
                                 ?>
                              <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $value['student_name']; ?></td>
                                <td><?php echo $value['course_title']; ?></td>
                                <td><?php echo $value['price']; ?> Taka</td>
                                <td><?php echo $value['student_account']; ?>(<?php echo $value['student_payment_type']; ?>)</td>

                                <td><a class="btn btn-danger" href="?accept=<?php echo $value['enrole_id']; ?>">aprove</a>
                                <a class="btn btn-danger" href="?remove=<?php echo $value['enrole_id']; ?>">Remove</a> 

                              </td>
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