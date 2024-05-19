document.addEventListener('DOMContentLoaded', function () {
    var accountCreatedMsg = document.getElementById("accountCreatedMsg");

    function updatePasswordStrength(password) {
        var strengthText = '';
        var strength = 0;

        if (password.length >= 8) {
            strength += 1;
        }
        if (/[a-z]/.test(password)) {
            strength += 1;
        }
        if (/[A-Z]/.test(password)) {
            strength += 1;
        }
        if (/[0-9]/.test(password)) {
            strength += 1;
        }
        if (/[\W]/.test(password)) {
            strength += 1;
        }

        switch (strength) {
            case 0:
            case 1:
            case 2:
                strengthText = 'Weak';
                passwordStrength.style.color = 'red';
                break;
            case 3:
                strengthText = 'Medium';
                passwordStrength.style.color = 'blue';
                break;
            case 4:
            case 5:
                strengthText = 'Strong';
                passwordStrength.style.color = 'green';
                break;
        }
        if (password === '') {
            passwordStrength.style.display = 'none';
        } else {
            passwordStrength.style.display = 'block';
            document.getElementById("passwordStrength").textContent = "Password Strength: " + strengthText;
        }
    }

    document.getElementById("pass").addEventListener("input", function () {
        updatePasswordStrength(this.value);
    });

    function validate() {
        var firstName = document.getElementById("Fname").value;
        var lastName = document.getElementById("Lname").value;
        var phoneNumber = document.getElementById("phonenumber").value;
        var password = document.getElementById("pass").value;
        var cpassword = document.getElementById("repass").value;

        var nameReg = /^[A-Za-z]+$/;
        var phoneRegex = /^[0-9]+$/;

        if (!nameReg.test(firstName)) {
            alert("First name should contain only letters.");
            return false;
        }
        if (!nameReg.test(lastName)) {
            alert("Last name should contain only letters.");
            return false;
        }

        if (!phoneRegex.test(phoneNumber)) {
            alert("Phone number should contain only numbers.");
            return false;
        }

        if (password.length < 8) {
            alert("Password should contain at least 8 characters.");
            return false;
        }

        if (password !== cpassword) {
            alert("The two passwords are not the same.");
            return false;
        }

        return true;
    }

    document.getElementById("myform").addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent the form from submitting normally

        if (validate()) {
        window.location.href = "home.html";
            
        }
    });
});
