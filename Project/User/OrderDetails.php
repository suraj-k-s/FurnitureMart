<?php
session_start();
include("../Assets/Connection/Connection.php");
$selQry="select * from tbl_booking b inner join tbl_cart c on c.booking_id=b.booking_id inner join tbl_product p on p.product_id=c.product_id where kudumbashree_id='".$_SESSION["kid"]."' and booking_status!=0 and cart_status!=0";
$res=$Conn->query($selQry);
if(isset($_GET["cid"]))

	{
		$upQry="update tbl_cart set cart_status='".$_GET["sts"]."' where cart_id='".$_GET["cid"]."' ";
		if($Conn->query($upQry))
		{
			?>
            <script>
				window.location="OrderDetails.php";
			</script>
            <?php
		}
	}
	?>
    
            	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Order Details</title>
</head>


<body>
<h1 align="center">Order Details</h1>
<div align="center">
  <table width="610" height="60" border="1">
    <tr>
      <td>SlNo</td>
      <td>Name</td>
      <td>Photo</td>
      <td>Quantity</td>
      <td>Price</td>
      <td>Total Amount</td>
      <td>Action</td>
    </tr>
    <?php 
	
	$i=0;
	while($row=$res->fetch_assoc())
	{
		$quantity=$row["cart_quantity"];
		$price=$row["product_price"];
		$amount=$quantity*$price;
		$i++;
		?>
        <tr>
            <td><?php echo $i;?></td> 
            <td><?php echo $row["product_name"];?></td> 
            <td><img src="../Assets/Files/Photo/<?php echo $row["product_photo"];?>" width="47" /></td>
            <td><?php echo $row["cart_quantity"];?></td>
            <td><?php echo $row["product_price"];?></td>
            <td><?php echo $totalamount;?></td>
	        <td>
                <?php 
					if($row["booking_status"]==1 && $row["cart_status"]==0)
					{
						echo "payment pending....";
					}
					else if($row["booking_status"]==2 && $row["cart_status"]==1)
					{
						?>
                        payment completed /
                        <a href="OrderDetails.php?cid=<?php echo $row ["card_id"];?>&sts=2>Pack product</a>
                        <?php 
					}
					else if($row["booking_status"]==2 && $row["cart_status"]==2)
					{
						?>
                        payment completed /
                        <a href="OrderDetails.php?cid=<?php echo $row ["card_id"];?>&sts=3>Pack product</a>
                        <?php 
					}
					else if($row["booking_status"]==2 && $row["cart_status"]==3)
					{
						?>
                        payment completed /
                        <a href="OrderDetails.php?cid=<?php echo $row ["card_id"];?>&sts=4>Pack product</a>
                        <?php 
					}
					else if($row["booking_status"]==2 && $row["cart_status"]==4)
					{
						?>
                       Order Completed
                        <?php 
					}
					?>
                    </td>
                    
					
       </tr>
<?php
	}
	?>
  </table>
</div>
</body>
</html>