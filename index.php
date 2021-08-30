<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="firstNumber" placeholder="first number" required><br/><br/>
        <input type="number" name="secondNumber" placeholder="second number" required><br/><br/>

        <select name="operator" required>
            <option value="add">ADD</option>
            <option value="sub">SUB</option>
            <option value="mult">MULT</option>
            <option value="div">DIV</option>
        </select><br/><br/>

        <input type="submit" name="submit">
    </form>

    <h1>Result : <?php
            if(isset($_POST['submit'])){
                $firstNum = $_POST['firstNumber'];
                $secondNum = $_POST['secondNumber'];
                $operat = $_POST ['operator'];
               
                if($operat == "add"){
                    echo $firstNum + $secondNum;
                }
                elseif($operat == "sub"){
                    echo $firstNum - $secondNum;
                }
                elseif($operat == "mult"){
                    echo $firstNum * $secondNum;
                }
                elseif($operat == "div"){
                    echo $firstNum / $secondNum;
                }
            }
        ?>
    </h1>
</body>
</html>