<footer class="footer">
    <div class="footer__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__item-wrap">
                        <h4 class="footer__item-title">
                            About Us
                        </h4>
                        <p class="footer__item-desc">
                            {{ substr($setting->about ?? '', 0, 150) }}...
                        </p>
                        <ul class="footer__social-list">
                            @if(!empty($setting->facebook))
                            <li class="footer__social-list-item">
                                <a href="{{$setting->facebook}}" class="footer__social-list-item-link">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            @endif
                            @if(!empty($setting->twitter))
                            <li class="footer__social-list-item">
                                <a href="{{$setting->twitter}}" class="footer__social-list-item-link">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            @endif
                            @if(!empty($setting->instagram))
                            <li class="footer__social-list-item">
                                <a href="{{$setting->instagram}}" class="footer__social-list-item-link">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            @endif
                            @if(!empty($setting->youtube))
                            <li class="footer__social-list-item">
                                <a href="{{$setting->youtube}}" class="footer__social-list-item-link">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer__item-wrap">
                        <h4 class="footer__item-title">
                            Contact Info
                        </h4>
                        <ul class="footer__contact-info-list">
                            <li class="footer__contact-info-list-item">
                                <p class="footer__contact-info-list-item-label">
                                    Address:                                   
                                </p>
                                <p class="footer__contact-info-list-item-value">
                                    {{ $setting->address ?? '' }}                                  
                                </p>
                            </li>
                            <li class="footer__contact-info-list-item">
                                <p class="footer__contact-info-list-item-label">
                                    Phone:                                   
                                </p>
                                <a href="tel:{{ $setting->phone  }}" class="footer__contact-info-list-item-value">
                                    {{ $setting->phone ?? '' }}
                                </a>
                            </li>
                            @if(!empty($setting->whatsapp))
                            <li class="footer__contact-info-list-item">
                                <p class="footer__contact-info-list-item-label">
                                    WhatsApp:                                   
                                </p>
                                <a href="https://wa.me/{{ $setting->whatsapp  }}" target="_blank" class="footer__contact-info-list-item-value">
                                    {{ $setting->whatsapp ?? '' }}
                                </a>
                            </li>
                            @endif
                            <li class="footer__contact-info-list-item">
                                <p class="footer__contact-info-list-item-label">
                                    Email:                                   
                                </p>
                                <a href="mailto:{{ $setting->email  }}" class="footer__contact-info-list-item-value">
                                    {{ $setting->email ?? '' }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>                
                <div class="col-lg-3 col-md-6">
                    <div class="footer__item-wrap">
                        <h4 class="footer__item-title">
                            Others
                        </h4>
                        <ul class="footer__others-list">
                            <li class="footer__others-list-item">
                                <a href="{{ url('/page/privacy-policy') }}" class="footer__others-list-item-link">
                                    Privacy Policy
                                </a>
                            </li>
                            <li class="footer__others-list-item">
                                <a href="{{ url('/page/terms-condition') }}" class="footer__others-list-item-link">
                                    Terms & Conditions
                                </a>
                            </li>
                            <li class="footer__others-list-item">
                                <a href="{{ url('/page/refund-policy') }}" class="footer__others-list-item-link">
                                    Refund Policy
                                </a>
                            </li>
                            <li class="footer__others-list-item">
                                <a href="{{ url('/page/payment-policy') }}" class="footer__others-list-item-link">
                                    Payment Policy
                                </a>
                            </li>
                            <li class="footer__others-list-item">
                                <a href="{{ url('/page/about-us') }}" class="footer__others-list-item-link">
                                    About Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer__item-wrap">
                        <h4 class="footer__item-title">
                            Newsletter
                        </h4>
                        <p class="footer__item-desc">
                            Subscribe to our newsletter to get latest updates.
                        </p>
                        <form action="{{ url('/subscriber/store') }}" method="post" class="footer__newsletter-form">
                            @csrf
                            <div class="footer__newsletter-form-group">
                                <input type="email" name="email" class="footer__newsletter-form-control" placeholder="Enter your email">
                                <button type="submit" class="footer__newsletter-form-btn">
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer__bottom-content">
                        <p class="footer__bottom-content-text">
                            &copy; {{ date('Y') }} {{ env('APP_NAME') }}. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>