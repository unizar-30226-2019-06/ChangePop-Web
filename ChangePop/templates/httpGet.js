
 function httpGet(theUrl, params){
      
      var xmlHttp = new XMLHttpRequest();
      xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
      xmlHttp.send( JSON.stringify(params) );
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

      function post(url,params,respuesta){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            respuesta();
          }
        };  
        xhttp.open("POST", url, true);
        xhttp.setRequestHeader("Content-type", "application/json");
        xhttp.send(JSON.stringify(params));
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

