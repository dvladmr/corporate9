<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Service;
use App\Team;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show front home-page
     */
    public function index()
    {
        $teams = Team::all();
        return view('pages.home')->with('teams', $teams);
    }

    /**
     * Show front about-page
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Show front news-page
     */
    public function news()
    {
        return view('pages.news');
    }

    /**
     * Show front team-page
     */
    public function team()
    {
        $teams = Team::all();
        return view('pages.team')->with('teams', $teams);
    }

    /**
     * Show front services-page
     */
    public function services()
    {
        $services = Service::all();
        return view('pages.services')->with('services', $services);
    }

    /**
     * Show front faq-page
     */
    public function faq()
    {
        return view('pages.faq');
    }

    /**
     * Show front testimonial-page
     */
    public function testimonial()
    {
        return view('pages.testimonial');
    }

    /**
     * Show front project-page
     */
    public function project()
    {
        return view('pages.project');
    }

    /**
     * Show front contact-page
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Change application localization
     */
    public function updateLocale(string $locale)
    {
        if (!in_array($locale, config('app.locales'))) {
            return back();
        }

        // Replace occurrence of the locale in URL
        $url = str_replace(
            session('locale'),
            $locale,
            url()->previous()
        );

        return redirect()->to($url);
    }
}
