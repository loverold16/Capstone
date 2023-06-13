<section class="bg-white border-b py-8">
    <div class="flex flex-wrap pt-4 pb-12 mx-auto sm:container">
        <h1 class="my-2 text-xl font-bold leading-tight text-gray-800">
            FEATURED JOBS
        </h1>
        <div class="mb-4">
            <div class="h-1 gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="mx-auto px-4 py-6 md:mx-auto w-full bg-gray-100 rounded-lg overflow-hidden shadow hover:bg-sky-400">
            <ul role="list" class="divide-y divide-gray-100">
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex gap-x-4">
                        <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm font-semibold leading-6 text-gray-900">Leslie Alexander</p>
                            <p class="mt-1 truncate text-xs leading-5 text-gray-500">leslie.alexander@example.com</p>
                        </div>
                    </div>
                    <div class="hidden sm:flex sm:flex-col sm:items-end">
                        <p class="text-sm leading-6 text-gray-900">Co-Founder / CEO</p>
                        <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h
                                ago</time></p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--closing tag cards-->





    @foreach ($featuredjobList as $job)
        {{-- <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                    <a href="{{ route('jobs.show', $job->slug) }}"
                        class="flex flex-wrap no-underline hover:no-underline">
                        <img src="{{ asset('storage/' . $job->image) }}" alt="{{ $job->name }}"
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
            </div> --}}
    @endforeach
</section>
