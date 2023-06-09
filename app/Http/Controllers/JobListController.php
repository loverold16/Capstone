<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;

class JobListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        if (request()->category) {
            if (!request()->sort) {
                $jobs = Job::whereHas('categories', function ($query) {
                    $query->where('slug', request()->category);
                })->inRandomOrder()->get(['name', 'slug', 'price', 'image']);
                $categoryName = optional($categories->where('slug', request()->category)->first())->name;
                $categorySlug = $categories->where('slug', request()->category)->first()->slug;
            } else {
                $jobs = Job::whereHas('categories', function ($query) {
                    $query->where('slug', request()->category);
                });
                $categoryName = optional($categories->where('slug', request()->category)->first())->name;
                $categorySlug = $categories->where('slug', request()->category)->first()->slug;
                if (request()->sort == 'low_high') {
                    $jobs = $jobs->orderBy('price')->get(['name', 'slug', 'price', 'image']);
                } else {
                    $jobs = $jobs->orderBy('price', 'desc')->get(['name', 'slug', 'price', 'image']);
                }
            }
        } else {
            $jobs = Job::inRandomOrder()->get(['name', 'slug', 'price', 'image']);
            $categoryName = 'All';
            $categorySlug = NULL;
        }
        return view('jobs/index', compact(
            'jobs',
            'categories',
            'categoryName',
            'categorySlug',
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        $categories = $job->categories;
        foreach ($categories as $category) {
            $similarJobs = $category->jobs->shuffle()->take(4);
        }
        return view('jobs/index', compact(
            'job',
            'similarJobs',
        ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
