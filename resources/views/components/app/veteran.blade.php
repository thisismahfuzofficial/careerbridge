<style>
    .swiper-slide {
        margin-right: 0 !important;
    }
</style>
<section class="story-section pt-0">
    <div class="left-container">
        <h6 class="content-color fw-medium">Popular Veterents</h6>

        <div class="swiper story-box">
            <div class="swiper-wrapper">
                @foreach ($veterans as $veteran)
                    <div class="swiper-slide">
                        <a href="{{ route('page.author', $veteran->username) }}"
                            class="btn profile-story-box read p-0 border-0">
                            <img class="img-fluid person-img"
                                src="{{ $veteran->avatar ? Storage::url($veteran->avatar) : asset('admin/images/users/no-profile.png') }}"
                                alt="p2">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
