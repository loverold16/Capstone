<x-guest-layout>
    @section('metatitle', $metatitle)
    <div class="pt-[4.5rem]">
        <section class="bg-white">
            <div class="bg-cyan-300 p-4 flex">
                <!--Bread Crumbs Area -->
                <div class="breadcrumbs w-1/5 ">
                    <a href="/">Home</a> >
                    <a href="{{ route('jobs.show', $job->slug) }}"> {{ $job->name }}</a>
                </div>
                <!--Search Area -->
                <div class="searcharea w-5/5">
                    Search
                </div>
            </div>

            <div class="max-w-7xl mx-auto px-4 py-4 sm:flex sm:space-x-4 sm:px-6 lg:px-8">
                <div class="flex flex-col flex-1 sm:border-r">
                    <div class="border-2 overflow-hidden cursor-zoom-in h-full">
                        <div id="img-container" class="w-full h-full">
                            <img id="current-img" src="{{ asset('storage/' . $job->image) }}"
                                class="object-cover origin-center">
                        </div>
                    </div>

                    <div class="flex justify-between items-center">
                        <h2 class="text-2xl font-semibold capitalize italic">{{ $job->name }}</h2>
                        <div class="text-xl capitalize italic">
                            <span>
                                Price:
                            </span>
                            <span>
                                {{ $job->price }}
                            </span>
                        </div>
                    </div>

                    <div class="flex space-x-4 mt-4">
                        <p class="text-xl capitalize">
                            {{ $job->description}}
                        </p>
                    </div>
                    <div class="flex space-x-4 mt-4">
                        <span class="text-xl capitalize">
                            Sku:
                        </span>
                        <p class="text-xl capitalize">
                            {{$job->job_code }}
                        </p>
                    </div>
                </div>
                
            </div>
        </section>
    </div>

</x-guest-layout>
