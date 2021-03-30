<?php

namespace ProseMirrorToHtml\Nodes;

class HardBreak extends Node
{
    protected $nodeType = 'hardBreak';
    protected $tagName = 'br';

    public function selfClosing()
    {
        return true;
    }
}
