<?php

namespace ProseMirrorToHtml\Nodes;

class CodeBlock extends Node
{
    protected $nodeType = 'codeBlock';
    protected $tagName = ['pre', 'code'];
}
