<div>
   <span>{{ $count }}</span>
   <button wire:click='increment'>+</button>
   <button wire:click="decrement">-</button>

   <input type="text" wire:model='username'>
   <br>
   <h3>{{ $username }}</h3>
</div>
