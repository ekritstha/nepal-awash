<div class="blog-item">
    <div class="bi-pic" style="max-width: 45%">
        <a href="{{ route('single-blog', ['slug' => $b->slug]) }}">
            <img src="{{ asset('images/blog/' . $b->image) }}" alt="" />
        </a>
    </div>
    <div class="bi-text">
        <h5>
            <a href="{{ route('single-blog', ['slug' => $b->slug]) }}">{{ $b->title }}</a>
        </h5>
        <ul>
            <li>by <span>{{ $b->author }}</span></li>
            <li>{{ $b->date_formatted }}</li>
        </ul>
        <p>{!! $b->synopsis !!}</p>
        <a href="{{ route('single-blog', ['slug' => $b->slug]) }}" class="read-more">Read more <span
                class="arrow_right"></span></a>
    </div>
</div>
