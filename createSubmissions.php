<?php
$title = "prof";
require "checkToken.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Dashboard Template for Bootstrap</title>
		<link href="./css/bootstrap.min.css" rel="stylesheet">
		<link href="./css/dashboard.css" rel="stylesheet">
		<script src="./js/ie-emulation-modes-warning.js"></script>
		<style type="text/css"></style>
		<script src="./js/jquery-2.1.4.min.js"></script>
		<script src="./js/bootstrap.min.js"></script>
		<script src="./js/holder.js"></script>
		<script src="./js/ie10-viewport-bug-workaround.js"></script>
		<script src="./js/bootstrap-datetimepicker.js"></script>
		<script src="./js/bootstrap-datetimepicker.min.js"></script>

		<script type="text/javascript">
			$(function () {
			$('#datetimepicker1').datetimepicker();
			});
		</script>
		<!-- Include Bootstrap Datepicker -->
		<link rel="stylesheet" href="./css/datepicker.min.css" />
		<link rel="stylesheet" href="./css/datepicker3.min.css" />

		<script src="./js/bootstrap-datepicker.min.js"></script>

		<style type="text/css">
			#eventForm .form-control-feedback {
			top: 0;
			right: -15px;
			}
		</style>
		<script>
			$(document).ready(function() {
				$('#datePicker')
				.datepicker({
					format: 'mm/dd/yyyy'
				})
				.on('changeDate', function(e) {
					// Revalidate the date field
					$('#eventForm').formValidation('revalidateField', 'date');
				});

				$('#eventForm').formValidation({
					framework: 'bootstrap',
					icon: {
						valid: 'glyphicon glyphicon-ok',
						invalid: 'glyphicon glyphicon-remove',
						validating: 'glyphicon glyphicon-refresh'
					},
					fields: {
						name: {
							validators: {
								notEmpty: {
									message: 'The name is required'
								}
							}
						},
						date: {
							validators: {
								notEmpty: {
									message: 'The date is required'
								},
								date: {
									format: 'MM/DD/YYYY',
									message: 'The date is not a valid'
								}
							}
						}
					}
				});
			});
		</script>
	</head>

	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header" >
					<a class="navbar-brand" href="index.php"><img style="width:35px;height:30px;margin-top: -5px;" src="./img/logo.jpg">
				</div>
				<b><font size="3">The Approval System</a><a href="login.php?out=1" style="right:50px; position:fixed;margin-top: 10px;">Sign out</a></font></b>
			</div>
		</nav>

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3 col-md-2 sidebar">
					<h3>Your Actions</h3>
					<ul class="nav nav-sidebar">
						<li><a href="createSessions.php">Create Sessions</a></li>
						<li><a href="createSubmissions.php" class="active">Create Submissions</a></li>
						<li><a href="topicApproval.php">Topic Approvals</a></li>
					</ul>
				</div>
				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
					<h1 class="page-header">Set Number of Sessions</h1>
					<div class="row placeholders">
						<div class="col-xs-7 col-sm-9 placeholder">
							<div class="panel panel-default">
								<div class="panel-body">
									<form id="login-form" action="./php/createSubmissions.php" method="post" role="form" style="display: block;">
										<div class="form-group" style="text-align: left;">
											<label for="subType" style="width:25%">Submissions Type</label>
											<select class="form-control">
												<option selection="default">Please select a type</option>
												<option>Project</option>
												<option>Topic</option>
											</select>
										</div>
										<div class="form-group" style="text-align: left;">
											<label for="subType" style="width:25%">Submissions Name</label>
											<input type="text" class="form-control" id="subName" placeholder="Enter a submission name">
										</div>
										<div class="form-group">
											<label class="col-xs-3 control-label">Due Date</label>
											<div class="input-group input-append date" style="width:40%" id="datePicker">
												<input type="text" class="form-control" name="date" />
												<span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
											</div>
										</div>
										<button type="submit" class="btn btn-default">Create Sessions</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>