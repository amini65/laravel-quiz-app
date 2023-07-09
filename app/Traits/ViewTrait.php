<?php

namespace App\Traits;

trait ViewTrait
{

    public function getShowStatusAttribute()
    {
        if($this->status == 1){
            return '<span class="badge py-3 px-4 fs-7 badge-light-success">'.__('active').'</span>';
        }
        return  '<span class="badge py-3 px-4 fs-7 badge-light-danger">'.__('inactive').'</span>';
    }
}
