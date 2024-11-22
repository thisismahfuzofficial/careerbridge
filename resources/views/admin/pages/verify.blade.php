<x-admin>
    <x-slot name="title">Request to get verified</x-slot>
    <div class="">
        <div class="card">
            <div class="card-body">
                <div class="">
                    <h4 class="card-title">Request Table</h4>
                    <p class="card-title-desc">This table is for Admin Only</p>
                </div>
                <div class="table-responsive mt-3">
                    <table class="table mb-0">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User Name</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($files as $key => $file)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $file->user->name }}</td>
                                <td><a href="{{ Storage::url($file->file) }}" class="btn btn-info" target="_blank">Check File</a></td>
                                <td>
                                    <form action="{{ route('admin.varify.user', $file->user) }}" method="POST" id="verification-form-{{ $key }}">
                                        @csrf
                                        <input type="hidden" name="is_varified" id="is_varified-{{ $key }}" value="1">
                                    </form>
                        
                                    <button
                                        class="btn {{ $file->user->is_varified == 1 ? 'btn-success' : 'btn-light' }}"
                                        onclick="setVerificationValue({{ $key }}, 1)">
                                        <i class="bx bx-check-double"></i>
                                    </button>
                        
                                    <button
                                        class="btn {{ $file->user->is_varified == 1 ? 'btn-light' : 'btn-danger' }}"
                                        onclick="setVerificationValue({{ $key }}, 0)">
                                        <i class="bx bx-block"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
                    <div class="mt-3">

                        {{ $files->onEachSide(5)->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
    @push('scripts')
    <script>
        function setVerificationValue(key, value) {
            document.getElementById(`is_varified-${key}`).value = value;
            document.getElementById(`verification-form-${key}`).submit();
        }
    </script>
    
    @endpush
</x-admin>
