<?php
ob_start();
include("Head.php");
include("../Assets/Connection/Connection.php");
session_start();
$selQry="select * from tbl_user where user_id='".$_SESSION["uid"]."'";
$result=$Conn->query($selQry);
if($row=$result->fetch_assoc())
{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
  <br><br><br><br><br>
  <div id="tab">
<form id="form1" name="form1" method="post" action="">
<h1 align="center">MyProfile</h1>
  <table align="center" width="200" border="1">
  <tr>
      <td>photo</td>
      <td><img src="../Assets/Files/Photo/<?php echo $row["user_photo"];?> " width="150">
      
    </tr>
    <tr>
      <td>Name</td>
      <td><?php echo $row["user_name"];?> 
      
    </tr>
    <tr>
      <td>Contact</td>
      <td><?php echo $row["user_contact"];?> 
     
    </tr>
    <tr>
      <td>Email</td>
      <td><?php echo $row["user_email"];?> 
     
    </tr>
   
    <tr>
      <td>Address</td>
      <td><?php echo $row["user_address"];?> 
     
    </tr>
  </table>
</form>
  </div>
</body>
</html>
<?php
}
include("Foot.php");
ob_flush();
?>