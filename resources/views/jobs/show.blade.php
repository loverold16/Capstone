<x-guest-layout>
    @section('metatitle', $metatitle)
    <div class="pt-[4.5rem]">
        <section class="bg-white">
            <div class="bg-cyan-300 p-4 flex">
                <!--Bread Crumbs Area -->
                <div class="breadcrumbs w-1/5 ">
                    <a href="/">Home</a> >
                    <a href="{{ route('jobs.show' , $job->slug)}}"> {{ $job->name }}</a>
                </div>
                <!--Search Area -->
                <div class="searcharea w-5/5">
                    Search
                </div>
            </div>

            <div class="flex">
                {{ $job }}
            </div>
        </section>
    </div>

</x-guest-layout>
