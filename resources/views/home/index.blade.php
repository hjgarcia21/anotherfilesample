<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="img/x-icon" href="img/CSD-LOGO-FINAL-1005x1024.png">
    <title>College Memories</title>
</head>
<body class="font-sans antialiased">

 
  <!--Navbar Section-->
  @include('home.navbar')
  <!--Home Section-->
   @include('home.cta')
    <!-- Gallery Section -->
    @include('home.gallery')

  
        <!-- Modal for Viewing and Zooming -->

        @include('home.modal')
    <!-- Activities Section -->
   
    @include('home.activity')
    <!-- About Us Section -->
    @include('home.aboutus')


    <!-- Footer -->
  
    @include('home.footer')
</body>
</html>
