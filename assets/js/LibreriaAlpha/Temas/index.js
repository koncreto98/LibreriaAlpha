function fntGenerarCodigo() {
  codigo = Math.floor(10000 + Math.random() * 90000);
  $("#codigo").val(codigo);
}

function validarDatos() {
  let codigo = $("#codigo").val();
  let tema = $("#tema").val();
  let imagen = $("#fileImage").val();

  if (codigo <= 0) {
    Swal.fire({
      position: "center",
      icon: "info",
      title: "El código tiene un valor cero en su campo",
      showConfirmButton: false,
      timer: 1500,
    });
    comprobarDatos();
    return;
  }

  if (codigo == "" || tema == "" || imagen == "") {
    Swal.fire({
      position: "center",
      icon: "info",
      title: "Todos los campos son obligatorios",
      showConfirmButton: false,
      timer: 1500,
    });
    comprobarDatos();
    return;
  }
  comprobarDatos();
}

function comprobarDatos() {
  let codigo = $("#codigo").val();
  let tema = $("#tema").val();
  let imagen = $("#fileImage").val();

  if (codigo == "" || tema == "" || imagen == "") {
    $("#btnSubmit").addClass("disabled");
    $("#btnSubmit").css("display", "none");
  } else {
    $("#btnSubmit").removeClass("disabled");
    $("#btnSubmit").css("display", "block");
  }
}

//previsualizo la imagen insertar
$(function () {
  $("#fileImage").change(function (e) {
    addImage(e);
  });

  function addImage(e) {
    $("#imgSalida").show();
    let file = e.target.files[0],
      imageType = /image.*/;
    if (!file.type.match(imageType)) return;
    let reader = new FileReader();
    reader.onload = fileOnload;
    reader.readAsDataURL(file);
  }

  function fileOnload(e) {
    var result = e.target.result;
    $("#imgSalida").attr("src", result);
    comprobarDatos();
  }
});

$(document).ready(function () {
  if ($("#frmRegistroTema")) {
    fntGenerarCodigo();
    comprobarDatos();
    let frmRegistro = $("#frmRegistroTema");

    frmRegistro.onsubmit = function (e) {
      e.preventDefault();
      fntGuardar();
    };

    async function fntGuardar() {
        validarDatos()
      try {
        const data = new FormData(frmRegistro);
        let resp = await fetch(BASE_URL + "public/index.php/Temas/registrarTema", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            "X-Requested-With": "XMLHttpRequest"
          },
          mode: "cors",
          cache: "no-cache",
          body: data,
        });
        json = await resp.json();
        if (json.status) {
          swal("Guardar", json.msg, "success");
          frmRegistro.reset();
          fntGenerarCodigo();
        } else {
          swal("Guardar", json.msg, "error");
        }
      } catch (error) {
        console.log("Ocurrio un error: " + error);
      }
    }
  }
});

$.ajax({
  url: "your url",
  headers: { "X-Requested-With": "XMLHttpRequest" },
});
