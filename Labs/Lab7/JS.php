<?php
include 'javaFunctions.php';
?>
<DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='utf-8'></meta>
        <title>Lab 7</title>
        <style>#wrapper, 
        table{margin:0 auto;
        text-align:center;
        width:800px;}
        td{
        padding:20px;}</style>
    </head>
    <div id="wrapper">
        <a href="JQuery.php"> Go to JQuery Version </a>
        <h1>Find the Letter!</h1>
        <form>
            Select a Letter to Find: 
            <select name="letterToFind">
                <option>A</option>
                <option>B</option>
                <option>C</option>
                <option>D</option>
                <option>E</option>
                <option>F</option>
                <option>G</option>
                <option>H</option>
                <option>I</option>
                <option>J</option>
                <option>K</option>
                <option>L</option>
                <option>M</option>
                <option>N</option>
                <option>O</option>
                <option>P</option>
                <option>Q</option>
                <option>R</option>
                <option>S</option>
                <option>T</option>
                <option>U</option>
                <option>V</option>
                <option>W</option>
                <option>X</option>
                <option>Y</option>
                <option>Z</option>
            </select>
            </br></br>
            Select Table Size: 
            <select name="tableSize">
                <option value="6">6x6</option>
                <option value="7">7x7</option>
                <option value="8">8x8</option>
                <option value="9">9x9</option>
                <option value="9">10x10</option>
            </select>
            </br></br>
            Select Letter to Omit: 
            <select name="letterToOmit">
                <option>Z</option>
                <option>Y</option>
                <option>X</option>
                <option>W</option>
                <option>V</option>
                <option>U</option>
                <option>T</option>
                <option>S</option>
                <option>R</option>
                <option>Q</option>
                <option>P</option>
                <option>O</option>
                <option>N</option>
                <option>M</option>
                <option>L</option>
                <option>K</option>
                <option>J</option>
                <option>I</option>
                <option>H</option>
                <option>G</option>
                <option>F</option>
                <option>E</option>
                <option>D</option>
                <option>C</option>
                <option>B</option>
                <option>A</option>
            </select>
            </br></br>
            <input type="submit" name="submitForm" value="Create Table">
            <h2 id="feedback"></h2>
            <h3 id="timeTaken"></h3>
            <h3 id="score"></h3>
        </form>
        
        <?php 
        displayTable();
        ?>
    </div>
</html>