<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ 

if(isset($_POST['submit']))
  {
$names=$_POST['names'];
$categoryname=$_POST['categoryname'];
$maidview=$_POST['maidview'];
$contact=$_POST['contact'];
$education=$_POST['education'];
$tribe=$_POST['tribe'];
$age=$_POST['age'];
$address=$_POST['address'];
$nok=$_POST['nok'];
$nokc=$_POST['nokc'];
$noka=$_POST['noka'];
$img=$_FILES["img"]["name"];
$moslem=$_POST['moslem'];
$christian=$_POST['christian'];
$catholic=$_POST['catholic'];
$protestant=$_POST['protestant'];
$seventhday=$_POST['seventhday'];
$other=$_POST['other'];

move_uploaded_file($_FILES["img"]["tmp_name"],"img/maidimages/".$_FILES["img"]["name"]);


$sql="INSERT INTO tblmaids(names,categoryname,maidview,contact,education,tribe,age,address,nok,nokc,noka,img,moslem,christian,catholic,protestant,seventhday,other) VALUES(:names,:categoryname,:maidview,:contact,:education,:tribe,:age,:address,:nok,:nokc,:noka,:img,:moslem,:christian,:catholic,:protestant,:seventhday,:other)";
$query = $dbh->prepare($sql);
$query->bindParam(':names',$names,PDO::PARAM_STR);
$query->bindParam(':categoryname',$categoryname,PDO::PARAM_STR);
$query->bindParam(':maidview',$maidview,PDO::PARAM_STR);
$query->bindParam(':contact',$contact,PDO::PARAM_STR);
$query->bindParam(':education',$education,PDO::PARAM_STR);
$query->bindParam(':tribe',$tribe,PDO::PARAM_STR);
$query->bindParam(':age',$age,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':nok',$nok,PDO::PARAM_STR);
$query->bindParam(':nokc',$nokc,PDO::PARAM_STR);
$query->bindParam(':noka',$noka,PDO::PARAM_STR);
$query->bindParam(':img',$img,PDO::PARAM_STR);
$query->bindParam(':moslem',$moslem,PDO::PARAM_STR);
$query->bindParam(':christian',$christian,PDO::PARAM_STR);
$query->bindParam(':catholic',$catholic,PDO::PARAM_STR);
$query->bindParam(':protestant',$protestant,PDO::PARAM_STR);
$query->bindParam(':seventhday',$seventhday,PDO::PARAM_STR);
$query->bindParam(':other',$other,PDO::PARAM_STR);

$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Domestic Worker posted successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}


	?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>TRAM RECRUITMENT COMPANY | Admin Post Domestic Worker</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
<style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>

</head>

<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Post a Domestic Worker</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Basic Info</div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

									<div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data">
<div class="form-group">
<label class="col-sm-2 control-label">Full Names<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="names" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Select Category<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="categoryname" required>
<option value=""> Select </option>
<?php $ret="select id,CategoryName from tblcategory";
$query= $dbh -> prepare($ret);
//$query->bindParam(':id',$id, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
foreach($results as $result)
{
?>
<option value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->CategoryName);?></option>
<?php }} ?>

</select>
</div>
</div>
											
<div class="hr-dashed"></div>


<div class="form-group">
<label class="col-sm-2 control-label">Contact<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="contact" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Education Level<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="education" required>
<option value=""> Select </option>

<option value="O-Level">O-LEVEL CERTIFICATE</option>
<option value="A-Level">A-LEVEL CERTIFICATE</option>
<option value="Degree">DEGREE</option>
<option value="None">None</option>
</select>
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Tribe<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="tribe" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Age<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="age" class="form-control" required>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Address<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="address" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Next of Kin<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="nok" class="form-control" required>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Next of Kin Contact<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="nokc" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Next of Kin Address<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="noka" class="form-control" required>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Brief Description<span style="color:red">*</span></label>
<div class="col-sm-10">
<textarea class="form-control" name="maidview" rows="3" required></textarea>
</div>
</div>

<div class="hr-dashed"></div>


<div class="form-group">
<div class="col-sm-12">
<h4><b>Upload Image</b></h4>
</div>
</div>


<div class="form-group">
	<div class="col-sm-4">
	Image <span style="color:red">*</span><input type="file" name="img" required>
	</div>
</div>

<div class="hr-dashed"></div>									
</div>
</div>
</div>
</div>
							

<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">Select Religion</div>
<div class="panel-body">


<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="airconditioner" name="moslem" value="1">
<label for="airconditioner"> Moslem </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="powerdoorlocks" name="christian" value="1">
<label for="powerdoorlocks"> Christian </label>
</div></div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="antilockbrakingsys" name="catholic" value="1">
<label for="antilockbrakingsys"> Catholic </label>
</div></div>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="brakeassist" name="protestant" value="1">
<label for="brakeassist"> Protestant </label>
</div>
</div>



<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<!-- <input type="checkbox" id="powersteering" name="powersteering" value="1"> -->
<input type="checkbox" id="powersteering" name="seventhday" value="1">
<label for="inlineCheckbox5"> Seventh Day Adventist </label>
</div>
</div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="driverairbag" name="other" value="1">
<label for="driverairbag"> Other </label>
</div>
</div>

</div>




											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-2">
													<button class="btn btn-default" type="reset">Cancel</button>
													<button class="btn btn-primary" name="submit" type="submit">Save changes</button>
												</div>
											</div>

										</form>
									</div>
								</div>
							</div>
						</div>
						
					

					</div>
				</div>
				
			

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
<?php } ?>