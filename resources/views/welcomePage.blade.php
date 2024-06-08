<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
<script>
        const urlParams = new URLSearchParams(window.location.search);
        const phoneNumber = urlParams.get('phone');

        // Display the welcome message with Phone Number
        document.write("Welcome, " + phoneNumber + "!");

        function logout() {
            window.location.href = "http://127.0.0.1:8000";
        }
    </script>

    <div>
    <button onclick="logout()">Logout</button>
</div>

</body>

</html>