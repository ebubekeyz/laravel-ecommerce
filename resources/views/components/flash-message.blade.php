@if(Session()->has('message'))

<div x-data="show: true" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="fixed m-auto bg-danger text-center py-3 text-white" style="top:0">


<p>
{{session('message')}}


</p>



</div>








@endif