let datat;
let inicio = false;
const dataopciones = {
    lengthMenu: [5, 10, 15, 20, 25],
    columnDefs: [
        { className: "centered", targets: [0, 2] },
        { className: "justified", targets: [1] },
        { orderable: false, targets: [0, 1, 2] },
        { "width": "20%", targets: [0] },
        { "width": "70%", targets: [1] },
        { "width": "10%", targets: [2] },
    ],

    searching: false,
    pageLength: 5,
    destroy: true,
    language: {
        lengthMenu: "Mostrar _MENU_ registros por página",
        zeroRecords: "Ningún usuario encontrado",
        info: "Mostrando de _START_ a _END_ de un total de _TOTAL_ registros",
        infoEmpty: "Ningún usuario encontrado",
        infoFiltered: "(filtrados desde _MAX_ registros totales)",
        search: "Buscar:",
        loadingRecords: "Cargando...",
        paginate: {
            first: "Primero",
            last: "Último",
            next: "Siguiente",
            previous: "Anterior"
        }
    }
};
const iniciodatatable = async () => {
    if (inicio) {
        datat.destroy();

    }
    await user();
    datat = $("#Tabla_usarios").DataTable(dataopciones);
    inicio = true;

};

const user = async () => {
    try {
        const respuest = await fetch("../php/conexion_Python.php");
        const usuarios = await respuest.json();
        let contenido = ``;
        usuarios.forEach((user, index) => {

            contenido += `
                <tr>
                    <td>${user.Nombre}</td> 
                    <td> <div style=" text-align: justify;">${user.Descripcion}</div></td>  
                    <td ><a href="${user.Acceso}" target="_blank"><img  src="../img/descargar archivo.png" alt="Descargar" width="30px" style="border-radius: 100%;"> </a></td>
                </tr>`;

        });

        tablebody_usuario.innerHTML = contenido;
    } catch (error) {
        alert(error);
    }
};

window.addEventListener("load", async () => {
    await iniciodatatable();
});