<div class="card mt-3">
    <div class="card-body">
        <form wire:submit.prevent='storeBook'>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Book Name</label>
                        <input wire:model="bookName" wire:keyup='generateSlug' type="text" class="form-control" placeholder="Enter Name">

                            @error('bookName')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Description</label>
                        <textarea rows="5" wire:model="bookDesc" type="text" class="form-control" placeholder="Description"></textarea>

                            @error('bookDesc')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Selling Price</label>
                        <input wire:model="sellingPrice" x-mask:dynamic="$money($input, ',')" x-data type="text" class="form-control" placeholder="Selling Price">
                        @error('sellingPrice')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Original Price</label>
                        <input wire:model="originalPrice" x-mask:dynamic="$money($input, ',')" x-data type="text" class="form-control" placeholder="Original Price">

                            @error('originalPrice')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Published At</label>
                        <input wire:model="publishedAt" id="published" class="form-control" placeholder="Published At">

                            @error('publishedAt')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3 form-label">
                        <label for="choices-publish-status-input"
                            class="form-label">Stock</label>
                        <select
                            class="form-select"
                            wire:model="stock">
                            <option>Choose a stock</option>
                            <option value="in-stock">In Stock</option>
                            <option value="out-stock">Out Stock</option>
                        </select>

                        @error('stock') <span class="text-danger">{{
                            $message
                            }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3 form-label">
                        <div wire:ignore x-data x-init="
                        FilePond.registerPlugin(FilePondPluginImagePreview);
                        FilePond.registerPlugin(FilePondPluginFileValidateType);
                        FilePond.registerPlugin(FilePondPluginFileValidateSize);
                        FilePond.create($refs.input);
                        FilePond.setOptions({
                            acceptedFileTypes: ['image/*'],
                            server: {
                                process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                                    @this.upload('img', file, load, error, progress)

                                },
                                revert: (filename, load) => {
                                    @this.removeUpload('img', filename, load)
                                },
                            },
                        });
                        ">
                            <label>Upload An Image</label>
                            <input type="file" data-max-file-size="3MB" x-ref="input"
                                wire:model="img">
                        </div>
                        @error('img') <span class="text-danger">{{ $message
                            }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Book Slug</label>
                        <input wire:model="bookSlug" type="text" class="form-control" placeholder="Book Slug">

                            @error('bookSlug')
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
flatpickr("#published", {});
</script>
@endsection
