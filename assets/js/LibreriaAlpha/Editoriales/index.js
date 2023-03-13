function fntGenerarCodigo() {
    codigo = Math.floor(10000 + Math.random() * 90000);
    $("#codigo").val(codigo);
}

$(document).ready(function () {
    fntGenerarCodigo();

    if (document.querySelector("#formAgregar")) {

        fntGenerarCodigo();
        let frmRegistro = document.querySelector("#formAgregar");
      
        frmRegistro.onsubmit = function (e) {
          e.preventDefault();
          fntGuardar();
        }
    }
});


async function fntGuardar() {

    let intCodigo = document.querySelector("#codigo").value;
    let strEditorial = document.querySelector("#editorial").value;
    let intTelefono = document.querySelector("#telefono").value;
    let strContacto = document.querySelector("#contacto").value;

    if (intCodigo <= 0) {
      alertify.alert('!Atención¡', 'El codigo tiene un valor cero en su campo');
      return;
    }
    if (intCodigo == "" || strEditorial == "" || intTelefono == "" || strContacto == "" ) {
      alertify.alert('!Atención¡', 'Todos los campos son obligatorios');
      return;
    }

    try {
      const data = new FormData(frmRegistro);
      let resp = await fetch(BASE_URL + "Controlador/Editorial.php?op=2", {
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        body: data
      });
      json = await resp.json();
      if (json.status) {
        swal("Guardar", json.msg, "success");
        frmRegistro.reset();
        codigo = Math.floor(10000 + Math.random() * 90000);
        $("#txtCodigo").val(codigo);
      } else {
        swal("Guardar", json.msg, "error");
      }
    } catch (error) {
      console.log("Ocurrio un error: " + error);
    }
  }
}