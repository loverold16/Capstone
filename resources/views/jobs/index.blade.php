<x-guest-layout>
    @section('metatitle', $metatitle)
    <section>
        <!-- Breadcrumb -->
        <nav class="flex px-5 py-2 mb-3 text-gray-700 border border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-700"
            aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="/"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                            </path>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <a href={{ route('jobs.index', 'category=' . $categorySlug) }}
                            class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">{{ $categoryName }}</a>
                    </div>
                </li>
            </ol>
        </nav>
    </section>
    <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex items-baseline justify-between border-b border-gray-200">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900 mb-3">SkillListing</h1>
        </div>
        <section class="pb-24 pt-6">
            <div class="grid grid-cols-1 gap-x-6 gap-y-10 lg:grid-cols-4">
                <!-- Filters -->
                <h3 class="sr-only">Categories</h3>
                <ul role="list" class="space-y-1 border-b border-gray-200 text-sm font-medium text-gray-900">
                    @foreach ($categories as $category)
                        <li
                            class="text-left px-4 py-4  transition hover:text-white hover:bg-cyan-950 sm:px-6 lg-px-8 {{ $category->name == $categoryName ? 'bg-cyan-950 text-white' : '' }}">
                            <a href={{ route('jobs.index', 'category=' . $category->slug) }}>{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
                <!-- Product grid -->
                <div class="lg:col-span-3">
                    <div class="container flex">
                        @if (count($jobs) === 0)
                            <h1 class="p-2">No Jobs List Found</h1>
                        @else
                            <div class="w-full">
                                <ul>
                                    @foreach ($jobs as $job)
                                        <li class="list-none w-full mb-3">
                                            <a href="/jobs/{{ $job->slug }}" class="flex bg-gray-100 rounded-md ">
                                                <div class="relative w-full px-4 py-4 sm:px-6">
                                                    <!-- HEADER -->
                                                    <div class="flex items-center justify-between w-full ">
                                                        <p
                                                            class="truncate text-sm font-medium text-teal-500 lg:mt-1 lg:text-lg ">
                                                            {{ $job->name }}</p>
                                                        <div
                                                            class="ml-2 flex flex-shrink-0 lg:ml-0 lg:translate-x-[5px]">
                                                            <p
                                                                class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">
                                                                Budget Php {{ $job->price }}</p>
                                                        </div>
                                                    </div>

                                                    <div class="mt-2">

                                                        <!-- ROW-->
                                                        <div class="sm:flex">

                                                            <!-- LOCATION -->
                                                            <p class="flex items-center text-sm text-gray-500">

                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 24 24" fill="currentColor"
                                                                    class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-700">
                                                                    <path fill-rule="evenodd"
                                                                        d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>

                                                                London
                                                            </p>

                                                            <!-- TYPE -->
                                                            <p
                                                                class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">

                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 24 24" fill="currentColor"
                                                                    class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-700">
                                                                    <path fill-rule="evenodd"
                                                                        d="M3 2.25a.75.75 0 000 1.5v16.5h-.75a.75.75 0 000 1.5H15v-18a.75.75 0 000-1.5H3zM6.75 19.5v-2.25a.75.75 0 01.75-.75h3a.75.75 0 01.75.75v2.25a.75.75 0 01-.75.75h-3a.75.75 0 01-.75-.75zM6 6.75A.75.75 0 016.75 6h.75a.75.75 0 010 1.5h-.75A.75.75 0 016 6.75zM6.75 9a.75.75 0 000 1.5h.75a.75.75 0 000-1.5h-.75zM6 12.75a.75.75 0 01.75-.75h.75a.75.75 0 010 1.5h-.75a.75.75 0 01-.75-.75zM10.5 6a.75.75 0 000 1.5h.75a.75.75 0 000-1.5h-.75zm-.75 3.75A.75.75 0 0110.5 9h.75a.75.75 0 010 1.5h-.75a.75.75 0 01-.75-.75zM10.5 12a.75.75 0 000 1.5h.75a.75.75 0 000-1.5h-.75zM16.5 6.75v15h5.25a.75.75 0 000-1.5H21v-12a.75.75 0 000-1.5h-4.5zm1.5 4.5a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75h-.008a.75.75 0 01-.75-.75v-.008zm.75 2.25a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75v-.008a.75.75 0 00-.75-.75h-.008zM18 17.25a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75h-.008a.75.75 0 01-.75-.75v-.008z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>

                                                                In House
                                                            </p>
                                                        </div>

                                                        <!-- ROW -->
                                                        <div
                                                            class=" 
                                              flex items-center justify-between 
                                              text-sm text-gray-500 
                                              mt-2">
                                                            <!-- CLOSING -->
                                                            <div class="flex ">

                                                                <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-700"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>

                                                                <p>
                                                                </p>
                                                                <div class="hidden sm:flex">Created: </div>
                                                                <time datetime="2020-01-07"
                                                                    class="hidden md:flex">{{ $job->created_at }}</time>
                                                                <time datetime="2020-01-07"
                                                                    class="flex md:hidden">01/07/20</time>
                                                                <p></p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </main>
    </div>


</x-guest-layout>
