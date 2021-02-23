<?php

include("connection.php");

$id = $_GET['edit']; // get id through query string

$qry = mysqli_query($conn,"select * from registration where registration_id = '$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $name = $_POST['uname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $add = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
  
    $edit = mysqli_query($conn,"update registration set name='$name',email='$email',phone='$phone',address='$add',city='$city',state='$state' where registration_id = '$id'");
  
    if($edit>0)
    {
       header('location: registration.php');
    }
    else
    {
        echo "Error";
    }   
}
?>

<h3 align="center">Update Data</h3>

<form method="POST">
   <table align="center">
      <tr>
            <td>Name</td>
            <td><input type="text" name="uname" value="<?php echo $data['name'] ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $data['email'] ?>"></td><td>
        </tr>
         <tr>
            <td>Phone</td>
            <td><input type="text" name="phone" value="<?php echo $data['phone'] ?>"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" value="<?php echo $data['address'] ?>"></td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type="text" name="city" value="<?php echo $data['city'] ?>"></td>
        </tr>
        <tr>
            <td>State</td>
            <td><input type="text" name="state" value="<?php echo $data['state'] ?>"></td>
        </tr>
         <tr>
            <td><input type="submit" name="update" value="Submit"></td>
        </tr>
    </table>
</form>