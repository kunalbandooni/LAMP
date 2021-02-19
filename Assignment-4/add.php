<?php
    include('config.php');

?>

<?php
    if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $city=$_POST['city'];

        $sql= "INSERT INTO `users` ( `Username`, `Email`, `Gender`, `City`) VALUES ( '$username', '$email', '$gender', '$city')";

        mysqli_query($conn, $sql);
    }
    else
    {
        echo "Please click on the submit button to submit the data...";
    }

?>
<html>
    <head>
        <title>
            HTML Form to store data in database
        </title>
      <form method="POST" action="form.php">
            <br>
            Username <input type="text" name="username" placeholder="Enter your username" required><br><br>
            E-mail <input type="email" name="email" placeholder="Enter your e-mail" required><br><br>
            Select Gender: 
            Male <input type="radio" name="gender" value="male" checked> 
            Female <input type="radio" name="gender" value="female"><br><br>
            City <select name="city">
                <option value="Dehradun">DEHRADUN</option>
                <option value="Haldwani">HALDWANI</option>
                <option value="Delhi">DELHI</option>
    			<option value="Andaman">ANDAMAN</option>
                <option value="Nikobar">NIKOBAR</option>
                </select><br><br>
            <input type="submit" value="submit data.." name="submit">
      </form>  
    </head>
</html>