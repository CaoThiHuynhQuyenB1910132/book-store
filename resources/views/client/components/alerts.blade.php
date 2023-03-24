@if(session()->has('success'))
<!-- Success Alert -->
<div class="text-success" role="alert">
    <strong>{{ session('success') }}</strong>
</div>
@endif

@if(session()->has('warning'))
<!-- Success Alert -->
<div class="text-warning" role="alert">
    <strong>{{ session('warning') }}</strong>
</div>
@endif

@if(session()->has('danger'))
<!-- Success Alert -->
<div class="text-danger" role="alert">
    <strong>{{ session('danger') }}</strong>
</div>
@endif
