document.addEventListener("DOMContentLoaded", function () {
    const submitBtn = document.getElementById('submit-btn');

    const validate = (event) => {
        event.preventDefault();
        const name = document.getElementById('name');
        const lastName = document.getElementById('lastName');
        const username = document.getElementById('username');
        const email = document.getElementById('email');
        const password = document.getElementById('password');

        if (name.value === '' || lastName.value === '' || username.value === '' || email.value === '' || password.value === '') {
            alert('Please fill all fields');
            return false;
        }

        if (!emailValid(email.value)) {
            alert("Please add a valid email");
            return false;
        }

        if (!passValid(password.value)) {
            alert("Please add a valid password");
            return false;
        }

        // If all validations pass, submit the form
        if (submitBtn.form.checkValidity()) {
            submitBtn.form.submit();
            submitBtn.disabled = true; // Disable the button to prevent multiple submissions
        }
    }

    const emailValid = (email) => {
        const emailRegex = /^([A-Za-z0-9])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,6})$/;
        return emailRegex.test(email.toLowerCase());
    }

    const passValid = (password) => {
        const passRegex = /^(?=.*[A-Z])(?=.*[!@#$%^&*()_+{}\[\]:;<>,.?~\\-]).{8,}$/;
        return passRegex.test(password);
    }

    submitBtn.addEventListener('click', validate);
});
