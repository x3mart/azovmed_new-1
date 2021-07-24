<?php

namespace App\Http\Livewire\Pages;

use App\Models\Page\Header as PageHeader;
use Livewire\Component;

class Header extends Component
{
    public $header;

    public function mount()
    {
        $this->header = $this->get_header();
    }

    protected $rules = [
        'header.wb_indexText5_email' => 'required|string|min:9',
        'header.wb_indexText5_main_phone' => 'required|string|min:9',
        'header.wb_indexText5_text' => 'string',
        'header.wb_indexText3' => 'string',
        'header.wb_indexText4' => 'string',
    ];

    protected function get_header()
    {
        $header = PageHeader::first();
        if ($header){
            return $header;
        }
        return PageHeader::create();
    }

    public function save()
    {
        $this->header->save();
        $this->emit('success');
    }

    public function render()
    {
        return view('livewire.pages.header', ['header' => $this->header]);
    }
}
