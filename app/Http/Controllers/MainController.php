<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Service;
use App\Models\Fleet;
use App\Models\Page;
use Illuminate\Http\Request;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class MainController extends Controller
{
    public function index()
    {
        $heroes = Hero::active()->ordered()->get();
        $services = Service::active()->ordered()->get();
        $fleets = Fleet::active()->ordered()->take(3)->get();

        // Get homepage SEO data
        $homepageSEO = Page::where('slug', 'homepage')->first();
        
        $seoData = null;
        if ($homepageSEO) {
            $seoData = new SEOData(
                title: $homepageSEO->title,
                description: $homepageSEO->meta_description,
                image: $homepageSEO->og_image ? asset('storage/' . $homepageSEO->og_image) : null,
            );
        }

        return view('main.index', compact('heroes', 'services', 'fleets', 'seoData'));
    }

    public function charter()
    {
        $services = Service::active()->ordered()->get();
        $fleets = Fleet::active()->ordered()->get();

        // Get charter page SEO data
        $charterSEO = Page::where('slug', 'charter')->first();
        
        $seoData = null;
        if ($charterSEO) {
            $seoData = new SEOData(
                title: $charterSEO->title,
                description: $charterSEO->meta_description,
                image: $charterSEO->og_image ? asset('storage/' . $charterSEO->og_image) : null,
            );
        }

        return view('main.charter', compact('services', 'fleets', 'seoData'));
    }

    public function fleet()
    {
        $fleets = Fleet::active()->ordered()->get();

        // Get fleet page SEO data
        $fleetSEO = Page::where('slug', 'fleet')->first();
        
        $seoData = null;
        if ($fleetSEO) {
            $seoData = new SEOData(
                title: $fleetSEO->title,
                description: $fleetSEO->meta_description,
                image: $fleetSEO->og_image ? asset('storage/' . $fleetSEO->og_image) : null,
            );
        }

        return view('main.fleet', compact('fleets', 'seoData'));
    }

    public function services()
    {
        $services = Service::active()->ordered()->get();

        // Get services page SEO data
        $servicesSEO = Page::where('slug', 'services')->first();
        
        $seoData = null;
        if ($servicesSEO) {
            $seoData = new SEOData(
                title: $servicesSEO->title,
                description: $servicesSEO->meta_description,
                image: $servicesSEO->og_image ? asset('storage/' . $servicesSEO->og_image) : null,
            );
        }

        return view('main.services', compact('services', 'seoData'));
    }

    public function about()
    {
        // Get about page SEO data
        $aboutSEO = Page::where('slug', 'about')->first();
        
        $seoData = null;
        if ($aboutSEO) {
            $seoData = new SEOData(
                title: $aboutSEO->title,
                description: $aboutSEO->meta_description,
                image: $aboutSEO->og_image ? asset('storage/' . $aboutSEO->og_image) : null,
            );
        }

        return view('main.about', compact('seoData'));
    }

    public function quote()
    {
        $services = Service::active()->ordered()->get();

        // Get quote page SEO data
        $quoteSEO = Page::where('slug', 'quote')->first();
        
        $seoData = null;
        if ($quoteSEO) {
            $seoData = new SEOData(
                title: $quoteSEO->title,
                description: $quoteSEO->meta_description,
                image: $quoteSEO->og_image ? asset('storage/' . $quoteSEO->og_image) : null,
            );
        }

        return view('main.quote', compact('services', 'seoData'));
    }

    public function serviceDetail(Service $service)
    {
        // Check if service is active
        if (!$service->is_active) {
            abort(404);
        }

        $relatedServices = Service::active()
            ->where('id', '!=', $service->id)
            ->ordered()
            ->take(3)
            ->get();

        $seoData = new SEOData(
            title: $service->title . ' - Flite Charter',
            description: $service->description,
            image: $service->image ? asset('storage/' . $service->image) : null,
        );

        return view('main.service-detail', compact('service', 'relatedServices', 'seoData'));
    }

    public function fleetDetail(Fleet $fleet)
    {
        // Check if fleet is active
        if (!$fleet->is_active) {
            abort(404);
        }

        $relatedFleets = Fleet::active()
            ->where('id', '!=', $fleet->id)
            ->where('category', $fleet->category)
            ->ordered()
            ->take(3)
            ->get();

        // If not enough same category fleets, get different category fleets
        if ($relatedFleets->count() < 3) {
            $additionalFleets = Fleet::active()
                ->where('id', '!=', $fleet->id)
                ->whereNotIn('id', $relatedFleets->pluck('id'))
                ->ordered()
                ->take(3 - $relatedFleets->count())
                ->get();

            $relatedFleets = $relatedFleets->merge($additionalFleets);
        }

        $seoData = new SEOData(
            title: $fleet->name . ' - Fleet Charter - Flite Charter',
            description: $fleet->description,
            image: $fleet->image ? asset('storage/' . $fleet->image) : null,
        );

        return view('main.fleet-detail', compact('fleet', 'relatedFleets', 'seoData'));
    }
}
