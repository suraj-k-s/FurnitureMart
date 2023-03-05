<?php
ob_start();
include("Head.php");
session_start();
include("../Assets/Connection/Connection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product Details</Details></title>
</head>

<body>
  <br><br><br><br><br>
  <div id="tab">
<form id="form1" name="form1" method="post" action="">
<h1 align="center">Product Details</h1>
  <div align="center">
    <table  border="1">
      <tr>
        <td >Category</td>
        <td ><label for="ddl_category"></label>
          <select name="ddl_category" id="ddl_category">
          <option value="">---select---</option>
           <?php 
		   $selQry="select * from tbl_category";
		   $res=$Conn->query($selQry);
		   while($row=$res->fetch_assoc())
		   {
			   ?>
               <option value="<?php echo $row["category_id"]?>"><?php echo $row["category_name"]?></option>
               <?php
		   }
		   ?>
          
        </select></td>
      </tr>
      <tr>
        <td align="center" colspan="2"><input type="submit" name="btn_search" id="btn_search" value="Submit" /></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <table  border="0" cellpadding="30">
    <?php
	if(isset($_POST["btn_search"]))
	{
		$category=$_POST["ddl_category"];
		$selQry="select * from tbl_product p inner join tbl_subcategory  s on p.subcategory_id=s.subcategory_id where p.kudumbashree_id='".$_GET["id"]."' AND category_id='".$category."'";
		$res=$Conn->query($selQry);
		if($res->num_rows>0)
		{
			$i=0;
			?>
    
   
      <tr>
       
	  <?php
	while($row=$res->fetch_assoc())
	{
		$i++;
		?>
        
        <td><p style="border:none ;">
        <img src="../Assets/Files/Photo/<?php echo $row["product_photo"];?>" width="150" /><br>
        <?php echo $row["subcategory_name"];?><br>
        <?php echo $row["product_name"];?><br>
           
	    <?php echo $row["product_price"];?><br>
         <?php echo $row["product_details"];?><br> 
      <a href="#" onclick="AddtoCart(<?php echo $row['product_id']?>)">Add to Cart</a></p></td>
        <?php 
	}
  if($i==4)
  {
    echo "</td>";
    $i==0;
    echo "<td>";

  }
	?>
        
  </table>
  <?php
}
else 
 {
    echo "<h1>No Data Found</h1>";
 }
}
?>
     
    <p id="result">&nbsp;</p>
    
  </div>
</form>
  </div>
</body>
<?php  
include("Foot.php");
ob_flush();
?>
</html>
<script src="../Assets/JQ/jQuery.js"></script>
<script>
     
 	function AddtoCart(pid)
	{

		$.ajax({url:"../Assets/AjaxPages/AjaxAddCart.php?id="+ pid,
		success:function(result)
		{
			$("#result").html(result);
		}});
	}
	
	</script>