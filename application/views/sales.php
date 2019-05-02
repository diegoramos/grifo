<!-- START PAGE CONTENT-->
<?php 
// if (isset($_GET)) {
//     echo "<pre>";
//     print_r ($_GET);
//     echo "</pre>";
//     exit;
// }
 ?>

<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">VENTA</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                
                <form id="form_data" class="form-horizontal" autocomplete="on">
                    <div class="ibox-body">
                        <div class="form-group row">
                            <label class="col-sm-1 col-form-label">Empresa:</label>
                            <div class="col-sm-3">
                                <select name="emp" id="emp" class="form-control">
                                    <option value="VAL TRADING SAC">VAL TRADING SAC</option>
                                    <option value="PASO DE LOS ANDES SAC">PASO DE LOS ANDES SAC</option>
                                </select>
                            </div>
                            <label class="col-sm-2 col-form-label text-right">Ticket Nro:</label>
                            <div class="col-sm-3">
                                <input name="nro" id="nro" class="form-control" type="text">
                            </div>
                            <label class="col-sm-1 col-form-label text-right">Nro2:</label>
                            <div class="col-sm-2">
                                <input name="nro2" id="nro2" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-1 col-form-label">Fecha:</label>
                            <div class="col-sm-2">
                                <input name="fecha" class="form-control fecha" type="text">
                            </div>
                            <label class="col-sm-1 col-form-label text-right">Hora:</label>
                            <div class="col-sm-2">
                                <input name="hora" class="form-control" type="text">
                            </div>
                            <label class="col-sm-1 col-form-label text-right">Recibo:</label>
                            <div class="col-sm-2">
                                <input name="recibo" id="recibo" class="form-control" type="text">
                            </div>
                            <label class="col-sm-2 col-form-label text-right text-right">N Transaccion:</label>
                            <div class="col-sm-1">
                                <input name="nro3" id="nr3" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-1 col-form-label">Usuario:</label>
                            <div class="col-sm-2">
                                <input name="usu" id="usu" class="form-control" type="text">
                            </div>
                            <label class="col-sm-1 col-form-label text-right">Turno:</label>
                            <div class="col-sm-1">
                                <input name="tur" id="tur" class="form-control" type="text">
                            </div>
                            <label class="col-sm-1 col-form-label text-right">Isla:</label>
                            <div class="col-sm-2">
                                <select name="maq" id="maq" class="form-control">
                                    <option value="50131041">VAL TRADING SAC</option>
                                    <option value="TC6Y356743">PASO DE LOS ANDES SAC</option>
                                </select>
                            </div>
                            <label class="col-sm-1 col-form-label text-right">Caja:</label>
                            <div class="col-sm-1">
                                <input name="caja" id="caja" class="form-control" type="text">
                            </div>
                            <label class="col-sm-1 col-form-label text-right">Manguera:</label>
                            <div class="col-sm-1">
                                <input name="mangue" id="mangue" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-1 col-form-label text-right">Kilometraje:</label>
                            <div class="col-sm-2">
                                <input name="kilome" id="kilome" class="form-control" type="text">
                            </div>
                            <label class="col-sm-1 col-form-label text-right">Placa:</label>
                            <div class="col-sm-2">
                                <input name="placa" id="placa" class="form-control" type="text">
                            </div>
                            <label class="col-sm-1 col-form-label text-right">F.Revision:</label>
                            <div class="col-sm-2">
                                <input name="fecha_revi" id="fecha_revi" class="form-control revision" type="text">
                            </div>
                            <label class="col-sm-1 col-form-label text-right">F.Cilindro:</label>
                            <div class="col-sm-2">
                                <input name="fecha_cili" id="fecha_cili" class="form-control cilindro" type="text">
                            </div>
                        </div>

                        <h5 class="m-t-10 m-b-10 font-strong">CLIENTE</h5>

                        <div class="form-group row">
                            <label class="col-sm-1 col-form-label">Nombre:</label>
                            <div class="col-sm-3">
                                <input name="nom" id="nom" class="form-control" type="text" required="">
                            </div>
                            <label class="col-sm-1 col-form-label text-right">Ruc:</label>
                            <div class="col-sm-2">
                                <input name="ruc" id="ruc" class="form-control" type="text" required="">
                            </div>
                            <label class="col-sm-1 col-form-label text-right">Dirección:</label>
                            <div class="col-sm-4">
                                <input name="dir"  id="dir" class="form-control" type="text">
                            </div>
                        </div>

                        <h5 class="m-t-10 m-b-10 font-strong">ARTICULOS</h5>

                        <div class="content-process">
                            <div class="col-sm-12">
                                <table class="table table-hover" id="table">
                                    <thead>
                                    <tr>
                                        <th>Nro</th>
                                        <th>Nombre del articulo</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th>Sub Total</th>
                                        <th width="50"></th>
                                        <th width="50"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td width="50%"><input type="text" id="articulo0" name="articulo0" class="form-control" autocomplete="on"></td>
                                            <td><input type="text" id="cantidad0" onkeyup="change_qty(0)" value="1" name="cantidad0" class="form-control"></td>
                                            <td><input type="text" id="precio0" onkeyup="change_price(0)" value="0" name="precio0" class="form-control"></td>
                                            <td><input type="text" id="total0" readonly="" name="total0" value="0" class="form-control"></td>
                                            <td data-tabullet-type="save"><button type="button" id="add_item" class="btn btn-success">Agregar</button></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td></td>
                                            <td class="text-right"></td>
                                            <td>Sub Total:<input type="text" id="sub_total" name="sub_total" value="0.00"></td>
                                            <td>IGV:<input type="text" id="igv" name="igv" value="0.00"></td>
                                            <td>Total General:<input type="text" id="precio_total" name="precio_total" value="0.00"></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>    
                    <div class="ibox-footer text-center">
                        <div class="col-md-12 ml-sm-auto">
                            <a class="btn btn-default btn-lg" href="<?php echo base_url('sales');?>">Cancelar</a>
                            <button type="submit" id="guardar" class="btn btn-info btn-lg">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT-->