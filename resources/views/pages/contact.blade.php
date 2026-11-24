@extends('layouts.app')

@section('title', 'Contact | ATYUSHA LOGISTICS LLP')
@section('meta_description', 'Share your requirements and our team will get back to you.')

@section('content')
    <section class="contact-hero" aria-labelledby="contact-hero-title">
        <div class="container contact-hero__inner">
            <p class="eyebrow contact-hero__eyebrow">CONTACT</p>
            <h1 id="contact-hero-title">Let’s get your cargo moving.</h1>
            <p>Share your requirements and our team will get back to you.</p>
        </div>
    </section>

    <section class="contact-workspace" aria-label="Contact and quotation request">
        <div class="container contact-workspace__grid">
            <div class="contact-information">
                <p class="eyebrow">GET IN TOUCH</p>
                <h2>Talk logistics with our team.</h2>

                <div class="contact-information__groups">
                    <section class="contact-detail" aria-labelledby="contact-phone-heading">
                        <span class="contact-detail__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M7.2 3.8 4.5 5.2c-.8.4-1.1 1.4-.8 2.2 2.1 5.6 6.5 10 12.1 12.1.8.3 1.8 0 2.2-.8l1.4-2.7-4.1-2-1.6 2c-2.6-1.2-4.7-3.3-5.9-5.9l2-1.6-2-4.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <div>
                            <h3 id="contact-phone-heading">Phone</h3>
                            <ul>
                                <li><a href="tel:+91985032058">+91 985032058</a></li>
                                <li><a href="tel:+91712392332">+91 712392332</a></li>
                                <li><a href="tel:+91970247847">+91 970247847</a></li>
                            </ul>
                        </div>
                    </section>

                    <section class="contact-detail" aria-labelledby="contact-email-heading">
                        <span class="contact-detail__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M3.5 6.5h17v11h-17zM4 7l8 6 8-6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <div>
                            <h3 id="contact-email-heading">Email</h3>
                            <a href="mailto:AtyushaLogistics2@gmail.com">AtyushaLogistics2@gmail.com</a>
                        </div>
                    </section>

                    <section class="contact-detail" aria-labelledby="contact-office-heading">
                        <span class="contact-detail__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M19 10.1c0 5-7 10.2-7 10.2S5 15.1 5 10.1a7 7 0 1 1 14 0Z" stroke="currentColor" stroke-width="1.6" />
                                <circle cx="12" cy="10" r="2.2" stroke="currentColor" stroke-width="1.6" />
                            </svg>
                        </span>
                        <div>
                            <h3 id="contact-office-heading">Office</h3>
                            <p>Office No. 39, Mahaganapati Vyapar Sankul, Ranjangaon Ganpati, Pune, Maharashtra – 412209, India</p>
                        </div>
                    </section>

                    <section class="contact-detail" aria-labelledby="contact-social-heading">
                        <span class="contact-detail__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <rect x="4" y="4" width="16" height="16" rx="4" stroke="currentColor" stroke-width="1.7" />
                                <circle cx="12" cy="12" r="3.5" stroke="currentColor" stroke-width="1.7" />
                                <circle cx="17.5" cy="6.8" r="1" fill="currentColor" />
                            </svg>
                        </span>
                        <div>
                            <h3 id="contact-social-heading">Social</h3>
                            <a href="https://www.instagram.com/vakratundtransport2791/" target="_blank" rel="noopener noreferrer">Instagram</a>
                        </div>
                    </section>
                </div>
            </div>

            <section class="quotation-card" id="quote" aria-labelledby="quotation-title">
                <div class="quotation-card__heading">
                    <p class="eyebrow">REQUEST A QUOTATION</p>
                    <h2 id="quotation-title">Request a quotation</h2>
                    <p>Complete the details below to help us understand your requirements.</p>
                </div>

                @if (session('success'))
                    <div class="form-alert form-alert--success" role="status">{{ session('success') }}</div>
                @endif

                @if (session('error'))
                    <div class="form-alert form-alert--error" role="alert">{{ session('error') }}</div>
                @endif

                @if (session('warning'))
                    <div class="form-alert form-alert--warning" role="alert">{{ session('warning') }}</div>
                @endif

                @if ($errors->any())
                    <div class="form-alert form-alert--error" role="alert">
                        <p>Please review the highlighted fields:</p>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="quotation-form" action="{{ route('contact.submit') }}" method="POST" data-submit-once>
                    @csrf
                    <div class="quotation-form__grid">
                        <div class="form-field">
                            <label for="contact-name">Your name <span>*</span></label>
                            <input id="contact-name" name="name" type="text" placeholder="Full name" value="{{ old('name') }}" autocomplete="name" required @error('name') aria-invalid="true" @enderror>
                            @error('name')<p class="form-field__error">{{ $message }}</p>@enderror
                        </div>

                        <div class="form-field">
                            <label for="contact-phone">Phone <span>*</span></label>
                            <input id="contact-phone" name="phone" type="tel" placeholder="Contact number" value="{{ old('phone') }}" autocomplete="tel" required @error('phone') aria-invalid="true" @enderror>
                            @error('phone')<p class="form-field__error">{{ $message }}</p>@enderror
                        </div>

                        <div class="form-field">
                            <label for="contact-email">Email</label>
                            <input id="contact-email" name="email" type="email" placeholder="Email address" value="{{ old('email') }}" autocomplete="email" @error('email') aria-invalid="true" @enderror>
                            @error('email')<p class="form-field__error">{{ $message }}</p>@enderror
                        </div>

                        <div class="form-field">
                            <label for="contact-company">Company</label>
                            <input id="contact-company" name="company" type="text" placeholder="Company name" value="{{ old('company') }}" autocomplete="organization" @error('company') aria-invalid="true" @enderror>
                            @error('company')<p class="form-field__error">{{ $message }}</p>@enderror
                        </div>

                        <div class="form-field quotation-form__field--full">
                            <label for="contact-service">Service required</label>
                            <select id="contact-service" name="service" @error('service') aria-invalid="true" @enderror>
                                <option value="" disabled @selected(old('service') === null || ! in_array(old('service'), $services, true))>Select a service</option>
                                @foreach ($services as $service)
                                    <option value="{{ $service }}" @selected(old('service') === $service)>{{ $service }}</option>
                                @endforeach
                            </select>
                            @error('service')<p class="form-field__error">{{ $message }}</p>@enderror
                        </div>

                        <div class="form-field quotation-form__field--full">
                            <label for="contact-details">Requirement details</label>
                            <textarea id="contact-details" name="details" rows="4" placeholder="Origin, destination, cargo, timeline, etc." @error('details') aria-invalid="true" @enderror>{{ old('details') }}</textarea>
                            @error('details')<p class="form-field__error">{{ $message }}</p>@enderror
                        </div>

                        <div class="form-field quotation-form__field--full">
                            <label for="contact-website">Website</label>
                            <input id="contact-website" name="website" type="url" placeholder="Website" value="{{ old('website') }}" autocomplete="url" @error('website') aria-invalid="true" @enderror>
                            @error('website')<p class="form-field__error">{{ $message }}</p>@enderror
                        </div>
                    </div>

                    <p class="quotation-form__disclaimer">Please do not submit sensitive or confidential information in this form.</p>
                    <button class="quotation-form__submit" type="submit">Submit Request ↗</button>
                </form>
            </section>
        </div>
    </section>
@endsection
