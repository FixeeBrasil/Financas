<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modal extends Component
{
    public $id;
    public $formId;
    public $inputHidden;

    public function __construct($id, $formId, $inputHidden = null)
    {
        $this->id = $id;
        $this->formId = $formId;
        $this->inputHidden = $inputHidden;
    }

    public function render(): View|Closure|string
    {
        return view('components.modal');
    }
}
