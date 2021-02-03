<?php

namespace ThemeHouse\UIX\Pub\View\UIX;

use XF\Mvc\View;

/**
 * Class Toggle
 * @package ThemeHouse\UIX\Pub\View\UIX
 */
class Toggle extends View
{
    /**
     * @return array
     */
    public function renderJson()
    {
        return [
            'collapsed' => $this->params['collapsed'],
        ];
    }
}
