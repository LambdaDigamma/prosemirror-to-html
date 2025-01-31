<?php

namespace ProseMirrorToHtml\Test\Nodes;

use ProseMirrorToHtml\Renderer;
use ProseMirrorToHtml\Test\TestCase;

class OrderedListTest extends TestCase
{
    /** @test */
    public function ordered_list_node_gets_rendered_correctly()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'orderedList',
                    'content' => [
                        [
                            'type' => 'listItem',
                            'content' => [
                                [
                                    'type' => 'text',
                                    'text' => 'first list item',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ];

        $html = '<ol><li>first list item</li></ol>';

        $this->assertEquals($html, (new Renderer)->render($json));
    }

    /** @test */
    public function ordered_list_has_offset()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'orderedList',
                    'attrs' => [
                        'order' => 3,
                    ],
                    'content' => [
                        [
                            'type' => 'listItem',
                            'content' => [
                                [
                                    'type' => 'text',
                                    'text' => 'first list item',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ];

        $html = '<ol start="3"><li>first list item</li></ol>';

        $this->assertEquals($html, (new Renderer)->render($json));
    }
}
