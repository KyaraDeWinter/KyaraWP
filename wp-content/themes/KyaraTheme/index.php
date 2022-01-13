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
    <!-- Carousel -->
    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://images.pexels.com/photos/733852/pexels-photo-733852.jpeg?cs=srgb&dl=pexels-tirachard-kumtanom-733852.jpg&fm=jpg" class="d-block w-100" alt="Image 1">
            </div>
            <div class="carousel-item">
              <img src="https://images.pexels.com/photos/8251157/pexels-photo-8251157.jpeg?cs=srgb&dl=pexels-pnw-production-8251157.jpg&fm=jpg" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/2014697/pexels-photo-2014697.jpeg?cs=srgb&dl=pexels-ylanite-koppens-2014697.jpg&fm=jpg" class="d-block w-100" alt="Image 3">
            </div>
        </div>
    </div>
  </header>

  <body>

    <?php the_field('page_title'); ?>

    <?php
     $btn_link = get_the_field('intro_text');
    ?>

    <?php 
    $link = get_field('link');
    if( $link ): 
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>

    <div class="container block">
        <!-- (row of) Cards -->
        <div class="row">
            <?php $the_query = new WP_Query( 'posts_per_page=3' ); // Define our WP Query Parameters ?>

            <?php 
                // Start our WP Query
                while ($the_query -> have_posts()) : $the_query -> the_post(); 
                // Display the Post Title with Hyperlink
            ?>

            <div class="col-4">
                <div class="card">

                    <?php 
                        $image = get_field('image');
                        if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>

                    <div class="card-body">
                        <a class="h5" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                        <p class="card-text"><?php the_excerpt(__('(more…)')); // Display the Post Excerpt (automatisch text afkorten) ?></p> 
                    </div>
                </div>
            </div>

            <?php 
                // Repeat the process and reset once it hits the limit
                endwhile;
                wp_reset_postdata();
            ?>
        </div>
    </div>
    

    <!-- Quote -->
    <?php include 'quote.php';?>

    <!-- Text/image -->
    <div class="container textimage block">
        <div class="row">
            <div class="col-8">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae iste eaque beatae recusandae nostrum perspiciatis veritatis saepe consectetur, ex quibusdam quam unde velit odit voluptatum sed error, veniam qui, obcaecati doloribus placeat iusto eveniet? Nesciunt sequi iste libero distinctio culpa!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nobis quis delectus, magnam magni tenetur? Numquam ipsam tempore repudiandae ut!</p>
                <a href="#" class="btn btn-primary">Lees meer<i class="fas fa-chevron-right" style="margin-left: 1rem;"></i></a>
            </div>
            <div class="col-4">
                <img src="https://images.pexels.com/photos/92904/pexels-photo-92904.jpeg?cs=srgb&dl=pexels-negative-space-92904.jpg&fm=jpg" alt="Image">
            </div>
        </div>
    </div>

    <!-- Contact Text/Form  -->
    <div class="container block contact">
        <div class="row">
            <div class="col-6">
                <h5>Neem contact met mij op!</h5>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis nemo ut ducimus saepe laudantium. Dolorem deserunt architecto magni ullam aliquid!</p>
            </div>
            <div class="col-6">
            <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label class="form-label" for="textAreaExample">Message</label>
                <textarea class="form-control" id="textAreaExample1" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Verzend bericht<i class="far fa-paper-plane" style="margin-left: 1rem;"></i></button>
            </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer block">
        <div class="row footer-items">
            <div class="col">
                <h5>Lorem, ipsum dolor.</h5>
                <hr>
                <p>Lorem ipsum dolor sit.</p>
                <p>Lorem ipsum dolor sit.</p>
                <p>Lorem ipsum dolor sit.</p>
            </div>
            <div class="col">
                <h5>Lorem, ipsum dolor.</h5>
                <hr>
                <p>Lorem ipsum dolor sit.</p>
                <p>Lorem ipsum dolor sit.</p>
                <p>Lorem ipsum dolor sit.</p>
            </div>
            <div class="col">
                <h5>Contact</h5>
                <hr>
                <p><i class="fas fa-at" style="margin-right: 1rem;"></i><a href="mailto:kyaradewinter@gmail.com" style="color: white;">Stuur mij een email</a></p>
                <p><i class="fab fa-linkedin-in" style="margin-right: 1rem;"></i>Maak een connectie op LinkedIn</p>
                <p><i class="fab fa-instagram" style="margin-right: 1rem;"></i>Volg mij op Instagram</p>
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

