<?php
require '../vendor/autoload.php';
require 'visitor.php';

use PhpParser\ParserFactory;
use PhpParser\NodeTraverser;
use PhpParser\PrettyPrinter;
use PhpParser\NodeDumper;

ini_set('xdebug.max_nesting_level', 3000);

$contents = file_get_contents("/var/work/app/classes/batch/us.php");

$parser = (new ParserFactory)->create(ParserFactory::PREFER_PHP5);

try {
    $stmts = $parser->parse($contents);

    // $traverser = new NodeTraverser();
    // $traverser->addVisitor(new NodeVisitor);
    // $traverser->traverse($stmts);
    // Output
    // $prettyPrinter = new PrettyPrinter\Standard();
    // echo $prettyPrinter->prettyPrint($stmts);
    $dumper = new NodeDumper();
    echo $dumper->dump($stmts) . "\n";
} catch(Error $e) {
    print($e->getMessage());
}