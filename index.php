<form method="POST">
    <label for="input">Enter a Expression to test if it's valid:</label>
    <input type="text" placeholder="(4-2)+[2%2]" id="input" name="input">
    <button type="submit">Submit</button>
</form>

<?php
require_once 'autoload.php';

use Yomi\DataStructures\LinkedList;
use Yomi\DataStructures\Node;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_value = $_POST["input"];

    $stack       = new LinkedList();
    $expression1 = $input_value;
    $testExp     = $stack->isExpressionWellFormed($expression1);
    if ($testExp) {
        echo "Expression is well formatted";
    } else {
        echo "Expression is not well formatted";
    }
}
