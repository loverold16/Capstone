<x-guest-layout>
    <x-hero-section />
    <section class="bg-white border-b py-8">
        <div class="container mx-auto m-8">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                CATEGORY JOBS
            </h1>
            <div class="flex  md:w-full gap-2">
                @foreach ($categoryList as $category)
                    <div
                        class="flex flex-wrap items-center w-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                        <a href="{{ route('jobs.index', 'category=' . $category->slug) }}">
                            <img class="rounded-t object-fit h-[12rem]" src="{{ asset('storage/' . $category->image) }}"
                                alt="" />
                        </a>
                        <div class="p-6">
                            <p class="mb-2 text-m font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                                {{ $category->name }}
                            </p>
                            <a href="{{ route('jobs.index', 'category=' . $category->slug) }}"
                                class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-black shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"                                >
                                View Category
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>
    <x-featuredjobs />
</x-guest-layout>
