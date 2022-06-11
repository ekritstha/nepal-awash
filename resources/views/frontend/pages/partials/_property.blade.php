<div class="property-item">
    <div class="pi-pic set-bg" data-setbg="{{ asset('images/property/' . $p->image) }}">
        @if ($p->rent_sale == 'Rent')
            <div class="label">
                For Rent
            </div>
        @else
            <div class="label">
                For Sale
            </div>
        @endif
    </div>
    <div class="pi-text">
        <div class="pt-price">
            @if ($p->rent_sale == 'Rent')
                Rs {{ $p->price_formatted }}<span> /month</span>
            @else
                Rs {{ $p->price_formatted }}
            @endif
        </div>
        <h5><a href="{{ route('single-property', ['slug' => $p->slug]) }}">{{ $p->title }}</a></h5>
        <p>
            <span class="icon_pin_alt"></span> {{ $p->location }}, {{ $p->city }}
        </p>
        <ul>
            <li><i class="fa fa-object-group"></i> {{ $p->lot_area_formatted }}</li>
            <li><i class="fa fa-bathtub"></i> {{ $p->bathroom_formatted }}</li>
            <li><i class="fa fa-bed"></i> {{ $p->bedroom_formatted }}</li>
            <li><i class="fa fa-automobile"></i> {{ $p->parking_space_formatted }}</li>
        </ul>
        <div class="pi-agent">
            <div class="pa-item">
                <div class="pa-text"> {!! App\Util\Util::getFormattedNumber($components, 'Contact Number', 'description') !!}</div>
            </div>
        </div>
    </div>
</div>
