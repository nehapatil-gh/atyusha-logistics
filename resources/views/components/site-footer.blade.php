@props(['variant' => 'default'])

<footer class="site-footer {{ in_array($variant, ['contact', 'services', 'fleet', 'clients'], true) ? 'site-footer--contact' : '' }}">
    <div class="container">
        @if (in_array($variant, ['contact', 'services', 'fleet', 'clients'], true))
            <div class="site-footer__main">
                <div class="site-footer__brand-column">
                    <div class="site-footer__brand-frame">
                        <img src="{{ asset('images/atyusha-logo.jpg') }}" alt="ATYUSHA LOGISTICS LLP" class="site-footer__logo">
                    </div>
                    <div class="site-footer__contact-brand-copy">
                        <h2>{{ in_array($variant, ['services', 'fleet', 'clients'], true) ? 'Atyusha Logistics LLP' : 'ATYUSHA LOGISTICS LLP' }}</h2>
                        <p>Complete Logistics Solutions. Reliable movement, responsible service, and logistics built around your business.</p>
                    </div>
                </div>

                <div class="site-footer__menu-column">
                    <h2 class="site-footer__label">Quick Links</h2>
                    <nav aria-label="Quick Links">
                        <ul class="site-footer__menu">
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('services') }}">Services</a></li>
                            <li><a href="{{ route('fleet') }}">Fleet &amp; Capacity</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            @if ($variant === 'services')
                                <li><a href="/admin">Admin Login</a></li>
                            @endif
                        </ul>
                    </nav>
                </div>

                <div class="site-footer__contact-column">
                    <div class="site-footer__contact">
                        <h2 class="site-footer__label">Contact</h2>
                        <div class="site-footer__contact-item">
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M19 10.1c0 5-7 10.2-7 10.2S5 15.1 5 10.1a7 7 0 1 1 14 0Z" stroke="currentColor" stroke-width="1.6" />
                                <circle cx="12" cy="10" r="2.2" stroke="currentColor" stroke-width="1.6" />
                            </svg>
                            <span>Office No. 39, Mahaganapati Vyapar Sankul, Ranjangaon Ganpati, Pune, Maharashtra – 412209, India</span>
                        </div>
                        <a href="tel:+91985032058"><svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M7.2 3.8 4.5 5.2c-.8.4-1.1 1.4-.8 2.2 2.1 5.6 6.5 10 12.1 12.1.8.3 1.8 0 2.2-.8l1.4-2.7-4.1-2-1.6 2c-2.6-1.2-4.7-3.3-5.9-5.9l2-1.6-2-4.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg><span>+91 985032058</span></a>
                        <a href="tel:+91712392332"><svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M7.2 3.8 4.5 5.2c-.8.4-1.1 1.4-.8 2.2 2.1 5.6 6.5 10 12.1 12.1.8.3 1.8 0 2.2-.8l1.4-2.7-4.1-2-1.6 2c-2.6-1.2-4.7-3.3-5.9-5.9l2-1.6-2-4.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg><span>+91 712392332</span></a>
                        <a href="tel:+91970247847"><svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M7.2 3.8 4.5 5.2c-.8.4-1.1 1.4-.8 2.2 2.1 5.6 6.5 10 12.1 12.1.8.3 1.8 0 2.2-.8l1.4-2.7-4.1-2-1.6 2c-2.6-1.2-4.7-3.3-5.9-5.9l2-1.6-2-4.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" /></svg><span>+91 970247847</span></a>
                        <a href="mailto:AtyushaLogistics2@gmail.com">
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M3.5 6.5h17v11h-17zM4 7l8 6 8-6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" /></svg>
                            <span>AtyushaLogistics2@gmail.com</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="site-footer__bottom">
                <p>© 2026 {{ in_array($variant, ['services', 'fleet', 'clients'], true) ? 'Atyusha Logistics LLP' : 'ATYUSHA LOGISTICS LLP' }}. All rights reserved.</p>
            </div>
        @else
        <div class="site-footer__main">
            <div class="site-footer__brand-column">
                <div class="site-footer__brand-frame">
                    <img src="{{ asset('images/atyusha-logo.jpg') }}" alt="ATYUSHA LOGISTICS LLP" class="site-footer__logo">
                </div>
            </div>

            <div class="site-footer__menu-column">
                <h2 class="site-footer__label">Menu</h2>
                <nav aria-label="Menu">
                    <ul class="site-footer__menu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('home') }}#services">Services</a></li>
                        <li><a href="{{ route('home') }}#fleet">Fleet &amp; Infrastructure</a></li>
                        <li><a href="{{ route('home') }}#operations">Operations</a></li>
                        <li><a href="{{ route('clients') }}">Our Clients</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>

            <div class="site-footer__contact-column">
                <div class="site-footer__contact">
                    <h2 class="site-footer__label">Contacts</h2>
                    <a href="mailto:adinath.nimone14@gmail.com">
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M3.5 6.5h17v11h-17zM4 7l8 6 8-6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>adinath.nimone14@gmail.com</span>
                    </a>
                    <a href="tel:+919043231050">
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M7.2 3.8 4.5 5.2c-.8.4-1.1 1.4-.8 2.2 2.1 5.6 6.5 10 12.1 12.1.8.3 1.8 0 2.2-.8l1.4-2.7-4.1-2-1.6 2c-2.6-1.2-4.7-3.3-5.9-5.9l2-1.6-2-4.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>(+91) 9043231050</span>
                    </a>
                </div>
            </div>

            <div class="site-footer__socials-column">
                <h2 class="site-footer__label">Socials</h2>
                <ul class="site-footer__socials">
                    <li>
                        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer">
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M14.2 20v-7h2.4l.4-2.8h-2.8V8.4c0-.8.2-1.3 1.4-1.3h1.5V4.6c-.3 0-1.2-.1-2.2-.1-2.2 0-3.7 1.3-3.7 3.8v1.9H8.8V13h2.4v7h3Z" fill="currentColor" />
                            </svg>
                            <span>Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/vakratundtransport2791?avpt=MTVtMDFlOWY0am5iaw==" target="_blank" rel="noopener noreferrer">
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <rect x="4" y="4" width="16" height="16" rx="4" stroke="currentColor" stroke-width="1.7" />
                                <circle cx="12" cy="12" r="3.5" stroke="currentColor" stroke-width="1.7" />
                                <circle cx="17.5" cy="6.8" r="1" fill="currentColor" />
                            </svg>
                            <span>Instagram</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://tiktok.com" target="_blank" rel="noopener noreferrer">
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M14 4v10.1a3.1 3.1 0 1 1-2.5-3.05V8.5a6.2 6.2 0 1 0 5.7 6.18V9.7a7.1 7.1 0 0 0 3.3.8V7.4A4.5 4.5 0 0 1 16 4h-2Z" fill="currentColor" />
                            </svg>
                            <span>TikTok</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/919043231050" target="_blank" rel="noopener noreferrer">
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M20 11.6a8 8 0 0 1-11.8 7L4 20l1.3-4A8 8 0 1 1 20 11.6Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                                <path d="M9 8.5c.3-.5.6-.5.9-.5.2 0 .4 0 .5.4l.7 1.7c.1.2.1.4-.1.6l-.6.7c.7 1.3 1.7 2.2 3 2.8l.6-.7c.2-.2.4-.2.6-.1l1.7.8c.3.1.4.3.3.6-.1.6-.6 1.1-1.2 1.3-.7.2-1.6 0-2.6-.4-1.5-.7-3-2-4-3.5-.7-1.1-1-2-.7-2.8.2-.4.5-.7.9-.9Z" fill="currentColor" />
                            </svg>
                            <span>WhatsApp</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="site-footer__newsletter-column">
                <h2 class="site-footer__label">Subscribe to our newsletter</h2>
                <form class="newsletter-form" action="{{ route('newsletter.subscribe') }}" method="POST" data-submit-once>
                    @csrf
                    <label for="newsletter-email">Email *</label>
                    <div class="newsletter-form__controls">
                        <input id="newsletter-email" name="email" type="email" aria-label="Email *" autocomplete="email" value="{{ old('email') }}" required @error('email', 'newsletter') aria-invalid="true" @enderror>
                        <button type="submit">Subscribe</button>
                    </div>
                    @error('email', 'newsletter')
                        <p class="newsletter-form__message newsletter-form__message--error" role="alert">{{ $message }}</p>
                    @enderror
                    @if (session('newsletter_error'))
                        <p class="newsletter-form__message newsletter-form__message--error" role="alert">{{ session('newsletter_error') }}</p>
                    @endif
                    @if (session('newsletter_success'))
                        <p class="newsletter-form__message newsletter-form__message--success" role="status">{{ session('newsletter_success') }}</p>
                    @endif
                </form>
            </div>
        </div>

        <div class="site-footer__bottom">
            <p>&copy; 2026</p>
            <p>ATYUSHA LOGISTICS LLP</p>
            <p>All rights reserved.</p>
        </div>
        @endif
    </div>
</footer>
