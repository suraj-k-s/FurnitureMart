<?php
ob_start();
include("Head.php");
include("../Assets/Connection/Connection.php");
session_start();
$selQry="select * from tbl_shop where shop_id='".$_SESSION["kid"]."'";
$result=$Conn->query($selQry);
if($row=$result->fetch_assoc())
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Furniture Mart::MyProfile</title>
</head>
<body>
  <br><br><br><br><br>
  <div id="tab" align="center">
<form id="form1" name="form1" method="post" action="">
<h1 align="center">MyProfile</h1>
  <table align="center" width="200" border="1">
  <tr>
      <td>photo</td>
      <td><img src="../Assets/Files/Photo/<?php echo $row["shop_photo"];?>" width="150">
      
    </tr>
    <tr>
      <td>Name</td>
      <td><?php echo $row["shop_name"];?> 
      
    </tr>
    <tr>
      <td>Contact</td>
      <td><?php echo $row["shop_contact"];?> 
     
    </tr>
    <tr>
      <td>Email</td>
      <td><?php echo $row["shop_email"];?> 
     
    </tr>
    
    <tr>
      <td>Address</td>
      <td><?php echo $row["shop_address"];?> 
     
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