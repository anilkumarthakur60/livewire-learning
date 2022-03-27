<div class="container">


    <input type="text" wire:model.lazy="name" class="form-control">
    hello world from {{ $name }}
    <br>
    <hr>

    <input type="checkbox" wire:model="loud" id="">

    @if ($loud)
    <h6>hello world</h6>
    @endif

    <hr>


    <select wire:model="greeting" id="">
        <option value="Hello0">Hello</option>
        <option value="Hello1">Hello1</option>
        <option value="Hello2">Hello2</option>
        <option value="Hello3">Hello3</option>
    </select>

    {{ $greeting }}
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








</div>

<div class="container">
    hello {{ $name }} @if($loud) ! @endif from {{ $greeting }} for
    @foreach ($greetings as $greets)
    <span class="badge bg-success">{{ $greets }}</span>
    @endforeach
</div>