<?php
require __DIR__ . '/SRC/CalculatorInterface.php';
require __DIR__ . '/SRC/AbstractCalculator.php';
require __DIR__ . '/SRC/FirstRuleCalculator.php';
require __DIR__ . '/SRC/SecondRuleCalculator.php';
require __DIR__ . '/SRC/ThirdRuleCalculator.php';
require __DIR__ . '/SRC/FourthRuleCalculator.php';
require __DIR__ . '/SRC/PPH21Calculator.php';

use PPH21\FirstRuleCalculator;
use PPH21\SecondRuleCalculator;
use PPH21\ThirdRuleCalculator;
use PPH21\FourthRuleCalculator;
use PPH21\PPH21Calculator;

$first = new FirstRuleCalculator;
$second = new SecondRuleCalculator;
$third = new ThirdRuleCalculator;
$Fourth = new FourthRuleCalculator;

$calculator = new PPH21Calculator($first, $second, $third, $Fourth);

echo number_format($calculator->calculate(25000000));
echo "<br>";
echo number_format($calculator->calculate(3000000));
