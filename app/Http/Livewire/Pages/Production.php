<?php

namespace App\Http\Livewire\Pages;

use App\Models\Page\Production as PageProduction;
use Livewire\Component;

class Production extends Component
{
    public $production;

    public function mount()
    {
        $this->production = $this->get_production();
    }

    protected $rules = [
        'production.wb_indexText31' => 'string',
        'production.wb_indexText15' => 'string',
    ];

    protected function get_production()
    {
        $production = PageProduction::first();
        if ($production){
            return $production;
        }
        return PageProduction::create();
    }

    public function save()
    {
        $this->production->save();
        $this->emit('success');
    }

    public function render()
    {
        return view('livewire.pages.production', ['production' => $this->production]);
    }
}
