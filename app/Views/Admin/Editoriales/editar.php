<div class="page-content">
    <div class="container-fluid">
        <header class="section-header">
            <div class="tbl">
                <div class="tbl-row">
                    <div class="tbl-cell">
                        <h3>Editar Editorial</h3>
                        <ol class="breadcrumb breadcrumb-simple">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="editoriales">Editoriales</a></li>
                            <li class="active">Editar Editorial</li>
                        </ol>
                    </div>
                </div>
            </div>
        </header>

        <div class="box-typical box-typical-padding">
        <!--     <h5 class="m-t-lg with-border">Capture los Datos de la Editorial</h5> -->
            <form>
                <div class="form-group row">
                    <label for="codigo" class="col-sm-2 form-control-label">Código interno de la Editorial</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">
                            <input type="number" name="codigo" id="codigo" class="form-control"
                                placeholder="00000" minlength="5" maxlength="5" disabled>
                        </p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="editorial" class="col-sm-2 form-control-label">Nombre de la Editorial</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">
                            <input type="text" name="editorial" id="editorial" class="form-control"
                                placeholder="Editorial Porrua">
                        </p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="contacto" class="col-sm-2 form-control-label">Nombre del Contacto</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">
                            <input type="text" name="contacto" id="contacto" class="form-control"  placeholder="Nombre del Contacto"></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telefono" class="col-sm-2 form-control-label">Teléfono de Contacto</label>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-earphone"></span>
                                </div>
                                <input type="tel" name="telefono" id="telefono" class="form-control"
                                    placeholder="55-00-00-00-00">
                            </div>
                        </div>
                    </div>
                </div>
                    <button type="submit" class="btn btn-inline btn-success-outline swal-btn-info"">Editar</button>
            </form>
        </div><!--.box-typical-->
    </div><!--.container-fluid-->
</div><!--.page-content-->