<?php 
require('include/header.php');
include('../connection/db_connection.php'); 
?>
<?php
$CategoryID = $_GET['ID'];
$CategoryID = mysqli_real_escape_string($conn,$CategoryID);

$query_Category = "SELECT * FROM Categories WHERE CategoryID = '" . $CategoryID . "' ";
$Category = mysqli_query($conn, $query_Category) or die(mysql_error());
$row_Category = mysqli_fetch_assoc($Category);
$totalRows_Category = mysqli_num_rows($Category);
?>
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <?php
                if(isset($_POST['UpdateCategory'])){
                    $CategoryName = $_POST['CategoryName'];
                    $CategoryLink = $_POST['CategoryLink'];
                    if($CategoryName == "" || empty($CategoryName)){
                        echo "<h4>Enter Category Name</h4>";
                    }else{
                        $query = "UPDATE categories SET CategoryName = '$CategoryName', CategoryLink ='$CategoryLink' WHERE CategoryID = '" . $CategoryID . "' ";
                        $db_query = mysqli_query($conn, $query);
                        echo "<h5>Category Updated Successfully!</h5>";
                        header("Location: categories.php ");

                    }
                      
                }
                ?>
                <form action="" method="post" name="AddCategory">
                    <div class="form-group">
                        <lable>Name</lable>
                        <input type="text" id="" name="CategoryName" class="form-control" value="<?php echo $row_Category['CategoryName'] ?>">
                    </div>
                    <div class="form-group">
                        <lable>Slug</lable>
                        <input type="text" id="" name="CategoryLink" class="form-control" value="<?php echo $row_Category['CategoryLink'] ?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="UpdateCategory" class="btn btn-primary btn-sm" value="Update">
                    </div>
                </from>
            </div>
        </div>
    </div>
</div>    

<?php require('include/footer.php'); ?>