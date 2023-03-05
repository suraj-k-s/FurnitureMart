<?php
ob_start();
session_start();
include("../Assets/Connection/Connection.php");

if(isset($_POST["btnsave"]))
{
	$name=$_POST["txtname"];
	$details=$_POST["txtdetails"];
	$price=$_POST["txtprice"];
	$subcategory_id=$_POST["sel_subcategory"];
	$brand=$_POST["sel_brand"];
	
	$photo=$_FILES["filephoto"]["name"];
	$path=$_FILES["filephoto"]["tmp_name"];
	move_uploaded_file($path,"../Assets/Files/Photo/".$photo);
	
		
	 $insQry ="insert into tbl_product(subcategory_id,product_name,product_photo,product_details,product_price,shop_id,brand_id) values('".$subcategory_id."','".$name."','".$photo."','".$details."','".$price."','".$_SESSION["kid"]."','".$brand."')";
	
	
	if($Conn->query($insQry))
    {
    	?>
   		<script>
		alert('inserted');
		location.href='Product.php';
		</script>
		<?php
	}
    else
	{
		 ?>
		 <script>
		 alert('failed');
	   	 location.href='Product.php';
		 </script>
		 <?php
    }
	
	
	
} 
 if(isset($_GET["id"]))
{
    $id=$_GET["id"];	
    $delQry="delete from tbl_product where product_id='".$_GET["id"]."'";
    if($Conn->query($delQry))
	{
	   ?>
        <script>
		alert('deleted!!');
		location.href='Product.php';
		</script>
		<?php
	}
else
	{
		?>
        <script>
		alert('failed!!');
		location.href='Product.php';
		</script>
		<?php
	}
}
 $pid="";
$pname="";
$sname="";

if(isset($_GET["pid"]))
{
	$selQry="select * from tbl_product where product_id='".$_GET["pid"]."'";
	$rel=$Conn->query($selQry);
	if($row=$rel->fetch_assoc())
{
	$pid=$row["product_id"];
	$pname=$row["product_name"];
	$sname=$row["subcategory_id"];
	}
	
}include("Head.php");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Furniture Mart::Product</title>
</head>

<body>
  <br><br><br><br><br>
  <div id="tab" align="center">
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<h1 align="center">Product</h1>
  <table  border="1" align="center" bgcolor="#FFFFFF">
    <tr>
      <td > Product Name</td>
      <td ><label for="txtname"></label>
      <input type="text" name="txtname" id="txtname" autocomplete="off" required/></td>
    </tr>
    <tr>
      <td> Product Photo</td>
      <td><label for="filephoto"></label>
      <input type="file" name="filephoto" id="filephoto" autocomplete="off" required/></td>
    </tr>
    <tr>
      <td> Product Details</td>
      <td><label for="txtdetails"></label>
      <textarea name="txtdetails" id="txtdetails"cols="45" rows="5"  autocomplete="off" required></textarea></td>
    </tr>
    <tr>
      <td> Product Price</td>
      <td><label for="txtprice"></label>
      <input type="text" name="txtprice" id="txtprice"  autocomplete="off" required/></td>
    </tr>
     <tr>
      <td>Product Brand</td>
     <td><label for="sel_brand"></label>
      <label for="sel_brand"></label>
        <select name="sel_brand" id="sel_brand" autocomplete="off" required>
        <option value="">---select---</option>
        <?php
	  $categoryQry="select * from tbl_brand";
	  $res=$Conn->Query($categoryQry);
	  while($row=$res->fetch_assoc())
	  {
	?>
    <option value=<?php echo $row["brand_id"]; ?> > <?php echo $row["brand_name"]; ?>
    </option>
    <?php
	  }?>
      </select></td>
    </tr>
        <tr>
      <td>Product Category</td>
     <td><label for="sel_category"></label>
      <label for="sel_category"></label>
        <select name="sel_category" id="sel_category" onChange="getSubcategory(this.value)" autocomplete="off" required>
        <option value="">---select---</option>
        <?php
	  $categoryQry="select * from tbl_category";
	  $res=$Conn->Query($categoryQry);
	  while($row=$res->fetch_assoc())
	  {
	?>
    <option value=<?php echo $row["category_id"]; ?> > <?php echo $row["category_name"]; ?>
    </option>
    <?php
	  }?>
      </select></td>
    </tr>
    <tr>
      <td>Product Subcategory</td>
     <td><label for="sel_subcategory"></label>
      <label for="sel_subcategory"></label>
        <select name="sel_subcategory" id="sel_subcategory" autocomplete="off" required>        
        <option value="">---select---</option>
       </select></td>
    </tr>

      <td align="center"colspan="2"><input type="submit" name="btnsave" id="btnsave" value="submit" /></td>
    </tr>
  </table>
  <?php
  $i=0;
  $selQry="select * from tbl_product p inner join tbl_subcategory s on p.subcategory_id=s.subcategory_id inner join tbl_category c on s.category_id=c.category_id where p.shop_id='".$_SESSION["kid"]."'";
  //$selQry;
  $rel=$Conn->query($selQry);
  if($rel->num_rows>0)
  {
?>
  <table align="center" bgcolor="#FFFFFF" border="1">
    <tr>
      <td>Sl no</td>
      <td>Image</td>
      <td>Product name</td>
      <td>Price</td>
      <td>Category</td>
      <td>Subcategory</td>
      <td colspan="2" align="center">Action</td>
    </tr>
       <?php
	$i=0;
	
	while($row=$rel->fetch_assoc())
	{
		$i++;
?>
   <tr>
	<td><?php echo $i?></td> 
  <td><img src="../Assets/Files/Photo/<?php echo $row["product_photo"]?>" width="150" height="150"></td>
    <td><?php echo $row["product_name"]?></td>
    <td><?php echo $row["product_price"]?></td>
    <td><?php echo $row["category_name"]?></td> 
    <td><?php echo $row["subcategory_name"]?></td> 
	<td><a href="Product.php?id=<?php echo $row["product_id"];?>">Delete</a></td>
    <td><a href="Stock.php?pid=<?php echo $row["product_id"];?>">stock</a></td>
</tr>
<br>
<?php
	}
   }
   else
   {
	   echo "<h1 align='center'>No Data Found<h1>";
   }

?>   
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
  </div>
</body>
<script src="../Assets/JQ/jQuery.js"></script>
<script>
 	function getSubcategory(did)
	{

		$.ajax({url:"../Assets/AjaxPages/AjaxSubcategory.php?did="+ did,
		success:function(result)
		{
			//alert(result)
			$("#sel_subcategory").html(result);
		}});
	}
	</script>
  <?php
//include("Foot.php");
//ob_flush();
?>
</html>