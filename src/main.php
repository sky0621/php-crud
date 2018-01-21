<?php
require '../vendor/autoload.php';
require 'visitor.php';

use PhpParser\ParserFactory;
use PhpParser\NodeTraverser;

ini_set('xdebug.max_nesting_level', 3000);

$contents = file_get_contents("/var/work/app/classes/batch/us.php");

$parser = (new ParserFactory)->create(ParserFactory::PREFER_PHP5);

try {
    $stmts = $parser->parse($contents);

    $traverser = new NodeTraverser();
    $traverser->addVisitor(new NodeVisitor);
    $traverser->traverse($stmts);
    // Output
    // $prettyPrinter = new PhpParser\P../vendor/autoload.phprettyPrinter\Standard();
    // echo $prettyPrinter->prettyPrintFile($stmts);
} catch(Error $e) {
    print($e->getMessage());
}