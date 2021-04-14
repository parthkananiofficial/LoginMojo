<?php

namespace App\View\Components\config;

use Illuminate\View\Component;

class main extends Component
{
    public $settings;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($settings)
    {
        $this->settings = $settings;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.config.main');
    }
}
