<?php

namespace App\Http\Controllers\backOffice;

use App\Models\User;
use App\Models\Classe;
use App\Models\Benefits;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showStaticSection()
    {
        return view('dashboard');
    }

    /**
     * Display a listing of the resource.
     */
    public function showTableSection()
    {
        return view('dashboard');
    }

    /**
     * Display a listing of the resource.
     */
    public function showProfilSection()
    {
        return view('dashboard');
    }

    /**
     * Display a listing of the resource.
     */
    public function showCategoryTable()
    {
        $categories = Category::orderBy('created_at', 'desc')->orderBy('updated_at', 'desc')->get();

        return view('dashboard', compact('categories'));
    }

    /**
     * Display a listing of the resource.
     */
    public function showUserTable()
    {
        return view('dashboard');
    }


    /**
     * Display a listing of the resource.
     */
    public function showBenefitTable()
    {
        $benefits = Benefits::orderBy('created_at', 'desc')->orderBy('updated_at', 'desc')->get();

        return view('dashboard', compact('benefits'));
    }

    


    /**
     * Display a listing of the resource.
     */
    public function showClasseSection()
    {
        $coaches = User::where('role_id', 2)->get();
        $categories = Category::whereDoesntHave('classes')->get();

        if ($categories->isEmpty()) {
            $message = 'No categories found.';
        } else {
            $message = null;
        }

        $classes = Classe::with('category')->with('benefits')->get();
        $benefits = Benefits::all();
        return view('dashboard', compact(['coaches', 'categories', 'classes', 'benefits','message']));
    }

}
