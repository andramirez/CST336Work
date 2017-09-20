<?php
//navigaion bar
session_start();
$permission = $_SESSION['permission'];
$username = $_SESSION['username'];
?>
<!-- navbar -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="gems.php" id='user' >Gemstone Mania</a>
        </div>
 
        <div class="navbar-collapse collapse">
            <ul class="nav nav-col">
                <li <?php echo $page_title=="Gems" ? "class='active'" : ""; ?> >
                    <a href="gems.php" id='user'>Gems</a>
                </li>
                    <?php
                    if(isset($username))
                    {
                        if($permission == "no")
                        {
                            echo "<li>
                    <a href='adminvisit.php' id = 'user'>
                        Go Back to Admin View
                    </a>
                </li>";
                        }
                    }
                if($permission == "yes"){
                echo "<li>
                    <a href='userVisit.php' id = 'user'>
                        Visit as User
                    </a>
                </li>
                <li>
                    <a href='reports.php' id= 'user'>
                        Database Reports
                    </a>
                </li>
                    
                <li>
                    <form class= 'nav-butt2' action='logins/logout.php'>
            <input class='fsSubmitButton3' type='submit' value='Logout' />    
         </form>
                </li>";
                }
                if(!isset($username)){
                echo "<li>
                    <form class= 'nav-butt' action='logins/login.php'>
            <input class='fsSubmitButton' type='submit' value='Login as Admin' />    
         </form>
                </li>";
                }
                ?>
            </ul>
        </div><!--/.nav-collapse -->
 
    </div>
</div>
<!-- /navbar -->