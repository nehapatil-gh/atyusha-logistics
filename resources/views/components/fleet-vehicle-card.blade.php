@props(['title', 'image', 'description'])

<article class="fleet-page__card">
    <div class="fleet-page__card-image">
        <img src="{{ asset('images/fleet/' . $image) }}" alt="{{ $title }} vehicle illustration" loading="lazy">
        <span class="fleet-page__card-arrow" aria-hidden="true">↗</span>
    </div>
    <div class="fleet-page__card-copy">
        <h3>{{ $title }}</h3>
        <p>{{ $description }}</p>
    </div>
</article>
