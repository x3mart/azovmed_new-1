<?php

namespace App\Http\Livewire\Pages;

use App\Models\Page\HowWork as PageHowWork;
use Livewire\Component;

class HowWork extends Component
{
    public $howwork;

    public function mount()
    {
        $this->howwork = $this->get_howwork();
    }

    protected $rules = [
        'howwork.wb_indexText39' => 'string',
        'howwork.wb_indexText41' => 'string',
        'howwork.wb_indexText40' => 'string',
        'howwork.wb_indexText42' => 'string',
    ];

    protected function get_howwork()
    {
        $howwork = PageHowWork::first();
        if ($howwork){
            return $howwork;
        }
        return PageHowWork::create();
    }

    public function save()
    {
        $this->howwork->save();
        $this->emit('success');
    }

    public function render()
    {
        return view('livewire.pages.how-work', ['howwork' => $this->howwork]);
    }
}
