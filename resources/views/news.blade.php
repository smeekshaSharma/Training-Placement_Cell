<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Latest News</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/png" sizes="48x48" href="{{URL::asset('assets/img/logo.png')}}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{URL::asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="{{URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="conn" style="margin-bottom:-10px;">
      <div class="d-flex justify-content-between align-items-center ">
          <div class="logoContainer" style="margin-left:-30px;">
              <a href="/"><img src="https://ptu.ac.in/wp-content/themes/cynic/images/classic-logo.png" style="width: 100px;height: 100px;"></a>
          </div>
          <div class="textContainer p-4 flex-grow-1  ">
              <div class="h1 fw-bold" style="color: #000080;">Training and Placement Cell</div>
              <div class="h5 fw-normal p2 px-1 d-none d-sm-block " style="color: #cc0000;">I.K. Gujral Punjab Technical University Amritsar-Campus</div>
          </div>
          <div class="additionalInfo flex-grow-4 w-3 position-absolute end-0 top-0 px-2 shadow  d-none d-lg-block text-center" style="margin-right:30px;width:300px;background-color: #cc0000;border:2px solid white;border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; border-top-right-radius: 5px;border-top-left-radius:5px;">
                    <div class="additionalInfoContent d-flex flex-column">
                      
                            <span id="SiteHeader_LblSiteEmail" >
                              <i class="fas fa-envelope" style="color:white;"></i>
                                  <a href="/" style="color:white; text-decoration: none;">campus.amritsar@ptu.ac.in</a>
                           </span>
                      <div class="seprator" style="border-bottom: 1px dotted white; padding:2px"> </div>
                        <span id="SiteHeader_LblSitePhone" class="py-1">
                          <i class="fa fa-phone-square" style="color:white;"></i>
                                <a href="/"  style="color:white; text-decoration: none;">0183-2450034 | 7087364656</a>
                          </span>
          </div>
          </div>
          
      </div>
  </div>
      <hr>
</header>
<div class="back" style="height:580px;">
  <div class="overhide"></div>
<div class="container menuu">
          <div class="optionss">
          <div class="d-grid gap-2 col-6 mx-auto">
            <a href="steam"><button class="btn btn-primary" type="button">Student Team</button></a>
            <a href="news"><button class="btn btn-primary" type="button">Job Alerts</button></a>
            <a href="exam"><button class="btn btn-primary" type="button">Placement Syllabus</button></a>
            <a href="test"><button class="btn btn-primary" type="button">Mock Test</button></a>
            <a href="/"><button class="btn btn-primary" type="button">User Panel</button></a>
        </div>
</div>
</div>
<form action="news" method="POST" class="row g-3" style="width:60%;background-color:#d9d9d9;border-radius:50px;float:right;margin-top:60px;margin-right:80px;">
@csrf
<h2 style="text-align:center;padding-top:20px;">Job Alerts</h2>
<div class="row mb-3" style="padding-top:40px;padding-left:60px;">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Title :</label>
    <div class="col-sm-10">
      <input type="text" placeholder="Enter title of news" name="title" class="form-control" id="title">
    </div>
  </div>
<div class="row mb-2" style="padding-top:5px;padding-left:40px;">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Description :</label>
    <div class="col-sm-9" style="margin-left:14px;width:610px;">
    <textarea class="form-control" placeholder="Add Description" name="description" id="floatingTextarea2" style="height: 100px"></textarea>
    </div>
  </div>
  <div class="row mb-2" style="padding-top:5px;padding-left:40px;">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Media :</label>
    <div class="col-sm-9" style="margin-left:14px;width:610px;">
    <input class="form-control" type="file" id="formFile" name="media">
    </div>
</div>
<div class="row mb-2" style="padding-top:5px;padding-left:40px;">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Image :</label>
    <div class="col-sm-9" style="margin-left:14px;width:610px;">
    <input class="form-control" type="file" id="formFile" name="image">
    </div>
</div>
<div class="row mb-2" style="padding-top:50px;padding-bottom:20px;margin-left:350px;width:25%;">
<input type="submit" class="btn btn-primary" value="Submit" onclick="Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'New job alert has been added',
  showConfirmButton: false,
  timer: 1500
})">
</div>

</form>
</div>
</div>
<script src="{{URL::asset('assets/js/sweetalert.js')}}"></script>
</body>
</html>