<?php

namespace StylesFactory\UltimateCustomNodes\Controllers;

class Category extends XFCP_Category
{
    protected function nodeSaveProcess(\XF\Entity\Node $node)
    {
        $form = parent::nodeSaveProcess($node);

        $input = $this->filter([
            'node' => [
                'font_icon' => 'str',
                'svg_bg' => 'str'
            ]
        ]);

        $url = $input['node']['font_icon'];
        $svgbg = $input['node']['svg_bg'];

        $form->setup(function() use ($node, $url, $svgbg)
        {
            $node->font_icon = $url;
            $node->svg_bg = $svgbg;
        });

        \StylesFactory\UltimateCustomNodes\Handler::nodeSaveProcess($this, $node, $form);

        return $form;
    }
	
    protected function nodeAddEdit(\XF\Entity\Node $node)
    {
        $reply = parent::nodeAddEdit($node);

        \StylesFactory\UltimateCustomNodes\Handler::nodeAddEdit($node, $reply, true);

        return $reply;
    }
}