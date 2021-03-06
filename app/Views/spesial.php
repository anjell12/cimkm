<!DOCTYPE html>
<html lang="en">
 
  <!-- Header -->
  <?php include 'header.php' ?>
  <!-- Akhir Header -->

  <body id="beranda">
    
    <!-- Navbar -->
 <?php include 'nav.php' ?>
    <!-- Akhir Navbar -->

    <!-- slide -->
    <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-bs-ride="true"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="img/gambar/gambar1.jpg"
            class="d-block w-100 h-100 gradient"
            alt="Gambar 1"
          />
        </div>
        <div class="carousel-item">
          <img
            src="img/gambar/gambar2.jpg"
            class="d-block w-100 h-100"
            alt="Gambar 2"
          />
        </div>
        <div class="carousel-item">
          <img
            src="img/gambar/gambar3.jpg"
            class="d-block w-100 h-100"
            alt="Ganbar 3"
          />
        </div>
        <div class="carousel-caption">
          <h1 class="animasi fw-bold text-light"></h1>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- akhir slide -->

    <!-- spesial -->
    <div class="spesial p-5 text-center" id="spesial2">
      <div class="container">
        <div class="grid">
          <div class="row mt-5">
            <h2 class="fw-bold">SPESIAL</h2>
          </div>
          <div class="row mt-5">
            <div class="col-md-3 text-center">
              <i class="fa fa-print fa-4x text-warning"></i>
              <p class="h2 fw-bold my-2">Percetakan</p>

              <p class="lead">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi
                nam eum porro quas cumque dolores cum iure praesentium debitis
                neque.
              </p>
            </div>

            <div class="col-md-3 text-center">
              <i class="fa fa-barcode fa-4x text-dark"></i>
              <p class="h2 fw-bold my-2">Bingkai Foto</p>
              <p class="lead">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil
                error corrupti, numquam porro deserunt quos saepe esse
                perferendis consequuntur modi!
              </p>
            </div>
            <div class="col-md-3 text-center">
              <i class="fa fa-camera fa-4x text-info"></i>
              <p class="h2 fw-bold my-2">Fotografi</p>
              <p class="lead">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum
                quasi adipisci porro ex exercitationem minus excepturi corporis,
                placeat culpa cum! Quibusdam?
              </p>
            </div>
            <div class="col-md-3 text-center">
              <i class="fa fa-palette fa-4x text-danger"></i>
              <p class="h2 fw-bold my-2">Desain Grafis</p>
              <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. In sed
                ipsa iste, animi eligendi veniam ab nobis! Beatae, libero?
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir Spesial -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#0dcaf0"
        fill-opacity="1"
        d="M0,128L21.8,138.7C43.6,149,87,171,131,186.7C174.5,203,218,213,262,218.7C305.5,224,349,224,393,192C436.4,160,480,96,524,74.7C567.3,53,611,75,655,101.3C698.2,128,742,160,785,149.3C829.1,139,873,85,916,85.3C960,85,1004,139,1047,165.3C1090.9,192,1135,192,1178,186.7C1221.8,181,1265,171,1309,160C1352.7,149,1396,139,1418,133.3L1440,128L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"
      ></path>
    </svg>
    <!-- footer -->
    <footer
      class="d-flex flex-wrap justify-content-center align-items-center py-3 bg-info"
    >
      <div class="col-md-0 d-flex align-items-center">
        <a
          href="/"
          class="mb-3 me-2 mb-md-0 text-white text-decoration-none lh-1"
        >
        </a>
        <span class="text-light">Copyright &copy; 2022 MKM-Group</span>
      </div>
    </footer>
    <!-- Akhir footer -->

    <button
      type="button"
      class="btn btn-secondary btn-floating btn-lg"
      id="btn-back-to-top"
    >
      <i class="fas fa-angle-up"></i></button
    ><button
      type="button"
      class="btn btn-whatsapp btn floating btn-lg"
      id="whatsapp"
    >
      <i class="fab fa-whatsapp text-light"><a href="#"></a></i>
    </button>
    <script
      type="text/javascript"
      src="js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="aos/aos.js"></script>
    <script type="text/javascript">
      AOS.init({
        once: true,
        duration: 2000,
      });
    </script>
    <script type="text/javascript" src="gsap/gsap.min.js"></script>
    <script type="text/javascript" src="gsap/TextPlugin.min.js"></script>
    <script type="text/javascriptc" src="js/vanilla-tilt.js"></script>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script>
      $(".js-scroll-trigger").click(function () {
        $(".navbar-collapse").collapse("hide");
      });
    </script>
    <script type="text/javascript">
      gsap.registerPlugin(TextPlugin);
      gsap.to(".animasi", {
        duration: 2,
        delay: 2,
        text: "SPESIAL MKM-GROUP",
      });
      gsap.from(".navbar", {
        duration: 1.5,
        y: -100,
        opcity: 0,
        ease: "bounce",
      });
    </script>
  </body>
</html>
