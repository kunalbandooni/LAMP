<?php
    include('config.php');
?>

<?php
    $id=$_GET['id'];
    $sql="DELETE FROM `users` WHERE ID='$id ";
    if(mysqli_query($conn, $sql))
    {
        echo "Record deleted successfully....";
        header("Location:details.php");
    }
    else
    {
        echo "Deletion failed...."
    }

?>