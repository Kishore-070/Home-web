<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    <script src="https://kit.fontawesome.com/996973c893.js"></script>
    <link href="css/homepage.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400;500;600;700;800&family=Roboto+Slab:wght@200;400;600;900&display=swap" rel="stylesheet"/>

    <title>Portfolio</title>

    <style>

        html {
               scroll-behavior: smooth;
            }

          body {
               background-image: url(images/home.gif);
               background-size: cover;
               font-family: "Baloo Tamma 2", cursive;
            }
          .navigation-link {
                border: 2px solid transparent;
            }

           .navigation-link:hover {
                text-decoration: none;
                border-bottom: 2px solid #f5ba09;
                transition: 0.5s ease;
            }

            .main-container {
                 height: 100vh;
            }

            .main_row {
                 display: flex;
                 justify-content: center;
                 align-items: center;
            }

            .main_row h1 {
                 font-size: 5rem;
            }

            .main_row img {
                 width: auto;
                 height: 100vh;
            }
            .about {
                 background: #313552;
                 border-radius: 0.5rem;
            }

             .card {
                 border-bottom: 8px solid #f5ba09;
            }

    </style>

  </head>

  <body>
    <div class="container navigation pt-3">
      <div class="row">
        <div class="col-6 d-flex justify-content-start align-items-center">
          <i class="fas fa-code fa-2x text-warning pb-3"></i>
          <h5 class="d-inline pl-2 text-white">Portfolio</h5>
        </div>
        <div class="col-6 pt-2">
          <div
            class="row text-center p-0 d-flex justify-content-end align-items-center" >
            <div class="col-3">
              <a href="#about" class="text-white navigation-link">About</a>
            </div>
           
          </div>
        </div>
      </div>
    </div>

    <div class="main-container container">
      <div class="row main_row">
        <div class="col-6">
          <h2 class="text-white">Hello, I'm</h2>
          <h1 class="text-warning m-heading">Kishore R</h1>
          <h2 class="text-white">Budding Web Developer</h2>
        </div>
        <div class="col-6">
          <img src="images/profilepic.jpg" class="img-fluid"
          />
        </div>
      </div>
    </div>
    <div id="about" class="container about p-5">
      <div class="row">
        <div class="col-6">
          <img src="images/about.gif" class="img-fluid" />
        </div>
        <div class="col-6 pl-5 pt-5 pb-5 text-white">
          <h3 class="text-warning">About Me</h3>
          <p>
             An inquistive , energitic <b class="text-warning">Budding computer science and engineer</b>
             skilled in leadership , with some good foundation in programmic logic seeking to leverage good developmental skills
             and creativity as a programmer
          </p>
          <br />
        </div>
      </div>
    </div>

    <footer>
      <div class="container text-muted text-center py-3 mt-5">
        <h5>
          Copyright &copy; 2022 |
          <a class="text-warning text-decoration-none" href="#about"
            >Kishore R</a
          >
        </h5>
      </div>
    </footer>
  </body>
</html>