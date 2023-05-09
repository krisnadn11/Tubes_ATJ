<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <b>
        <h1>News List</h1>
    </b>
    <hr>
    @foreach ($allNews as $index => $news)
        {{ $index +1 }}. {{ $news -> title}} <i wire:click="$emitUp('editNews', {{ $news->id }})" class="fa fa-edit fa-xs" style="cursor:pointer; color:green"></i>
        <i wire:click="$emitUp('deleteNews', {{ $news->id }})" class="fa fa-trash fa-xs" style="cursor:pointer; color:red"></i>
        <br>
    @endforeach
</div>
