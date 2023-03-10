<div class="col-xl-12 mt-3">
    <div class="card">
        <div class="card-body">

            <h4 class="header-title">List Of Author</h4>
            @include('admin.components.alerts')
            <div class="mt-3 mb-3">
                <a href="{{route('author-create')}}" class="btn btn-primary">Create Author</a>
            </div>

            <div class="tab-content">
                <div class="tab-pane show active" id="bordered-color-table-preview">
                    <div class="table-responsive-sm">
                        <table class="table table-bordered border-primary table-centered mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Author Name</th>
                                    <th>Birth Day</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($authors as $author)
                                <tr>
                                    <td>{{$author->id}}</td>
                                    <td>{{$author->author_name}}</td>
                                    <th>{{$author->birth_day}}</th>
                                    <td class="table-action text-center">
                                        <a href="{{ route('author-edit', ['id'=>$author->id]) }}"
                                            class="action-icon"> <i class="uil-edit"></i></a>

                                        <a wire:click="deleteAuthor({{ $author->id }})" class="action-icon"
                                            style="cursor: pointer"><i class="mdi mdi-delete" data-bs-toggle="modal"
                                                data-bs-target=".deleteModal" data-bs-backdrop="static"></i>
                                        </a>
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
                    <form wire:submit.prevent="destroyAuthor">
                        <div class="mt-2 text-center">

                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this author ?</p>
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
