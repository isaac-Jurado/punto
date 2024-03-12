function validarFormVacio(formulario) {
    datos = $(formulario).serialize();
    console.log(datos)
    d=datos.split('&');
    vacios=0;
    for (i = 0; i < d.length; i++) {
        controles = d[i].split("=");
        if (controles[1]=="A"|| controles[1]=="") {
            vacios++ 
            console.log("esto es controles "+ controles)   
        }
        
    }
    return vacios;
}
