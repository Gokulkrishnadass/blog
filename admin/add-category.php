<?php 
require('include/header.php');
include('../connection/db_connection.php');
?>
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                if(isset($_POST['AddCategory'])){
                    $CategoryName = $_POST['CategoryName'];
                    $CategoryLink = $_POST['CategoryLink'];
                    if($CategoryName == "" || empty($CategoryName)){
                        echo "<h4>Enter Category Name</h4>";
                    }else{
                        //$query = "INSERT INTO Categories (CategoryName,CategoryLink) VALUES ('$CategoryName','$CategoryLink')";
                        //$db_query = mysqli_query($conn, $query);
                        echo "<h5>Category Save Successfully!</h5>";
                        
                    }
                   
                }
               
                ?>
                <form action="" method="post" name="AddCategory">
                    <div class="form-group">
                        <lable>Name</lable>
                        <input type="text" id="" name="CategoryName" class="form-control">
                    </div>
                    <div class="form-group">
                        <lable>Slug</lable>
                        <input type="text" id="" name="CategoryLink" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="AddCategory" class="btn btn-primary btn-sm" value="Submit">
                    </div>
                </from>
            </div>
        </div>
    </div>
</div>    

<?php require('include/footer.php'); ?>