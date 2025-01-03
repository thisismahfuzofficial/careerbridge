@push('styles')
    <style>
        #text {
            display: inline;
        }

        #see-more {
            color: blue;
            cursor: pointer;
            text-decoration: underline;
        }
    </style>
@endpush
@foreach ($posts as $post)
    <div class="mt-3 border-bottom pb-3">
        <div class="heading d-flex align-items-center gap-2">
            <div class="col-3 col-md-2 p-2">
                <a href="{{ route('page.author', $post->user->username) }}">
                    <img src="{{ $post->user->avatar ? Storage::url($post->user->avatar) : asset('admin/images/users/no-profile.png') }}"
                        alt="" class="rounded-circle img-fluid"
                        style="width: 70px;height: 70px;padding: 2px;-webkit-backdrop-filter: blur(4px);backdrop-filter: blur(4px);border: 1px solid rgba(var(--theme-color), 1);border-radius: 100%;-o-object-fit: cover;object-fit: cover;">
                </a>

            </div>
            <div class="d-flex align-items-center w-100">
                <div class="post-title">
                    <div class="">
                        <a href="{{ route('page.author', $post->user->username) }}"
                            class="fw-5 text-dark">{{ $post->user->name }}
                        </a>
                        @if ($post->user->is_varified)
                            <img src="{{ asset('assets/images/svg/blue-check.svg') }}" alt="checked" class="ms-2">
                        @else
                            <img src="{{ asset('assets/images/svg/gray-check.svg') }}" alt="checked" class="ms-2">
                        @endif
                    </div>
                    <div class="fw-6 text-secondary">{{ $post->user->title }}</div>
                </div>
                <div class="p-3 ms-auto">
                    <img class="active" src="{{ asset('assets/images/svg/save.svg') }}" alt="save">
                    {{-- <img class="active" src="{{ asset('assets/images/svg/save-fill.svg') }}" alt="save"> --}}
                    <a class="p-1 " style="cursor: pointer"><img class="active"
                            src="{{ asset('assets/images/svg/three-dot.svg') }}" alt="save"></a>

                </div>
            </div>


        </div>
        @if ($post->image)
            <div class="img">
                <img src="{{ $post->image ? Storage::url($post->image) : asset('assets/images/background/blank.png') }}"
                    alt="" class="img-fluid rounded">
            </div>
        @endif


        <div class="content px-2">
            <p class="fw-bold fs-6 mt-1">{{ $post->title }}</p>
            <div style="display: flex; flex-wrap: wrap; gap: 1px;">
                @foreach ($post->skills as $skill)
                    <form action="{{ route('page.filter') }}" method="GET" id="filterForm-{{ $skill->id }}"
                        style="display: inline;">
                        <input type="hidden" name="filter" value="{{ $skill->name }}">
                    </form>
                    <a style="word-break: break-word; white-space: nowrap; margin-right: 5px; font-size: 14px; color: #01aa85; cursor: pointer;"
                        onclick="document.getElementById('filterForm-{{ $skill->id }}').submit()">
                        {{ $skill->name }} <span class="text-dark">|</span>
                    </a>
                @endforeach
            </div>
            <p class="text-secondary mt-1">
                {{ $post->description }}
            </p>
            <br>
            @if ($post->link)
                <div class="d-flex gap-1">
                    <div class="fst-italic">Drive :</div>
                    <a href="{{ $post->link }}" class="text-primary fst-italic text-decoration-underline"
                        target="_blank">{{ $post->link }}</a>
                </div>
            @endif

        </div>


    </div>
@endforeach

@push('scripts')
@endpush
