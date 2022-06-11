<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactForm;
use App\Mail\PropertyAppraisalMail;
use App\Mail\SendMail;
use App\Models\Blog;
use App\Models\Property;
use App\Models\City;
use App\Models\Component;
use App\Models\Gallery;
use App\Models\MetaTag;
use App\Models\Slider;
use App\Models\WhyUs;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Butschster\Head\Facades\Meta;

class FrontendController extends Controller
{
    public function index()
    {
        $sliders = Property::orderBy('sort', 'asc')->where('slider', 1)->get();
        $cities = City::orderBy('sort', 'asc')->get();
        $latest = Property::orderBy('created_at', 'desc')->where('status', 1)->limit(6)->get();
        $testimonials = Testimonial::orderBy('sort', 'asc')->get();
        $whyus = WhyUs::orderBy('sort', 'asc')->limit(4)->get();

        $metaTag = MetaTag::where('page', 'home')->orderBy('created_at', 'DESC')->first();
        if ($metaTag) {
            $meta = Meta::prependTitle($metaTag->title);
            $meta->setDescription(strip_tags($metaTag->description));
        }
        return view('frontend.pages.index', compact('sliders', 'cities', 'latest', 'testimonials', 'whyus'));
    }

    public function about()
    {
        $testimonials = Testimonial::orderBy('sort', 'asc')->get();
        $whyus = WhyUs::orderBy('sort', 'asc')->limit(4)->get();

        $metaTag = MetaTag::where('page', 'about')->orderBy('created_at', 'DESC')->first();
        if ($metaTag) {
            $meta = Meta::prependTitle($metaTag->title);
            $meta->setDescription(strip_tags($metaTag->description));
        }
        return view('frontend.pages.about', compact('whyus', 'testimonials'));
    }

    public function contact()
    {
        $testimonials = Testimonial::orderBy('sort', 'asc')->get();
        $whyus = WhyUs::orderBy('sort', 'asc')->limit(4)->get();

        $metaTag = MetaTag::where('page', 'contact')->orderBy('created_at', 'DESC')->first();
        if ($metaTag) {
            $meta = Meta::prependTitle($metaTag->title);
            $meta->setDescription(strip_tags($metaTag->description));
        }
        return view('frontend.pages.contact', compact('whyus', 'testimonials'));
    }

    public function property(Request $request)
    {
        $cities = City::orderBy('sort', 'asc')->get();
        $metaTag = MetaTag::where('page', 'property')->orderBy('created_at', 'DESC')->first();
        if ($metaTag) {
            $meta = Meta::prependTitle($metaTag->title);
            $meta->setDescription(strip_tags($metaTag->description));
        }
        $crit = [
            'for' => $request->for ?? '',
            'type' => $request->type ?? '',
            'city' =>$request->city ??  ''
        ];
        if (count($request->all()) > 0) {
            $for = $request->get('for');
            $type = $request->get('type');
            $city = $request->get('city');

            $q = Property::where('id', '!=', 0)->where('status', 1);

            if ($for != '') {
                $q->where('rent_sale', $for);
            }
            if ($type != '') {
                $q->where('house_land', $type);
            }
            if ($city != '') {
                $q->where('city', $city);
            }
            $properties = $q->orderBy('sort', 'asc')->paginate(9);
            return view('frontend.pages.property', ['properties' => $properties->appends($request->all()), 'crit' => $crit, 'cities' => $cities]);
        } else {
            $properties = Property::where('status', 1)->orderBy('created_at', 'desc')->paginate(9);
            return view('frontend.pages.property', compact('properties', 'crit', 'cities'));
        }
    }

    public function singleProperty($slug)
    {
        $property = Property::with('galleries')->where('slug', $slug)->where('status', 1)->first();
        $others = Property::where('slug', '!=', $slug)->inRandomOrder()->limit(2)->get();
        if ($property) {
            $galleries = Gallery::where('property_id', $property->id)->inRandomOrder()->limit(5)->get();
            $meta = Meta::prependTitle($property->title);
            $meta->setDescription(strip_tags($property->description));
            $meta->setKeywords($property->meta_tags);
            return view('frontend.pages.single-property', compact('property', 'others', 'galleries'));
        }
        abort(404);
    }

    public function blog(Request $request)
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(5);
        $properties = Property::inRandomOrder()->limit(2)->get();

        $metaTag = MetaTag::where('page', 'blog')->orderBy('created_at', 'DESC')->first();
        if ($metaTag) {
            $meta = Meta::prependTitle($metaTag->title);
            $meta->setDescription(strip_tags($metaTag->description));
        }
        return view('frontend.pages.blog', compact('blogs', 'properties'));
    }

    public function singleBlog($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $others = Blog::where('slug', '!=', $slug)->inRandomOrder()->limit(3)->get();
        if ($blog) {
            $meta = Meta::prependTitle($blog->title);
            $meta->setDescription(strip_tags($blog->synopsis));
            $meta->setKeywords($blog->meta_tags);

            return view('frontend.pages.single-blog', compact('blog', 'others'));
        }
        abort(404);
    }

    public function sendMail(ContactForm $request)
    {
        $_email = Component::where('slug', Str::slug('Receiving Mail Address'))->first();
        if ($_email) {
            $email = strip_tags($_email->description);
        } else {
            $email = 'agent@amplerealestate.com.au';
        }
        $request['subject'] = "Message from Website";
        Mail::to($email)->send(new SendMail($request->except(['_token', 'submit', 'g-recaptcha-response'])));
        $msg = 'Thank you for your query. Our Staff will contact you soon.';

        return redirect()->back()->with('flash_success', $msg);
    }

    public function extra($slug)
    {
        $metaTag = MetaTag::where('page', $slug)->orderBy('created_at', 'DESC')->first();
        if ($metaTag) {
            $meta = Meta::prependTitle($metaTag->title);
            $meta->setDescription(strip_tags($metaTag->description));
        }
        return view('frontend.pages.extra', compact('slug'));
    }
}
