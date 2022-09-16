<?php include 'layouts/header.php';
 

?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">students</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item">Students</li>
        <li class="breadcrumb-item active" aria-current="page">students</li>
    </ol>
    </div>

    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->
            <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Students</h6>
            </div>
            <div class="table-responsive">
                <div>
                    <?php 
                        if(isset($delete)){
                            echo $delete;
                        }
                    ?>
                </div>
                <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th scope="col"> Name</th>
                        <th scope="col">Email</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Created At</th>

                    </tr>
                </thead>
                </thead>
                <tbody>
                                                  <?php 
                    $viewcat = $viewcls->studentlist();
                    if ($viewcat) {
                        $i = 0;
                    foreach ($viewcat as $value) {
                        $i++;
                                 ?>
                              <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $value['student_name']; ?></td>
                                <td><?php echo $value['student_email']; ?></td>
                                <td><?php echo $value['student_phone']; ?></td>
                            
                                <td><?php echo $value['gender']; ?></td>
                                <td><?php echo $value['created_at']; ?></td>
                          
                              </tr>
                    <?php }} ?>
                     
                            </tbody>
                </table>
            </div>
            <div class="card-footer"></div>
            </div>
        </div>
    </div>
</div>
<!---Container Fluid-->
<?php include 'layouts/footer.php';?>