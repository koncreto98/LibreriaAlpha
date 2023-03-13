<div class="page-content">
	<div class="container-fluid">
		<header class="section-header">
			<div class="tbl">
				<div class="tbl-row">
					<div class="tbl-cell">
						<h2>Autores</h2>
						<ol class="breadcrumb breadcrumb-simple">
							<li><a href="/">Dashboard</a></li>
							<li><a class="active">Autores</a></li>
						</ol>
					</div>
					<a href="capturarAutor"><button type="button" class="btn btn-rounded btn-inline">Registrar Nuevo Autor</button></a>
				</div>
			</div>
		</header>
		<section class="card">
			<div class="card-block">
				<table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Código</th>
							<th>Autor</th>
							<th>Nacionalidad</th>
							<th>Fecha de Nacimiento</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Código</th>
							<th>Editorial</th>
							<th>Teléfono</th>
							<th>Contacto</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</tfoot>
					<tbody>
						<tr>
							<td>Tiger Nixon</td>
							<td>System Architect</td>
							<td>Edinburgh</td>
							<td>61</td>
							<td><a href="editarAutor"><button type="button" class="btn btn-rounded btn-inline btn-warning">Editar</button></a></td>
							<td><button type="button" class="btn btn-rounded btn-inline btn-danger swal-btn-cancel">Eliminar</button></td>
						</tr>
						<tr>
							<td>Garrett Winters</td>
							<td>Accountant</td>
							<td>Tokyo</td>
							<td>63</td>
							<td><a href="editarAutor"><button type="button" class="btn btn-rounded btn-inline btn-warning">Editar</button></a></td>
							<td><button type="button" class="btn btn-rounded btn-inline btn-danger swal-btn-cancel">Eliminar</button></td>
						</tr>
						<tr>
							<td>Ashton Cox</td>
							<td>Junior Technical Author</td>
							<td>San Francisco</td>
							<td>66</td>
							<td><a href="editarAutor"><button type="button" class="btn btn-rounded btn-inline btn-warning">Editar</button></a></td>
							<td><button type="button" class="btn btn-rounded btn-inline btn-danger swal-btn-cancel">Eliminar</button></td>
						</tr>
						<tr>
							<td>Cedric Kelly</td>
							<td>Senior Javascript Developer</td>
							<td>Edinburgh</td>
							<td>22</td>
							<td><a href="editarAutor"><button type="button" class="btn btn-rounded btn-inline btn-warning">Editar</button></a></td>
							<td><button type="button" class="btn btn-rounded btn-inline btn-danger swal-btn-cancel">Eliminar</button></td>
						</tr>
						<tr>
							<td>Airi Satou</td>
							<td>Accountant</td>
							<td>Tokyo</td>
							<td>33</td>
							<td><a href="editarAutor"><button type="button" class="btn btn-rounded btn-inline btn-warning">Editar</button></a></td>
							<td><button type="button" class="btn btn-rounded btn-inline btn-danger swal-btn-cancel">Eliminar</button></td>
						</tr>
						<tr>
							<td>Brielle Williamson</td>
							<td>Integration Specialist</td>
							<td>New York</td>
							<td>61</td>
							<td><a href="editarAutor"><button type="button" class="btn btn-rounded btn-inline btn-warning">Editar</button></a></td>
							<td><button type="button" class="btn btn-rounded btn-inline btn-danger swal-btn-cancel">Eliminar</button></td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>
	</div><!--.container-fluid-->
</div><!--.page-content-->
<script src="<?= base_url() ?>assets/js/lib/datatables-net/datatables.min.js"></script>
<script>
	$(function () {
		$('#example').DataTable();
	});
</script>