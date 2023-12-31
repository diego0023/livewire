<div>
    <div class="my-4 flex">
        <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2" placeholder="What's in your mind."
         wire:model="newCommnet">
        <div class="py-2">
            <button  class="p-2 bg-blue-500 w-20 rounded shadow text-white" wire:click="addComment">Add</button>
        </div>
    </div>
    @forelse ($comments as $comment)
    <div class="rounded border shadow p-3 my-2">
        <div class="flex justify-between my-2">
            <div class="flex">
                <p class="font-bold text-lg">{{ $comment['creator'] }}</p>
                <p class="mx-3 py-1 text-xs text-gray-500 font-semibold">
                    {{ $comment['created_at']}}
                </p>
            </div>
        </div>
        <p class="text-gray-800">{{  $comment['body'] }}</p>
    </div>
    @empty
        <h1>no hay datos</h1>
    @endforelse
</div>


