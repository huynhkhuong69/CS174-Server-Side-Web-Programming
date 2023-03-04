<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>

<style>
    * { background-color: pink;}
    div.h1 { text-align: center; background-color: green;}
    div.label1 { text-align: center; }
    div.operator { text-indent: 38em; }
    div.label2 { text-align: center; }
    div.button { text-align: center; } 
    div.equal { text-align: center; }
    div.handle_error { text-align: center; color: blue; }
    div.php { text-align: center; }
    div.error_message { text-align: center; color: red; }
</style>

<script type="application/javascript">
    function validateForm() {
        var val;
        val = document.getElementById("textfield").value;
        var val2 = document.getElementById("textfield2").value;

        /*
            If the textField is empty when user click submit
            get element error by ID in the body of html 
            display message "Text field must not be blank!"
            If the value in textField1 is not a number, display alert message!
            If the value in textField2 is not a number, display alert message for input2!
        */
        
        //This line check for numbers only
        var regex = /^[0-9]+$/;
            if (val == "") {
                document.getElementById("error").innerHTML = "Text field must not be blank";
                return false;
            }
            if (!val.match(regex)) {
                alert("Text field 1 must be a number!");
                return false;
            }
            if (!val2.match(regex)) {
                alert("Text field 2 must be a number!");
            }
            if(!val)
            return true;
    }
</script>    
</head>
<body>
<br><br><br><br>

<div class="h1">
    <h1><strong>Calculator</strong></h1>
</div>
<br>

<form action="index.php" onsubmit="return validateForm();" method="GET">
    <div class="label1">
    <label for="textfield" name="num1" class="left">Input 1:</label>
    <input id="textfield" type="text" name="num1" placeholder="Input one">
    </div>
    <br>

    <div class="operator">
    <label for="textfield" name="operator" class="left">Operator:</label> 
    <select name="operator">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    </div> 
    <br>

    <div class="label2">
    <label for="textfield" name="num2" class="left">Input 2:</label> 
    <input id="textfield2" type="text" name="num2" placeholder="Input two"> 
    </div>
    <br>

    <div class="handle_error">
        <p>(Leave the Input 1 blank to see Javascript error handling)</p>
        <p>(Enter a letter in text field 1, and a number in text field 2 to check for validation)</p>
        <p>(Enter a letter in text field 2, and a number in text field 1 to check for validation)</p>
        
    </div>
    <br>

    <div class="button">
    <button type="submit" name="submit" value="submit">Calculate</button>
    </div>
    <br><br><br>
</form>

<div class="error_message">
    <p id="error"></p> 
</div>
<hr />

    <div class="equal">
    <p>The answer is: </p>
    </div>

<div class="php"> 
<?php  

    //isset function() check whether a variable is set
    //which means it has to be declared and is not NULL
    if  (!empty($_GET['submit'])) {
        $ans1 = $_GET['num1'];
        $ans2 = $_GET['num2'];
        $operator = $_GET['operator']; 
        switch ($operator) {
            case "":
                echo "ERROR!Please enter numbers to calculate!";
            break;
            case "*":
                echo $ans1 * $ans2;
            break;
          
            case "+":
                echo $ans1 + $ans2;
            break;
       
            case "-":
                echo $ans1 - $ans2;
            break;
                
            case "/":
                echo $ans1 / $ans2;
            break;
        } 
    }
?>

</div>
</body>
</html>




