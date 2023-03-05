<?php
ob_start();
include("Head.php");
include("../Assets/Connection/Connection.php");
if(isset($_POST["btnsave"]))
{
	$date=$_POST["txtdate"];
	$quantity=$_POST["txtqty"];
	$pid=$_POST["txtpid"];
	
	
	$insQry ="insert into tbl_stock(stock_date,stock_quantity,product_id) values('".$date."','".$quantity."','".$pid."')";
		    if($Conn->query($insQry))
	        {
		 		?>
        		<script>
				alert('inserted');
					location.href='Stock.php?pid=<?php echo $pid;?>';
				</script>
				<?php
				
			}
		    else
			{
				 ?>
				 <script>
				 alert('failed');
			   	 location.href='Stock.php';
				 </script>
				 <?php
	        }
			
      
   } 
 if(isset($_GET["did"]))
{
    $id=$_GET["did"];	
    $delQry="delete from tbl_stock where stock_id='".$id."'";
    if($Conn->query($delQry))
	{
	   ?>
        <script>
		alert('deleted!!');
		location.href='Stock.php?pid=<?php echo $_GET["pid"];?>';
		</script>
		<?php
	}
else
	{
		?>
        <script>
		alert('failed!!');
		location.href='Stock.php';
		</script>
		<?php
	}
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Furniture Mart::Stock</title>
</head>

<body>
	<br><br><br><br><br>
	<div id="tab" align="center">
<form id="form1" name="form1" method="post" action="">
<input type="hidden" name="txtpid" value="<?php echo $_GET["pid"]; ?>" />
<h1 align="center">Stock</h1>
  <table width="200" border="1" align="center">
    <tr>
      <td width="83">Date</td>
      <td width="101"><label for="txtdate"></label>
      <input type="date" name="txtdate" id="txtdate" required autocomplete="off"/></td>
    </tr>
    <tr>
      <td>Quantity</td>
      <td><label for="txtqty"></label>
      <input type="number" name="txtqty" id="txtqty" required autocomplete="off"/></td>
    </tr>
    <tr>
      <td align="center" colspan="2"><input type="submit" name="btnsave" id="btnsubmit" value="Submit" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <?php
      $i=0;
	  $selQry="select * from tbl_stock where product_id='".$_GET["pid"]."'";
	  $res=$Conn->Query($selQry);
	  if($res-> num_rows > 0)
	  {
	?>
  <table width="200" border="1" align="center">
    <tr>
    
      <td>Sl no</td>
      <td>Date</td>
      <td>Quantity</td>
      <td>Action</td>
    </tr>
    <?php
	while($row=$res->fetch_assoc())
	{
		$i++;
		
  ?>
   <tr>
	<td><?php echo $i;?></td> 
    <td><?php echo $row["stock_date"];?></td>
    <td><?php echo $row["stock_quantity"];?></td>
	<td><a href="Stock.php?did=<?php echo $row["stock_id"];?>&pid=<?php echo $_GET["pid"]; ?>">Delete</a></td>
   
</tr>
  
  
<?php
	}
	?></table>
    <?php

	
	  
 }
 else
 {
  	?>
	<h1 align='center'>No Data Found<h1>
    <?php
 }

?>
</form>
	</div>
</body>

</html>
<?php
include("Foot.php");
ob_flush();
?>