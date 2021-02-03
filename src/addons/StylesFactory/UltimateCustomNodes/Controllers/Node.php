<?php

namespace StylesFactory\UltimateCustomNodes\Controllers;

class Node extends XFCP_Node
{
    public function mainicon()
    {
        $this->new_icon = array('mb', 'wc');
    }
    public function changericon()
    {
        if ($this->new_icon && isset($this->new_icon['modifier']))
        {
            return true;
        }
        return false;
    }
    public function mainiconsec()
    {
        $this->new_icon = array('mb', 'wc');
    }
    protected function _postSave()
    {
        parent::_postSave();

        \XF::repository('XF:Style')->updateAllStylesLastModifiedDate();
    }
}