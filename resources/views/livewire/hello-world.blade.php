<div class="container mt-5">


    <input type="text" wire:model.lazy="name" class="form-control">
    <h6>
        hello world from <span class="text-danger"> {{ $name }}</span>

    </h6>

    <hr>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" wire:model="loud" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Check Me
        </label>
    </div>



    @if ($loud)
    <h6 class="text-success">Check Me checked</h6>
    @endif

    <hr>


    <select wire:model="greeting" id="" class="form-control">
        <option value="Hello0">Hello</option>
        <option value="Hello1">Hello1</option>
        <option value="Hello2">Hello2</option>
        <option value="Hello3">Hello3</option>
    </select>

    <h6>Selected Value <span class="text-danger"> {{ $greeting }}</span> </h6>
    <hr>
    <select wire:model="greetings" multiple class="form-control" id="">
        <option value="">Hello</option>
        <option value="">Hello1</option>
        <option value="">Hello2</option>
        <option value="">Hello3</option>
    </select>


    @foreach ($greetings as $greets)
    <span class="badge bg-success">{{ $greets }}</span>
    @endforeach

    <hr>

    hello <span class="text-success">{{ $name }}</span> @if($loud) ! @endif from <span
        class="text-danger">{{ $greeting }}</span> for
    @foreach ($greetings as $greets)
    <span class="badge bg-success">{{ $greets }}</span>
    @endforeach
    <hr>
    <button wire:click="resetName($event.target.innerText)" class=" btn btn-sm btn-success text-white fw-bold">Reset
        Name</button>
    <button wire:click="resetName('newNameAnilKumarThakur')" class=" btn btn-sm btn-success text-white fw-bold">Reset
        Name</button>
</div>