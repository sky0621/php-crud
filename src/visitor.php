<?php
use PhpParser\Node;
use PhpParser\NodeVisitorAbstract;

class NodeVisitor extends NodeVisitorAbstract {
    public function leaveNode(Node $node) {
        // print($node->getLine());
        // print("#" . $node->getType() . " > " . $node->getSubNodeNames());
        // print("#" . $node->getType());
        // print("\n");
        // foreach ($node->getAttributes() as $attr) {
        //     print("    [Attr]" . $attr);
        //     print("\n");
        // }
        // print("\n");
        // foreach ($node->getSubNodeNames() as $subNodeName) {
        //     print("    [SubNodeName]" . $subNodeName);
        //     print("\n");
        // }
    }
}