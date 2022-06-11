<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Component;
use App\Models\Locations;
use App\Models\MetaTag;
use App\Models\Property;
use App\Models\PropertyType;
use App\Models\Side;
use App\Models\SubLocation;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('*', function ($view) {
            if (Schema::hasTable('components')) {
                $components = Component::get()->groupBy('slug')->toArray();
                $view->with('components', $components);
            }
            if (Schema::hasTable('meta_tags')) {
                $metatags = MetaTag::get();
                $view->with('metatags', $metatags);
            }
            if (Schema::hasTable('locations')) {
                $locations = Locations::get();
                $view->with('locations', $locations);
            }
            if (Schema::hasTable('sides')) {
                $sides = Side::orderBy('sort', 'asc')->get();
                $view->with('sides', $sides);
            }
            if (Schema::hasTable('sub_locations')) {
                $sublocations = SubLocation::orderBy('sort', 'asc')->get();
                $view->with('sublocations', $sublocations);
            }
            if (Schema::hasTable('property_types')) {
                $property_types = PropertyType::withCount(['properties'])->orderBy('sort', 'asc')->get();
                $view->with('property_types', $property_types);
            }
            if (Schema::hasTable('categories')) {
                $categories = Category::withCount(['properties'])->orderBy('sort', 'asc')->get();
                $view->with('categories', $categories);
            }
        });
    }
}
