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
      <li class="breadcrumb-item active" aria-current="page">Create Category</li>
    </ol>
  </div>
  <a class="btn btn-success" href="cat.php"> Back</a>
  <div class="row">

    <div class="col-md-6">
      <!-- Form Basic -->
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Add New Category</h6>
          </div>
        <?php if (isset($createPackage)){
                    echo $createPackage;
        }  ?>
        <div class="card-body">
        <?php 
                        if (isset($_GET['upcat'])) { 

                            $viewsin = $viewcls->catviewbyId($_GET['upcat']);

                    foreach ($viewsin as $val) {

                            ?>
          <form action="" method="POST">

            <div class="form-group">
              <label>Category name</label>
              <input class="form-control form-control-lg" type="text" name="category_name" value="<?php echo $val['category_name']; ?>">
            </div>

            <button type="submit" name="update" class="btn btn-primary">Submit</button>
          </form>
          <?php }}else{ ?>
          <form action="" method="POST">

            <div class="form-group">
              <label>Category name</label>
              <input class="form-control form-control-lg" type="text" name="category_name" placeholder="Create New Catagory">
            </div>

            <button type="submit" name="create" class="btn btn-primary">Submit</button>
          </form>
          <?php } ?>
        </div>
      </div>
    </div>

  <div class="col-sm-12 col-md-6 well" id="content">


                          <table class="table">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Button</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php 
                              $viewcat = $viewcls->catview();
                              if ($viewcat) {
                                  $i = 0;
                              foreach ($viewcat as $value) {
                                  $i++;
                                 ?>
                              <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $value['category_name']; ?></td>
                                <td>
                                    <a href="?upcat=<?php echo $value['category_id']; ?>">Update</a>
                                    <a href="?delcat=<?php echo $value['category_id']; ?>">Delete</a>
                                </td>
                              </tr>
                          <?php } } ?>


                            </tbody>
                          </table>
                    </div>
                    </div>
</div>
<!---Container Fluid-->
<?php include 'layouts/footer.php';?>