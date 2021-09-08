<?php

require_once('../config.php');

?>

<!doctype html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Salary Calculator</title>

		<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://getbootstrap.com/docs/4.0/examples/floating-labels/floating-labels.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<style type="text/css">
		input{
			text-align:center;
			font-size: 1.5em !important;
		}
	</style>
</head>

<body>

	<div class="container-fluid">

		<a href="<?=$base_url?>/" type="button" class="btn btn-dark btn-sm">
			<i class="fa fa-chevron-left"></i> Back to main page
		</a>

		<div class="row">

			<div class="col-md-12 text-center mb-4">
				<h2>Salary Calculator</h2>
			</div>


			<div class="col-md-4 mx-auto text-center mb-4">
				<div class="form-label-group">
					<input type="text" id="YearSal" class="form-control" autofocus style="font-size: 2em !important;">
					<label for="inputEmail">Annual Salary</label>
				</div>
				<i class="text-muted" id="NumbersInWords"></i>
			</div>

		</div>


		<div class="row">

			<div class="col-md-3 mx-auto text-center mb-5 mt-3">
				<div class="form-label-group">
					<input type="text" id="MonthSal" class="form-control" disabled >
					<label for="inputEmail">Monthly Salary</label>
				</div>
			</div>

			<div class="col-md-3 mx-auto text-center mb-5 mt-3">
				<div class="form-label-group">
					<input type="text" id="WeekSal" class="form-control" disabled >
					<label for="inputEmail">Weekly Salary</label>
				</div>
			</div>


			<div class="col-md-3 mx-auto text-center mb-5 mt-3">
				<div class="form-label-group">
					<input type="text" id="DaySal" class="form-control" disabled >
					<label for="inputEmail">Daily Salary</label>
				</div>
			</div>

		</div>


		<div class="row">

			<div class="col-md-3 mx-auto text-center mb-5 mt-3">
				<div class="form-label-group">
					<input type="text" id="HourSal" class="form-control" disabled >
					<label for="inputEmail">Hourly Salary</label>
				</div>
			</div>

			<div class="col-md-3 mx-auto text-center mb-5 mt-3">
				<div class="form-label-group">
					<input type="text" id="MinSal" class="form-control" disabled >
					<label for="inputEmail">Per Minute Salary</label>
				</div>
			</div>

			<div class="col-md-3 mx-auto text-center mb-5 mt-3">
				<div class="form-label-group">
					<input type="text" id="SecSal" class="form-control" disabled >
					<label for="inputEmail">Per Second Salary</label>
				</div>
			</div>

		</div>


	</div>

	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>


	<script type="text/javascript">
		$(document).ready(function(){

			$("#YearSal").on('keyup', function(){
				var YearSalary = parseInt($(this).val().replace(/\D/g,''),10);
				if(isNaN(YearSalary)) { var YearSalary = 0; }
				$(this).val(YearSalary.toLocaleString());
				$('#NumbersInWords').text( inWords(YearSalary) );
				CalculateSalary( YearSalary );
			});

			function CalculateSalary(value) {
				$('#MonthSal').val( parseInt ( Math.ceil( value / 12) ).toLocaleString() + ' ₹' );
				$('#WeekSal').val( parseInt ( Math.ceil( value / 52) ).toLocaleString() + ' ₹' );
				$('#DaySal').val( parseFloat ( value / 365 ).toLocaleString('en-IN', {'maximumFractionDigits':2}) + ' ₹' );
				$('#HourSal').val( parseFloat ( value / 8760 ).toLocaleString('en-IN', {'maximumFractionDigits':2}) + ' ₹' );
				$('#MinSal').val( parseFloat ( value / 525600 ).toLocaleString('en-IN', {'maximumFractionDigits':2}) + ' ₹' );
				$('#SecSal').val( parseFloat ( value / 31536000 ).toLocaleString('en-IN', {'maximumFractionDigits':2}) + ' ₹' );
			}



			function inWords (num) {

				var a = ['','One ','Two ','Three ','Four ', 'Five ','Six ','Seven ','Eight ','Nine ','Ten ','Eleven ','Twelve ','Thirteen ','Fourteen ','Fifteen ','Sixteen ','Seventeen ','Eighteen ','Nineteen '];
				var b = ['', '', 'Twenty','Thirty','Forty','Fifty', 'Sixty','Seventy','Eighty','Ninety'];

				if ((num = num.toString()).length > 9) return 'overflow';
				n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
				if (!n) return; var str = '';
				str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'Crore ' : '';
				str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'Lakh ' : '';
				str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'Thousand ' : '';
				str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'Hundred ' : '';
				str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'Only ' : '';
				return str;
			}

		});
	</script>


</body>
</html>
