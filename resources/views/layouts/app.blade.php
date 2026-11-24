<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#172321">
    <meta name="description" content="@yield('meta_description', 'Road freight, transport and distribution by Atyusha Logistics LLP.')">
    <title>@yield('title', 'Atyusha Logistics LLP | Road Freight &amp; Transport')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="preconnect" href="https://images.unsplash.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <a class="visually-hidden-focusable" href="#main-content">Skip to content</a>
    <x-site-header />

    <main id="main-content">
        @yield('content')
    </main>

    <x-site-footer :variant="request()->routeIs('contact') ? 'contact' : (request()->routeIs('services') ? 'services' : (request()->routeIs('fleet') ? 'fleet' : (request()->routeIs('clients') ? 'clients' : 'default')))" />
</body>
</html>
