<section class="bg-white border-b py-8">
    <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
            FEATURED JOBS
        </h1>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        @foreach ($featuredjobList as $job)
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <img src="{{ asset($job->image) }}" alt="{{ $job->name }}"
                            class="h-full w-full object-fill lg:h-full lg:w-full">
                        <div class="w-full font-bold text-xl text-gray-800 px-6">
                            {{ $job->name }}
                        </div>
                        <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                            {{ $job->description }}
                        </p>
                        <p class="text-gray-800 text-base px-6 mb-5">
                            Php{{ $job->price }}
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                    <div class="flex items-center justify-start">
                        <button
                            class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Apply
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
