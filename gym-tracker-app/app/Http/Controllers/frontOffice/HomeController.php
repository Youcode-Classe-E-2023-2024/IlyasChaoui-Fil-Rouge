<?php

namespace App\Http\Controllers\frontOffice;

use App\Models\User;
use App\Models\Classe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Quote;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        return view('home', compact('user'));
    }

    /**
     * Display a listing of the resource.
     */
    public function showClasses()
    {
        $user = Auth::user();
        $classes = Classe::with('category')->get();
        return view('homePages.classes', compact('user', 'classes'));
    }

    /**
     * Display a listing of the resource.
     */
    public function showClasseDetails($id, $category_id)
    {
        $user = Auth::user();
        $categories = Category::all();
        $class = Classe::with(['category', 'coach', 'benefits'])->findOrFail($id);
        // You may want to filter classes based on category here if needed
        return view('homePages.classDetail', compact('user', 'class', 'categories'));
    }


    /**
     * Display a listing of the resource.
     */
    public function showPricing()
    {
        $user = Auth::user();

        return view('homePages.pricing', compact('user'));
    }

    /**
     * Display a listing of the resource.
     */
    public function MyBlogs($id)
    {
        $user = Auth::user();
        $quotes = Quote::all();
        $categories = Category::all();
        $blogs = Blog::where('coach_id', $id)
            ->with('coach')
            ->with('category')
            ->with('quote')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('homePages.myBlogs', compact('user', 'categories', 'quotes', 'blogs'));
    }

    /**
     * Display a listing of the resource.
     */
    public function showBlogs($id)
    {
        $user = Auth::user();

        $blogs = Blog::where('coach_id', $id)
            ->with('coach')
            ->with('category')
            ->with('quote')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('homePages.blogs', compact('user', 'blogs'));
    }

    /**
     * Display a listing of the resource.
     */
    public function showBlogDetails($id)
    {
        $user = Auth::user();

        $blog = Blog::findOrFail($id)
            ->with('coach')
            ->with('category')
            ->with('quote')
            ->first();

        return view('homePages.blogDetail', compact('user', 'blog'));
    }

    /**
     * Display a listing of the resource.
     */
    public function showCoaches()
    {
        $user = Auth::user();

        return view('homePages.coaches', compact('user'));
    }

    /**
     * Display a listing of the resource.
     */
    public function showBim()
    {
        $user = Auth::user();

        return view('homePages.BIM', compact('user'));
    }
}
