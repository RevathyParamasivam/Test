<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swagger</title>
    <script>
      function getDetails()
      {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.open("GET","http://localhost/Swagger_App/public/getDetails.php",false);
        xmlhttp.send();
        if(xmlhttp.readyState==4 && xmlhttp.status==200)
        {
          var result=xmlhttp.responseText;
          alert(result);
        }

      }
    </script>

</head>
<body onload="getDetails()">
    <div id="show">
      
      
    </div>
    

</body>
</html>