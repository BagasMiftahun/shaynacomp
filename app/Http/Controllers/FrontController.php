<?php

namespace App\Http\Controllers;

use App\Models\OurTeam;
use App\Models\Product;
use App\Models\HeroSection;
use App\Models\Testimonial;
use App\Models\CompanyAbout;
use App\Models\OurPrinciple;
use Illuminate\Http\Request;
use App\Models\CompanyStatistic;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statistics = CompanyStatistic::orderByDesc('id')->take(4)->get();
        $principles = OurPrinciple::orderByDesc('id')->take(3)->get();
        $products = Product::orderByDesc('id')->take(3)->get();
        $teams = OurTeam::orderByDesc('id')->take(7)->get();
        $testimonials = Testimonial::orderByDesc('id')->take(4)->get();
        $hero_sections = HeroSection::orderByDesc('id')->take(1)->get();
        return view('front.index', compact('statistics', 'principles', 'products', 'teams', 'testimonials', 'hero_sections'));
    }

    public function team()
    {
        $statistics = CompanyStatistic::orderByDesc('id')->take(4)->get();
        $teams = OurTeam::orderByDesc('id')->get();
        return view('front.team', compact('teams', 'statistics'));
    }

    public function about()
    {
        $statistics = CompanyStatistic::orderByDesc('id')->take(4)->get();
        $abouts = CompanyAbout::orderByDesc('id')->get();
        return view('front.about', compact('abouts', 'statistics'));
    }
}
