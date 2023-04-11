<?php
echo "<pre>";

print_r($_POST);

echo '<pre>';

$userName = $_POST['name'];
$userEmail = $_POST['email'];
$messageSubject = $_POST['subject'];
$message = $_POST['message'];

$to = "kornchanut.davies@gmail.com";
$body = "";

$body .= "From: " . $userName . "\r\n";
$body .= "Email: " . $userEmail . "\r\n";
$body .= "Message: " . $message . "\r\n";

mail($to, $messageSubject, $body);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pho Village</title>

    <!-- Google icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Google fonts Noto Sans Thai -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <!-- Google fonts font-family: 'Nunito', sans-serif; -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;700&display=swap" rel="stylesheet" />
    <!-- css animation -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Style Sheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />

    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- Header -->
    <?php
include './includes/header.php';
?>
    <!-- contact form -->
    <div class="container-fluid min-vh-100 d-grid items-center">
        <div class="container d-grid items-center w-75 h-75 bg-dark p-3 p-lg-5">
            <form class="contact-form w-100 h-100 d-flex flex-column justify-content-center" method="POST"
                action="contact.php">
                <div class="">
                    <label for="name" class="contact-label text-light">Your name:</label><br />
                    <input type="text" id="name" name="name" class="contact-input w-100" required />
                </div>
                <div class="">
                    <label for="email" class="contact-label text-light">Your email:</label><br />
                    <input type="email" id="email" name="email" class="contact-input w-100" required />
                </div>
                <div class="">
                    <label for="subject" class="contact-label text-light">Subject:</label><br />
                    <input type="text" id="subject" name="subject" class="contact-input w-100" required />
                </div>
                <div class="">
                    <label for="message" class="contact-label text-light">Message</label><br />
                    <textarea type="text" name="message" id="message" class="contact-input w-100" rows="10"
                        required></textarea>
                </div>
                <div class="d-grid items-center">
                    <button type="submit" class="w-100">Send</button>
                </div>
            </form>
        </div>
    </div>
    <!-- footer -->
    <?php
include './includes/footer.php';
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>

    <script src="app.js"></script>
</body>

</html>