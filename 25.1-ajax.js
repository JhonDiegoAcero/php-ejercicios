function buscarPacientes() {
    const $nombre = $("#nombre").val();
    //alert("Buscando...");
    let datos ={
        nombre : $nombre
    };
    $.ajax({
        url :"26-ajax-pdo.php",
        type : "post",
        data : datos,
        success : function(result) {
            debugger;
            //console.log(result);
            const pacientes = result;
            pacientes.forEach(item => {
                agregarFilas("#tabla",item);
            });
        }
    })


    return;
}

function agregarFilas(Id,paciente) {
    const html = 
    "<tr>"+
    "<td>"+paciente.Nombre+"</td>"+
    "<td>"+paciente.Edad+"</td>"+
    "<td>"+paciente.Talla+"</td>"+
    "<td>"+paciente.Peso+"</td>"+
    "<td>"+paciente.Tos+"</td>"+
    "<td>"+paciente.Fiebre+"</td>"+
    "<td>"+paciente.Disnea+"</td>"+
    "<td><button type='button'>Editar</></td>"+
    "</tr>";
    $(Id + " tr:last").after(html);
}