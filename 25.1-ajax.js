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
            console.log(result);
            const pacientes=$.parseJSON(result);
            pacientes.forEach(item => {
                agregarFilas("#tabla",item);
            });
        }
    })


    return;
}

function agregarFilas(id,paciente) {
    const html=
    "<tr>"+
    "<td>"+paciente.nombres+"</td>"+
    "<td>"+paciente.edad+"</td>"+    
    "<td>"+paciente.talla_m+"</td>"+
    "<td>"+paciente.peso_kg+"</td>"+
    "<td>"+paciente.sintoma_tos+"</td>"+
    "<td>"+paciente.sintoma_fiebre+"</td>"+
    "<td>"+paciente.sintoma_disnea+"</td>"+
    "<td><button type='button' onclick=editar('"+paciente.nombres+"','"+paciente.edad+"');>Editar</button></td>"+
    "</tr>";
    $(id+" tr:last").after(html);
}
 
function editar(nombres,edad) {
    $('#exampleModal').modal('show'); 
    $("#nombre2").val(nombres);
    $("#edad2").val(edad);
    $("#talla2").val(tallas);
    $("#peso2").val(pesos);
    $("#tos2").val(tos);
    $("#fiebre2").val(fiebre);
}

