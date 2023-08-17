        function validateFormR() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var gender = document.querySelector('input[name="gender"]:checked');
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;

            // Simple validation example
            if (name.trim() === '') {
                alert("Name Required!");
                return false;
            }

            if (email.trim() === '') {
                alert("Email Required!");
                return false;
            }

            if (!gender) {
                alert("Gender Required!");
                return false;
            }

            if (password.trim() === '') {
                alert("Password Required!");
                return false;
            }

            if (password !== confirmPassword) {
                alert("Passwords do not match");
                return false;
            }

            return true; // Return true to submit the form
        }

        // Attach the form submission to the validation function
        document.querySelector('form').addEventListener('submit', function (e) {
            if (!validateFormR()) {
                e.preventDefault(); 
            }
        });




 function validateFormL(){
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            if (email.trim() === '') {
                alert("Email Required!");
                return false;
            }

            if (password.trim() === '') {
                alert("Password Required!");
                return false;
            }
            return true;
        }
           document.querySelector('form').addEventListener('submit', function (e) {
            if (!validateFormL()) {
                e.preventDefault(); 
            }
        });

  function validateFormPass(){
            var password = document.getElementById("password").value;
            var newPassword = document.getElementById("newPassword").value;
            var confirmPassword = document.getElementById("confirmPassword").value;

            if (password.trim() === '') {
                alert("Old Password Required!");
                return false;
            }

            if (newPassword.trim() === '') {
                alert("New Password Required!");
                return false;
            }
             if (confirmPassword.trim() === '') {
                alert("Confirm Password Required!");
                return false;
            }
            if (newPassword !== confirmPassword) {
                alert("Passwords do not match");
                return false;
            }
            return true;
        }
           document.querySelector('form').addEventListener('submit', function (e) {
            if (!validateFormPass()) {
                e.preventDefault(); 
            }
        }); 
      

      function validateFormName(){
            var name = document.getElementById("name").value;
            var NewName = document.getElementById("NewName").value;
            

            if (name.trim() === '') {
                alert("Old Name Required!");
                return false;
            }

            if (NewName.trim() === '') {
                alert("New Name Required!");
                return false;
            }
             
            return true;
        }
           document.querySelector('form').addEventListener('submit', function (e) {
            if (!validateFormName()) {
                e.preventDefault(); 
            }
        });                   

      function validateFormEmail(){
            var email = document.getElementById("email").value;
            var newEmail = document.getElementById("newEmail").value;
            

            if (email.trim() === '') {
                alert("Old Email Required!");
                return false;
            }

            if (newEmail.trim() === '') {
                alert("New Email Required!");
                return false;
            }
             
            return true;
        }
           document.querySelector('form').addEventListener('submit', function (e) {
            if (!validateFormEmail()) {
                e.preventDefault(); 
            }
        });
