<!DOCTYPE html>
<html lang="en">
  
  <!-- Header -->
  <?php include 'header.php' ?>
  <!-- Akhir Header -->

  <body id="beranda">

    <!-- Navbar -->
  <?php include 'nav.php'; ?>
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
    <div class="spesial p-5 text-center" id="spesial">
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

    <!-- Tentang -->
    <section id="tentang">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2 class="fw-bold">TENTANG KAMI</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente,
              error, dignissimos reprehenderit voluptas recusandae suscipit,
              eligendi dolore eius quos eos deserunt vero esse beatae?
              Similique?
            </p>
          </div>
          <div class="col-md-4">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Distinctio iusto sapiente porro ab, rerum modi illo ut eaque
              voluptate autem odit reprehenderit optio veniam iure quisquam
              reiciendis placeat ex. Nesciunt?
            </p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,320L18.5,293.3C36.9,267,74,213,111,181.3C147.7,149,185,139,222,138.7C258.5,139,295,149,332,165.3C369.2,181,406,203,443,186.7C480,171,517,117,554,128C590.8,139,628,213,665,234.7C701.5,256,738,224,775,186.7C812.3,149,849,107,886,90.7C923.1,75,960,85,997,117.3C1033.8,149,1071,203,1108,218.7C1144.6,235,1182,213,1218,202.7C1255.4,192,1292,192,1329,165.3C1366.2,139,1403,85,1422,58.7L1440,32L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Tentang -->

    <!-- Galeri -->
    <section id="galeri">
      <div class="container">
        <div class="row text-center mb-3">
          <h2 class="fw-bold">GALERI</h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-3">
            <a href="#">
              <img
                src="img/gambar/1.jpg"
                alt="Gambar 1"
                class="img-fluid galeri-img"
              />
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img
                src="img/gambar/2.jpg"
                alt="Gambar 2"
                class="img-fluid galeri-img"
              />
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img
                src="img/gambar/3.jpg"
                alt="Gambar 3"
                class="img-fluid galeri-img"
              />
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img
                src="img/gambar/4.jpg"
                alt="Gambar 4"
                class="img-fluid galeri-img"
              />
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img
                src="img/gambar/5.jpg"
                alt="Gambar 5"
                class="img-fluid galeri-img"
              />
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img
                src="img/gambar/6.jpg"
                alt="Gambar 6"
                class="img-fluid galeri-img"
              />
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img
                src="img/gambar/7.jpg"
                alt="Gambar 7"
                class="img-fluid galeri-img"
              />
            </a>
          </div>
          <div class="col-md-3">
            <a href="#">
              <img
                src="img/gambar/8.jpg"
                alt="Gambar 8"
                class="img-fluid galeri-img"
              />
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Galeri -->

    <!-- Kontak -->
    <div class="p-5" id="kontak">
      <div class="container">
        <div class="grid">
          <div class="row mt-5 text-center">
            <h2 class="fw-bold">KONTAK KAMI</h2>
          </div>
          <div class="row mt-5">
            <div class="col-md-3">
              <i class="fa fa-address-book fa-4x text-primary"></i>
              <p class="h4 my-2">Kontak Person</p>
              <p>
                <i class="fa fa-phone navbar-brand"
                  ><a class="fw-bold navbar-brand text-dark">
                    (0748) 3215263</a
                  ></i
                >
                <br />
                <i class="fab fa-whatsapp navbar-brand"
                  ><a class="fw-bold navbar-brand text-dark">
                    +62 823 7644 7440</a
                  ></i
                >
              </p>
            </div>
            <div class="col-md-3">
              <i class="fa fa-address-card fa-4x text-info"></i>
              <p class="h4 my-2">Sosial media</p>
              <p>
                <i class="fab fa-facebook-square navbar-brand text-info">
                  <a
                    href="https://www.facebook.com/MKM-Percetakan-107748139780743/"
                    class="fw-bold navbar-brand text-dark"
                  >
                    Facebook</a
                  > </i
                ><br />
                <i class="fab fa-instagram navbar-brand text-danger">
                  <a
                    href="https://www.instagram.com/mkm_percetakan/"
                    class="fw-bold navbar-brand text-dark"
                  >
                    Instagram</a
                  ></i
                >
              </p>
            </div>
            <div class="col-md-3">
              <i class="fa fa-map-marker fa-4x text-danger"></i>
              <p class="h4 my-2">Lokasi</p>
              <p class="fw-bold text-dark">
                Jalan Depati Parbo, Desa Pondok Siguang, Kecamatan Danau Kerinci
                Barat, Kabupaten Kerinci, Jambi, 37173.
              </p>
            </div>
            <div class="col-md-3">
              <i class="fa fa-map fa-4x text-success"></i>
              <p class="h4 my-2">Map</p>
              <iframe
                class="img-thumbnail bg-dark"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.0891721060993!2d101.42840291575212!3d-2.1193339334596617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2d9f90359dd44d%3A0x9dea0d8de90a5bac!2sMKM%20(Muda%20Karya%20Mandiri)!5e0!3m2!1sid!2sid!4v1655571959064!5m2!1sid!2sid"
                width="280"
                height="150"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Kontak -->
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
        text: "SELAMAT DATANG DI WEBSITE <br> MKM-GROUP",
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
