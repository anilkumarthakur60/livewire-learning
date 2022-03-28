<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactLivewire extends Component
{
    public $contacts;

    public function mount()
    {
        $this->contacts = Contact::all();
    }



    public function removeContacts(Contact $contact)
    {
        $contact->delete();
        $this->contacts = Contact::all();
    }


    public function render()
    {
        return view('livewire.contact-livewire');
    }
}
