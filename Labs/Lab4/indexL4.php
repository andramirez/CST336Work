
<html>
    <head>
        <title> </title>
        <link rel="stylesheet" type="text/css" href= "mainL4.css">
    </head>
    <body>
        <div class="container" >
            <div class="content">
                <div class="title">
                    <b>Support Your Presidential Candidate</b>
                </div>
                <div class="formpic">
                <img src="img/labimg.jpg" alt="Presidential Candidates"><br/><br/><br/>
                </div>
                <div class="form">
                    <form action="formCon.php" method ="POST" onsubmit='return ageValidation()'>
                        <div class="formEntry">
                            <div id="name">
                                <span class="label">
                                    <label>Enter your name: </label>
                                </span>
                                <span class="valueName">
                                    <input id ="nameCheck" type="text" name = "name" required/>
                                </span>
                            </div>
                            <div id="age">
                                <span class="label">
                                    <label>Enter your age: </label>
                                </span>
                                <span class="valueAge">
                                    <input id="ageCheck" type="text" name = "age" required/>&nbsp;&nbsp;<font>(Must be 18 years or older)</font><span id="errorAgeMissing" style="visibility:hidden;"><br/>Age</span>
                                </span>
                            </div>
                            <div class="candidates">
                                <span class="label">
                                    <span>
                                        <label>Select your Candidate: </label>
                                    </span>
                                    <span class ="selections">
                                    <select name="mySel">
                                        <option value="Ben Carson">
                                            Ben Carson
                                        </option>
                                        <option value="Ted Cruz">
                                            Ted Cruz
                                        </option>
                                        <option value="John Kasich">
                                            John Kasich
                                        </option>
                                        <option value ="Marco Rubio">
                                            Marco Rubio
                                        </option>
                                        <option value="Donald Trump">
                                            Donald Trump
                                        </option>
                                        <option value="Hillary Clinton">
                                            Hillary Clinton
                                        </option>
                                        <option value="Bernie Sanders">
                                            Bernie Sanders    
                                        </option>
                                        </select>
                                    </span>
                                </span>
                            </div >
                            <div class="label">
                                <label><b>Merchandise: </b></label>
                            </div><br/>
                            <div class="merch">
                                <input type="checkbox" name="mug" value= "15"/> &nbsp;Mug &nbsp;&nbsp;($15)
                            </div>
                            <br/>
                            <div class="merch">
                                <input type="checkbox" name="cap" value= "20"/> &nbsp;Cap &nbsp;&nbsp;($20)
                            </div>
                            <br/>
                            <div class="merch">
                                <input type="checkbox" name="tote" value= "10"/> &nbsp;Tote Bag &nbsp;&nbsp;($10)
                            </div>
                            <br/>
                            <div class="merch">
                                <input type="checkbox" name="pin" value= "5"/> &nbsp;Pin &nbsp;&nbsp;($5)
                            </div>
                            <br/>
                            <div class="label">
                                <label><b>Campaign Magazine ($10 per month)<br/></b></label>
                            </div>
                            <div class ="months">
                                <input type="radio" name="1month" value= "10"> 1 month
                                &nbsp;&nbsp;
                                <input type="radio" name="3month" value= "30"> 3 month
                                &nbsp;&nbsp;
                                <input type="radio" name="6month" value= "60"> 6 month
                                &nbsp;&nbsp;
                                <input type="radio" name="12month" value= "120"> 12 month
                                &nbsp;&nbsp;
                            </div>
                            </div>
                        </div>
                        <div class="submission" align="center">
                            <input type="image" src="img/buyNow.png" alt="Submit">
                        </div>
                        <div class="resetButton" align="center">
                        <input class="formButtons" type="reset" value="Reset"/>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    <script type="text/javascript">

 

    function ageValidation()

    {

        // Create validation tracking variables

        var valid = true;
        

        // Validate Age
        
        if (document.getElementById('ageCheck').value < 18)

        {

            var valMessage = 'ERROR: User Must Be 18 years or Older\r\n';

            valid = false;

        }

 

        // Display alert box with errors if any errors found

        if (valid == false)

        {

            alert(valMessage);

        }

        

        return valid;

    }


</script>


    </body>
</html>