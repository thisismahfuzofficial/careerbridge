<x-app>
    @if (Route::is('page.filter'))
        <x-app.app-header />
        <div class="bg-secondary py-3 ps-2" style="--bs-bg-opacity: .5;"><i>Showing Results for : <span class="fw-bold">{{ request('filter') }}</span></i></div>
    @else
        <x-app.header title="Search Page" />
        <div class="bg-secondary py-3 ps-2" style="--bs-bg-opacity: .5;"><i>Showing Results for : <span class="fw-bold">{{ request('query') }}</span></i></div>
    @endif
    
    <x-app.posts :posts="$posts" />


</x-app>
