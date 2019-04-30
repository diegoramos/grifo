<div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-head">
          <h3 class="box-title">Lista de Usuarios</h3>
            <button class="pull-right btn btn-primary" onclick="add_user()"><i class="glyphicon glyphicon-plus"></i>
            Nuevo Usuario
            </button>
        </div>
        <div class="ibox-body">
            <table class="table table-striped table-bordered table-hover" id="users" cellspacing="0" width="100%">
                <thead>
                    <tr>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>E-mail</th>
                      <th>Username</th>
                      <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Person Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="user_id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Nombres</label>
                            <div class="col-md-12">
                                <input name="first_name" placeholder="Nombres" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Apellidos</label>
                            <div class="col-md-12">
                                <input name="last_name" placeholder="Apellidos" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Correo</label>
                            <div class="col-md-12">
                                <input name="email" placeholder="Correo" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Usuario</label>
                            <div class="col-md-12">
                                <input name="username" placeholder="Usuario" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Contraseña</label>
                            <div class="col-md-12">
                                <input name="password" placeholder="Contraseña" class="form-control" type="password">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Estado</label>
                            <div class="col-md-12">
                                <select name="status" class="form-control">
                                    <option value="">--Select Estado--</option>
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->