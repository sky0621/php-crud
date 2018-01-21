<?php
use PhpParser\Node;
use PhpParser\NodeVisitorAbstract;

class NodeVisitor extends NodeVisitorAbstract {
    public function leaveNode(Node $node) {
        if($node instanceof Node\Scalar\String_) {
            // $node->value = 'hello';
            print($node->value);
        }
    }
}