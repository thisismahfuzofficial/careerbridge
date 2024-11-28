<x-admin>
    <x-slot name="title">skills</x-slot>
    <div class="">
        <div class="card">
            <div class="card-body">
                <div class="">
                    <h4 class="card-title">Skills Table</h4>
                    <p class="card-title-desc">This table is for Admin Only</p>
                </div>
                <div class="">
                    <button type="button" data-bs-toggle="modal" class="btn btn-primary waves-effect waves-light"
                        data-bs-target=".add-new-slills">Add
                        new</button>
                    <div>
                        <div class="modal  fade add-new-slills" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title">Add New Skills</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('admin.skills.store') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingnameInput"
                                                        placeholder="Enter Name" name="name">
                                                    <label for="floatingnameInput">Name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit"
                                                class="btn btn-success waves-effect waves-light">Submit</button>
                                        </div>
                                    </form>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->

                    </div>
                </div>
                <div class="table-responsive mt-3">
                    <table class="table mb-0">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($skills as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <x-admin.action.delete :route="route('admin.skills.delete', $item->id)" :id="$item->id" />
                                        <button type="button" data-bs-toggle="modal" class="btn btn-warning"
                                            data-bs-target=".edit-new-slills{{ $item->id }}"><i
                                                class="bx bx-pencil"></i></button>
                                        <div>
                                            <div class="modal  fade edit-new-slills{{ $item->id }}" tabindex="-1"
                                                role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Skills</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form action="{{ route('admin.skills.update', $item) }}"
                                                            method="POST">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="form">
                                                                    <div class="form-floating mb-3">
                                                                        <input type="text" class="form-control"
                                                                            id="floatingnameInput"
                                                                            placeholder="Enter Name" name="name"
                                                                            value="{{ $item->name }}">
                                                                        <label for="floatingnameInput">Name</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit"
                                                                    class="btn btn-success waves-effect waves-light">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3">

                        {{ $skills->onEachSide(5)->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-admin>
