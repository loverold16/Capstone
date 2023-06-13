<x-guest-layout>
    <x-hero-section />   
    <section class="bg-white border-b py-8">
        <div class="container max-w-5xl mx-auto m-8">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                CATEGORY JOBS
            </h1>
            <div class="flex flex-center gap-2">
                    @foreach ($categoryList as $category)
                        <a href="{{ route('jobs.index', 'category=' . $category->slug) }}" class="text-3xl text-gray-800 font-bold leading-none mb-3">{{ $category->name }}
                        </a>
                    @endforeach
            </div>
        </div>
        </div>
    </section>
    <x-featuredjobs />
</x-guest-layout>
