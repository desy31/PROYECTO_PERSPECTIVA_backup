console.log('Hola Mundo');


$(document).ready(function(){
    formularioPacientes = document.querySelector('#formularioPacientes');

    $('#btnLimpiar').on('click',function(e){
        e.preventDefault();
        formularioPacientes.reset();
    })    
})
