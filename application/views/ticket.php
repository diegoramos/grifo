<!DOCTYPE html>
<html>
<!-- <html lang="ar"> for arabic only -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Express Wash Customer Invoice</title>
    <style>
		body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 7pt 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif;;
	    }
	    * {
	        box-sizing: border-box;
	        -moz-box-sizing: border-box;
	    }
	    .page {
	        width: 65mm;
	        min-height: 150mm;
	        padding: 2mm;
	        margin: 1mm auto;
	        border: 1px #D3D3D3 solid;
	        border-radius: 5px;
	        background: white;
	        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
	    }
	    .text-center{text-align: center;}
	    @page {
	        size: 2.55906in 5.90551in;
	        margin: 0;
	    }
	    @media print {
        html, body {
            width: 65mm;
            height: 150mm;        
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
	table{
	  width: 100%;
	  border-collapse: collapse;
	}
	.right{
		text-align: right;
	}
	.center{
		text-align: center;
	}

    </style>
</head>
<body onload="window.print();">

<div class="page">
    <p class="text-center">VAL TRADING S.A.C.<br>
	JR. SEBASTIAN LORENTE 698 LIMA - CERCADO<br>
	LIMA  CERCADO - LIMA - LIMA<br>
	RUC: 20100625513		TELF.: 328-0381<br>
	FACTURA ELECTRONICA<br>
	FOO1-0016131</p>
    <table>
        <tr>
            <td>Fecha/Hora:</td>
            <td><?= date("d/m/Y H:i:s", time()); ?></td>
        </tr>
        <tr>
            <td>Maq. Regist. No:</td>
            <td>50131041<br></td>
        </tr>
        <tr>
            <td>NOMBRE:</td>
            <td>ROLANDO ESTRADA DOMINGUEZ</td>
        </tr>
        <tr>
            <td>RUC:</td>
            <td>10257823119</td>
        </tr>
        <tr>
            <td>DIRECC:</td>
            <td>CALLAO</td>
        </tr>
    </table>

    <table>
        <tr>
            <td class="center">Descripción</td>
            <td>Cant</td>
            <td>P.U.</td>
            <td class="right">Pre Tot</td>
        </tr>
        <tr>
            <td>GASOHOL 95 PLUS GA</td>
            <td>3.820</td>
            <td>13.09</td>
            <td class="right">50</td>
        </tr>
    </table>

    <table>
        <tr>
            <td>**** OP. EXONERADA S/</td>
            <td></td>
            <td></td>
            <td class="right">00</td>
        </tr>
        <tr>
            <td>**** OP. GRAVADAS</td>
            <td>S/.</td>
            <td></td>
            <td class="right">42.37</td>
        </tr>
        <tr>
            <td>**** IGV</td>
            <td>S/</td>
            <td></td>
            <td class="right">7.63</td>
        </tr>
        <tr>
            <td>**** TOTAL</td>
            <td>S/</td>
            <td></td>
            <td class="right">50.00</td>
        </tr>
    </table>
    <p>Son: CINCUENTA CON 00/100 SOLES<br>
    EFECTIVO S/ : 50.00<br>
    Placa: F8W404<br>
    Turno: 2 Casa: 03 Cajera: ANGELA YEREN</p>
    <p class="text-center"><img src="<?= base_url() ?>tes.png" alt="QR-code" class="left"/></p>
    <p class="text-center">REPRESENTACION IMPRESA DE LA<br>
	FACTURA ELECTRONICA<br>
	PODRA SER CONSULTADA EN:<br>
	http://www.cpe.netfacturas.com/<br>
	AUTORIZADO MEDIANTE LA RESOLUCION:<br>
	0340050007381/SUNAT<br>
	¡GRACIAS POR SU COMPRA......!</p>
</div>
</body>
</html>