<?php

namespace App\View\Components\Widgets;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Exam extends Component
{
    public $title;
    public $count;
    public $time;
    public $route;
    public $color;
    public $status;
    /**
     * Create a new component instance.
     */
    public function __construct($title,$count,$time,$route,$status,$color=null)
    {
        $this->count=$count;
        $this->title=$title;
        $this->time=$time;
        $this->route=$route;
        $this->status=$status;
        $this->color=$color;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.widgets.exam');
    }
}
