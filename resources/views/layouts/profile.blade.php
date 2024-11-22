<x-app>
    @push('styles')
        <style>
            .create:hover {
                background: #018f6c !important;
                transition: background 0.3s ease;
            }
        </style>
    @endpush

    <x-app.header title="Profile" />
    <section>
        <div class="card  border border-0 shadow">
            <div class="heading d-flex ">
                <div class="col-4 p-3 ">
                    <img src="{{ auth()->user()->avatar ? Storage::url(auth()->user()->avatar) : asset('admin/images/users/no-profile.png') }}"
                        alt="" class="rounded-circle img-fluid shadow">

                    <a href="{{ route('profile.edit', auth()->user()->username) }}"
                        class="d-flex justify-content-center align-items-center gap-1 mt-3">
                        <img src="{{ asset('assets/images/svg/edit.svg') }}" alt="Go">
                        <div class="">Edit Profile</div>
                    </a>

                </div>
                <div class="col-8 p-3">
                    <div class="d-flex">
                        <a href="{{ auth()->user()->url }}" class="fs-5 text-success"
                            target="_blank">{{ auth()->user()->name }}</a>
                        @if (auth()->user()->is_varified)
                            <img src="{{ asset('assets/images/svg/blue-check.svg') }}" alt="checked" class="ms-2">
                        @else
                            <img src="{{ asset('assets/images/svg/gray-check.svg') }}" alt="checked" class="ms-2">
                        @endif
                        <div class="ms-auto me-3">
                            <a href="#"><img src="{{ asset('assets/images/svg/got-to.svg ') }}"
                                    alt="Go"></a>
                        </div>
                    </div>
                    <p class="text-secondary border-bottom mb-2">{{ auth()->user()->title }} @ <a
                            href="{{ auth()->user()->place_link }}"
                            target="_blank">{{ auth()->user()->place_title }}</a>
                    </p>
                    <p class="text-secondary border-bottom mb-2">
                        {{ \Illuminate\Support\Str::words(auth()->user()->description, 30, '...') }}
                    </p>

                    <div style="display: flex; flex-wrap: wrap; gap: 1px;">
                        @foreach (auth()->user()->skills as $skill)
                            <a href="#"
                                style="word-break: break-word; white-space: nowrap; margin-right: 5px;font-size:14px;color:#01aa85">
                                {{ $skill->name }} <span class="text-dark">|</span>
                            </a>
                        @endforeach
                    </div>


                    <div class="text-center">

                        <a href="{{ route('post.create') }}"
                            class="btn create waves-effect btn-sm w-100 d-flex justify-content-center align-items-center gap-1 mt-3"
                            style="background: #01aa85">
                            <img src="{{ asset('assets/images/svg/create.svg') }}" alt="Go">
                            <div class="text-light">Create Post</div>
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <x-app.posts />



    <!-- Modal -->
    
    @push('scripts')
        <script>
            document.getElementById('image-input').addEventListener('change', (e) => {
                const file = e.target.files[0];
                if (file) {
                    const preview = document.getElementById('image-preview');
                    preview.src = URL.createObjectURL(file);
                }
            });
        </script>
    @endpush
</x-app>
