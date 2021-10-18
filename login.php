<html>
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="styles/master.css" />

        <script
        src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"
        crossorigin="anonymous"
      ></script>

        <!-- Custom Fonts -->
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">

        <title>Fruzsi&Zoli</title>
        <link rel="icon" type="image/x-icon" href="img/idopont_img.png" />

    </head>

    <script>
      $(document).ready(function () {
        var LoggedIn = false;

        $.ajax({
          url: "password.php",
          type: "GET",

          success: function (loginresult) {
            if (loginresult == "true") {
              LoggedIn = true;
              window.location.replace("wedding");
            }
          },
        });
      });

      function submitPassword() {
        var pwd = document.getElementById("password").value;

        $.ajax({
          url: "password.php",
          type: "POST",
          data: { pwd },
          success: function (result) {
            if (result == 'true'){
              window.location.replace("/");
            }
            else{
              document.getElementById("resultmsg").innerHTML = result;
              document.getElementById("password").value = "";

            }
            

          },
        });
      }
    </script>

<body> 
<nav class="navbar index fixed-top navbar-expand-lg navbar-dark" >
            
            <div class="container-fluid">
                    
            <!-- Navbar -->

                    <a class="navbar-brand" href="#" ><h1 style="font-family: 'Jonathan'; font-size: 50px; margin-top: 13px;">Fruzsi & Zoli</h1></a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>

                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

                    <div class="navbar ml-auto font-weight-light">
                      
                 
                    </div>
                        
                    </div> 
      </div>
  </nav>


  <div class="container-fluid" style="background-color: white; background-repeat: no-repeat; background-size: cover; background-position: center; height: 100vh;">
    
    <a href="#"><img src="img/hiclipart.com%20(1).png" style="max-width: 45px; opacity: .7; background-color: #b5b5b56b; border-radius: 50%; padding: 5px; position: fixed; bottom: 20px; right: 10px; z-index: 1;"></a>

    <div class="landing container text-center">

      <img class="landing_img" src="img/landing.png">
    </div>

	</div>


</div>

<section class="text-white mb-0" style="min-height: 100vh;  background-color: #808f5f">
      <div class="container" id="password_section">
        <!-- About Section Heading-->
        <h2
          class="text-center text-white font-weight-light"
          style="padding-top: 150px;"
        >
          Kérlek add meg a meghívón található jelszót:
        </h2>

        <div
          class="form-group"
          style="width: 300px; margin: 25px auto 0px auto"
        >
          <div class="btn-group">
            <input
              class="form-control"
              id="password"
              type="text"
              placeholder="Jelszó"
              required="required"
              data-validation-required-message="Kélek írd be a jelszót."
            />
            
            <button class="btn btn-light" onclick="submitPassword()" style="margin-left:10px;">
              Küldés
            </button>
            <script>
                document.getElementById('password').addEventListener('keypress', function(event) {
                    if (event.keyCode == 13) {
                        event.preventDefault();
                        submitPassword()
                    }
                });
            </script>
          </div>
          <p class="help-block" id="resultmsg" style="font-size:25px;"></p>
        </div>
      </div>
    </section>
    
</body>
    
</html>