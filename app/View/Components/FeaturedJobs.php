<?php

namespace App\View\Components;

use Closure;
use App\Models\Job;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class FeaturedJobs extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $featuredjobList = Job::where('image', '!=', 'jobs/default.png')->take(6)->inRandomOrder()->get(['name', 'slug', 'price', 'description',  'image']);
        return view('components.featuredjobs', compact ('featuredjobList'));
    }

}
