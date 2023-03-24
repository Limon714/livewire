<div>
<input type="text" wire:model = "search" placeholder="Search Your Products">
<br><br>
<table border="1" cellpadding='10px'>
<thead>
<tr>
    <th>Name</th>
    <th>Description</th>
    <th>Price</th>
</tr>
</thead>

<tbody>
@foreach($products as $product){
<tr>
<td>{{$product-> name}}</td>
<td>{{$product-> description}}</td>
<td>{{$product-> price}}</td>
</tr>
@endforeach;
}
</tbody>
</table>
</div>

<script>
document.addEventListener('input', function(event){

if(event.target.matches('[wire\\:model]')){
window.livewire.directive('refresh');


});

</script>










</div>
