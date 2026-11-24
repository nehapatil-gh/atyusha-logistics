@props(['number', 'title', 'description'])

<article class="services-page__card">
    <span class="services-page__number">{{ $number }}</span>
    <h3>{{ $title }}</h3>
    <p>{{ $description }}</p>
</article>
