<footer class="footer-section">
    <div class="container">
        <div class="footer-all-content">
            <div class="footer-leftsite">
                <a href="#">
                    <img class="footer-logo" width="74px" height="74px" src="{{ asset('assets/img/footer-logo.png') }}" alt="logo">
                </a>
                <p class="font-poppins">successfully completed over 200
                    large-scale projects for clients in
                    Bangladesh, including a significant
                    number of SaaS companies,
                    thriving startups, and educational
                    establishments.
                </p>
                <div class="footer-brand-logo">
                    <a href="#">
                        <img src="{{ asset('assets/img/paypal.png') }}" alt="logo">
                    </a>
                    <a href="#">
                        <img src="{{ asset('assets/img/stripe.png') }}" alt="logo">
                    </a>
                    <a href="#">
                        <img src="{{ asset('assets/img/id.png') }}" alt="logo">
                    </a>
                </div>
                <div class="nix-logo">
                    <a href="#">
                        <img src="{{ asset('assets/img/nix.png') }}" alt="logo">
                    </a>
                    <span>< 18 years we do not sell alcohol < 25 years, show your ID</span>
                </div>
            </div>
            <div class="footer-rightsite">
                <div class="footer-all-page-content">
                    <div class="footer-page">
                        <h4>Pages</h4>
                        <ul>
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Product</a>
                            </li>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-page footer-item">
                        <h4>Food</h4>
                        <ul>
                            <li>
                                <a href="#">Spanish Foods</a>
                            </li>
                            <li>
                                <a href="#">Spanish Drinks</a>
                            </li>
                            <li>
                                <a href="#">Spanish Hampers & Gifts</a>
                            </li>
                            <li>
                                <a href="#">Kitchenware</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-page footer-social-item">
                        <h4>Contact</h4>
                        <div class="social">
                            <a href="#">
                                <img src="{{ asset('assets/img/icon/fb-icon.svg') }}" alt="icon">
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/img/icon/towi.svg') }}" alt="icon">
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/img/icon/lind.svg') }}" alt="icon">
                            </a>
                        </div>
                        <div class="social-id">
                            <div class="email-phone">
                                <img src="{{ asset('assets/img/icon/phone.svg') }}" alt="icon">
                                <span>+880 1728247398</span>
                            </div>
                            <div class="email-phone">
                                <img src="{{ asset('assets/img/icon/email.svg') }}" alt="icon">
                                <span>info@example.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-subscribe">
                    <div class="input-button">
                        <input type="text" placeholder="Your Email">
                        <a href="#">
                            Subscribe
                        </a>
                    </div>
                    <span>Get 15% of your first order by subscribing to our newsletter</span>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- swiper-js -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- swiper-js -->
<script>
    let swiperReview = new Swiper(".swiperReview", {
        slidesPerView: "3",
        spaceBetween: 30,
        autoplay: {
            delay: 1500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });

    let heroSwiper = new Swiper(".heroSwiper", {
        spaceBetween: 30,
        autoplay: {
            delay: 1800,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>
