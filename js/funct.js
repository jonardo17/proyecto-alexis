let $eliminar = document.querySelector('.btn-eliminar');
const $Website = document.querySelector('#Website');

$eliminar.addEventListener("click" , function(){    
    return confirm("¿Estas seguro que deseas eliminar?");
});