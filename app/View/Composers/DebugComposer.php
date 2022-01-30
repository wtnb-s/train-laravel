<?php

namespace App\View\Composers;

use Illuminate\View\View;

class DebugComposer
{
    /**
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        \Debugbar::info($view->getData());
    }
}
