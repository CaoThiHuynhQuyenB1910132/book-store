<div class="card mt-3">
    <div class="card-body">
        <form wire:submit.prevent='storeCategory'>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Create Category</label>
                        <input wire:model="categoryName" wire:keyup='generateSlug' type="text" class="form-control" placeholder="Enter Name">

                            @error('categoryName')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Category Slug</label>
                        <input wire:model="categorySlug"  type="text" class="form-control" placeholder="Category Slug">
                        @error('categorySlug')
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
