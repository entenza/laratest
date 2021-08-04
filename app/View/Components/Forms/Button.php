<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Button extends Component
{
    public $id;
    public $type;
    public $name;
    public $value;

    public $color;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type='button', $id='', $name='', $value='')
    {
        if (!$id) $id = time();
        if (!$name) $name = $id;
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
        
        $this->color = 'Verde';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // $data['componentName'];
        // $data['attributes'];
        // $data['slot'];        
        
        return view('components.forms.button');

        // return function (array $data){
        //     echo 'slot name -> '.$data['slot'];
        // };

    }
}
