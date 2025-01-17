<?php
include('includes/header.php');
include('includes/sidebar.php');

$id = $_GET['id'];
$vdata = getDataById('vehicle', 'id', $id);
$expdate = date("d-m-Y", strtotime("+15 days"));
$nowdate = date("d-m-Y", strtotime("+0 days"));
date_default_timezone_set("Asia/Kolkata");
?>

<style type="text/css">
	@-webkit-keyframes blinker {
		from {
			opacity: 1.0;
		}

		to {
			opacity: 0.0;
		}
	}

	.blink {
		text-decoration: blink;
		-webkit-animation-name: blinker;
		-webkit-animation-duration: 0.6s;
		-webkit-animation-iteration-count: infinite;
		-webkit-animation-timing-function: ease-in-out;
		-webkit-animation-direction: alternate;
	}
</style>
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1 style="font-size: 15px !important;">
			<!-- Vehicle Details | -->
			<!--<small>Control panel</small>-->
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Vehicle Details</li>
		</ol>
	</section><br />

	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="box box-success" id="userForm">
			<div class="box-header with-border">
				<h3 class="box-title">
					<p style="font-size: 14px">VEHICLE DETAILS</p>
				</h3>

				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

				</div>
			</div>


			<!-- /.box-header -->
			<div class="box-body " style="padding:20px;">
				<a onclick="window.history.back();" style="left:20px;" class="btn btn-primary pull-right"><i class="fa fa-arrow-left"></i> &nbsp; Go back</a><br /><br /><br />
				<div class="col-sm-12" style="box-shadow:0px 0px 20px 0px rgba(0,0,0,0.75);padding:20px;">


					<table id="example" class="table table-bordered table-hover" style="width:100%">
						<tbody>
							<tr>
								<td><b style="font-size: 12px">Vehicle No : </b></td>
								<td><?php echo $vdata['reg_no'] ?></td>
							</tr>

							<tr>
								<td><b style="font-size: 12px">Vehicle Catagory : </b></td>
								<td><?php echo $vdata['vehical_category'] ?></td>
							</tr>
							<tr>
								<td><b style="font-size: 12px">RTO : </b></td>
								<td><?php echo $vdata['rto_code'] ?></td>
							</tr>
							<!-- <tr>
								<td><b style="font-size: 12px">Location : </b></td>
								<td><?php echo $vdata['rto_city'] ?></td>
							</tr> -->
							<tr>
								<td><b style="font-size: 12px">Service : </b></td>
								<td><?php echo $vdata['rto_services'] ?></td>
							</tr>

							<tr>
								<td><b style="font-size: 12px">Price : </b></td>
								<td><?php echo $vdata['rto_price'] ?></td>
							</tr>
							<tr>
								<td><b style="font-size: 12px">Govt Fees : </b></td>
								<td><?php echo $vdata['rto_gov_price'] ?></td>
							</tr>



							<?php
							if ($vdata['rc_upload']) {
							?>
								<tr>
									<td><b style="font-size: 12px">RC DOCUMENT : </b></td>
									<td> <a href='uploads/vehicle_documents/rc_upload/<?php echo $vdata['rc_upload']; ?>' target="_blank" class="btn "><i class="fa fa-download"></i></a></td>
								</tr>

							<?php
							}
							?>
							<?php
							if ($vdata['rt_document']) {
							?>
								<tr>
									<td><b style="font-size: 12px">BUYER KYC Doc : </b></td>
									<td> <a href='uploads/vehicle_documents/reflective_tape/<?php echo $vdata['rt_document']; ?>' target="_blank" class="btn "><i class="fa fa-download"></i></a></td>
								</tr>

							<?php
							}
							?>
							<!-- <?php
							if ($vdata['g_upload']) {
							?>
								<tr>
									<td><b style="font-size: 12px">BUYER KYC Doc : </b></td>
									<td> <a href='uploads/vehicle_documents/g_upload/<?php echo $vdata['g_upload']; ?>' target="_blank" class="btn "><i class="fa fa-download"></i></a></td>
								</tr>

							<?php
							}
							?> -->
							<?php
							if ($vdata['sld_document']) {
							?>
								<tr>
									<td><b style="font-size: 12px">Seller KYC Doc : </b></td>
									<td> <a href='uploads/vehicle_documents/speed_limit_device/<?php echo $vdata['sld_document']; ?>' target="_blank" class="btn "><i class="fa fa-download"></i></a></td>
								</tr>

							<?php
							}
							?>
							<?php
							if ($vdata['fitness_document']) {
							?>
								<tr>
									<td><b style="font-size: 12px">Form 29/30
									<td> <a href='uploads/vehicle_documents/fitness/<?php echo $vdata['fitness_document']; ?>' target="_blank" class="btn "><i class="fa fa-download"></i></a></td>
								</tr>

							<?php
							}
							?>


							<!-- <tr>
								<td colspan="2">
									<div class="col-sm-12">
										<div class="panel panel-default">
											<div class="panel-heading" style="color: #070432; font-size: 16px ">Form 29</div>
											<div class="panel-body">
											 
												<div class="form-group row">
												 
													<label for="mobile" class="col-sm-2 form-label" style="font-size: 12px">
														DOCUMENT</label>

													<div class="col-sm-2"> <?php
																			if ($vdata['fitness_document']) {
																			?>
															<a href='uploads/vehicle_documents/fitness/<?php echo $vdata['fitness_document']; ?>' class="btn btn-primary" target="_blank">View / Download Document</a>
														<?php
																			}
														?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</td>
							</tr> -->
							<!-- <tr>
								<td colspan="2">
									<div class="col-sm-12">
										<div class="panel panel-default">
											<div class="panel-heading" style="color: #070432; font-size: 16px ">Buyer Kyc</div>
											<div class="panel-body">
											 
												<div class="form-group row">
													 
													 
													<label for="mobile" class="col-sm-2 form-label" style="font-size: 12px">
														DOCUMENT</label>

													<div class="col-sm-2"> <?php
																			if ($vdata['rt_document']) {
																			?>
															<a href='uploads/vehicle_documents/reflexive_tape/<?php echo $vdata['rt_document']; ?>' class="btn btn-primary" target="_blank">View / Download Document</a>
														<?php
																			}
														?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</td>
							</tr> -->

							<!-- <tr>
								<td colspan="2">
									<div class="col-sm-12">
										<div class="panel panel-default">
											<div class="panel-heading" style="color: #070432; font-size: 16px ">PERMIT</div>
											<div class="panel-body">
												<div class="form-group row">
													<label for="email" class="col-sm-2 form-label" style="font-size: 12px">
														ISSUE DATE</label>
													<div class="col-sm-4">
														<?php echo  date('d-m-Y', strtotime($vdata['permit_issue_date'])); ?>
													</div>
												</div>
												<div class="form-group row">
													<label for="email" class="col-sm-2 form-label" style="font-size: 12px">
														EXPIRY DATE</label>
													<div class="col-sm-2">
														<?php echo  date('d-m-Y', strtotime($vdata['permit_expiry_date'])); ?>
													</div>

													<div class="col-sm-2 ">
														<?php
														$expiryDate = date('d-m-Y', strtotime($vdata['permit_expiry_date']));
														if (strtotime($expiryDate) < strtotime($expdate) && strtotime($expiryDate) > strtotime($nowdate)) {

														?>
															<a class="btn btn-danger blink">Will Expired Soon</a>
														<?php
														} else
							                                	if (strtotime($expiryDate) < strtotime($nowdate)) {
														?>
															<a class="btn btn-danger ">Expired</a>
														<?php
														}
														?>
													</div>

													<label for="mobile" class="col-sm-2 form-label" style="font-size: 12px">
														DOCUMENT</label>

													<div class="col-sm-2"> <?php
																			if ($vdata['permit_document']) {
																			?>
															<a href='uploads/vehicle_documents/permit/<?php echo $vdata['permit_document']; ?>' class="btn btn-primary" target="_blank">View / Download Document</a>
														<?php
																			}
														?>
													</div>
												</div>
											</div>
										</div>
							</tr> -->
							</tr>
							<tr>
								<td colspan="2">
									<div class="col-sm-12">
										<div class="panel panel-default">
											<div class="panel-heading" style="color: #070432; font-size: 16px ">INSURNCE</div>
											<div class="panel-body">
												<div class="form-group row">
													<label for="email" class="col-sm-2 form-label" style="font-size: 12px">
														ISSUE DATE</label>
													<div class="col-sm-4">
														<?php echo  date('d-m-Y', strtotime($vdata['insurence_issue_date'])); ?>
													</div>
												</div>
												<div class="form-group row">
													<label for="email" class="col-sm-2 form-label" style="font-size: 12px">
														EXPIRY DATE</label>
													<div class="col-sm-2">
														<?php echo  date('d-m-Y', strtotime($vdata['insurence_expiry_date'])); ?>
													</div>

													<div class="col-sm-2 ">
														<?php
														$expiryDate = date('d-m-Y', strtotime($vdata['insurence_expiry_date']));
														if (strtotime($expiryDate) < strtotime($expdate) && strtotime($expiryDate) > strtotime($nowdate)) {

														?>
															<a class="btn btn-danger blink">Will Expired Soon</a>
														<?php
														} else
							                                	if (strtotime($expiryDate) < strtotime($nowdate)) {
														?>
															<a class="btn btn-danger ">Expired</a>
														<?php
														}
														?>
													</div>

													<label for="mobile" class="col-sm-2 form-label" style="font-size: 12px">
														DOCUMENT</label>

													<div class="col-sm-2"> <?php
																			if ($vdata['insurence_document']) {
																			?>
															<a href='uploads/vehicle_documents/insurence/<?php echo $vdata['insurence_document']; ?>' class="btn " target="_blank"><i class="fa fa-download"></i></a>
														<?php
																			}
														?>
													</div>
												</div>
											</div>
										</div>
							</tr>
							</tr>


							<!-- <tr>
								<td colspan="2">
									<div class="col-sm-12">
										<div class="panel panel-default">
											<div class="panel-heading" style="color: #070432; font-size: 16px ">ROAD TAX</div>
											<div class="panel-body">
												<div class="form-group row">
													<label for="email" class="col-sm-2 form-label" style="font-size: 12px">
														ISSUE DATE</label>
													<div class="col-sm-4">
														<?php echo  date('d-m-Y', strtotime($vdata['tt_issue_date'])) ?>
													</div>
												</div>
												<div class="form-group row">
													<label for="email" class="col-sm-2 form-label" style="font-size: 12px">
														EXPIRY DATE</label>
													<div class="col-sm-2">
														<?php echo  date('d-m-Y', strtotime($vdata['tt_expiry_date'])) ?>
													</div>
													<div class="col-sm-2 ">
														<?php
														$expiryDate = date('d-m-Y', strtotime($vdata['tt_expiry_date']));
														if (strtotime($expiryDate) < strtotime($expdate) && strtotime($expiryDate) > strtotime($nowdate)) {

														?>
															<a class="btn btn-danger blink">Will Expired Soon</a>
														<?php
														} else
							                                	if (strtotime($expiryDate) < strtotime($nowdate)) {
														?>
															<a class="btn btn-danger">Expired</a>
														<?php
														}
														?>
													</div>
													<label for="mobile" class="col-sm-2 form-label" style="font-size: 12px">
														DOCUMENT</label>

													<div class="col-sm-2">
														<?php
														if ($vdata['tt_document']) {
														?>
															<a href='uploads/vehicle_documents/tax_token/<?php echo $vdata['tt_document']; ?>' class="btn btn-primary" target="_blank">View / Download Document</a>
														<?php
														}
														?>
													</div>
												</div>
											</div>
										</div>
							</tr> -->
							</tr>

							<tr>
								<td colspan="2">
									<div class="col-sm-12">
										<div class="panel panel-default">
											<div class="panel-heading" style="color: #070432; font-size: 16px ">POLLUTION</div>
											<div class="panel-body">
												<div class="form-group row">
													<label for="email" class="col-sm-2 form-label" style="font-size: 12px">
														ISSUE DATE</label>
													<div class="col-sm-4">
														<?php echo  date('d-m-Y', strtotime($vdata['pollution_issue_date'])) ?>
													</div>
												</div>
												<div class="form-group row">
													<label for="email" class="col-sm-2 form-label" style="font-size: 12px">
														EXPIRY DATE</label>
													<div class="col-sm-2">
														<?php echo  date('d-m-Y', strtotime($vdata['pollution_expiry_date'])) ?>
													</div>

													<div class="col-sm-2 ">
														<?php
														$expiryDate = date('d-m-Y', strtotime($vdata['pollution_expiry_date']));
														if (strtotime($expiryDate) < strtotime($expdate) && strtotime($expiryDate) > strtotime($nowdate)) {

														?>
															<a class="btn btn-danger blink">Will Expired Soon</a>
														<?php
														} else
							                                	if (strtotime($expiryDate) < strtotime($nowdate)) {
														?>
															<a class="btn btn-danger">Expired</a>
														<?php
														}
														?>
													</div>
													<label for="mobile" class="col-sm-2 form-label" style="font-size: 12px">
														DOCUMENT</label>

													<div class="col-sm-2">
														<?php
														if ($vdata['pollution_document']) {
														?>
															<a href='uploads/vehicle_documents/pollution/<?php echo $vdata['pollution_document']; ?>' class="btn" target="_blank"><i class="fa fa-download"></i></a>
														<?php
														}
														?>
													</div>
												</div>
											</div>
										</div>
							</tr>
							</tr>
							<!-- <tr>
								<td colspan="2">
									<div class="col-sm-12">
										<div class="panel panel-default">
											<div class="panel-heading" style="color: #070432; font-size: 16px ">REGISTRATION CERTIFICATE (RC)</div>
											<div class="panel-body">

												<div class="form-group row">

													<label for="mobile" class="col-sm-2 form-label" style="font-size: 12px">
														DOCUMENT</label>

													<div class="col-sm-2">
														<?php
														if ($vdata['rc_upload']) {
														?>
															<a href='uploads/vehicle_documents/rc_upload/<?php echo $vdata['rc_upload']; ?>' class="btn btn-primary" target="_blank">View / Download Document</a>
														<?php
														}
														?>
													</div>
												</div>
											</div>
										</div>
							</tr> -->
							</tr>

				</div>


				</tbody>
				</table>
			</div>
		</div>
		<!-- /.box-body -->
</div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include('includes/footer.php');


?>
<?php include('includes/commonFooter.php'); ?>

<?php
// print_R($_SESSION);die();
// $_SESSION['success'] = '';
// $_SESSION['error'] = '';
if ($_SESSION) {
	if ($_SESSION['error']) {
		$msg = $_SESSION['error'];
		echo "<script> showErrorMsgBox('" . $msg . "');</script>";
		$_SESSION['error'] = '';
	}
	if ($_SESSION['success']) {
		$msg = $_SESSION['success'];
		echo "<script> showSuccessMsgBox('" . $msg . "');</script>";
		$_SESSION['success'] = '';
	}
}


?>
<script type="text/javascript">
	$(document).ready(function() {


	});
</script>