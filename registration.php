<?php

include("connection.php");

if(isset($_POST['submit']))
{
    $name = $_POST['uname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $add = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];

    $sql = "INSERT INTO `registration` (name, email, phone, address, city, state) VALUES ('$name','$email','$phone','$add','$city','$state')";
    $ex = $conn->query($sql); 

    if($ex)
{
    echo "Inserted suuccessfully";
}
else
{
    echo "Error";
}   

} 

?>

    <h1 align="center">User Login</h1>
    <form id="reg_form" action="" method="POST">
    <table align="center">
        <tr>
            <td>Name</td>
            <td><input type="text" name="uname"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td><td>
        </tr>
         <tr>
            <td>Phone</td>
            <td><input type="text" name="phone"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address"></td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type="text" name="city"></td>
        </tr>
        <tr>
            <td>State</td>
            <td><input type="text" name="state"></td>
        </tr>
       
        <tr>
            <td><input type="submit" name="submit" class="submit_btan" id="Submit" value="Submit"></td>
        </tr>
    </table>
        



<h3 align="center" style="padding-top: 140px;">View Data</h3>
    <table align="center" border="1">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Address</th>
          <th>City</th>
          <th>State</th> 
          <th colspan="2">Action</th>  
        </tr>
<?php 
$sql= "SELECT * FROM `registration`";
    
    $ex1 = $conn->query($sql);
   while($res= mysqli_fetch_object($ex1))
    {
    ?> 
    <tr align="center">
         <td><?php echo $res->registration_id;?></td>
         <td><?php echo $res->name; ?></td>
         <td><?php echo $res->email; ?></td>
         <td><?php echo $res->phone; ?></td>
         <td><?php echo $res->address; ?></td>
         <td><?php echo $res->city; ?></td>
          <td><?php echo $res->state; ?></td>
         <td><a href="edit.php?edit=<?php echo $res->registration_id;?>">Edit</a></td>
         <td><a href="delete?del=<?php echo $res->registration_id;?>">Delete</a></td>
    </tr>
<?php } 
?>
</table>
