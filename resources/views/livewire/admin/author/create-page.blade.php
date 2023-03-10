<div class="card mt-3">
    <div class="card-body">
        <form wire:submit.prevent='storeAuthor'>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Author Name</label>
                        <input wire:model="authorName" type="text" class="form-control"
                            placeholder="Enter Name">

                        @error('authorName')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Birth Day</label>
                        <input wire:model="birthDay" id="birthday" class="form-control" placeholder="Birth Day">

                        @error('birthDay')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror

                    </div>
                </div>

            </div>
            <div class="form-group">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>

@section('scripts')
<script>
    flatpickr("#birthday", {});
</script>
@endsection
