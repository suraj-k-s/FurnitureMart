<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Subcategory </title>
</head>
<?php
ob_start();
include('../Assets/Connection/Connection.php');
include('Head.php');


if(isset($_POST['btn_save']))
	{
		$subcategory = $_POST['txt_subcategory'];
		$category = $_POST['sel_category'];
		
		
			$ins = "insert into tbl_subcategory (subcategory_name,category_id) values('".$subcategory."','".$category."')";
		
			if($Conn->query($ins))
			{
				header("location:subcategory.php");
			}
		
	}

	
	if(isset($_GET['id']))
	{
		$del = "delete from tbl_subcategory where subcategory_id = '".$_GET['id']."'";
		if($Conn->query($del))
		{
			header("location:subcategory.php");
		}
	}

?>

<body>
        <section class="main_content dashboard_part">

            <!--/ menu  -->
            <div class="main_content_iner ">
                <div class="container-fluid p-0">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="QA_section">
                                <!--Form-->
                                <div class="white_box_tittle list_header">
                                    <div class="col-lg-12">
                                        <div class="white_box mb_30">
                                            <div class="box_header ">
                                                <div class="main-title">
                                                    <h3 class="mb-0" >Table subcategory</h3>
                                                </div>
                                            </div>
                                            <form method="post">
                                                <div class="form-group">
                                                    <label for="txt_category">category</label>
                                                    <select class="form-control" name="sel_category" id="sel_category">
                                                    <option value="">-----Select-----</option>
                                                    <?php
                                                          $sel ="select * from tbl_category ";
                                                  $row = $Conn->query($sel);
                                                  while($data = $row->fetch_assoc())
                                                  {
                                                 ?>
                                                     <option value="<?php echo $data['category_id'];?> " 
                                                      ><?php echo $data['category_name']; ?></option >
                                                     
                                                     <?php
                                                     }
                                                     ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="txt_category">subcategory</label>
                    <input type="text" name="txt_subcategory" id="txt_subcategory" class="form-control"/>
                                                </div>
                                                <div class="form-group" align="center">
                                                    <input type="submit" class="btn-dark" style="width:100px; border-radius: 10px 5px " name="btn_save" value="Save">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="QA_table mb_30">
                                    <!-- table-responsive -->
                                    <table class="table lms_table_active">
                                        <thead>
                                            <tr style="background-color: #74CBF9">
                                                <td align="center" scope="col">Sl.No</td>
                                                <td align="center" scope="col">category</td>
                                                <td align="center" scope="col">subcategory </td>
                                                <td align="center" scope="col">Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
	$i=0;
	  $sel = "select * from tbl_subcategory p inner join tbl_category d on d.category_id=p.category_id";
	  $row = $Conn->query($sel);
	  while($data = $row->fetch_assoc())
	  {
		  $i++;
		  ?>  
                                            <tr>
                                               <td align="center"><?php echo $i; 	?></td>
                   
            <td align="center"><?php echo $data['category_name']; ?></td>
            <td align="center"><?php echo $data['subcategory_name']; ?></td>
            <td align="center">
            <a class="status_btn"  href="subcategory.php?id=<?php echo $data['subcategory_id']; ?>">Delete </a>
		
         </td>
                                            </tr>
                                            <?php                    
                                              }


                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <?php
		include('Foot.php');
		 ob_end_flush();
		?>
</body>
</html>