<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SHOP LIST</title>

</head>
    <?php  
	ob_start();
	
	use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpMail/src/Exception.php';
require 'phpMail/src/PHPMailer.php';
require 'phpMail/src/SMTP.php';



include('../Assets/Connection/Connection.php');
include('Head.php');





      if(isset($_GET["aid"]))
	  {
		  $mail=new PHPMailer(true);
		  
		 
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'arjunvs701@gmail.com'; // Your gmail
		$mail->Password = 'upfefazwafpmpoee'; // Your gmail app password
		$mail->SMTPSecure = 'ssl';
		$mail->Port = 465;
	  
		$mail->setFrom('arjunvs701@gmail.com'); // Your gmail
	  
		$mail->addAddress($_GET["mail"]);
				  
		$mail->isHTML(true);
				  
		$mail->Subject = "Verification";
		$mail->Body = "Accepted";
		$mail->send();
						  
		  
		  
		  
		  
		  
		  $accept = "update tbl_shop set shop_status='1' where shop_id='".$_GET["aid"]."'";
		  if($Conn->query($accept))
		  {
			  header("Location:ShopList.php");
		  }
	  }
	  if(isset($_GET["rid"]))
	  {
		   $mail=new PHPMailer(true);
		  
		  $mail->isSMTP();
				$mail->Host = 'smtp.gmail.com';
				$mail->SMTPAuth = true;
				$mail->Username = 'arjunvs701@gmail.com'; // Your gmail
				$mail->Password = 'upfefazwafpmpoee'; // Your gmail app password
				$mail->SMTPSecure = 'ssl';
				$mail->Port = 465;
			  
				$mail->setFrom('arjunvs701@gmail.com'); // Your gmail
			  
				$mail->addAddress($_GET["mail"]);
			  
				$mail->isHTML(true);
			  
				$mail->Subject = "Verification";
				$mail->Body = "Rejected";
				$mail->send();
					  
		  
		  
		  
		  $accept = "update tbl_shop set shop_status='2' where shop_id='".$_GET["rid"]."'";
		  if($Conn->query($accept))
		  {
			  header("Location:ShopList.php");
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
                            <h1>New shops</h1>
                                <div class="QA_table mb_30">
                                    <!-- table-responsive -->
                                    <table class="table lms_table_active">
                                        <thead>
                                            <tr style="background-color: #74CBF9">
                                                <td align="center" scope="col">Sl.No</td>
                                                <td align="center" scope="col">Name</td>
                                                <td align="center" scope="col">Contact</td>
                                                <td align="center" scope="col">Email</td>
                                                <td align="center" scope="col">Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
												$i = 0;
                                                $selQry = "select * from tbl_shop where shop_status='0'";
                                               $rs = $Conn->query($selQry);
                                                while ($data =$rs->fetch_assoc()) {

                                                    $i++;

                                            ?>
                                            <tr>
                                                <td align="center"><?php echo $i;?></td>
                                                <td align="center"><?php echo $data["shop_name"] ?></td>
                                                <td align="center"><?php echo $data["shop_contact"] ?></td>
                                                <td align="center"><?php echo $data["shop_email"] ?></td>
                                                <td align="center"><a href="ShopList.php?aid=<?php echo $data["shop_id"] ?>&mail=<?php echo $data["shop_email"] ?>" class="status_btn">Accept</a> | <a href="ShopList.php?rid=<?php echo $data["shop_id"] ?>&mail=<?php echo $data["shop_email"] ?>" class="status_btn">Reject</a> </td>
                                            </tr>
                                            <?php                     }


                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                                <h1>Accepted shops</h1>
                                <div class="QA_table mb_30">
                                    <!-- table-responsive -->
                                    <table class="table lms_table_active">
                                        <thead>
                                            <tr style="background-color: #74CBF9">
                                                <td align="center" scope="col">Sl.No</td>
                                                <td align="center" scope="col">Name</td>
                                                <td align="center" scope="col">Contact</td>
                                                <td align="center" scope="col">Email</td>
                                                <td align="center" scope="col">Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
												$i = 0;
                                                $selQry = "select * from tbl_shop where shop_status='1'";
                                               $rs = $Conn->query($selQry);
                                                while ($data = $rs->fetch_assoc()) {

                                                    $i++;

                                            ?>
                                            <tr>
                                                <td align="center"><?php echo $i;?></td>
                                                <td align="center"><?php echo $data["shop_name"] ?></td>
                                                <td align="center"><?php echo $data["shop_contact"] ?></td>
                                                <td align="center"><?php echo $data["shop_email"] ?></td>
                                                <td align="center"><a href="ShopList.php?rid=<?php echo $data["shop_id"] ?>&mail=<?php echo $data["shop_email"] ?>" class="status_btn">Reject</a> </td>
                                            </tr>
                                            <?php                     }


                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                                <h1>Rejected shops</h1>
                                <div class="QA_table mb_30">
                                    <!-- table-responsive -->
                                    <table class="table lms_table_active">
                                        <thead>
                                            <tr style="background-color: #74CBF9">
                                                <td align="center" scope="col">Sl.No</td>
                                                <td align="center" scope="col">Complaint</td>
                                                <td align="center" scope="col">Date</td>
                                                <td align="center" scope="col">shop</td>
                                                <td align="center" scope="col">Reply</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
												$i = 0;
                                                $selQry = "select * from tbl_shop where shop_status='2'";
                                               $rs = $Conn->query($selQry);
                                                while ($data = $rs->fetch_assoc()) {

                                                    $i++;

                                            ?>
                                            <tr>
                                                <td align="center"><?php echo $i;?></td>
                                                <td align="center"><?php echo $data["shop_name"] ?></td>
                                                <td align="center"><?php echo $data["shop_contact"] ?></td>
                                                <td align="center"><?php echo $data["shop_email"] ?></td>
                                                <td align="center"><a href="ShopList.php?aid=<?php echo $data["shop_id"] ?>&mail=<?php echo $data["shop_email"] ?>" class="status_btn">Accept</a> </td>
                                            </tr>
                                            <?php                     }


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
    </body>
     <?php
		include('Foot.php');
		 ob_end_flush();
		?>

    </html>