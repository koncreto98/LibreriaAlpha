function fntGenerarCodigo() {
  codigo = Math.floor(10000 + Math.random() * 90000);
  $("#codigo").val(codigo);
}

function comprobarDatos() {
  let codigo    = $("#codigo").val();
  let editorial = $("#editorial").val();
  let contacto  = $("#contacto").val();
  let telefono  = $("#telefono").val();

  if (codigo == "" || editorial == "" || contacto == "" || telefono == "") {
    $("#btnAgregar").addClass("disabled");
    $("#btnAgregar").css("display", "none");
  } else {
    $("#btnAgregar").removeClass("disabled");
    $("#btnAgregar").css("display", "block");
  }
}

function llenarDatos(){
  let codigo = $("#codigo").val();
  let editorial = $("#editorial").val();
  let contacto = $("#contacto").val();
  let telefono = $("#telefono").val();

  const data = new FormData();

  data.append("codigo", codigo);
  data.append("editorial", editorial);
  data.append("contacto", contacto);
  data.append("telefono", telefono);

  return data;
}

$(document).ready(function () {
  if ($("#frmRegistroEditorial")) {
    fntGenerarCodigo();
    comprobarDatos();
    let frmRegistro = $("#frmRegistroEditorial");

    $("#frmRegistroEditorial").submit(function (event) {
      event.preventDefault();
      fntGuardar();
    });

    function storeProject()
        {   
            let url = $('meta[name=app-url]').attr("content") + "/registrarTema";
            const data = llenarDatos();
            $.ajax({
                url: url,
                method: "POST",
                data: data,
                success: function(response) {
                    alert("Hola");
                },
                error: function(response) {
                    /*
                    show validation error
                    */
                    console.log(response)
                    $("#save-project-btn").prop('disabled', false);
                    if (typeof response.responseJSON.messages.errors !== 'undefined') 
                    {
                        let errors = response.responseJSON.messages.errors;
                        let descriptionValidation = "";
                        if (typeof errors.description !== 'undefined') 
                        {
                            descriptionValidation = '<li>' + errors.description + '</li>';
                        }
                        let nameValidation = "";
                        if (typeof errors.name !== 'undefined') 
                        {
                            nameValidation = '<li>' + errors.name + '</li>';
                        }
          
                        let errorHtml = '<div class="alert alert-danger" role="alert">' +
                            '<b>Validation Error!</b>' +
                            '<ul>' + nameValidation + descriptionValidation + '</ul>' +
                        '</div>';
                        $("#error-div").html(errorHtml);        
                    }
                }
            });
        }
      
    async function fntGuardar() {
      try {
        const data = llenarDatos();
        let resp = await fetch(
          BASE_URL + "index.php/Temas/registrarTema",
          {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
              "X-Requested-With": "XMLHttpRequest",
            },
            mode: "cors",
            cache: "no-cache",
            body: data,
          }
        );
         json = await resp.json();
         console.log(json)
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
