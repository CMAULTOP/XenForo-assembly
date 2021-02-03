<?php

namespace StylesFactory\UltimateCustomNodes;

class Handler
{
    public static function nodeAddEdit(\XF\Entity\Node $node, &$reply)
    {
        if ($reply instanceof \XF\Mvc\Reply\View)
        {
			if (!$node->new_icon)
            {
                $node->mainicon();
            }
            if ($node->changericon())
            {
                $node->mainiconsec();
            }
        }
    }

    public static function nodeSaveProcess(\XF\Admin\Controller\AbstractController $controller, \XF\Entity\Node $node, \XF\Mvc\FormAction &$form)
    {
        $bconfig   = $controller->filter([
            'mb'  => array('filtersetting'=>'str'),
			'wc'  => array('filtersetting'=>'str')
        ]);
		
        $form->setup(function() use ($node, $bconfig)
        {
            $node->new_icon   = $bconfig;
        });
    }
}