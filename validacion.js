// let formulario = document.getElementById('formulario');

// formulario.addEventListener('submit',function(e){
//     alert('mensaje enviado');
//     document.createElement("h3");
// });

const nombre = document.getElementById('nombre');
const correo = document.getElementById('correo');
const telefono = document.getElementById('telefono');
const form = document.getElementById('form');
const parrafo = document.getElementById('warnings');

function validarFormulario() {

    //form.addEventListener("submit", e => {
        //e.preventDefault();
        let warnings = "";
        let entrar = false;
        let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
        //parrafo.innerHTML = "";
        if (nombre.value.length < 3) {
            //alert("nombre muy corto");
            warnings += `El nombre no es válido <br>`;
            entrar = true;
        }
        if (!regexEmail.test(correo.value)) {
            warnings += `El correo no es válido <br>`;
            entrar = true;

        }
        if (telefono.value.length > 9) {
            warnings += `Teléfono no válido <br>`;
            entrar = true;

        }

        if (entrar) {
            let hola = parrafo.innerHTML = warnings;
            return false;
        } else {
            let hola = parrafo.innerHTML = "Mensaje enviado";
            return true;
        }


  //  });

}