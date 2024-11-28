<x-admin>
    <x-slot name="title">Posts</x-slot>
    <div class="">
        <div class="card">
            <div class="card-body">
                <div class="">
                    <h4 class="card-title">Posts Table</h4>
                    <p class="card-title-desc">This table is for Admin Only</p>
                </div>
                <div class="col-md-4">
                    <form action="">
                        <div class="form-group d-flex gap-2">
                            <input type="text" class="form-control rounded-pill"
                                placeholder="Search a post by title">
                            <button type="submit" class="btn btn-success rounded-circle "><i
                                    class="bx bx-search-alt"></i></button>
                        </div>
                    </form>
                </div>
                <div class="table-responsive mt-3">
                    <table class="table mb-0">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Post Image</th>
                                <th>Post Title</th>
                                <Th>Post Status</Th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($posts as $key => $post)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td><img src="{{ Storage::url($post->image) }}" class="img-fluid" alt=""
                                            style="height: 150px"></td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->status }}</td>
                                    <td>
                                        <a href="" class="btn btn-warning"><i class="mdi mdi-eye"></i></a>

                                        <x-admin.action.delete :route="route('admin.posts.delete', $post->id)" :id="$post->id" />

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3">

                        {{ $posts->onEachSide(5)->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-admin>
