<x-app>
    @push('styles')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        
    @endpush
    <x-app.header title="Create Post" />
    <div class="heading d-flex align-items-center gap-2">
        <div class="col-2 p-3">
            <img src="{{ auth()->user()->avatar ? Storage::url(auth()->user()->avatar) : asset('admin/images/users/no-profile.png') }}"
                alt="" class="rounded-circle img-fluid">
        </div>
        <div class="d-flex align-items-center w-100">
            <div class="post-title">
                <a href="#" class="fw-5 text-dark">{{ auth()->user()->name }} <img
                        src="{{ asset('assets/images/svg/blue-check.svg') }}" alt="checked"></a>
                <div class="fw-6 text-secondary">Laravel Developer</div>
            </div>
            <div class="p-3 ms-auto">
                <img class="active" src="{{ asset('assets/images/svg/save.svg') }}" alt="save">
                <img class="active" src="{{ asset('assets/images/svg/save-fill.svg') }}" alt="save">
            </div>
        </div>
    </div>
    <div class="mt-3">
        <form action="">
            <div class="form-group">
                <img id="image-preview" src="{{ asset('assets/images/background/blank.png') }}" alt="Image Preview"
                    class="img-fluid rounded">
                <input type="file" id="image-input" class="form-control mt-2" required>
            </div>
            <div class="form-floating my-3">
                <input type="text" class="form-control" id="titleinput" placeholder="post title">
                <label for="titleinput">Post title</label>
            </div>


            <div class="form-group my-3">
                <label for="" class=" form-label mb-2">Skills :</label>
                <select class="js-example-basic-multiple form-control " name="skills[]" multiple="multiple">
                    @foreach ($skills as $skill)
                        <option value="{{ $skill->id }}">
                            {{ $skill->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-floating">
                <textarea class="form-control" placeholder="Descriptions here" id="descriptioninput" style="height: 120px"></textarea>
                <label for="descriptioninput">Post Description</label>
            </div>
        </form>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
            });
        </script>
        <script>
            function previewImage(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const output = document.getElementById('output');
                        output.src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            }
        </script>
    @endpush
</x-app>
