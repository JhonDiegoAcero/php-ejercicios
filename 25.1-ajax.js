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
    "<td><button type='button' onclick=editar('"+paciente.nombres+"','"+paciente.edad+"','"+paciente.talla_m+"','"+paciente.peso_kg+"','"+paciente.sintoma_tos+"','"+paciente.sintoma_fiebre+"','"+paciente.sintoma_disnea+"');>Editar</button></td>"+
    "</tr>";
    $(id+" tr:last").after(html);
}
 
function editar(nombres,edad,talla_m,peso_kg,sintoma_tos,sintoma_fiebre,sintoma_disnea) {
    $('#exampleModal').modal('show'); 
    $("#nombre2").val(nombres);
    $("#edad3").val(edad);
    $("#talla4").val(talla_m);
    $("#peso5").val(peso_kg);
    $("#tos6").prop('checked', sintoma_tos === '1' || sintoma_tos === true);
    $("#fiebre7").prop('checked', sintoma_fiebre === '1' || sintoma_fiebre === true);
    $("#disnea8").prop('checked', sintoma_disnea === '1' || sintoma_disnea === true);
}

 
function actualizar() {
    const $nombre = $("#nombre2").val();
   
    let datos ={
        nombre : $nombre
    };
    $.ajax({
        url :"26.1-update-ajax-pdo.php",
        type : "post",
        data : datos,
        success : function(result) {              
            alert("Se guardo los datos correctamente de "+result);            
        }
    })
 
 
    return;
}
 
function cancelar() {
    $('#exampleModal').modal('hide');    
}





