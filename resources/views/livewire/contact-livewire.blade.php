<div class="container">
    <div class="row">

        @foreach ($contacts as $contactItem)
        <div class="col-sm-2 card my-2 mx-2">
            <div class="card-body shadow">

                <h6>{{ $contactItem->name }}</h6>
                <button wire:click="removeContacts('{{ $contactItem->id }}')">RemoveContact</button>
            </div>
        </div>
        @endforeach


    </div>

    <div class="row">

    </div>


</div>