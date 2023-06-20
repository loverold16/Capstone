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
                        <a href="{{ route('jobs.show', $job->slug) }}"
                            class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">{{ $job->name }}</a>
                    </div>
                </li>
            </ol>
        </nav>
    </section>

    <main class="main bg-white px-6 md:px-16 py-6">
        <div class="flex flex-wrap justify-between max-w-6xl mx-auto">
            <!--     Job Post   -->
            <div class="job-post w-full md:w-8/12">
                <div class="job-meta mb-4">
                    <div class="image-area">
                        <img src="{{ asset('storage/' . $job->image) }}" alt="">
                    </div>
                    <span class="text-xs text-gray-500">
                        Posted less than a minute ago
                    </span>
                    <h1 class="job-title text-2xl">
                        {{ $job->name }}
                    </h1>

                    <span class="text-xs">Budget</span>
                    <span class="bg-[#0F4C75] text-white p-1 text-xs mr-4">Php {{ $job->price }}</span>
                </div>
                <div class="admin-controls block md:hidden text-sm mb-4 border-t border-b py-2">
                    <h5 class="text-gray-700 mb-2">Admin controls</h5>
                    <div class="controls mb-2">
                        <a href="#"
                            class=" border-2 text-[#0F4C75] hover:text-white rounded border-[#0F4C75] hover:bg-[#0F4C75] p-1 mr-1">View</a>
                        <a href="#"
                            class=" border-2 text-[#0F4C75] hover:text-white rounded border-[#0F4C75] hover:bg-[#0F4C75] p-1 mr-1">Edit</a>
                        <a href="#"
                            class=" border-2 text-[#0F4C75] hover:text-white rounded border-[#0F4C75] hover:bg-[#0F4C75] p-1">Delete</a>
                    </div>
                </div>

                <div class="job-description mb-4">
                    {{ $job->description }}
                </div>

                <a href="#"
                    class="bg-[#0F4C75] hover:bg-[#3282B8] text-white text-center block rounded-full py-2">Apply for
                    this
                    job</a>
            </div> <!-- end job-post -->

            <div class="w-full hidden md:block md:w-3/12">
                <div class="employer-info mb-4 text-center ">
                    <img class="h-40 w-40 inline-block"
                        src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" alt="">
                    <a href="#" class="text-sm hover:underline">
                        <h3 class="employer-name text-center">Github</h3>
                    </a>
                </div>

                <a href="#"
                    class="bg-[#0F4C75] hover:bg-[#3282B8] text-white text-center block rounded-full py-2 mb-4">Apply
                    for
                    this job</a>

                <div class="admin-controls text-center text-sm">
                    <h5 class="text-gray-700 mb-2">Admin controls</h5>
                    <div class="controls">
                        <a href="#"
                            class=" text-[#0F4C75] hover:text-white rounded  hover:bg-[#0F4C75] p-1 mr-1">View</a>
                        <a href="#"
                            class=" text-[#0F4C75] hover:text-white rounded  hover:bg-[#0F4C75] p-1 mr-1">Edit</a>
                        <a href="#"
                            class=" text-[#0F4C75] hover:text-white rounded  hover:bg-[#0F4C75] p-1">Delete</a>
                    </div>
                </div> <!-- end admin-controls -->
            </div> <!-- end w-3/12 -->
        </div>
    </main>

</x-guest-layout>
