<div class="col-sm-4 my-2 py-1">
    <div class="card">
        <div class="card-header">
            {{ $itemId->name }}[{{ $itemId->id }}]
        </div>
        <div class="card-body shadow">
            <input type="text" wire:model.lazy="sayHiModel" id="">
            <br>

            hello <span class="text-danger">{{ $name }}</span> <span class="text-success">{{ $sayHiModel }}</span>
            {{ now() }}

            <button wire:click="$refresh">Refresh</button>
            <button wire:click="emitFoo">Refresh</button>
            <br>

        </div>
    </div>
</div>