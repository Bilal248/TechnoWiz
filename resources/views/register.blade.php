<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="CSS/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="container">
      <div class="title">Registration</div>
      <div class="content">
        <form id="registration-form" action="#">
          <div class="user-details">
            <div class="input-box">
              <span class="details">Full Name</span>
              <input type="text" id="fullname" placeholder="Enter your name" required>
            </div>
            <div class="input-box">
              <span class="details">Phone Number</span>
              <input type="text" id="phonenumber" placeholder="Enter your number" required>
            </div>
            <div class="input-box">
              <span class="details">Password</span>
              <input type="password" id="password" placeholder="Enter your password" required>
            </div>
            <div class="input-box">
              <span class="details">Confirm Password</span>
              <input type="password" id="confirmPassword" placeholder="Confirm your password" required>
            </div>
          </div>
          <div class="button">
            <input type="submit" value="Register">
          </div>
        </form>
      </div>
    </div>

    <!-- =======================================Firebase Registeration=================================================== -->
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-analytics.js"></script>

    <script>
      var firebaseConfig = {
        apiKey: "AIzaSyC7vBi8a9srEMlU1xsudqhAyD8ZptISX7k",
        authDomain: "technowiz-8f939.firebaseapp.com",
        projectId: "technowiz-8f939",
        storageBucket: "technowiz-8f939.appspot.com",
        messagingSenderId: "324879901083",
        appId: "1:324879901083:web:e19621a2bfb69a01fe413e",
        measurementId: "G-ET0PXR9NZ1"
      };

      firebase.initializeApp(firebaseConfig);
      firebase.analytics();

      document.getElementById("registration-form").addEventListener("submit", function(event) {
        event.preventDefault();

        var fullname = document.getElementById("fullname").value;
        var phoneNumber = document.getElementById("phonenumber").value;
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmPassword").value;

        if (password !== confirmPassword) {
          alert("Passwords do not match!");
          return;
        }

        firebase.auth().createUserWithEmailAndPassword(phoneNumber , password)
          .then(function (userCredential) {
            userCredential.user.updateProfile({
              displayName: fullname
            })
            .then(function() {
              alert("Registration successful!");
            window.location.href = "welcomePage?phone=" + phoneNumber;
            })
            .catch(function(error) {
              console.error("Error updating display name: ", error);
            });
          })
          .catch(function (error) {
            // Registration failed
            console.error("Error creating user: ", error);
            alert("Registration failed. Please try again.");
          });
      });
    </script>
<!-- =======================================Firebase=================================================== -->

  </body>
</html>
