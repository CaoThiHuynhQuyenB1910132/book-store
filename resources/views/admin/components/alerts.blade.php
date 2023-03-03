@if(session()->has('success'))
<!-- Success Alert -->
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session('success') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session()->has('warning'))
<!-- Success Alert -->
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>{{ session('warning') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session()->has('danger'))
<!-- Success Alert -->
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ session('danger') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
