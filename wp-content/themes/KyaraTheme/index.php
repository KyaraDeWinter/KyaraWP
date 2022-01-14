<?php /* Template Name: Home Template */ ?>

<?php get_header(); ?>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://kit.fontawesome.com/5b23f4b030.js" crossorigin="anonymous"></script>
        <title>Kyara's stage bij Bureau Vet</title>
    </head>

  <header>
    <!-- Image Slider -->
    <?php include 'blocks/slider.php';?>
  </header>

  <body>
    <!-- Intro -->
    <?php include 'blocks/intro.php';?>

    <!-- Row of cards (blogposts) -->
    <?php include 'blocks/blog_card.php';?>
    
    <!-- Quote -->
    <?php include 'blocks/quote.php';?>

    <!-- Footer -->
    <div class="footer block">
        <div class="row footer-items">
            <div class="col">
                <h5>Menu</h5>
                <hr>
                <p>Home</p>
                <p>Blogs</p>
                <p>Over mij</p>
                <p>Contact</p>
            </div>
            <div class="col">
                <h5>Contact</h5>
                <hr>
                <p><i class="fas fa-at" style="margin-right: 1rem;"></i><a href="mailto:kyaradewinter@gmail.com" style="color: white;">Stuur mij een email</a></p>
                <p><i class="fab fa-linkedin-in" style="margin-right: 1rem;"></i><a href="https://www.linkedin.com/in/kyara-de-winter-7919071b0/" target="_blank" style="color: white;">Maak een connectie op LinkedIn</a></p>
                <p><i class="fab fa-instagram" style="margin-right: 1rem;"></i><a href="https://www.instagram.com/xdewinter/" target="_blank" style="color: white;">Volg mij op Instagram</a></p>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>

<?php get_footer(); ?>

