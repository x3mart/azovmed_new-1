<?php

namespace App\Http\Livewire\Pages;

use App\Models\Page\Overview as PageOverview;
use Livewire\Component;

class Overview extends Component
{
    public $overview;

    public function mount()
    {
        $this->overview = $this->get_overview();
    }

    protected $rules = [
        'overview.wb_indexText7' => 'string',
        'overview.wb_indexText2' => 'string',
        'overview.wb_indexText10' => 'string',
        'overview.wb_indexText9' => 'string',
        'overview.wb_indexText6_digit' => 'string',
        'overview.wb_indexText6_text' => 'string',
        'overview.wb_indexText11' => 'string',
        'overview.wb_indexText55' => 'string',
        'overview.wb_indexText56' => 'string',
        'overview.wb_indexText57' => 'string',
        'overview.wb_indexText12' => 'string',
        'overview.wb_indexText13' => 'string',
        'overview.wb_indexText59' => 'string',
    ];

    protected function get_overview()
    {
        $overview = PageOverview::first();
        if ($overview){
            return $overview;
        }
        return PageOverview::create();
    }

    public function save()
    {
        $this->overview->save();
        $this->emit('success');
    }

    public function render()
    {
        return view('livewire.pages.overview', ['overview' => $this->overview]);
    }
}
