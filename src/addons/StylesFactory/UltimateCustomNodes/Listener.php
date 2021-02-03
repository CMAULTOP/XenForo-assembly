<?php

namespace StylesFactory\UltimateCustomNodes;

use XF\Mvc\Entity\Entity;

class Listener
{
    public static function nodeEntityStructure(\XF\Mvc\Entity\Manager $em, \XF\Mvc\Entity\Structure &$structure)
    {
        $structure->columns['new_icon']   = ['type' => Entity::SERIALIZED_ARRAY,  'default' => ''];
        $structure->columns['font_icon']   = ['type' => Entity::STR,  'default' => ''];
        $structure->columns['svg_bg']   = ['type' => Entity::STR,  'default' => ''];
    }
}