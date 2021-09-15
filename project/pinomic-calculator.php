<?php
require_once('../config.php');

?>

<!doctype html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Pinomic Calculator</title>

		<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://getbootstrap.com/docs/4.0/examples/floating-labels/floating-labels.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<style type="text/css">
		input{
			text-align:center;
			font-size: 1.5em !important;
		}
		.table td, .table th {padding:3px 5px;}
		form-label-group {margin-bottom:0;}
		.text-muted {color: #6c757d !important; font-size: .8em; }
	</style>
</head>

<body>

	<div class="container-fluid">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
			<h2>Pinomic Calculator</h2>
		</div>

		<div class="row">

			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mx-auto text-center">


				<div class="row">

					<div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 mx-auto text-center">
						<div class="form-label-group">
							<input type="text" id="principleAmount" class="form-control" autofocus style="font-size: 2em !important;" >
							<label for="principleAmount">Start Principle Amount</label>
						</div>
						<i id="NumbersInWords"></i>
					</div>

				</div>


				<div class="row">

					<div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 mx-auto text-center">

						<table class="table table-striped table-hower">
							<thead>
								<tr>
									<th scope="col">Month Number</th>
									<th scope="col">Monthly Earning</th>
								</tr>
							</thead>
							<tbody>
								<tr> <th scope="row">1</th> <td class="monthlyEarningsClass">0 ₹</td> </tr>
								<tr> <th scope="row">2</th> <td class="monthlyEarningsClass">0 ₹</td> </tr>
								<tr> <th scope="row">3</th> <td class="monthlyEarningsClass">0 ₹</td> </tr>
								<tr> <th scope="row">4</th> <td class="monthlyEarningsClass">0 ₹</td> </tr>
								<tr> <th scope="row">5</th> <td class="monthlyEarningsClass">0 ₹</td> </tr>
								<tr> <th scope="row">6</th> <td class="monthlyEarningsClass">0 ₹</td> </tr>
								<tr> <th scope="row">7</th> <td class="monthlyEarningsClass">0 ₹</td> </tr>
								<tr> <th scope="row">8</th> <td class="monthlyEarningsClass">0 ₹</td> </tr>
								<tr> <th scope="row">9</th> <td class="monthlyEarningsClass">0 ₹</td> </tr>
								<tr> <th scope="row">10</th> <td class="monthlyEarningsClass">0 ₹</td> </tr>

							</tbody>
						</table>

					</div>

				</div>

		</div>


			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<h5 class="text-left">
						&bull; Total Investment: &nbsp; &nbsp; &nbsp; &nbsp; <span id="totalInvestment">0 ₹</span>
					</h5>
				</div>

				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<h5 class="text-left">
						&bull; 10 Months Income: &nbsp; &nbsp; <span id="total10MonthsIncome">0 ₹</span>
					</h5>
				</div>

				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<h5 class="text-left">
						&bull; Pure Income Gains: &nbsp;  &nbsp; <b id="totalIncomeGains">0 ₹</b>
					</h5>
				</div>

			</div>
		</div>



	</div>

	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>


	<script type="text/javascript">
		$(document).ready(function(){

			$("#principleAmount").on('keyup', function(){
				calculateDividend();
			});


			function calculateDividend() {

				let principleAmt = $('#principleAmount').val().replace(/\D/g,'');
				principleAmt = (principleAmt.length == 0) ? 0 : parseInt( principleAmt,10 );

				$("#principleAmount").val(principleAmt.toLocaleString());
				$('#NumbersInWords').text( inWords(principleAmt) );

				let perMonthEarning = parseInt( 0.15 * principleAmt );
				let total10MonthsIncome = perMonthEarning * 10;

				$('.monthlyEarningsClass').text( perMonthEarning.toLocaleString() + ' ₹' );

				$('#totalInvestment').text( principleAmt.toLocaleString() + ' ₹' );
				$('#total10MonthsIncome').text( total10MonthsIncome.toLocaleString() + ' ₹' );
				$('#totalIncomeGains').text( (total10MonthsIncome - principleAmt).toLocaleString() + ' ₹' );
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
