
<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
                
         <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="#" class="section">About</a>
              <a href="#" class="section">Services</a>
              <a href="#" class="section">Clients</a>
              <a href="#" class="section">Contact</a>
        </div>
        <script>
                
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }
        
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
        
        
        </script>
        
        <div class="Fixed">
            <img class="sideNavButton" onclick="openNav()" src="img/icon.png">
        </div>
    </body>
</html>