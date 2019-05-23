var checkbox=[];

function validar_campos(names) {
    var correct = 0;

    for(var i=0;i<checkbox.length;i++){
        if(document.getElementById(checkbox[i]).checked){
            correct=1;
        }
    }

    for(var i=0;i<names.length;i++){
        miCampoTexto = document.getElementById(names[i]).value;
        if (miCampoTexto.length == 0) {
            correct = 0;
        }
    }
    if (correct==0){
        alert("Hay campos mal rellenados");
    }
}

function add_checkbox(nuevo){
    checkbox.push(nuevo);
}