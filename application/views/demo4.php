<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 12pt 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif;;
	    }
	    * {
	        box-sizing: border-box;
	        -moz-box-sizing: border-box;
	    }
	    .page {
	        width: 70mm;
	        min-height: 160mm;
	        padding: 2mm;
	        margin: 1mm auto;
	        border: 1px #D3D3D3 solid;
	        border-radius: 5px;
	        background: white;
	        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
	    }
	    
	    @page {
	        size: 2.75591in 6.29921in;
	        margin: 0;
	    }
	    @media print {
        html, body {
            width: 70mm;
            height: 160mm;        
        }
        .page {
	            margin: 0;
	            border: initial;
	            border-radius: initial;
	            width: initial;
	            min-height: initial;
	            box-shadow: initial;
	            background: initial;
	            page-break-after: always;
        	}
    	}
	</style>
</head>
<body>
	<div class="page">
		<div align="center">

			<table>
				<tr class="tabletitle">
					<td class="item"><h4>Item</h4></td>
					<td class="Hours"><h4>Qty</h4></td>
					<td class="Rate"><h4>Sub Total</h4></td>
				</tr>

				<tr class="service">
					<td class="tableitem"><p class="itemtext">Communication</p></td>
					<td class="tableitem"><p class="itemtext">5</p></td>
					<td class="tableitem"><p class="itemtext">$375.00</p></td>
				</tr>

				<tr class="service">
					<td class="tableitem"><p class="itemtext">Asset Gathering</p></td>
					<td class="tableitem"><p class="itemtext">3</p></td>
					<td class="tableitem"><p class="itemtext">$225.00</p></td>
				</tr>

				<tr class="service">
					<td class="tableitem"><p class="itemtext">Design Development</p></td>
					<td class="tableitem"><p class="itemtext">5</p></td>
					<td class="tableitem"><p class="itemtext">$375.00</p></td>
				</tr>

				<tr class="service">
					<td class="tableitem"><p class="itemtext">Animation</p></td>
					<td class="tableitem"><p class="itemtext">20</p></td>
					<td class="tableitem"><p class="itemtext">$1500.00</p></td>
				</tr>

				<tr class="service">
					<td class="tableitem"><p class="itemtext">Animation Revisions</p></td>
					<td class="tableitem"><p class="itemtext">10</p></td>
					<td class="tableitem"><p class="itemtext">$750.00</p></td>
				</tr>


				<tr class="tabletitle">
					<td></td>
					<td class="Rate"><h2>tax</h2></td>
					<td class="payment"><h2>$419.25</h2></td>
				</tr>

				<tr class="tabletitle">
					<td></td>
					<td class="Rate"><h4>Total</h4></td>
					<td class="payment"><h4>$3,644.25</h4></td>
				</tr>

			</table>

		</div>
	</div>
</body>
<script type="text/javascript">
	window.print();
</script>
</html>