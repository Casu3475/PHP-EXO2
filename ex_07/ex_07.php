<?php
 
function my_division_modulo($firstNumber, $operChar, $secondNumber)
    {   
        if ($secondNumber == 0)
        {
            echo "The given arguments aren't good.";
        }
        elseif ($operChar == "/")
        {
            echo $firstNumber/$secondNumber;
        }
       elseif ($operChar == "%")
        {
            echo $firstNumber%$secondNumber;
        }
        elseif ($secondNumber == 0)
        {
            echo "The given arguments aren't good.";
        }
        else echo "The given arguments aren't good.";
    }