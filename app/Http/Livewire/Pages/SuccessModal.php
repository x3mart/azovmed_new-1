<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class SuccessModal extends Component
{
    public $show_modal=false;

    protected $listeners = ['success'];

    public function success()
    {
        $this->show_modal = true;
    }

    public function render()
    {
        return view('livewire.pages.success-modal');
    }
}
