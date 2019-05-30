
 function httpGet(theUrl){
      
      var xmlHttp = new XMLHttpRequest();
      xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
      xmlHttp.send(null );
      return xmlHttp.responseText;
      }



     
      function getParameterByName(name, url) {
          if (!url) url = window.location.href;
          name = name.replace(/[\[\]]/g, '\\$&');
          var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
              results = regex.exec(url);
          if (!results) return null;
          if (!results[2]) return '';
          return decodeURIComponent(results[2].replace(/\+/g, ' '));
      }
      function post(url,params,respuesta,respuesta2){
        var xhttp = new XMLHttpRequest();
        xhttp.setRequestHeader('Access-Control-Allow-Origin', '*');
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            respuesta();
          }else if(this.status == 400){
            respuesta2();
          }
        };  
        xhttp.open("POST", url, true);
        xhttp.setRequestHeader("Content-type", "application/json");
        xhttp.send(JSON.stringify(params));
      }   
      
      function put(url,params,respuesta,respuesta2) {
        $.ajax({
         type: 'PUT',
         url: url,
         crossDomain: true,
         xhrFields: {
          withCredentials: true
         },
         headers:{    
            'Accept': 'application/json',
           'Access-Control-Allow-Origin': '*' ,
           'Content-Type': 'application/json',
   
           },
         data: JSON.stringify(params),          
         success: function (data) {
            respuesta(data);
           
         },
         error: function(data){
           console.log(data)
           respuesta2();
         }
   
   
     });
       }  

   function getLogin(url,parms) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState) {
            console.log(this.responseText);
           
          }
        };  
        xhttp.open("GET", url, true);
        xhttp.send(JSON.stringify(params));
      }

      function getCORS(theUrl,respuesta){
        var result=false;
       $.ajax({
      type: 'get',
      url:   theUrl,      
      crossDomain: true,
      xhrFields: {
          withCredentials: true
       },
      headers:{    
         'Accept': 'application/json',
        'Content-Type': 'application/json',
        'Access-Control-Allow-Origin': '*' 
      }, 
      async: false,
      success: function (data) {
        result=data;
         respuesta(data);
 
      }
  });
  return result;
       }

function postLOL(url,params,respuesta,respuesta2) {
  $.ajax({
    type: 'post',
    url: url,
    crossDomain: true,
    xhrFields: {
     withCredentials: true
    },
    headers:{    
       'Accept': 'application/json',
      'Access-Control-Allow-Origin': '*' ,
      'Content-Type': 'application/json',

      },
    data: JSON.stringify(params), 
    async: false,         
    success: function (data) {
       respuesta(data);
      
    },
    error: function(data){
      respuesta2();
    }

  });
    }

    function postCookies(url,params,respuesta,respuesta2) {
      $.ajax({
       type: 'post',
       url: url,
       crossDomain: true,
       xhrFields: {
        withCredentials: true
       },
       headers:{    
          'Accept': 'application/json',
         'Access-Control-Allow-Origin': '*' ,
         'Content-Type': 'application/json',
 
         },
       data: JSON.stringify(params),          
       success: function (data) {
          respuesta(data);
         
       },
       error: function(data){
         console.log(data)
         respuesta2();
       }
 
 
   });
     }

     function del(url,params,respuesta,respuesta2) {
      $.ajax({
       type: 'DELETE',
       url: url,
       crossDomain: true,
       xhrFields: {
        withCredentials: true
       },
       headers:{    
          'Accept': 'application/json',
         'Access-Control-Allow-Origin': '*' ,
         'Content-Type': 'application/json',
 
         },
       data: JSON.stringify(params),          
       success: function (data) {
          respuesta(data);
         
       },
       error: function(data){
         respuesta2();
       }
 
 
   });
     }

