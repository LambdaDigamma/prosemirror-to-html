<?php

namespace ProseMirrorToHtml\Nodes;

class HorizontalRule extends Node
{
    protected $nodeType = 'horizontalRule';
    protected $tagName = 'hr';

    public function selfClosing()
    {
        return true;
    }
}
