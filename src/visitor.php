<?php
use PhpParser\Node;
use PhpParser\NodeVisitorAbstract;

class NodeVisitor extends NodeVisitorAbstract {
    public function leaveNode(Node $node) {
        print($node->getLine());
        print("#" . $node->getType() . " > " . $node->getSubNodeNames());
        print("\n");
    }
}