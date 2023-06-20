<x-guest-layout>
    @section('metatitle', ' | ' . $page->title)
    @if ($page->is_published == 1)
        {{ $page }}
    @else
        <x-404/>
    @endif
</x-guest-layout>
