<x-app>
    @push('styles')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @endpush
    <x-app.header title="Profile" />
    <section class="section-b-space">
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="custom-container">
            @csrf
            <div class="profile-pic-section">
                <div class="profile-pic upload-image m-3">
                    <input id="file" type="file" name="avatar" onchange="previewImage(event)">
                    <img src="{{ auth()->user()->avatar ? Storage::url(auth()->user()->avatar) : asset('assets/images/profile/profile-pic.png') }}"
                        id="output" class="output-img  rounded-circle" alt="Profile Picture"
                        style="width: 150px; height: 150px; object-fit: cover;">
                </div>
            </div>

            <div class="auth-form profile-form">
                <div class="form-group">
                    <label class="form-label mb-2" for="Inputname">Name</label>
                    <input type="text" class="form-control" id="Inputname" name="name"
                        value="{{ auth()->user()->name }}">
                </div>
                <div class="form-group">
                    <label class="form-label mb-2" for="Inputname">Protfolio Link</label>
                    <input type="text" class="form-control" id="Inputname"
                        placeholder="Enter your Protfolio url here" name="url" value="{{ auth()->user()->url }}">
                </div>

                <div class="form-group">
                    <label class="form-label mb-2" for="Inputemail">Email</label>
                    <input type="email" class="form-control" id="Inputemail"  value="{{ auth()->user()->email }}"
                        disabled>
                </div>
                <div class="form-group">
                    <label for="" class=" form-label    mb-2">Skills :</label>
                    <select class="js-example-basic-multiple form-control " name="skills[]" multiple="multiple">
                        @foreach ($skills as $skill)
                            <option value="{{ $skill->slug }}" class="form-control">{{ $skill->name }}.</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label mb-2" for="Inputstatus">Add work place</label>
                    <input type="text" class="form-control" id="Inputstatus"
                        placeholder="Enter your workplace title here" value="{{ auth()->user()->place_title }}"
                        name="place_title">
                </div>
                <div class="form-group">
                    <label class="form-label mb-2" for="Inputstatus">Your position at work place</label>
                    <input type="text" class="form-control" id="Inputstatus" placeholder="Enter your position here"
                        value="{{ auth()->user()->title }}" name="title">
                </div>
                <div class="form-group">
                    <label class="form-label mb-2" for="Inputstatus">Add work place url</label>
                    <input type="text" class="form-control" id="Inputstatus"
                        placeholder="Enter your workplace url here" name="place_link"
                        value="{{ auth()->user()->place_link }}">
                </div>
                <div class="form-group">
                    <label class="form-label mb-2" for="Inputstatus">Add description</label>
                    <textarea name="" id="" cols="20" rows="4" class="form-control" name="description"
                        placeholder="Enter your description here">{{ auth()->user()->description }}</textarea>
                </div>







                <button type="submit" class="btn theme-btn w-100 mt-sm-5 mt-4">Update</button>

            </div>
        </form>
    </section>
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