<?php
$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = '';
$db['db_name'] = 'php_blog';
foreach ( $db as $key => $value ){
    define(strtoupper($key), $value); 
}
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// if ($conn) {
//         echo "<h5>we are contected !</h5>";
//     } else {
//         echo "<h5>Connection error !</h5>";
// }

?>