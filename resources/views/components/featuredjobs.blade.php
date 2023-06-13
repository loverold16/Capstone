<section class="bg-white border-b py-8">
    <div class="container sm:mx-auto flex flex-wrap pt-4 pb-12">
        <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
            FEATURED JOBS
        </h1>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="divide-y divide-slate-100 w-full">
            <nav class="py-4 px-6 text-sm font-medium">
                <ul class="flex space-x-3">
                    <li class="flex">
                        <a href="#" class="block px-3 py-2 rounded-md bg-sky-500 text-white bg-slate-100'">New
                            Jobs</a>
                        <a href="#" class="block px-3 py-2 rounded-md text-black bg-slate-100'">Featured Jobs</a>
                    </li>
                </ul>
            </nav>
            <ul class="divide-y divide-slate-100">
                @foreach ($featuredjobList as $job)
                    <li class="bg-purple-500 rounded">
                        <article class="flex items-start space-x-6 p-6">
                            <img src="{{ asset($job->image) }}" alt="{{ $job->name }}" width="20%"
                                class="flex-none rounded-md bg-slate-100" />
                            <div class="min-w-0 relative flex-auto">
                                <h2 class="font-semibold text-slate-900 truncate pr-20">{{ $job->name }}</h2>
                                <dl class="mt-2 flex flex-wrap text-sm leading-6 font-medium">
                                    <div class="absolute top-0 right-0 flex items-center space-x-1">
                                        <dt class="text-sky-500">
                                            <span class="sr-only">Star rating</span>
                                            <svg width="16" height="20" fill="currentColor">
                                                <path
                                                    d="M7.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118L.98 9.483c-.784-.57-.381-1.81.587-1.81H5.03a1 1 0 00.95-.69L7.05 3.69z" />
                                            </svg>
                                        </dt>
                                        <dd>Php {{ $job->price }}</dd>
                                    </div>
                                    <div>
                                        <dt class="sr-only">Rating</dt>
                                        <dd class="px-1.5 ring-1 ring-slate-200 rounded">Test</dd>
                                    </div>
                                    <div class="ml-2">
                                        <dt class="sr-only">Year</dt>
                                        <dd>2023</dd>
                                    </div>
                                    <div>
                                        <dt class="sr-only">Genre</dt>
                                        <dd class="flex items-center">
                                            <svg width="2" height="2" fill="currentColor"
                                                class="mx-2 text-slate-300" aria-hidden="true">
                                                <circle cx="1" cy="1" r="1" />
                                            </svg>
                                            Test
                                        </dd>
                                    </div>
                                    <div>
                                        <dt class="sr-only">Runtime</dt>
                                        <dd class="flex items-center">
                                            <svg width="2" height="2" fill="currentColor"
                                                class="mx-2 text-slate-300" aria-hidden="true">
                                                <circle cx="1" cy="1" r="1" />
                                            </svg>
                                            Test
                                        </dd>
                                    </div>
                                    <div class="flex-none w-full mt-2 font-normal">
                                        <dt class="sr-only">Cast</dt>
                                        <dd class="text-slate-400">{{ $job->description }}</dd>
                                    </div>
                                </dl>
                            </div>
                        </article>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
