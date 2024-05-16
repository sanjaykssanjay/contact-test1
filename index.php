<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            text-align: center;
        }
    </style>
    <!-- Google Material Design CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .background-card {
            background-color: #A3C1AD; /* Light gray background */
            padding: 30px;
            border-radius: 18px;
            margin-top: 50px; /* Space below the toolbar */
        }
    </style>
</head>
<body>
    <!-- Toolbar -->
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper green">
                <a href="#" class="brand-logo center">Contact Us</a>
                <ul class="right">
                    <li><a href="index2.html" class="waves-effect waves-light btn">View Details</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="background-card">
            <form action="" method="POST" id="contactForm">
                <div class="input-field" style="margin-bottom: 18px;">
                    <input type="text" name="name" id="name" class="validate" required style="background-color: white; margin-top: 18px;">
                    <label for="name" style="color: black; font-size: 24px;">Name</label>
                </div>

                <div class="input-field" style="margin-bottom: 18px;">
                    <input type="text" name="message" id="message" class="validate" required style="background-color: white; margin-top: 18px;">
                    <label for="message" style="color: black; font-size: 24px;">Message</label>
                </div>

                <div class="input-field" style="text-align: center;">
                    <button class="btn waves-effect waves-light" style="font-size: 24px; background-color: green; margin-top: 18px;" type="submit">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>

        <!-- Container to display results -->
        <div id="resultContainer"></div>
    </div>

    <!-- Google Material Design JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#contactForm').submit(function(event) {
                // Prevent default form submission
                event.preventDefault();

                // Serialize form data
                var formData = $(this).serialize();

                // Send form data using AJAX
                $.ajax({
                    type: 'POST',
                    url: 'form-process.php', // Path to your server-side script
                    data: formData,
                    success: function(response) {
                        // Display response in the result container
                        $('#resultContainer').html(response);
                        // Clear form fields
                        $('#name').val('');
                        $('#message').val('');
                    },
                    error: function(xhr, status, error) {
                        // Handle errors
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
</body>
</html>
