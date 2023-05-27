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
</head>

<body>

    {{ View::make('navbar') }}
    
<section class="" style="margin-top:150px;margin-bottom:100px;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body ">
                      <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                       <img style="height:590px;border-radius:20px;" src="https://cdn.shopify.com/s/files/1/1669/7361/products/LocalOrganicDeliveryMelbourne-MediumOrganicFruit_VegBox_1946x.jpg?v=1637019316"
                            class="img-fluid" alt="Sample image">
                      </div>
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4 text-success">Sign up</p>

                    <form class="mx-1 mx-md-4" action="{{ route('form.register') }}"  method="post">

                    
                      @csrf
                      <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">

                        <i class="fas fa-user fa-lg me-3 fa-fw text-success"></i>
                        <label class="form-label fw-bold"  for="form3Example1c">Your Name</label>
                                                               
                          <input type="text" name="name"  id="form3Example1c" class="form-control @if ($errors->has('name')) is-invalid @endif" value="{{old('name')}}"/>
                          @if ($errors->has('name'))
                        <div class="" style="color:red;">{{ $errors->first('name') }}</div>
                        @endif   
                        </div>
                          
                        </div>
    
                      <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw text-success"></i>
                        <label class="form-label fw-bold"  for="form3Example3c">Your Email</label>
                           
                          <input type="email" name="email"  id="form3Example3c" class="form-control @if ($errors->has('email')) is-invalid @endif" value="{{old('email')}}"/>
                          @if ($errors->has('email'))
                          <div class="" style="color:red;">{{ $errors->first('email') }}</div>
                          @endif
                        </div>
                       
                      </div>
    
                      <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                        <i class="fas fa-lock fa-lg me-3 fa-fw text-success"></i>
                        <label class="form-label fw-bold"  for="form3Example4c">Password</label>
                          
                          <input type="password" name="password"  id="form3Example4c" class="form-control @if ($errors->has('password')) is-invalid @endif" value="{{old('password')}}"/>
                          @if ($errors->has('password'))
                        <div class="" style="color:red;">{{ $errors->first('password') }}</div>
                        @endif
                        </div>
                      
                      </div>
                         
                     
                     
                      
    
                      <div class="mx-1 mb-3 mb-lg-4">
                        <button type="submit" class="btn btn-success btn-lg">Register</button>
                      </div>
                      <p class="mb-5 pb-lg-2" style="color: #393f81;"> <a href="register"
                        style="color: #393f81;">login here</a></p>
                    
                    </form>
                 
                 
          
                </div>
          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  
  {{ View::make('footer') }}



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
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
