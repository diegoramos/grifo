<!DOCTYPE html>
<html>
<!-- <html lang="ar"> for arabic only -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Factura</title>
    <style>

        @font-face {
            font-family: 'Tahoma','Courier New';
            font-weight: normal;
            font-style: normal;
        }

		body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font-size: 12.5px;
        font-family: 'Tahoma';
        line-height: 113%;
        letter-spacing: 0.5px;
	    }
	    * {
	        box-sizing: border-box;
	        -moz-box-sizing: border-box;
	    }
	    .page {
	        width: 70mm;
	        min-height: 200mm;
            padding-top: 10mm;
	        padding-left: 8mm;
            padding-right: 1mm;
	        margin: 1mm auto;
	        border: 1px #D3D3D3 solid;
	        border-radius: 5px;
	        background: white;
	        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
	    }
	    .text-center{text-align: center;}
        .otro-font{
            font-size: 11px;
            font-family: 'Courier New';
            letter-spacing: 1px;
        }
        .titulo{
            letter-spacing: 0.5px;
        }
        .otro-size{
            font-size: 10.5px;
        }
        .otro-size2{
            font-size: 11px;
            margin-bottom: 5px;
            letter-spacing: 0.7px;
        }
        .otro-size3{
            font-size: 12px;
        }
        .otro-size4{
            font-size: 10px;
            line-height: 120%;
        }
        .fecha{
            font-size: 12px;
            margin-top: 8px;
            margin-bottom: 5px;
        }
        .pagar{
            font-size: 12px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .compra{
            margin-top: 20px;
        }
        p {
            margin: 0px;
        }
	    @page {
            size: 3.14961in 7.87402in;
	        margin: 0;
	    }
	    @media print {
        html, body {
            width: 70mm;
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
    hr {
        height: 1px;
        border-color: black;
        opacity: 0.5;
        padding: 0.5px;
        margin-top: 10px;
        margin-bottom: 10px;
        width: 98%;
    }

    </style>
</head>
<?php
    $originalDate = $info->fecha;
    $newDate = date("d/m/Y", strtotime($originalDate));
?>
<body onload="window.print();">
<div class="page">
    <p class="text-center titulo"><strong>ESTACION DE SERVICIOS PASO <br> DE LOS ANDES SAC</strong></p>
	<p class="text-center titulo">PANAMERICANA NORTE KM 36.5 - PUENTE PIEDRA</p>
	<p class="text-center otro-font"><i> Expedido en: AV. BRASIL NRO: 699 - LIMA - JESUS MARIA</i></p>
	<p class="text-center"><strong>RUC: 20511230935</strong></p>
	<p class="text-center">Telefono:</p>
    <hr>
    <p class="text-center otro-size3"><strong>Maq. Regist. N°: <?php echo $info->maq; ?></strong></p>
    <p class="text-center otro-size3"><strong>Factura de Venta Electronica</strong></p>
	<p class="text-center otro-size3"><strong>N: <?php echo $info->nro; ?></strong></p>
    <p class="text-center fecha"><strong>Fecha: <?php echo $newDate.' - '.$info->hora; ?></strong></p>
    <p class="otro-size4">NOMBRE: <?php echo $info->nom; ?></p>
    <p class="otro-size4">RUC: <?php echo $info->ruc; ?></p>
    <p class="otro-size4">PLACA: <?php echo $info->placa; ?></p>
    <p class="otro-size4">DIRECCION: <?php echo $info->dir; ?></p>
    <hr>
    <?php foreach ($items as $value) { ?>
    <p class="text-center otro-size"><strong><?php echo $value->cantidad.'x'.$value->precio. ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; S/'.$value->sub; ?></strong></p>
    <p class="text-center otro-size"><?php echo $value->prod; ?></p>
    <?php } ?>
    <hr>
    <p class="otro-size"><strong>**** OP. GRAVADAS...S/ &nbsp;&nbsp;&nbsp; <?php echo $info->subtotal; ?></strong></p>
    <p class="otro-size"><strong>**** IGV ..........S/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $info->igv; ?></strong></p>
    <p class="otro-size"><strong>**** IMPORTE TOTAL.S/ &nbsp;&nbsp;&nbsp; <?php echo $info->total; ?></strong></p>
    <P class="text-center pagar"><strong>TOTAL A PAGAR: S/ <?php echo $info->total; ?></strong></P>
    <?php $this->load->helper('number'); ?>
    <p class="otro-size2"><?php
    $exchange_name = "SOLES";
    echo num_to_letras($info->total,"CON",letra_modena($exchange_name)); ?></P>
    <p class="text-center"><img src="<?php echo base_url() ?>uploados/<?php echo $info->nro.'.png';?>"/></p>
    <br>
    <p><strong>Vendedor: <?php echo $info->usu; ?></strong></p>
    <hr>
    <p class="text-center compra"><strong>Gracias por su compra!!!</strong></p>
	<p class="text-center">Puedes descargar tu factura en:</p>
	<p class="text-center">www.mundoapu.com/petroamerica</p>
</div>
</body>
</html>