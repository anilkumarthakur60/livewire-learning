<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class SayHi extends Component
{

    public $name;

    public $sayHiModel;
    public $itemId;



    protected $listeners = [
        "refreshChildren" => '$refresh',
        'foo' => '$refresh'
    ];
    // protected $listeners = [
    //     "refreshChildren" => 'refreshMe'
    // ];


    public function emitFoo()
    {
        // $this->emit('foo');
        $this->emitUp('foo');
    }


    public function refreshChildren()
    {
    }


    // public function refreshMe($someValue)
    // {
    //     dd($someValue);
    // }


    public function removeContacts(Contact $contact)
    {
        $contact->delete();
    }
    public function mount()
    {
    }

    public function render()
    {
        return view('livewire.say-hi');
    }
}
