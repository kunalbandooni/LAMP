<?php
    include('config.php')
?>

<?php
    $id=$_GET['id'];
    $sql="SELECT * FROM `users` WHERE `id`=$id";
    $result= mysqli_query($conn, $sql);
    $row= $result->fetch_assoc();
    $username=$row['Username'];
    $email=$row['Email'];
    $gender=$row['Gender'];
    $city=$row['City'];

?>

<?php
    if(isset($_POST['update']))
    {
        $username=$_POST['username'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $city=$_POST['city'];

        $sql="UPDATE `users` SET Username='$username', Email='$email', Gender='$gender', City='$city' WHERE ID='$id' ";
        if(mysqli_query($conn, $sql))
        {
            echo "Data Updated Successfully....";
            header("Location:details.php");
        }
        else
        {
            echo "Updation failed....";
        }
    }

?>


<html>
    <head>
        <title>
            HTML Form to store data in database
        </title>
      <form method="POST" action="edit.php?id=<?php echo $id ?>">
            <br>
            Username <input type="text" name="username" value=<?php echo "$username" ?> placeholder= "Enter username..." required><br><br>
            Email <input type="email" name="email" value=<?php echo "$email" ?> placeholder="Enter email..." required><br><br>
            Select Gender  -  
            Male <input type="radio" name="gender" value="male">  Female <input type="radio" name="gender" value="female"><br><br>
            City <select name="city">
                <option value="Dehradun" <?php if($city=="Dehradun"){echo "selected"; } ?> >DEHRADUN</option>
                <option value="Haldwani" <?php if($city=="Haldwani"){echo "selected"; } ?> >HALDWANI</option>
                <option value="Delhi" <?php if($city=="Delhi"){echo "selected"; } ?> >DELHI</option>
                <option value="Andaman" <?php if($city=="Andaman"){echo "selected"; } ?> >ANDAMAN</option>
                <option value="Nikobar" <?php if($city=="Nikobar"){echo "selected"; } ?> >NIKOBAR</option>
            </select><br><br>
            <input type="submit" name="update" value="Update">
      </form>  
    </head>
</html>