<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['message'])) {
        echo "<div class='message'>" . $_SESSION['message'] . "</div>";
        unset($_SESSION['message']);
    }
    ?>
    <form id="signupForm" action="process_form.php" method="POST">
        <h2>Sign Up</h2>
        <label for="name">Name (required):</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email (required):</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone">

        <input type="submit" value="Sign Up">
    </form>

    <script src="scripts.js"></script>
</body>
</html>
