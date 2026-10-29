<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Schedule;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Judul data About.
     */
    private const ABOUT_TITLES = [
        'opening' => 'Sambutan Ketua PGRI Cisurupan',
        'visi'    => 'Visi',
        'misi'    => 'Misi',
        'history' => 'Sejarah',
    ];

    /**
     * Mengambil seluruh data About berdasarkan judul.
     */
    private function getAboutData(): array
    {
        $titles = array_values(self::ABOUT_TITLES);

        $abouts = About::query()
            ->whereIn('about_title', $titles)
            ->get()
            ->keyBy('about_title');

        return collect(self::ABOUT_TITLES)
            ->mapWithKeys(fn($title, $key) => [
                $key => $abouts->get($title),
            ])
            ->all();
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('web/home', array_merge(
            $this->getAboutData(),
            [
                'schedules' => Schedule::query()
                    ->orderBy('schedule_date')
                    ->limit(2)
                    ->get(),

                'galleries' => Gallery::query()
                    ->latest()
                    ->limit(4)
                    ->get(),

                'blogs' => Blog::query()
                    ->latest()
                    ->limit(5)
                    ->get(),

                'teams' => Team::query()
                    ->latest()
                    ->limit(4)
                    ->get(),
            ]
        ));
    }

    public function about()
    {
        return View(
            'web/about',
            $this->getAboutData()
        );
    }

    public function contact()
    {
        return View('web/contact');
    }

    public function blog()
    {
        return View('web/blog', [
            'blogs' => Blog::latest()->paginate(6),
        ]);
    }

    public function gallery()
    {
        return View('web/gallery', [
            'galleries' => Gallery::latest()->paginate(6),
        ]);
    }
    public function team()
    {
        return View('web/team', [
            'teams' => Team::latest()->paginate(6),
        ]);
    }
    public function schedule()
    {
        return View('web/schedule', [
            'schedules' => Schedule::latest()->paginate(3),
        ]);
    }
}
