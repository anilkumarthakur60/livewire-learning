<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Illuminate\Http\Request;
use Livewire\Component;

class HelloWorld extends Component
{
    public $name = "aman";

    public $newName = "jelly";
    public $loud = false;

    public $greeting = "Hellos";
    public $greetings = ["Hellos", "Hellos", "Hellos", "Hellos", "Hellos", "Hellos"];

    public $contacts;





    protected $listeners = ['foo' => '$refresh'];

    //acts as contructor or boot at first
    public function mount($newName)
    {
        // this $name should be passed from livewirecomponent with some parameter
        // $this->name = $request->input('name', $name);
        $this->newName =  $newName;
        $this->contacts = Contact::all();
    }

    public function hydrate()
    {
        $this->newName = "hydrated@";
    }



    public function updatedNewName($name)
    {
        // dd($name);
        $this->newName = strtoupper($name);
    }

    public function render()
    {
        return view('livewire.hello-world');
    }


    // this code in blade file shorthand
    public function refreshChildren()
    {
        $this->emit('refreshChildren', 'foo');
    }

    public function resetName($names)
    {

        $this->name = $names;
    }


    public function removeContacts(Contact $contact)
    {
        $contact->delete();
        $this->contacts = Contact::all();
    }
}