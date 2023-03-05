<option value="">---select---</option>
<?php
include("../Connection/Connection.php");
		$selQry = "select * from tbl_subcategory where category_id='".$_GET["did"]."'";
		$re = $Conn->query($selQry);
		while($row=$re->fetch_assoc())
		{
			?>
				<option value="<?php echo $row["subcategory_id"]?> "><?php echo $row["subcategory_name"]?></option>
                <?php
		}
?>