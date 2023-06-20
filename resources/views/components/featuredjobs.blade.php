<section class="mt-3">
    <div class="mx-auto max-w-screen-xl  px-4 py-10">
        <h1 class="text-2xl font-bold text-[#1B262C] sm:text-3xl">Recently Added SkillSets</h1>
        <div class="h-1 bg-blue-900 w-64 opacity-25 my-0 py-0 rounded-t mb-3"></div>
        <div>
            <ul>
                @foreach ($featuredjobList as $job)
                    <li class="list-none w-full mb-3">
                        <a href="/jobs/{{ $job->slug }}" class="flex bg-gray-100 rounded-md ">
                            <div class="relative w-full px-4 py-4 sm:px-6">
                                <!-- HEADER -->
                                <div class="flex items-center justify-between w-full ">
                                    <p class="truncate text-sm font-medium text-teal-500 lg:mt-1 lg:text-lg ">
                                        {{ $job->name }}</p>
                                    <div class="ml-2 flex flex-shrink-0 lg:ml-0 lg:translate-x-[5px]">
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

                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-700">
                                                <path fill-rule="evenodd"
                                                    d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                                    clip-rule="evenodd"></path>
                                            </svg>

                                            London
                                        </p>

                                        <!-- TYPE -->
                                        <p class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">

                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-700">
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

                                            <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-700" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                                    clip-rule="evenodd"></path>
                                            </svg>

                                            <p>
                                            </p>
                                            <div class="hidden sm:flex">Created: </div>
                                            <time datetime="2020-01-07"
                                                class="hidden md:flex">{{ $job->created_at }}</time>
                                            <time datetime="2020-01-07" class="flex md:hidden">01/07/20</time>
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
    </div>
</section>
