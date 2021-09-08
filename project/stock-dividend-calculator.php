<?php
require_once('../config.php');

?>

<!doctype html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Stock Dividend Calculator</title>

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
				<h2>Stock Dividend Calculator</h2>
			</div>
		</div>


		<div class="row">

			<div class="col-md-3 mx-auto text-center mb-5 mt-3">
				<div class="form-label-group">
					<input type="text" id="stockPrice" class="form-control" >
					<label for="inputEmail">Stock Price</label>
				</div>
			</div>

			<div class="col-md-3 mx-auto text-center mb-5 mt-3">
				<div class="form-label-group">
					<input type="text" id="dividendPrice" class="form-control" >
					<label for="inputEmail">Dividend Price</label>
				</div>
			</div>

			<div class="col-md-3 mx-auto text-center mb-5 mt-3">
				<div class="form-label-group">
					<input type="text" id="investmentAmount" class="form-control" >
					<label for="inputEmail">Investment Amount</label>
				</div>
			</div>

		</div>


		<div class="row">

			<div class="col-md-3 mx-auto text-center mb-5 mt-3">
				<h5 class="text-center">Total Stocks Purchaced</h5>
				<span id="totalStocksPurchaced">00</span>
			</div>

			<div class="col-md-3 mx-auto text-center mb-5 mt-3">
				<h5 class="text-center">Total Dividend Earned</h5>
				<span id="totalDividendEarned">00 ₹</span>
			</div>

		</div>

	</div>

	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>


	<script type="text/javascript">
		$(document).ready(function(){

			$("#stockPrice, #dividendPrice, #investmentAmount").on('keyup', function(){
				calculateDividend();
			});

			function calculateDividend() {
				
				let stockPrice = $('#stockPrice').val().replace(/\D/g,'');
				let dividendPrice = $('#dividendPrice').val().replace(/\D/g,'');
				let investmentAmount = $('#investmentAmount').val().replace(/\D/g,'');

				stockPrice = (stockPrice.length == 0) ? 0 : parseInt( stockPrice,10 );
				dividendPrice = (dividendPrice.length == 0) ? 0 : parseInt( dividendPrice,10);
				investmentAmount = (investmentAmount.length == 0) ? 0 : parseInt( investmentAmount,10);

				let totalStocksPurchaced = parseInt( investmentAmount / stockPrice );
				let totalDividendEarned = parseInt( dividendPrice * totalStocksPurchaced );

				$('#totalStocksPurchaced').text( totalStocksPurchaced.toLocaleString() );
				$('#totalDividendEarned').text( totalDividendEarned.toLocaleString() + ' ₹' );
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
