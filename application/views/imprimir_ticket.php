<!DOCTYPE html>
<html>
<!-- <html lang="ar"> for arabic only -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Factura</title>
    <style>

        @font-face {
            font-family: 'matricha';
            src: url('http://206.189.179.173/grifo/assets/fonts/matricha.ttf');
            /*src: url('http://localhost/grifo/assets/fonts/matricha.ttf');*/
            font-weight: normal;
            font-style: normal;
        }

		body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font-size: 12px;
        font-family: 'matricha';
        line-height: 95%;
	    }
	    * {
	        box-sizing: border-box;
	        -moz-box-sizing: border-box;
	    }
	    .page {
	        width: 75mm;
	        min-height: 200mm;
	        padding: 7mm;
	        margin: 1mm auto;
	        border: 1px #D3D3D3 solid;
	        border-radius: 5px;
	        background: white;
	        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
	    }
	    .text-center{text-align: center;}
        p {
            margin: 0px;
        }
	    @page {
            size: 2.95276in 7.87402in;
	        margin: 0;
	    }
	    @media print {
        html, body {
            width: 75mm;
            height: 200mm;        
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
	JR. SEBASTIAN LORENTE 698<br>
	LIMA  CERCADO - LIMA - LIMA<br>
	RUC: 20100625513		TELF.: 328-0381<br>
	FACTURA ELECTRONICA<br>
	<?php echo $info->nro; ?></p>
    <p>Fecha/Hora: <?php echo $info->fecha.' '.$info->hora; ?></p>
    <p>Maq. Regist. No: <?php echo $info->maq; ?></p>
    <p>NOMBRE: <?php echo $info->nom; ?></p>
    <p>RUC&nbsp;&nbsp;&nbsp;: <?php echo $info->ruc; ?></p>
    <p>DIRECC: <?php echo $info->dir; ?></p>
    <table>
        <tr>
            <td class="center">Descripción</td>
            <td>Cant</td>
            <td>P.U.</td>
            <td class="right">Pre Tot</td>
        </tr>
        <?php foreach ($items as $value) { ?>
        <tr>
            <td><?php echo $value->prod; ?></td>
            <td><?php echo $value->cantidad; ?></td>
            <td><?php echo $value->precio; ?></td>
            <td class="right"><?php echo $value->sub; ?></td>
        </tr>
        <?php } ?>
    </table>

    <table>
        <tr>
            <td>**** OP. EXONERADA S/</td>
            <td></td>
            <td></td>
            <td class="right">00</td>
        </tr>
        <tr>
            <td>**** OP. GRAVADAS&nbsp;&nbsp;S/</td>
            <td></td>
            <td></td>
            <td class="right"><?php echo $info->subtotal; ?></td>
        </tr>
        <tr>
            <td>**** IGV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S/</td>
            <td></td>
            <td></td>
            <td class="right"><?php echo $info->igv; ?></td>
        </tr>
        <tr>
            <td>**** TOTAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S/</td>
            <td></td>
            <td></td>
            <td class="right"><?php echo $info->total; ?></td>
        </tr>
    </table>
    <?php $this->load->helper('number'); ?>
    <p>SON: <?php
    $exchange_name = "SOLES";
    echo num_to_letras($info->total,"Y",letra_modena($exchange_name)); ?><br>
    EFECTIVO S/ : <?php echo $info->total; ?><br>
    Placa: <?php echo $info->placa; ?><br>
    Turno: <?php echo $info->tur; ?> Caja: <?php echo $info->caja; ?> Cajera: <?php echo $info->usu; ?></p>
    <p class="text-center"><img src="<?php echo base_url() ?>uploads/<?php echo $info->nro.'.png';?>" alt="QR-code" width="95" height="95" /></p>
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