document.getElementById("enquiry-form").addEventListener("submit", async function (e) {
    e.preventDefault();

    try {
        const firstName = document.getElementById('firstName').value;
        const lastName = document.getElementById('lastName').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;

        const propertyTypes = [];
        document.querySelectorAll('input[name="property_type"]:checked').forEach((checkbox) => {
            propertyTypes.push(checkbox.value);
        });

        const message = document.getElementById("desc").value;
        const policyAgreed = document.getElementById('policy').checked;

        const objToSend = {
            name: firstName + " " + lastName,
            email,
            phone,
            property_type: propertyTypes,
            desc: message,
            privacy_policy: policyAgreed,
            submitted_at: new Date().toLocaleString()
        };

        await fetch("https://unaiza-backend.vercel.app/api/unaiza-form", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(objToSend),
        });
        e.target.reset();
        alert("Form Submitted Successfully");
    } catch (error) {
        console.error("Error during API call:", error);
        alert("An error occurred while submitting the form. Please try again.");
    }
});