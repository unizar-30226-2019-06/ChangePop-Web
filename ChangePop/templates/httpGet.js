 
 function httpGet(theUrl){
      
      var xmlHttp = new XMLHttpRequest();
      xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
      xmlHttp.send( null );
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
      function post(url,params){
        $.ajax({
            type: 'post',
            url: url,
            Accept: 'application/json',
            data: JSON.stringify(params),
            contentType: "application/json; charset=utf-8",
          
            success: function (data) {
               console.log(data);
               window.location = "bienvenidaConectado.html";
            }  
            });
      }      

    