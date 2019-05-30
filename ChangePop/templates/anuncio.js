var checkbox=[];
var imagen=1;
var categories=[];

function post(url,params,respuesta,respuesta2){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        respuesta();
      }else if(this.status == 400){
        respuesta2();
      }
    };  
    xhttp.open("POST", url, true);
    xhttp.setRequestHeader("Content-type", "application/json");
    var ret = xhttp.send(JSON.stringify(params)); 
    return ret; //a probar...
  }

function validar_campos(names) {
    var correct = 0;

    for(var i=0;i<checkbox.length;i++){
        if(document.getElementById(checkbox[i]).checked){
            correct=1;
            categories.push(document.getElementById(checkbox[i]).id);
        }
    }

    for(var i=0;i<names.length;i++){
        miCampoTexto = document.getElementById(names[i]).value;
        if (miCampoTexto.length == 0) {
            correct = 0;
        }
    }
    if (correct==0 || imagen == 0){
        alert("Hay campos mal rellenados");
    }else{

	//Imagen
	/*var image = new image();
        image.src = document.getElementById("mostrar").src;*/
	
	
	var urlImagenProduct="https://kelpa-api.herokuapp.com/upload";

        /*postLOL(urlImagenProduct,document.getElementById("imagen"),function(){
            alert("Nuevo articulo añadido");
          }, function(){
            alert("Fallo al subir la imagen");
          });*/
	
	
	//resto 
        var check = document.getElementById("subasta");

        var descript=document.getElementById("blog_body").value;
        var price=document.getElementById("precio").value;
        var title=document.getElementById("nombreProducto").value;
        
        var bid_date=document.getElementById("fecha").value + " " + document.getElementById("hora").value;
        var place=document.getElementById("lugarRecogida").value;
        
        if(check.checked){
            var data ={"descript": descript, "price": price, "categories": categories, "title": title, "bid_date": bid_date, "main_img": "https:/kelpa-api.herokuapp.com/uploads/picture.png", "photo_urls": ["https:/kelpa-api.herokuapp.com/uploads/picture.png"], "place": place};
        }else{
            var data = {"descript": descript, "price": price, "categories": categories, "title": title, "main_img": "https:/kelpa-api.herokuapp.com/uploads/picture.png", "photo_urls": ["https:/kelpa-api.herokuapp.com/uploads/picture.png"], "place": place};
        }
        var urlProduct="https://kelpa-api.herokuapp.com/product";
        postCookies(urlProduct,data,function(){
            alert("Nuevo articulo añadido");
          }, function(){
            alert("No se ha podido añadir el articulo");
          });
        };
	

        console.log(data);
    }


function add_checkbox(nuevo){
    checkbox.push(nuevo);
}

function change_imagen(){
    imagen=1;
}
function showContent() {
    element1 = document.getElementById("hora");
    element2 = document.getElementById("fecha")
    element3 = document.getElementById("text1")
    element4 = document.getElementById("text2")
    check = document.getElementById("subasta");
    if (check.checked) {
        element2.style.display='block';
        element1.style.display='block';
        element3.style.display='block';
        element4.style.display='block';

    }
    else {
        element1.style.display='none';
        element2.style.display='none';
        element3.style.display='none';
        element4.style.display='none';
    }
}
