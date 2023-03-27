<div class="page-content">
    <div class="container-fluid">
        <header class="section-header">
            <div class="tbl">
                <div class="tbl-row">
                    <div class="tbl-cell">
                        <?= site_url('create')?>
                        <h3>Capturar Tema</h3>
                        <?= base_url('create-editorial')?>
                        <ol class="breadcrumb breadcrumb-simple">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="temas">Temas</a></li>
                            <li class="active">Capturar Nuevo Tema</li>
                        </ol>
                    </div>
                </div>
            </div>
        </header>
        <div class="box-typical box-typical-padding">
            <form id="frmRegistroTema">
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
                    <label for="tema" class="col-sm-2 form-control-label">Nombre del Tema</label>
                    <div class="col-sm-10">
                        <p class="form-control-static">
                            <input type="text" name="tema" id="tema" class="form-control"
                                placeholder="Editorial Porrua" onblur="validarDatos()">
                        </p>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        <span class="btn btn-rounded btn-file">
                            <span>Cargar Imagen</span>
                            <input type="file" class="custom-file-input" id="fileImage" accept="image/*" name="imagen">
                        </span>
                    </div>
                    <div class="col-sm-10">
                        <div class="drop-zone" >
                        <img width="100%" height="100%" id="imgSalida" />
                        </div>
                    </div>
                </div>
                <input type="submit" id="btnSubmit" class="btn btn-inline btn-success-outline swal-btn-success ">Registrar</input>
            </form>
        </div><!--.box-typical-->
    </div><!--.container-fluid-->
</div><!--.page-content-->
<script src="<?=base_url()?>assets/js/LibreriaAlpha/Temas/index.js"></script>