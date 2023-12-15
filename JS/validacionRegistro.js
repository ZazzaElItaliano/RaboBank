document.addEventListener('DOMContentLoaded', function () {
    let form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
     
        let dniInput = document.querySelector('[name="dni"]');
        if (!validarDNI(dniInput.value)) {
            alert('El DNI debe tener 8 números y 1 letra.');
            event.preventDefault();
            return;
        }

        let nombreInput = document.querySelector('[name="nombre"]');
        if (!validarTextoSinNumeros(nombreInput.value)) {
            alert('El nombre no debe contener números.');
            event.preventDefault();
            return;
        }

        let apellidoInput = document.querySelector('[name="apellido"]');
        if (!validarTextoSinNumeros(apellidoInput.value)) {
            alert('El apellido no debe contener números.');
            event.preventDefault();
            return;
        }

        let telefonoInput = document.querySelector('[name="telefono"]');
        if (!validarTelefono(telefonoInput.value)) {
            alert('El teléfono debe tener 9 números.');
            event.preventDefault();
            return;
        }

        let contrasenaInput = document.querySelector('[name="contrasena"]');
        if (!validarContrasena(contrasenaInput.value)) {
            alert('La contraseña debe tener al menos 8 caracteres, números y símbolos especiales.');
            event.preventDefault();
            return;
        }
    });

    function validarDNI(dni) {
        let regex = /^[0-9]{8}[A-Za-z]$/;
        return regex.test(dni);
    }

    function validarTextoSinNumeros(texto) {
        let regex = /^[^\d]+$/;
        return regex.test(texto);
    }

    function validarTelefono(telefono) {
        let regex = /^[0-9]{9}$/;
        return regex.test(telefono);
    }

    function validarContrasena(contrasena) {
        let regex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@$!%*?&]{8,}$/;
        return regex.test(contrasena);
    }
});
