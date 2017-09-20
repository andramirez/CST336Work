<!DOCTYPE html>
<html>
    <head>
        <title>Take A Chance Weekend Get-Away Seepstakes</title>
        <link rel="stylesheet" type="text/css" href= "mainA3.css">
    </head>
    <body>
        <div class="title">
            <img class="title" src="img/logo.png">
        </div>
        <div class="container" >
            <div id="main">
                <div class="intro">
                     Enter your information for a Chance to win a Super Weekend Get-Away!
                 </div>
                <div class="img">
                    <img class="imgIM" src="img/island.jpg">
                </div>
                <div class="formEntry">
                    <form action="sCon.php" method ="POST" onsubmit='return ageValidation()'>
                        <div class="text-input">
                            <span id="name2">
                                <label for="name2">Name: </label>
                                <span class="required">*</span>
                            </span>
                            <span id="input">
                                <input type="text" name="name1" class="form-control" placeholder="Your Name" required>
                            </span>
                        </div>
                        <div class="text-input">
                            <div id="gen">
                                <label for="gender"> Sex: </label>
                                <span class="required">*</span>
                            </div>
                            <span id="gender">
                                <label for="gender"> Male</label>
                            </span>
                            <span id="gender-input">
                                <input type="radio" name="gender" value="Male" required>
                            </span>
                            <span id="gender">
                                <label for="gender"> Female</label>
                            </span>
                            <span id="gender-input">
                                <input type="radio" name="gender" value="Female" required>
                            </span>
                            <span id="gender">
                                <label for="gender">Prefer Not to Say</label>
                            </span>
                            <span id="gender-input">
                                <input type="radio" name="gender" value="Prefer Not to Say" required>
                            </span>
                        </div>
                        <div class="text-input">
                            <span id="birth">
                                <label for="birth">Birth Date:</label>
                                <span class="required">*</span>
                            </span>
                            <span id="birth-input">
                                <span id="month">
                                    <select name="month" id="monthCheck" required>
                                        <option value="0" default selected></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </span>
                            <span id="birth-input">
                                <span id="birth">
                                    <label for="birth"> / </label>
                                </span>
                                <span id="day">
                                    <select name="day" id="dayCheck" required>
                                        <option value="0" default selected></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </span>
                                <span id="birth-input">
                                    <span id="birth">
                                        <label for="birth"> / </label>
                                    </span>
                                    <span id="year">
                                        <input maxlength=4 type="text" id="yearCheck" name="year" class="year" placeholder="year" required> 
                                    </span>
                                </span>
                                    <span class="ageLimit">
                                        &nbsp; (Must be 18 years or older)
                                    </span>
                            </span>
                        </div>
                        <div class="text-input">
                            <span id="email'">
                                <label for="Email">Email: </label>
                                <span class="required">*</span>
                            </span>
                            <span id="email-input">
                                <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="yourname@takeachance.com" required>
                            </span>
                        </div>
                        <table>
                            <tr>
                                <td>
                                    <div class="text-input">
                                        <span id="address">
                                            <label for="address">Address1: </label>
                                            <span class="required">*</span>
                                        </span>
                                        <span id="address-input">
                                            <input type="text" name="address1" class="form-control" placeholder="Address" required>
                                        </span>
                                    </div>
                                    <div class="text-input">
                                        <span id="address">
                                            <label for="address2">Address2: &nbsp;</label>
                                        </span>
                                        <span id="address-input">
                                            <input type="text" name="address2"class="form-control" placeholder="Address (optional)">
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-input">
                                        <span id="city">
                                            <label for="city">City: </label>
                                            <span class="required">*</span>
                                        </span>
                                        <span id="city-input">
                                            <input type="text" name="city" class="form-control" placeholder="City" required>
                                        </span>
                                    </div>
                                    <div class="text-input">
                                        <span id="state">
                                            <label for="State">State: </label>
                                            <span class="required">*</span>
                                            <select name="state" class="state">
                                                <option value="0" default selected></option>
                                            	<option value="AL">Alabama</option>
                                            	<option value="AK">Alaska</option>
                                            	<option value="AZ">Arizona</option>
                                            	<option value="AR">Arkansas</option>
                                            	<option value="CA">California</option>
                                            	<option value="CO">Colorado</option>
                                            	<option value="CT">Connecticut</option>
                                            	<option value="DE">Delaware</option>
                                            	<option value="FL">Florida</option>
                                            	<option value="GA">Georgia</option>
                                            	<option value="HI">Hawaii</option>
                                            	<option value="ID">Idaho</option>
                                            	<option value="IL">Illinois</option>
                                            	<option value="IN">Indiana</option>
                                            	<option value="IA">Iowa</option>
                                            	<option value="KS">Kansas</option>
                                            	<option value="KY">Kentucky</option>
                                            	<option value="LA">Louisiana</option>
                                            	<option value="ME">Maine</option>
                                            	<option value="MD">Maryland</option>
                                            	<option value="MA">Massachusetts</option>
                                            	<option value="MI">Michigan</option>
                                            	<option value="MN">Minnesota</option>
                                            	<option value="MS">Mississippi</option>
                                            	<option value="MO">Missouri</option>
                                            	<option value="MT">Montana</option>
                                            	<option value="NE">Nebraska</option>
                                            	<option value="NV">Nevada</option>
                                            	<option value="NH">New Hampshire</option>
                                            	<option value="NJ">New Jersey</option>
                                            	<option value="NM">New Mexico</option>
                                            	<option value="NY">New York</option>
                                            	<option value="NC">North Carolina</option>
                                            	<option value="ND">North Dakota</option>
                                            	<option value="OH">Ohio</option>
                                            	<option value="OK">Oklahoma</option>
                                            	<option value="OR">Oregon</option>
                                            	<option value="PA">Pennsylvania</option>
                                            	<option value="RI">Rhode Island</option>
                                            	<option value="SC">South Carolina</option>
                                            	<option value="SD">South Dakota</option>
                                            	<option value="TN">Tennessee</option>
                                            	<option value="TX">Texas</option>
                                            	<option value="UT">Utah</option>
                                            	<option value="VT">Vermont</option>
                                            	<option value="VA">Virginia</option>
                                            	<option value="WA">Washington</option>
                                            	<option value="WV">West Virginia</option>
                                            	<option value="WI">Wisconsin</option>
                                            	<option value="WY">Wyoming</option>
                                            </select>				
                                    </span>
                                        <span id="ZIP">
                                            <label for="ZIP">ZIP: </label>
                                            <span class="required">*</span>
                                        </span>
                                        <span class="ZIP-input">
                                            <input type="text" maxlength="5" name="ZIP"class="ZIP" placeholder="ZIP">
                                        </span>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <div class="text-input">
                            <div id="offers">
                                <label for="offers">Use this info to Enter into our Many Sweepstakes:</label>
                            </div> <br/>
                            <div class="offers-input">
                                <input type="checkbox" name="Jamaica" value="Jamaica"> Take a Chance Weekend Get-Away: <b>Jamaica</b> 
                            </div>
                            <div class="offers-input">
                                <input type="checkbox" name="Fiji" value="Fiji"> Take a Chance Weekend Get-Away: <b>Fiji</b>
                            </div>
                            <div class="offers-input">
                                <input type="checkbox" name="Hawaii" value="Hawaii"> Take a Chance Weekend Get-Away: <b>Hawaii</b>
                            </div>
                            <div class="offers-input">
                                <input type="checkbox" name="CostaRica" value="CostaRica"> Take a Chance Weekend Get-Away: <b>Costa Rica</b> 
                            </div>
                            <div class="offers-input">
                                <input type="checkbox" name="Tahiti" value="Tahiti"> Take a Chance Weekend Get-Away: <b>Tahiti</b> 
                            </div>
                            <div class="offers-input">
                                <input type="checkbox" name="BoraBora" value="BoraBora"> Take a Chance Weekend Get-Away: <b>Bora Bora</b> 
                            </div>
                        </div>
                        <div class="butt">
                          <input type="submit" class="btn" value="Take A Chance!">
                          <input type="reset" class="btn" value="Reset">
                        </div>

                    </form>
                </div>
                        
                          
                          
            
            </div>
        </div>
            



        </div>
            <script type="text/javascript">

 

    function ageValidation()

    {

        // Create validation tracking variables

        var valid = true;
        

        // Validate Age
        
        if (document.getElementById('yearCheck').value > 1996)

        {

            var valMessage = 'ERROR: User Must Be 18 years or Older\r\n';

            valid = false;

        }
        if (document.getElementById('yearCheck').value < 1916){
            
            var valMessage = 'ERROR: Please Enter Accurate Age\r\n';

            valid = false;
        }
        if (document.getElementById('monthCheck').value == "2" && (document.getElementById('dayCheck').value == "30" || document.getElementById('dayCheck').value == "31"))
        {
            var valMessage = 'ERROR: Please Enter Accurate Date\r\n';

            valid = false;
        }
        if (document.getElementById('monthCheck').value == "4" && document.getElementById('dayCheck').value == "31"){
            
            
            var valMessage = 'ERROR: Please Enter Accurate Date\r\n';

            valid = false;
        }
        if (document.getElementById('monthCheck').value == "6" && document.getElementById('dayCheck').value == "31"){
            
            
            var valMessage = 'ERROR: Please Enter Accurate Date\r\n';

            valid = false;
        }
        if (document.getElementById('monthCheck').value == "9" && document.getElementById('dayCheck').value == "31"){
            
            
            var valMessage = 'ERROR: Please Enter Accurate Date\r\n';

            valid = false;
        }
        if (document.getElementById('monthCheck').value == "11" && document.getElementById('dayCheck').value == "31"){
            
            
            var valMessage = 'ERROR: Please Enter Accurate Date\r\n';

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