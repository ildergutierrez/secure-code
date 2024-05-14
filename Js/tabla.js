let datat;
let inicio = false;
const dataopciones = {
    lengthMenu: [5,10,15,20,25],
columnDefs:[    
    {orderable:false, targets:[0,1,2]}
],


    pageLength:5,
    destroy: true
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
        const respuest = await fetch("https://jsonplaceholder.typicode.com/users");
        const usuario = await respuest.json();
        // console.log(data);
        let contenido = ``;
        usuario.forEach((user, index) => {
            contenido += `
                <tr>
                    <td>${index + 1}</td>
                    <td>${user.name}</td>
                    <td>${user.email}</td>  
                    <td>${user.address.city}</td> 
                    <td>${user.company.name}</td>
                </tr>`;

        });
        tablebody_usuario.innerHTML= contenido;
    } catch (error) {
        alert(error);
    }
};
window.addEventListener("load", async () => {
    await iniciodatatable();
});