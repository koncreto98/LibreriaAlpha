<div class="page-content">
    <div class="container-fluid">
        <header class="section-header">
            <div class="tbl">
                <div class="tbl-row">
                    <div class="tbl-cell">
                        <h3>Editar Tema</h3>
                        <ol class="breadcrumb breadcrumb-simple">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="temas">Temas</a></li>
                            <li class="active">Editar Tema</li>
                        </ol>
                    </div>
                </div>
            </div>
        </header>
        <div class="box-typical box-typical-padding">
            <form>
                <div class="form-group row">
                    <label for="codigo" class="col-sm-2 form-control-label">Código interno del Tema</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">
                            <input type="number" name="codigo" id="codigo" class="form-control" placeholder="00000"
                                minlength="5" maxlength="5" disabled>
                        </p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="editorial" class="col-sm-2 form-control-label">Nombre del Tema</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">
                            <input type="text" name="editorial" id="editorial" class="form-control"
                                placeholder="Editorial Porrua">
                        </p>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <span class="btn btn-rounded btn-file">
                            <span>Seleccionar Imagen</span>
                            <input type="file" name="files[]" multiple="">
                        </span>
                    </div>
                    <div class="col-sm-6">
                        <div class="drop-zone" >
                        </div>
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
                <button type="submit" class="btn btn-inline btn-success-outline swal-btn-success ">Registrar</button>
            </form>
        </div><!--.box-typical-->
    </div><!--.container-fluid-->
</div><!--.page-content-->