<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Foody - Organic Food Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
<!-- owl carousel cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!-- jquery cdn link -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
 <!--owl carousel script cdn link -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
      .login_form #email_error,
      .login_form #pass_error
      {
        display:none;
        color:red;
      }
    </style>
</head>

<body>
    {{View::make('navbar')}}
    <section class="" style="margin-top:100px;margin-bottom:100px;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-6 d-none d-md-block">
                    <img style="width:450px;height:600px;;" src="https://cdn.shopify.com/s/files/1/0407/6240/9122/articles/52_1000x1000.png?v=1618434746"
                      alt="login form" class="" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-6 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
                       
                      <form class="login_form" action="loginpost" method="post" name="form" onsubmit="return validated()">
                      @csrf
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <!--<i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                         <span class="h1 fw-bold mb-0">Logo</span>-->
                <h1 class="fw-bold m-0" style="color:rgb(120, 188, 18)">F<span class="fw-bold" style="color:#F65005">oo</span>dy</h1>

                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
      
                        <div class="form-outline mb-4">
                          <label class="form-label fw-bold" for="form2Example17">Email address</label>

                          <input type="email" id="form2Example17"  name="email" class="form-control form-control-lg" />
                          <div id="email_error">Please fill up your email</div>
                        </div>
      
                        <div class="form-outline mb-4">
                          <label class="form-label fw-bold" for="form2Example27">Password</label>

                          <input  type="password" id="form2Example27"  name="password" class="form-control form-control-lg" />
                          <div id="pass_error">Please fill up your email</div>

                        </div>
      
                        <div class="pt-1 mb-4">
                          <button class="btn btn-success btn-lg btn-block" type="submit">Login</button>
                        </div>
      
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register"
                            style="color: #393f81;">Register here</a></p>
                          
                        
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      {{View::make('footer')}}

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
           //Validation Code For Inputs
           var email=document.forms['form']['email'];
           var password=document.forms['form']['password'];

           var eami_error = document.getElementById('email_error');
           var pass_error = document.getElementById('pass_error');

           function validated()
           {
            if(email.value.length < 9)
            {
                email.style.border = "1px solid red";
                email_error.style.display = "block";
                email.focus();
                return false;
            }
            if(password.value.length < 6)
            {
                password.style.border = "1px solid red";
                pass_error.style.display = "block";
                password.focus();
                return false;
            }
           }



    </script>
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel(
            {
                loop:true,
                margin:5,
                nav:false,
            
                autoplay:false,
                autoplayTimeout:2000,
                dots:true,
            
                //stagePadding:50,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            })

          
    </script>
</body>

</html>