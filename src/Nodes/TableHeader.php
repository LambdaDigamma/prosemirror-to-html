<?php

namespace ProseMirrorToHtml\Nodes;

class TableHeader extends TableCell
{
    protected $nodeType = 'tableHeader';
    protected $tagName  = 'th';
}
