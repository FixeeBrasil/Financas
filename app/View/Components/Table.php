<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    public $titleTable;
    public $createBtn;
    public $idTable;

    public function __construct($titleTable, $createBtn, $idTable)
    {
        $this->titleTable = $titleTable;
        $this->createBtn = $createBtn;
        $this->idTable = $idTable;
    }
    public function render(): View|Closure|string
    {
        return view('components.table');
    }
}
