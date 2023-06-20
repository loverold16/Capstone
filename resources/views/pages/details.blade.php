<x-guest-layout>
    @section('metatitle', $metatitle)
    <div class="pt-[4.5rem]">
        <section class="bg-white">
            @if ($page->is_published)
                <h1>{{ $page->title }}</h1>
                <p>{{ $page->content }}</p>
            @endif
        </section>
    </div>

</x-guest-layout>
