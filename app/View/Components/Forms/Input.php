<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Input extends Component
{
    public $id;
    public $type;
    public $name;
    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type='text', $id='', $name='', $value='')
    {
        if (!$id) $id = time();
        if (!$name) $name = $id;
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.input');
    }
}
