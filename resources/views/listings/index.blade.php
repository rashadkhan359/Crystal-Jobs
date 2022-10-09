<x-layout> {{-- This 'content' or name should match the one in yield section of layout.php --}}
    @auth
    @else
        @include('partials._hero')
    @endauth
    @include('partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless(count($listings) == 0)
            @foreach ($listings as $listing)
                <x-listing-card :listing="$listing"/> {{-- For a varibale you need to have a ':' here. --}}
            @endforeach
        @else
            <p>No listings</p>
        @endunless
    </div>
    <div class="mt-6 p-4">
        {{ $listings->links() }}
    </div>
</x-layout>
