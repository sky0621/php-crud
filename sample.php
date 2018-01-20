<?php
require 'vendor/autoload.php';

ini_set('xdebug.max_nesting_level', 3000);

$contents = file_get_contents("/home/koge/tmp_oden/dialogone/dialogone/sally/fuel/app/classes/batch/updatesegment.php");
//print($contents);

use PhpParser\ParserFactory;
$parser = (new ParserFactory)->create(ParserFactory::PREFER_PHP5);

try {
    $stmt = $parser->parse($contents);
    // print($stmt);
    foreach($stmt as $k => $V) {
        print($k);
    }
} catch(Error $e) {
    print($e->getMessage());
}