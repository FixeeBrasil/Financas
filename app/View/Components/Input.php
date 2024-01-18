<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public $col;
    public $set;
    public $id;
    public $type;
    public $name;
    public $placeholder;

    public function __construct($id, $type, $name, $placeholder = null, $col = null, $set = null)
    {
        $this->col = $col;
        $this->set = $set;
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
        $this->placeholder = $placeholder;
    }

    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
