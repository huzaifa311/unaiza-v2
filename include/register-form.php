<section class="register">
    <h1 class="theme-h1">Register Your Interest</h1>
    <form id="enquiry-form">
        <div class="grid-container">
            <input type="text" placeholder="First Name" id="firstName" required>
            <input type="text" placeholder="Last Name" id="lastName">
        </div>
        <input type="email" placeholder="Email Address" id="email" required>
        <input type="text" placeholder="Phone Number" id="phone" required>
        <fieldset>
            <legend>Select Property Type</legend>

            <div class="three-grid">
                <div>
                    <input type="checkbox" id="property-1-bedroom" name="property_type" value="1-bedroom">
                    <label for="property-1-bedroom">1-Bedroom</label>
                </div>

                <div>
                    <input type="checkbox" id="property-2-bedroom" name="property_type" value="2-bedroom">
                    <label for="property-2-bedroom">2-Bedroom</label>
                </div>

                <div>
                    <input type="checkbox" id="property-3-bedroom" name="property_type" value="3-bedroom">
                    <label for="property-3-bedroom">3-Bedroom</label>
                </div>
            </div>
        </fieldset>
        <textarea id="desc" placeholder="Your Message" rows="6"></textarea>

        <div class="policy-agree">
            <input type="checkbox" id="policy" name="policy" value="policy">
            <label for="policy">I agree to the Privacy Policy</label>
        </div>

        <button type="submit" class="theme-btn">Submit</button>
    </form>
</section>