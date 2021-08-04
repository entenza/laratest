<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $mensaje;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($mensaje=' Default Alert Message ')
    {
        $this->mensaje = $mensaje;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
