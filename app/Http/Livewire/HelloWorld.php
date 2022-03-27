<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name;

    public $loud = false;

    public $greeting = "Hellos";
    public $greetings = ["Hellos"];


    public function render()
    {
        return view('livewire.hello-world');
    }

    public function resetName()
    {
        $this->name = 'Chico';
    }
}
