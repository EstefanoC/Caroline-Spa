(function() {
    'use strict';
    window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                } else {
                    var nombre = document.getElementById('nombre').value,
                    email = document.getElementById('email').value,
                    mensaje = document.getElementById('mensaje').value,
                    sendoff = document.getElementById("sendoff");

                    let data = new FormData()

                    data.append('nombre', nombre)
                    data.append('email', email)
                    data.append('mensaje', mensaje)

                    fetch('http://localhost/cursobootstrap/modelo/caroline-spa/include/enviar.php', {
                        method:'POST',
                        body:data
                    })
                    .then(function(response) {
                        if(response.ok) {
                        return response.text()
                    }else {
                        throw 'Error en la conexion';
                    }
                    })
                    .then(function(texto) {
                        console.log(texto)
                        sendoff.classList.remove('sendoff')
                        sendoff.classList.add('send')
                        setTimeout(() => {
                            sendoff.classList.remove('send')
                            sendoff.classList.add('sendoff')
                        }, 5000);
                    })
                    .catch(function(e) {
                        console.log(e)
                    })
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();