$(document).ready(function(){
 
 

    const settings = {
        "async": true,
        "crossDomain": true,
        "url": "http://localhost/WEB-PerezEscobar/Parcial%203/Grid/Consulta.php",
        method: "GET",
        "headers": {
            "Accept": ""/""
        }
    };
 
    $.ajax(settings).done(function(response){
        console.log(response);
        let tabla = JSON.parse(response);
        console.log(tabla);
    


    $("#jsGrid").jsGrid({
        width: "100%",
        height: "400px",
 
        inserting: true,
        editing: true,
        sorting: true,
        paging: true,
 
        data: tabla,

        fields: [
            { name: "ID", type: "number", width: 20, validate: "required" },
            { name: "NombrePiloto", type: "text", width: 70 },
            { name: "NombreCopiloto", type: "text", with:60},
            { name: "CapacidadPasajeros", type: "number", with: 150 },
            { name: "CapacidadGalonesCombustible", type: "number", width: 150 },
            { name: "PaisDespegue", type: "text", width: 100 },
            { name: "PaisAterrizaje", type: "text", width: 100 },
            { name: "CostoBoleto", type: "number", width: 50 },
            { name: "CapacidadEquipajePasajero", type: "number", width: 150 },
            { name: "DuracionVueloHoras", type: "number", width: 100 },
            { type: "control" }
            ]
        });
    });   
});