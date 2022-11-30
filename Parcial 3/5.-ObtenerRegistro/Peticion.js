// Metodo con promesas
//  document.getElementById("btnGenReg").addEventListener("click",function(){
//     fetch('GetRegistro.php')
//     .then(respuesta=>respuesta.json())
//     .then(dato=>displayCampos(dato));
// });

//     function displayCampos(reg){
//         document.getElementById("idEmpleado").value=reg.id;
//         document.getElementById("nombreEmpleado").value=reg.Nombre;
//     }

    // metodo con Asyn Await
    document.getElementById("btnGenReg").addEventListener("click",async()=>{
    let respuesta = await fetch('GetRegistro.php');
    let dato = await respuesta.json();
    document.getElementById("nombre").value=dato.nombre;
    document.getElementById("ocupacion").value=dato.ocupacion;
    document.getElementById("NumTelefono").value=dato.NumeroTel;
    });