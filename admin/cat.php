<?php 
include 'layouts/header.php'; 
if (isset($_GET['upcat'])) {
    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['update'])) {
        
    $senddata->updatecat($_POST,$_GET['upcat']);
    }
}elseif(isset($_GET['delcat'])){
    $deletedata->removecat($_GET['delcat']);
}else{}
if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['create'])) {
    echo $senddata->createcat($_POST);
    }
?>
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Category</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item">Category</li>
      <li class="breadcrumb-item active" aria-current="page">Change Password</li>
    </ol>
  </div>
  <a class="btn btn-success" href="index.php"> Home</a>
  <div class="row">
       
    <div class="col-md-6">
      <!-- Form Basic -->
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>
        <?php if (isset($createPackage)){
                    echo $createPackage;
        }  ?>
        <div class="card-body">
          <form action="" method="POST">
            
            <div class="form-group">
              <label>Old Password</label>
              <input class="form-control form-control-lg" type="password" name="password">
            </div>
            <div class="form-group">
              <label>New Password</label>
              <input class="form-control form-control-lg" type="password" name="new_password">
            </div>
            <div class="form-group">
              <label>Confirm Password</label>
              <input class="form-control form-control-lg" type="password" name="confirm_password">
            </div>
            
            <button type="submit" name="create" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
 
 
<!---Container Fluid-->
<?php include 'layouts/footer.php';?>