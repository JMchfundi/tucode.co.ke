<!DOCTYPE html>
<html lang="en">

<body class="page-portfolio">

  <?php include "fragments/header.php";?>
  
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/portfolio-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Portfolio Details</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Portfolio Details</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="slides-1 portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/app-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/product-1.jpg" alt="">
                </div>
                
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: Java Coding</li>
                <li><strong>Client</strong>: For Programmers & Developers</li>
                <li><strong>Project date</strong>: 21 June, 2019</li>
                <li><strong>Project URL</strong>: <a href="https://github.com/254web/JUHibernate">github</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Java Based Project For Hibernate Programmers</h2>
              <p>This Is A Java Based Project To Demonstrate Hibernate Configuration 
                With Dynamic Database</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <?php include "fragments/footer.php";?>

</body>

</html>