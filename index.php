<?php
$error = '';
$success = '';
$name = '';
$email = '';
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if (empty($name) || empty($email) || empty($message)) {
        $error = "Please fill in all fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    } else {
        // Example: send mail or save to DB here (use the code from above)
        // For demo:
        $success = "Thank you, $name! Your message has been received.";
        
        // Clear form fields on success
        $name = $email = $message = '';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Visit Nepal and experience the majestic Himalayas, rich culture, and adventure of a lifetime. Book your trek today!">
    <meta name="keywords" content="nepal, mountains, culture,tourism">
    <meta name="author" content="Aakriti Dhungel">
    <link rel="icon" type="image/x-icon" href="./favicon.ico">


    <title>Torism in Nepal</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">Tourism in Nepal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#destinations">Destinations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero bg-image" style="background-image: url('images/HeroImage.jpg'); height: 100vh; background-size: cover; background-position: center; ">
        <div class="d-flex justify-content-center align-items-center text-center text-white" style="height: 100%;">
            <div>
                <h1 class="display-4 fw-bold">Welcome to Tourism in Nepal</h1>
                <p class="lead fw-bold " style="color: rgb(255, 255, 255);">Your one-stop solution for amazing services.</p>                
                <a href="#services" class="btn btn-primary btn-lg">Explore Our Services</a>
            </div>
        </div>
    </section>

   
     <!-- Destinations Section -->
     <section id="destinations" class="destinations py-5">
        <div class="container">
            <h2 class="text-center mb-5">Top Destinations</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="images/trekking.jpg" class="card-img-top" alt="Bouddhanath Stupa">
                        <div class="card-body">
                            <h5 class="card-title">Everest Base Camp</h5>
                            <p class="card-text">A thrilling trek to the foot of the world’s highest peak, offering stunning views and a glimpse into Nepali culture.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/garden-of-drems.jpg" class="card-img-top" alt="Garden of Dreams">
                        <div class="card-body">
                            <h5 class="card-title">Garden of Dreams</h5>
                            <p class="card-text">A neo-classical historical garden in the heart of Kathmandu.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/bhaktapur-durbar-square.jpg" class="card-img-top" alt="Bhaktapur Durbar Square">
                        <div class="card-body">
                            <h5 class="card-title">Bhaktapur Durbar Square</h5>
                            <p class="card-text">An ancient city full of history and culture.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services py-5">
        <div class="container">
            <h2 class="text-center mb-5">Our Services</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="images/guide-tours.jpg" class="card-img-top" alt="Service 1">
                        <div class="card-body">
                            <h5 class="card-title">Guided Tours</h5>
                            <p class="card-text">Get personalized guided tours of the best destinations in Nepal.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/adventure-packages.jpg" class="card-img-top" alt="Service 2">
                        <div class="card-body">
                            <h5 class="card-title">Adventure Packages</h5>
                            <p class="card-text">Explore the best adventure activities, including trekking and rafting.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/luxury-stays.jpg" class="card-img-top" alt="Service 3">
                        <div class="card-body">
                            <h5 class="card-title">Luxury Stays</h5>
                            <p class="card-text">Stay in the finest hotels and resorts across Nepal.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about py-5">
        <div class="container">
            <h2 class="text-center mb-4">About Us</h2>
            <p><strong>Welcome to Explore Nepal! </strong> We are your gateway to discovering the beauty, culture, and adventure of Nepal. From the towering Himalayas to the vibrant streets of Kathmandu, we specialize in creating personalized travel experiences that cater to all kinds of travelers.

            Our team of local experts is dedicated to offering you authentic, sustainable, and unforgettable journeys. Whether you’re trekking to Everest Base Camp, exploring UNESCO World Heritage Sites, or enjoying a wildlife safari, we ensure your trip is seamless and enriching.
                
            Experience Nepal like never before with Explore Nepal—where adventure, culture, and nature come together. Let's make your dream journey a reality!</p>
            <p>We are a dedicated team providing top-notch services to help you achieve your goals. Our focus is on quality, integrity, and customer satisfaction. We specialize in a wide range of services that meet the needs of modern businesses.</p>
        </div>
    </section>


     <!-- Contact Form Section -->
     <section id="contact" class="contact py-5 ">
        <div class="container">
            <h2 class="text-center mb-4">Contact Us</h2>
            <!-- Error Message -->

            <?php if ($error): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>

            <?php if ($success): ?>
                <div class="alert alert-success"><?php echo $success; ?></div>
            <?php endif; ?>


            <form action="process_contact.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" name="name" id="name" class="form-control border border-3" value="<?php echo $name; ?>" required>

                </div>                
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control border border-3" value="<?php echo $email; ?>" required>

                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea name="message" id="message" class="form-control border border-3" rows="4" required><?php echo $message; ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary border border-3">Submit</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light text-center py-4">
        <p>&copy; 2025 Torism in Nepal. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS, Popper, and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>d
