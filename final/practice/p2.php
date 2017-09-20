 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
        Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>program2</title>
        <meta name="description" content="">
        <meta name="author" content="Susan Brown">

        <meta name="viewport" content="width=device-width; initial-scale=1.0">

        <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
        <link rel="shortcut icon" href="/favicon.ico">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
   
     <script>

      $(document).ready( function(){
          
             $("input").change( function(){
                 
                   //alert("hi");
                   $.ajax({
                    type: "get",
                    url: "http://earthquake.usgs.gov/fdsnws/event/1/query",
                    dataType: "json",
                    data: { "format": "geojson",
                            "starttime": $("#startDate").val(),
                            "endtime":   $("#endDate").val(),
                            "latitude":  $("#latitude").val(),
                            "longitude": $("#longitude").val(),
                            "maxradius": $("#radius").val(),
                            "minmag": $("#minMag").val()
                           },
                    success: function(data,status) {
                            
                            $("#result").html("<br><strong>Earthquakes:</strong><br />");
                            $("#result").append("Magnitude - Place<br />");
                            for (var i=0; i< data['features'].length; i++) {
                                $("#result").append(data['features'][i]['properties'].mag + " - ");
                                   $("#result").append(data['features'][i]['properties'].place + "<br>");
                                
                            }
                            
        
                      },
                     complete: function(data,status) { //optional, used for debugging purposes
                          alert(status);
                      }
                }); //endAjax                       
                   
                 
             }  );
          
      }); //document.ready
           
    </script>
        
    </head>

    <body>
        <div>
            <header>
                <h1>program2</h1>
            </header>

            <div>
                Change any value to update the list of earthquakes:
                <form>

                    Start Date  <input type="text" id="startDate" value="2015-01-01"> <br />
                    End Date  <input type="text" id="endDate" value="2015-12-15"> <br />
                    Latitude  <input type="text" id="latitude" value="36.6"> <br />
                    Longitude  <input type="text" id="longitude" value="-121.9"> <br />
                    Radius  <input type="text" id="radius" value="10"> <br />
                    Min Magnitude  <input type="text" id="minMag" value="1"> <br />

                </form>

            </div>

            <div id="result">
                
                
            </div>
        

            <footer></footer>
        </div>
    </body>
</html>
