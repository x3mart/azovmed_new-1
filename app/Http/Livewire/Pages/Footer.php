<?php

namespace App\Http\Livewire\Pages;

use App\Models\Page\Footer as PageFooter;
use Livewire\Component;

class Footer extends Component
{
    public $footer;

    public function mount()
    {
        $this->footer = $this->get_footer();
    }

    protected $rules = [
        'footer.wb_indexText35' => 'string',
        'footer.wb_indexText36' => 'string',
    ];

    protected function get_footer()
    {
        $footer = PageFooter::first();
        if ($footer){
            return $footer;
        }
        return PageFooter::create();
    }

    public function save()
    {
        $this->footer->save();
        $this->emit('success');
    }

    public function render()
    {
        return view('livewire.pages.footer', ['footer' => $this->footer]);
    }
}
