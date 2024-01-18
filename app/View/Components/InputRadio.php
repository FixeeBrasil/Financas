<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputRadio extends Component
{
    public $id;
    public $value;
    public $name;
    public $text;

    public function __construct($id, $value, $name, $text)
    {
        $this->id = $id;
        $this->value = $value;
        $this->name = $name;
        $this->text = $text;
    }

    public function render(): View|Closure|string
    {
        return view('components.input-radio');
    }
}
