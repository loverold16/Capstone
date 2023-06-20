<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
    </x-nav-link>
    @foreach ($menuItems as $menuItem)
        @if ($menuItem->role === null || $menuItem->role === Auth::user()->role)
            <!-- Navigation Links -->
            <x-nav-link href="{{ $menuItem->title }}">
                {{ __($menuItem->title) }}
            </x-nav-link>
            @if ($menuItem->children->count() > 0)
                @foreach ($menuItem->children as $child)
                    @if ($child->role === null || $child->role === Auth::user()->role)
                        <x-nav-link href="{{ $child->url }}">{{ $child->title }}</x-nav-link>
                    @endif
                @endforeach
            @endif
        @endif
        {{ $menuItems->role }}
    @endforeach
    
</div>
