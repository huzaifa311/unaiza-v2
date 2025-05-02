<?php
    error_reporting(0);
    $title = "About Us";
    $css = "./assets/css/about.css";
    $page = 'about';
    include 'include/header.php';
?>

<section class="hero-section" id="hero-section">
    <div class="hero-background"></div>
    <div class="content">
        <h1>About Unaiza City</h1>
    </div>
</section>


<section class="about-para img-text">
    <img src="./assets/img/about-para.webp" alt="">
    <div class="content">
        <p class="theme-para">Unaiza City is a modern, thoughtfully planned community focused on sustainability,
            connectivity, and quality living. Just 25 minutes from DHA Phase 8 via Shahrah-e-Bhutto (Malir Expressway),
            it offers seamless access to DHA City, ARY Laguna, and Jinnah International Airport.
            <span>
                Built on prime land, Unaiza City blends contemporary architecture with green living, providing a safe,
                vibrant environment ideal for families, professionals, and investors. From infrastructure to amenities,
                every detail ensures comfort, security, and long-term value.
            </span>
            <span>
                At Unaiza City, we don’t just build homes — we build a lifestyle-driven community you’ll be proud to
                call home
            </span>
        </p>
        <button class="theme-btn">
            <i class="fa-solid fa-arrow-down"></i>
            Download Brochure
        </button>
    </div>
</section>


<section class="building">
    <div class="grid-container">
        <h1 class="theme-h1">
            Building Tomorrow’s Lifestyle, Today
        </h1>
        <p class="theme-para">
            At Unaiza City, we’re changing the way you experience modern living by focusing on quality, convenience, and
            long-term value. Ideally located just 25 minutes from DHA Phase 8 through the Malir Expressway, Unaiza City
            offers a smooth mix of premium living spaces, smart community planning, and strong connectivity to major
            parts of Karachi.
            <span>
                Built for families, investors, and working professionals, Unaiza City brings you flexible 5-year
                installment plans, low possession costs, and a secure, gated lifestyle — all close to DHA City, ARY
                Laguna, Jinnah International Airport, and leading educational institutions.
            </span>
        </p>
    </div>
    <div class="grid-three">
        <div class="grid-item">
            <img src="./assets/img/icons/installment.png" alt="">
            <div class="content">
                <h5>5-Year</h5>
                <p>Flexible Installment Plan</p>
            </div>
        </div>
        <div class="grid-item">
            <img src="./assets/img/icons/low-possession.png" alt="">
            <div class="content">
                <h5>18%</h5>
                <p>Low Possession Cost</p>
            </div>
        </div>
        <div class="grid-item">
            <img src="./assets/img/icons/minutes.png" alt="">
            <div class="content">
                <h5>25 Mins</h5>
                <p>from DHA Phase 8 via Malir Expressway</p>
            </div>
        </div>
    </div>
</section>


<section class="about-para residences img-text">
    <div class="content">
        <h1 class="theme-h1">Our Vision</h1>
        <p class="theme-para pr">Unaiza City aspires to become Karachi’s most trusted and dynamic community, delivering exceptional living standards through innovation, connectivity, and sustainable growth — empowering families and investors for generations to come.</p>
    </div>
    <img src="./assets/img/residences.webp" alt="">
</section>


<section class="about-para residences img-text">
    <img src="./assets/img/living.webp" alt="">
    <div class="content">
        <h1 class="theme-h1">Our Mission</h1>
        <p class="theme-para">At Unaiza City, our mission is to redefine urban living by creating secure, modern, and sustainable communities.
            We are committed to offering prime locations, flexible payment solutions, premium infrastructure, and a lifestyle of comfort and opportunity — just 25 minutes away from DHA Phase 8 via Malir Expressway.
            Our goal is to build not just homes, but lasting value for every resident and investor.</p>
    </div>
</section>

<?php
    include 'include/register-form.php';
    include 'include/footer.php';
?>

<script src="assets/js/header.js" defer></script>
<script src="assets/js/script.js" defer></script>
</body>

</html>