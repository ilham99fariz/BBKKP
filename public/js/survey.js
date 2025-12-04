document.addEventListener("DOMContentLoaded", function () {

    const ratingStars = document.querySelectorAll(".star-rating span");
    const ratingInput = document.getElementById("rating");

    ratingStars.forEach((star) => {
        star.addEventListener("click", function () {
            const value = this.getAttribute("data-value");
            ratingInput.value = value;

            ratingStars.forEach((s, index) => {
                s.style.color = index < value ? "gold" : "gray";
            });
        });
    });

    document.getElementById("surveyForm").addEventListener("submit", function (e) {
        e.preventDefault();

        const submitButton = this.querySelector('button[type="submit"]');
        const originalText = submitButton.textContent;
        submitButton.disabled = true;
        submitButton.textContent = 'Mengirim...';

        const formData = new FormData();
        formData.append('fullname', document.getElementById("name").value);
        formData.append('email', document.getElementById("email").value);
        formData.append('phone', document.getElementById("phone").value);
        formData.append('company', document.getElementById("company").value);
        formData.append('rating', ratingInput.value);
        formData.append('feedback', document.getElementById("message").value);

        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
        
        fetch('/survey-submit', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json'
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            document.getElementById("successMessage").style.display = "block";
            this.reset();
            ratingStars.forEach((s) => (s.style.color = "gray"));
            
            setTimeout(() => {
                document.getElementById("successMessage").style.display = "none";
            }, 5000);
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Terjadi kesalahan saat mengirim survey. Silakan coba lagi.');
        })
        .finally(() => {
            submitButton.disabled = false;
            submitButton.textContent = originalText;
        });
    });

});
