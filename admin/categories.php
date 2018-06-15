<?php require('include/header.php'); 
include('../connection/db_connection.php');

?>
<?php
$query_Categories = "SELECT * FROM Categories";
$Categories = mysqli_query($conn, $query_Categories) or die(mysql_error());
$row_Categories = mysqli_fetch_assoc($Categories);
$totalRows_Categories = mysqli_num_rows($Categories);
?>


<div class="content-wrapper">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <table class="table table-responsive table-bordered">
                <thead>    
                    <tr>
                        <th>Category Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php do { ?>
                    <tr>
                        <td><?php echo $row_Categories['CategoryName'] ?></td>
                        <td>
                        <a href="edit-category.php?ID=<?php echo $row_Categories['CategoryID'] ?>" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                    </tr>
                    <?php } while ($row_Categories= mysqli_fetch_assoc($Categories)); ?>
                </tbody>
            </table>
        </div>  
        </div>
    </div>
</div>    

<?php require('include/footer.php'); ?>