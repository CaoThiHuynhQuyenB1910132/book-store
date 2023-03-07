<div class="col-xl-12 mt-3">
    <div class="card">
        <div class="card-body">

            <h4 class="header-title">List Of Book</h4>
            @include('admin.components.alerts')
            <div class="mt-3 mb-3">
                <a href="{{route('book-create')}}" class="btn btn-primary">Create Book</a>
            </div>

            <div class="tab-content">
                <div class="tab-pane show active" id="bordered-color-table-preview">
                    <div class="table-responsive-sm">
                        <table class="table table-bordered border-primary table-centered mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Book Name</th>
                                    <th>Book Img</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                <tr>
                                    <td>{{$book->id}}</td>
                                    <td>{{$book->book_name}}</td>
                                    <td><img src="{{$book->img}}" alt="image" class="img-fluid avatar-sm"></td>

                                    <td class="table-action text-center">
                                        <a href="{{ route('book-edit', ['id'=>$book->id]) }}"
                                            class="action-icon"> <i class="uil-edit"></i></a>

                                        <a wire:click="deleteBook({{ $book->id }})" class="action-icon"
                                            style="cursor: pointer"><i class="mdi mdi-delete" data-bs-toggle="modal"
                                                data-bs-target=".deleteModal" data-bs-backdrop="static"></i></a>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->
                </div> <!-- end preview-->

            </div> <!-- end tab-content-->

        </div> <!-- end card body-->
    </div> <!-- end card -->

    <!-- Delete Modal -->
    <div wire:ignore.self class="modal fade zoomIn deleteModal" id="deleteModal" tabindex="-1"
        aria-labelledby="deleteModalExtra" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="deleteModalExtra"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="destroyCategory">
                        <div class="mt-2 text-center">

                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this category ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete
                                It!</button>
                        </div>
                    </form>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div><!-- end col-->

@section('scripts')
<script>
    window.addEventListener('hidden-modal', event =>{
            $('#deleteModal').modal('hide');
        });
</script>
@endsection
