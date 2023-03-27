<div class="page-content">
    <div class="container-fluid">
        <header class="section-header">
            <div class="tbl">
                <div class="tbl-row">
                    <div class="tbl-cell">
                        <h3>Capturar Autor</h3>
                        <ol class="breadcrumb breadcrumb-simple">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="autores">Autores</a></li>
                            <li class="active">Capturar Nuevo Autor</li>
                        </ol>
                    </div>
                </div>
            </div>
        </header>
        <div class="box-typical box-typical-padding">
            <form>
                <div class="form-group row col-sm-12">
                    <div class="col-sm-2">
                        <label for="codigo" class="form-control-label">Código del Autor</label>
                    </div>
                    <div class="col-sm-4">
                        <p class="form-control-static">
                            <input type="number" name="codigo" id="codigo" class="form-control" placeholder="00000"
                                minlength="5" maxlength="5" disabled>
                        </p>
                    </div>
                    <div class="col-sm-2">
                        <label for="editorial" class="form-control-label">Nombre(s)</label>
                    </div>
                    <div class="col-sm-4">
                        <p class="form-control-static">
                            <input type="text" name="editorial" id="editorial" class="form-control"
                                placeholder="Armando Daniel">
                        </p>
                    </div>
                </div>
                <div class="form-group row col-sm-12">
                    <div class="col-sm-2">
                        <label for="editorial" class="form-control-label">Apellido Paterno</label>
                    </div>
                    <div class="col-sm-4">
                        <p class="form-control-static">
                            <input type="text" name="editorial" id="editorial" class="form-control"
                                placeholder="Jiménez">
                        </p>
                    </div>
                    <div class="col-sm-2">
                        <label for="editorial" class="form-control-label">Apellido Materno</label>
                    </div>
                    <div class="col-sm-4">
                        <p class="form-control-static">
                            <input type="text" name="editorial" id="editorial" class="form-control"
                                placeholder="Teodoro">
                        </p>
                    </div>
                </div>
                <div class="form-group row col-sm-12">
                    <div class="col-sm-2">
                        <label for="editorial" class="form-control-label">Nacionalidad</label>
                    </div>
                    <div class="col-sm-4">
                        <p class="form-control-static">
                            <input type="text" name="editorial" id="editorial" class="form-control"
                                placeholder="Mexicana">
                        </p>
                    </div>
                    <div class="col-sm-2">
                        <label for="editorial" class="form-control-label">Fecha de Nacimiento</label>
                    </div>
                    <div class="col-sm-4">
                        <p class="form-control-static">
                            <input type="date" name="editorial" id="editorial" class="form-control"
                            value="1999-08-30">
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
                        <div class="drop-zone">
                        </div>
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
                <div class="summernote-theme-10">
                    <textarea class="summernote" name="name">Información Extra del Autor</textarea>
                </div>
                <div class="form-group row">
                </div>
                <button type="submit" class="btn btn-inline btn-success-outline swal-btn-success ">Registrar</button>
            </form>
        </div><!--.box-typical-->
    </div><!--.container-fluid-->
</div><!--.page-content-->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
	$(document).ready(function () {
		$('.summernote').summernote();
	});
</script>