<?php

namespace App\Http\Livewire\Pages;

use App\Models\Page\Privilege as PagePrivilege;
use Livewire\Component;

class Privilege extends Component
{
    public $privilege;

    public function mount()
    {
        $this->privilege = $this->get_privilege();
    }

    protected $rules = [
        'privilege.wb_indexText17' => 'string',
        'privilege.wb_indexText18' => 'string',
        'privilege.wb_indexText19' => 'string',
        'privilege.wb_indexText20' => 'string',
        'privilege.wb_indexText21' => 'string',
        'privilege.wb_indexText22' => 'string',
    ];

    protected function get_privilege()
    {
        $privilege = PagePrivilege::first();
        if ($privilege){
            return $privilege;
        }
        return PagePrivilege::create();
    }

    public function save()
    {
        $this->privilege->save();
        $this->emit('success');
    }

    public function render()
    {
        return view('livewire.pages.privilege', ['privilege' => $this->privilege]);
    }
}
