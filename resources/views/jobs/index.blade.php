<x-guest-layout>
    @section('metatitle', $metatitle)
    <div class="pt-[4.5rem]">
        <section class="bg-white">
            <div class="bg-cyan-300 p-4 flex">
                <!--Bread Crumbs Area -->
                <div class="breadcrumbs w-1/5 " >
                    <a href="/">Home</a> > 
                    <a   href={{ route('jobs.index', 'category=' . $categorySlug) }}>
                        {{ $categoryName }}
                    </a>
                </div>
                <!--Search Area -->
                <div class="searcharea w-5/5">
                    Search
                </div>
            </div>

            <div class="flex">
                <!---Left-->
                <div class="border-r w-1/5">
                    <div>
                        <div class="text-white text-center bg-cyan-700 py-4">
                            <p>Category Jobs</p>
                        </div>
                        <div class="flex flex-col divide-y">
                            @foreach ($categories as $category)
                                <a class="text-left px-4 py-4  transition hover:text-white hover:bg-cyan-950 sm:px-6 lg-px-8 {{ $category->name == $categoryName ? 'bg-cyan-950 text-white' : ''}}"
                                    href={{ route('jobs.index', 'category=' . $category->slug) }}>{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!---Right-->
                <div class="border-l w-4/5">
                    <div class="container flex flex-wrap mx-auto">
                        @if (count($jobs) === 0)
                            <h1 class="p-2">No Jobs List Found</h1>
                        @else
                            @foreach ($jobs as $job)
                                <a href={{ route('jobs.show', $job->slug) }} class="p-2">
                                    <img src="{{ asset('storage/' . $job->image) }}" alt="{{ $job->name }}"
                                        class="object-cover w-[22rem] h-[15rem]" />
                                    <div class="flex justify-around bg-cyan-700 py-2">
                                        <span class="text-black">{{ $job->name }}</span>
                                        <span class="text-white">Php{{ $job->price }}</span>
                                    </div>
                                </a>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>

</x-guest-layout>
