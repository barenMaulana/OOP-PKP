<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3ff3b40f8f01a3a3eb1c3aa1f8078ad4
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PPH21\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PPH21\\' => 
        array (
            0 => __DIR__ . '/../..' . '/SRC',
        ),
    );

    public static $classMap = array (
        'PPH21\\AbstractCalculator' => __DIR__ . '/../..' . '/SRC/AbstractCalculator.php',
        'PPH21\\CalculatorInterface' => __DIR__ . '/../..' . '/SRC/CalculatorInterface.php',
        'PPH21\\FirstRuleCalculator' => __DIR__ . '/../..' . '/SRC/FirstRuleCalculator.php',
        'PPH21\\FourthRuleCalculator' => __DIR__ . '/../..' . '/SRC/FourthRuleCalculator.php',
        'PPH21\\PPH21Calculator' => __DIR__ . '/../..' . '/SRC/PPH21Calculator.php',
        'PPH21\\SecondRuleCalculator' => __DIR__ . '/../..' . '/SRC/SecondRuleCalculator.php',
        'PPH21\\ThirdRuleCalculator' => __DIR__ . '/../..' . '/SRC/ThirdRuleCalculator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3ff3b40f8f01a3a3eb1c3aa1f8078ad4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3ff3b40f8f01a3a3eb1c3aa1f8078ad4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3ff3b40f8f01a3a3eb1c3aa1f8078ad4::$classMap;

        }, null, ClassLoader::class);
    }
}
