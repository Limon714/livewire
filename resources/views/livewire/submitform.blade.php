<div>
<form wire:submit.prevent="submit">
<input type="text" wire:model="mess">
<button type="submit">Submit</button>
</form>

@if($mess)
<p>{{$mess}}</p>
@endif
</div>
