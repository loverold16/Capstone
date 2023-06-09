<x-guest-layout>
    <div class="pt-[4.5rem]">
        <section class="bg-white">
            <div class="flex">
                <div class="border-r w-1/5">
                    <div>
                        <div class="text-white text-center bg-cyan-700 py-4">
                            <p>Category Jobs</p>
                        </div>
                        <div class="flex flex-col divide-y">
                            <ul>
                                @foreach ($categories as $category)
                                    <li>{{ $category->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="border-l w-4/5">
                    <div class="container flex flex-wrap mx-auto">
                        @if (count($jobs) === 0)
                            <h1>No Jobs List Found</h1>
                        @else
                            @foreach ($jobs as $job)
                                <a href={{ route('jobs.index', $job->name) }} class="p-2">
                                    <img src="{{ asset($job->image) }}" alt="{{ $job->name }}" class="object-cover" />
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
