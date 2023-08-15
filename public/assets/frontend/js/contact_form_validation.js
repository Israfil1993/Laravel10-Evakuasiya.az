// public/js/contact_form_validation.js

// Wait for the document to be ready
document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    form.addEventListener("submit", function (event) {
        event.preventDefault();

        // Get form input values
        const nameInput = document.getElementById("name");
        const emailInput = document.getElementById("email");
        const subjectInput = document.getElementById("subject");
        const messageInput = document.getElementsByName("message")[0];

        // Reset previous error messages
        const errorMessages = document.querySelectorAll(".error-message");
        errorMessages.forEach((error) => error.remove());

        // Validate form inputs
        let isValid = true;

        if (nameInput.value.trim() === "") {
            isValid = false;
            displayErrorMessage(nameInput, "Ad/Soyad boş ola bilməz");
        }

        if (emailInput.value.trim() === "") {
            isValid = false;
            displayErrorMessage(emailInput, "E-mail boş ola bilməz");
        } else if (!isValidEmail(emailInput.value)) {
            isValid = false;
            displayErrorMessage(emailInput, "Düzgün e-mail daxil edin");
        }

        if (subjectInput.value.trim() === "") {
            isValid = false;
            displayErrorMessage(subjectInput, "Mövzu başlığı boş ola bilməz");
        }

        if (messageInput.value.trim() === "") {
            isValid = false;
            displayErrorMessage(messageInput, "Mesaj boş ola bilməz");
        }

        if (isValid) {
            form.submit();
        }
    });

    function displayErrorMessage(inputElement, message) {
        const errorDiv = document.createElement("div");
        errorDiv.className = "error-message";
        errorDiv.textContent = message;
        inputElement.parentNode.insertBefore(errorDiv, inputElement.nextSibling);
    }

    function isValidEmail(email) {
        // Simple email validation regex
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
});
