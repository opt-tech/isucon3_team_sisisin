<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita9bd6be8b3047cf37f1af6b59d3a45e4
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        '023d27dca8066ef29e6739335ea73bad' => __DIR__ . '/..' . '/symfony/polyfill-php70/bootstrap.php',
        '25072dd6e2470089de65ae7bf11d3109' => __DIR__ . '/..' . '/symfony/polyfill-php72/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
            'Torb\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php72\\' => 23,
            'Symfony\\Polyfill\\Php70\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Stopwatch\\' => 28,
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\OptionsResolver\\' => 34,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\Filesystem\\' => 29,
            'Symfony\\Component\\EventDispatcher\\' => 34,
            'Symfony\\Component\\Console\\' => 26,
            'Slim\\Views\\' => 11,
            'Slim\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
            'PhpCsFixer\\' => 11,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Annotations\\' => 28,
        ),
        'C' => 
        array (
            'Composer\\XdebugHandler\\' => 23,
            'Composer\\Semver\\' => 16,
        ),
        'A' => 
        array (
            'Aura\\Session\\_Config\\' => 21,
            'Aura\\Session\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Torb\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/Torb',
        ),
        'Symfony\\Polyfill\\Php72\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php72',
        ),
        'Symfony\\Polyfill\\Php70\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php70',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Stopwatch\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/stopwatch',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\OptionsResolver\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/options-resolver',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Slim\\Views\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/twig-view/src',
        ),
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PhpCsFixer\\' => 
        array (
            0 => __DIR__ . '/..' . '/friendsofphp/php-cs-fixer/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'Doctrine\\Common\\Annotations\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations',
        ),
        'Composer\\XdebugHandler\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/xdebug-handler/src',
        ),
        'Composer\\Semver\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/semver/src',
        ),
        'Aura\\Session\\_Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/aura/session/config',
        ),
        'Aura\\Session\\' => 
        array (
            0 => __DIR__ . '/..' . '/aura/session/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/bryanjhv/slim-session/src',
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Lexer\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/lexer/lib',
            ),
        ),
    );

    public static $classMap = array (
        'ArithmeticError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/ArithmeticError.php',
        'AssertionError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/AssertionError.php',
        'DivisionByZeroError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/DivisionByZeroError.php',
        'Error' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/Error.php',
        'ParseError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/ParseError.php',
        'PhpCsFixer\\Diff\\GeckoPackages\\DiffOutputBuilder\\ConfigurationException' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/GeckoPackages/DiffOutputBuilder/ConfigurationException.php',
        'PhpCsFixer\\Diff\\GeckoPackages\\DiffOutputBuilder\\UnifiedDiffOutputBuilder' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/GeckoPackages/DiffOutputBuilder/UnifiedDiffOutputBuilder.php',
        'PhpCsFixer\\Diff\\v1_4\\Chunk' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v1_4/Chunk.php',
        'PhpCsFixer\\Diff\\v1_4\\Diff' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v1_4/Diff.php',
        'PhpCsFixer\\Diff\\v1_4\\Differ' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v1_4/Differ.php',
        'PhpCsFixer\\Diff\\v1_4\\LCS\\LongestCommonSubsequence' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v1_4/LCS/LongestCommonSubsequence.php',
        'PhpCsFixer\\Diff\\v1_4\\LCS\\MemoryEfficientImplementation' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v1_4/LCS/MemoryEfficientLongestCommonSubsequenceImplementation.php',
        'PhpCsFixer\\Diff\\v1_4\\LCS\\TimeEfficientImplementation' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v1_4/LCS/TimeEfficientLongestCommonSubsequenceImplementation.php',
        'PhpCsFixer\\Diff\\v1_4\\Line' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v1_4/Line.php',
        'PhpCsFixer\\Diff\\v1_4\\Parser' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v1_4/Parser.php',
        'PhpCsFixer\\Diff\\v2_0\\Chunk' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v2_0/Chunk.php',
        'PhpCsFixer\\Diff\\v2_0\\Diff' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v2_0/Diff.php',
        'PhpCsFixer\\Diff\\v2_0\\Differ' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v2_0/Differ.php',
        'PhpCsFixer\\Diff\\v2_0\\Exception' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v2_0/Exception/Exception.php',
        'PhpCsFixer\\Diff\\v2_0\\InvalidArgumentException' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v2_0/Exception/InvalidArgumentException.php',
        'PhpCsFixer\\Diff\\v2_0\\Line' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v2_0/Line.php',
        'PhpCsFixer\\Diff\\v2_0\\LongestCommonSubsequenceCalculator' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v2_0/LongestCommonSubsequenceCalculator.php',
        'PhpCsFixer\\Diff\\v2_0\\MemoryEfficientLongestCommonSubsequenceCalculator' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v2_0/MemoryEfficientLongestCommonSubsequenceCalculator.php',
        'PhpCsFixer\\Diff\\v2_0\\Output\\AbstractChunkOutputBuilder' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v2_0/Output/AbstractChunkOutputBuilder.php',
        'PhpCsFixer\\Diff\\v2_0\\Output\\DiffOnlyOutputBuilder' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v2_0/Output/DiffOnlyOutputBuilder.php',
        'PhpCsFixer\\Diff\\v2_0\\Output\\DiffOutputBuilderInterface' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v2_0/Output/DiffOutputBuilderInterface.php',
        'PhpCsFixer\\Diff\\v2_0\\Output\\UnifiedDiffOutputBuilder' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v2_0/Output/UnifiedDiffOutputBuilder.php',
        'PhpCsFixer\\Diff\\v2_0\\Parser' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v2_0/Parser.php',
        'PhpCsFixer\\Diff\\v2_0\\TimeEfficientLongestCommonSubsequenceCalculator' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v2_0/TimeEfficientLongestCommonSubsequenceCalculator.php',
        'PhpCsFixer\\Diff\\v3_0\\Chunk' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v3_0/Chunk.php',
        'PhpCsFixer\\Diff\\v3_0\\ConfigurationException' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v3_0/Exception/ConfigurationException.php',
        'PhpCsFixer\\Diff\\v3_0\\Diff' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v3_0/Diff.php',
        'PhpCsFixer\\Diff\\v3_0\\Differ' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v3_0/Differ.php',
        'PhpCsFixer\\Diff\\v3_0\\Exception' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v3_0/Exception/Exception.php',
        'PhpCsFixer\\Diff\\v3_0\\InvalidArgumentException' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v3_0/Exception/InvalidArgumentException.php',
        'PhpCsFixer\\Diff\\v3_0\\Line' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v3_0/Line.php',
        'PhpCsFixer\\Diff\\v3_0\\LongestCommonSubsequenceCalculator' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v3_0/LongestCommonSubsequenceCalculator.php',
        'PhpCsFixer\\Diff\\v3_0\\MemoryEfficientLongestCommonSubsequenceCalculator' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v3_0/MemoryEfficientLongestCommonSubsequenceCalculator.php',
        'PhpCsFixer\\Diff\\v3_0\\Output\\AbstractChunkOutputBuilder' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v3_0/Output/AbstractChunkOutputBuilder.php',
        'PhpCsFixer\\Diff\\v3_0\\Output\\DiffOnlyOutputBuilder' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v3_0/Output/DiffOnlyOutputBuilder.php',
        'PhpCsFixer\\Diff\\v3_0\\Output\\DiffOutputBuilderInterface' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v3_0/Output/DiffOutputBuilderInterface.php',
        'PhpCsFixer\\Diff\\v3_0\\Output\\StrictUnifiedDiffOutputBuilder' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v3_0/Output/StrictUnifiedDiffOutputBuilder.php',
        'PhpCsFixer\\Diff\\v3_0\\Output\\UnifiedDiffOutputBuilder' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v3_0/Output/UnifiedDiffOutputBuilder.php',
        'PhpCsFixer\\Diff\\v3_0\\Parser' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v3_0/Parser.php',
        'PhpCsFixer\\Diff\\v3_0\\TimeEfficientLongestCommonSubsequenceCalculator' => __DIR__ . '/..' . '/php-cs-fixer/diff/src/v3_0/TimeEfficientLongestCommonSubsequenceCalculator.php',
        'PhpCsFixer\\Tests\\TestCase' => __DIR__ . '/..' . '/friendsofphp/php-cs-fixer/tests/TestCase.php',
        'PhpCsFixer\\Tests\\Test\\AbstractFixerTestCase' => __DIR__ . '/..' . '/friendsofphp/php-cs-fixer/tests/Test/AbstractFixerTestCase.php',
        'PhpCsFixer\\Tests\\Test\\AbstractIntegrationCaseFactory' => __DIR__ . '/..' . '/friendsofphp/php-cs-fixer/tests/Test/AbstractIntegrationCaseFactory.php',
        'PhpCsFixer\\Tests\\Test\\AbstractIntegrationTestCase' => __DIR__ . '/..' . '/friendsofphp/php-cs-fixer/tests/Test/AbstractIntegrationTestCase.php',
        'PhpCsFixer\\Tests\\Test\\Assert\\AssertTokensTrait' => __DIR__ . '/..' . '/friendsofphp/php-cs-fixer/tests/Test/Assert/AssertTokensTrait.php',
        'PhpCsFixer\\Tests\\Test\\IntegrationCase' => __DIR__ . '/..' . '/friendsofphp/php-cs-fixer/tests/Test/IntegrationCase.php',
        'PhpCsFixer\\Tests\\Test\\IntegrationCaseFactory' => __DIR__ . '/..' . '/friendsofphp/php-cs-fixer/tests/Test/IntegrationCaseFactory.php',
        'PhpCsFixer\\Tests\\Test\\IntegrationCaseFactoryInterface' => __DIR__ . '/..' . '/friendsofphp/php-cs-fixer/tests/Test/IntegrationCaseFactoryInterface.php',
        'PhpCsFixer\\Tests\\Test\\InternalIntegrationCaseFactory' => __DIR__ . '/..' . '/friendsofphp/php-cs-fixer/tests/Test/InternalIntegrationCaseFactory.php',
        'SessionUpdateTimestampHandlerInterface' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/SessionUpdateTimestampHandlerInterface.php',
        'TypeError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/TypeError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita9bd6be8b3047cf37f1af6b59d3a45e4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita9bd6be8b3047cf37f1af6b59d3a45e4::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInita9bd6be8b3047cf37f1af6b59d3a45e4::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita9bd6be8b3047cf37f1af6b59d3a45e4::$prefixesPsr0;
            $loader->classMap = ComposerStaticInita9bd6be8b3047cf37f1af6b59d3a45e4::$classMap;

        }, null, ClassLoader::class);
    }
}
