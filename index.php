<?php
      session_start();

      if(isset($_SESSION["pwd"])) {
?>
<!doctype html>

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

    <script type="text/javascript">

        $(document).ready(function() {
        // Transition effect for navbar 
        $(window).scroll(function() {
          // checks if window is scrolled more than 500px, adds/removes solid class
          if($(this).scrollTop() > 5) { 
              $('.navbar').addClass('solid');
          } else {
              $('.navbar').removeClass('solid');
          }
        });
    });

    var counter = 0;
        function addField(){
          if(counter < 6){
            counter++;
            var input = document.createElement("input");
            input.id = 'plus_name_' + counter;
            input.type = 'text';
            input.class= 'form-control';
            input.style= 'width:100%; margin-top: 5px; padding: 8px; border-radius: 8px;'
            input.placeholder = 'Kísérő ' + counter;
            document.getElementById("newElementId").appendChild(input);
          }
          
        }
        function deleteField(){
          if(counter > 0){
            id = 'plus_name_' + counter;
            var last_input = document.getElementById(id);
            document.getElementById("newElementId").removeChild(last_input);
            counter--;
          }
        }

        $("#room_button").click(function(){
          
            $("#szallas_foglalas").slideToggle();
          });

    </script>

<script>
  $(document).ready(function () {
    var LoggedIn = false;

    $.ajax({
      url: "password.php",
      type: "GET",

      success: function (result) {
        if (result == "true") {
          LoggedIn = true;
          console.log(LoggedIn);
          
        }
      },
    });

              // Set the date we're counting down to
              var countDownDate = new Date("Sep 4, 2021 16:00:00").getTime();

              // Update the count down every 1 second
              var x = setInterval(function() {

                // Get today's date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in the element with id="demo"
                document.getElementById("countdown").innerHTML = days + " nap " + hours + " óra "
                + minutes + " perc";

                // If the count down is finished, write some text
                if (distance < 0) {
                  clearInterval(x);
                  document.getElementById("countdown").innerHTML = "EXPIRED";
                }
              }, 1000);
  });
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
                      <ul class="navbar-nav">
                      <li class="nav-item">

                       <a class="nav-link" href="#section1">Helyszín és dátum</a>
                      </li>

                      <li class="nav-item">

                       <a class="nav-link" href="#section2">Információk</a>
                      </li>
                       <li class="nav-item">

                       <a class="nav-link" href="#section3">Visszajelzés</a>

                    </ul>
                 
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



  <section id="section1" style="min-height: 100vh;  background-color: #808f5f">

    <div class="container text-white mb-0 text-center">
      <h2
      class="font-weight-light" style="padding-top: 15vh; line-height: 1.6;"
      >
      Szeretettel várunk a nagy napunkra és az azt követő mulatsággal egybekötött vacsorára.      </h2>

      <p class="lead text-center" id="countdown" style="font-size: 35px;"></p>


      <!-- About Section Content-->

      <div class="row">
        <div class="col-lg-4 ml-auto">
          <img
            src="img/helyszin_img.png"
            width="100%;"
            style="padding: 20px 50px"
          />
          <h2
            class="page-section-heading text-center text-white font-weight-light"
          >
            Helyszín
          </h2>
          <p class="lead text-center " >
            Balatonfüred, Bajcsy-Zsilinszky u. 28, 8230
          </p>
        </div>
        <div class="col-lg-4 mr-auto">
          <img
            src="img/datum_img.png"
            width="100%;"
            style="padding: 20px 50px; transform: rotate(180deg);"
          />
          <h2
            class="page-section-heading text-center text-white font-weight-light"
          >
            Dátum
          </h2>
          <p class="lead text-center" style="  margin-bottom: 50px;">2021 Szeptember 04. Vendégvárás 15:30-tól.</p>
        </div>
      </div>
    </div>

  </section>

  <div class="container text-center">

    <section id="section2" style="min-height: 100vh;" class="portfolio">
  
      <div>
  
        <h2 class="display-3" style="padding-top: 15vh;" >Információk</h2>

        <p class="lead font-weight-bold text-center" style="font-family: 'Montserrat', sans-serif;">
          
          Dress-code : Laza, elegáns öltözet, a lakodalom kerthelyiségben lesz.<br><br>
          Háztartásunk teljes, nincs is szükség másra,
          elég az edényünk, van grill, mixer és párna,
          így csak annyit kérünk nászajándékba,
          hogy a perselymalacunk se maradjon soványka.
        </p>



      </div>

        <!-- Portfolio Grid Items-->
        <div class="row">
          <!-- Portfolio Item 1-->
          <div class="col-lg mb-5">
            <div
              class="portfolio-item mx-auto"
              data-toggle="modal"
              data-target="#portfolioModal1"
            >
            
              <img
                class="img-fluid"
                src="img/icon_program.png"
                alt=""
              />
            </div>
          </div>
          <!-- Portfolio Item 2-->
          <div class="col-lg mb-5">
            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">


                  <img
                    class="img-fluid"
                    src="img/icon_galeria.png"
                    alt=""
                  />
                  
            </div>
          </div>

          <p class="lead font-weight-bold text-center" style="font-family: 'Montserrat', sans-serif; margin-bottom: 100px;">
            
            További kérdések esetén keress minket a következő telefonszámon: +36703899512.
          </p>
          
  
    </section>
  
  </div>


  <section id="section3" style="min-height: 100vh;  background-color: #808f5f">

    <div class="container text-light">

      <h2 class="display-3 text-center" style="padding-top: 15vh;" >Visszajelzés</h2>

      <p class="lead text-center">Kérünk benneteket, hogy legkésőbb 2021. március végéig jelezzetek vissza a részvétellel kapcsolatban.</p>

      <!-- Contact Section Form-->
      <div class="row">
       

        <div class="col-lg-8 mx-auto" style="margin-bottom: 100px; margin-top: 50xp;">

          <form id="contactForm" name="sentMessage" novalidate="novalidate">

              <div class="control-group">
                <div class="form-group">
                  <label>Neved:</label>
                  <input
                    class="form-control"
                    id="name"
                    type="text"
                    placeholder="Neved"
                    required="required"
                    data-validation-required-message="Please enter your name."
                    
                  />
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                  <div class="form-group" >
                  <label>Veled együtt visszajelez:</label><br>
                  <button type="button" class="btn btn-light rounded-circle" onclick="addField()"><i class="fas fa-plus"></i></button>
                  <button type="button" class="btn btn-light rounded-circle" onclick="deleteField()"><i class="fas fa-minus"></i></button>

                  <div id="newElementId" style="margin-top:15px;"></div>
                  </div>
                </div>
            
              <div class="control-group">
                <div class="form-group">
                  <label>Email címed:</label>
                  <input
                    class="form-control"
                    id="email"
                    type="email"
                    placeholder="Email címed"
                    required="required"
                    data-validation-required-message="Please enter your email address."
                  />
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group">
                  <label>Telefonszámod:</label>
                  <input
                    class="form-control"
                    id="phone"
                    type="tel"
                    placeholder="Telefonszámod"
                    required="required"
                    data-validation-required-message="Please enter your phone number."
                  />
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group ">
                  <div class="form-check" style="margin-bottom:10px;">
                  <input
                    name="coming"
                    class="form-check-input"
                    id="ott_leszek"
                    type="radio"
                    style="transform: scale(1.2);"
                    value="Ott leszek!"
                    checked
                  />
                  <label for="ott_leszek" class="form-check-label" style="font-size:18px;">Ott leszek!</label>
                  </div>
                  <div class="form-check">
                  <input
                    name="coming"
                    class="form-check-input"
                    id="nem_leszek"
                    type="radio"
                    style="transform: scale(1.2);"
                    value="Sajnos nem tudok menni."
                  />
                  <label for="nem_leszek" class="form-check-label" style="font-size:18px;">Sajnos nem tudok menni.</label>
                  </div>
                </div>
              </div>

           
            <div class="control-group">
              <div class="form-group">
                <label>Üzeneted:</label>
                <textarea
                  class="form-control"
                  id="message"
                  rows="5"
                  placeholder="Üzenet"
                  
                ></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br />
            <div id="success"></div>
            <div class="form-group text-center">
              <button
                class="btn btn-outline-light"
                id="sendMessageButton"
                type="submit"
                style="font-size: 20px; width: 100%;"

              >
               <p style="margin-bottom: 0px;"> Küldés</p>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    

  <script>



        $('#sendContactMessageButton').click(function() {

          var name = document.getElementById("cname").value;
          var email = document.getElementById("cemail").value;
          var phone = document.getElementById("cphone").value;
          var message = document.getElementById("cmessage").value;
          $.ajax({
            type: "POST",
            url: "mail/contact_me.php",
            data: { name,
            email,
            phone,
            message,
            

          }
          }).done(function( e ) {
            if (e == true){
             document.getElementById('msg_success').style.display="";
            }
            else {
              document.getElementById('msg_danger').style.display="";
            }
          });
        });

  </script>

  

  </section>
        
<!-- Blog Modals-->

      <!-- Blog Modal 1-->
      <div
        class="portfolio-modal modal fade"
        id="portfolioModal1"
        tabindex="-1"
        role="dialog"
        aria-labelledby="portfolioModal1Label"
        aria-hidden="true"
        
      >
        <div class="modal-dialog modal-xl" role="document" >
          <div class="modal-content">

              <button
                class="close"
                type="button"
                data-dismiss="modal"
                aria-label="Close"
                style="color: #141a1467"
                
              >
                <span><i class="fa fa-times" aria-hidden="true" style="width: 20px;"></i></span>
              </button>

            <div class="modal-body">
              <div class="container text-center">

                <div class="row justify-content-center">
                  <div class="col-lg-8" style="margin-bottom: 100px;">

                      <!-- Blog Modal - Title-->


                      <!-- Blog Modal - Text-->

                          <img class="img-fluid" src="img/program.png">

                      <!-- Blog Modal - Button-->
                            <!--
                        <div class="text-center">
                          <button class="btn btn-light btn-lg" data-dismiss="modal" style="background-color: #ffdb96;">
                          
                          Bezárás
                          </button>
                        </div>
                        -->

                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>

      </div>
       <!-- Blog Modal 2-->
       <div
       class="portfolio-modal modal fade"
       id="portfolioModal2"
       tabindex="-1"
       role="dialog"
       aria-labelledby="portfolioModal1Label"
       aria-hidden="true"
       
     >
       <div class="modal-dialog modal-xl" role="document" >
         <div class="modal-content">

             <button
               class="close"
               type="button"
               data-dismiss="modal"
               aria-label="Close"
               style="color: #141a1467"
               
             >
               <span><i class="fa fa-times" aria-hidden="true" style="width: 20px;"></i></span>
             </button>

           <div class="modal-body">
             <div class="container">

               <div class="row justify-content-center">
                 <div class="col-lg-8 m-5">

                     <!-- Blog Modal - Title-->
                         <h2
                           class="portfolio-modal-title text-secondary mb-5 mt-0  text-center"
                           id="portfolioModal1Label"
                         >
                           Galéria
                         </h2>

                     <!-- Blog Modal - Text-->
   
                         <p class="lead font-weight-bold text-center" style="font-family: 'Montserrat', sans-serif;">
                           Az esküvő után itt találjátok majd az elkészült képeket.
                         </p>


                     <!-- Blog Modal - Button-->
                           <!--
                       <div class="text-center">
                         <button class="btn btn-light btn-lg" data-dismiss="modal" style="background-color: #ffdb96;">
                         
                         Bezárás
                         </button>
                       </div>
                       -->

                 </div>
               </div>

             </div>
           </div>

         </div>
       </div>

     </div>

      <!-- Blog Modal 3-->
      <div
        class="portfolio-modal modal fade"
        id="portfolioModal3"
        tabindex="-1"
        role="dialog"
        aria-labelledby="portfolioModal1Label"
        aria-hidden="true"
        
      >
        <div class="modal-dialog modal-xl" role="document" >
          <div class="modal-content">

              <button
                class="close"
                type="button"
                data-dismiss="modal"
                aria-label="Close"
                style="color: #141a1467"
                
              >
                <span><i class="fa fa-times" aria-hidden="true" style="width: 20px;"></i></span>
              </button>

            <div class="modal-body">
              <div class="container">

                <div class="row justify-content-center">
                  <div class="col-lg-8 m-5">

                      <!-- Blog Modal - Title-->
                          <h2
                            class="portfolio-modal-title text-secondary mb-5 mt-0  text-center"
                            id="portfolioModal1Label"
                          >
                            Példa blog cím 3
                          </h2>

                      <!-- Blog Modal - Text-->
    
                          <p>
                            Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet consectetur adipisci[ng]velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum[d] exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                          </p>

                          <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat…
                          </p>

                      <!-- Blog Modal - Button-->
                            <!--
                        <div class="text-center">
                          <button class="btn btn-light btn-lg" data-dismiss="modal" style="background-color: #ffdb96;">
                          
                          Bezárás
                          </button>
                        </div>
                        -->

                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>

      </div>
        
 <!-- End of Blog Modals-->     
 
 
 

    
</body>

    
</html>

<?php
  }
  else{
    header("Location: login");
  }
  
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<script src="mail/jqBootstrapValidation.js"></script>
<script src="mail/contact_me.js"></script>

