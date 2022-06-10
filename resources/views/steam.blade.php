<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Student Team</title>
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
<div class="back" style="height:570px;">
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

<form action="steam" method="POST" class="row g-3" style="width:60%;background-color:#d9d9d9;border-radius:50px;float:right;margin-top:60px;margin-right:80px;">
@csrf
<h2 style="text-align:center;padding-top:20px;">Student Team</h2>
<div class="row mb-3" style="padding-top:40px;padding-left:30px;">
    <label for="input" class="col-sm-3 col-form-label">Student's Name :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" title="Please enter correct name" name="sname" placeholder="Enter name of Student" id="sname">
    </div>
  </div>
  <div class="row mb-3" style="padding-left:30px;">
    <label for="inputPassword3" class="col-sm-3 col-form-label">Designation :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="designation" placeholder="Enter designation" id="designation">
    </div>
  </div>
  <div class="row mb-3" style="padding-left:30px;">
  <label for="inputPassword3" class="col-sm-3 col-form-label">Branch :</label>
    <div class="col-sm-9">
    <select id="inputState" class="form-select" name="branch">
      <option selected>Choose Branch</option>
      <option>Computer Science Engineering</option>
      <option>Mechanical Engineering</option>
      <option>Computer Application</option>
    </select>
</div>
<div class="col-md-5" style="padding-top:20px;padding-left:30px;">
<div class="row md-3">
<label for="inputPassword3" class="col-sm-4 col-form-label">Course :</label>
    <div class="col-sm-8">
    <select id="inputState" class="form-select"style="width:250px;" name="course" >
      <option selected>Choose Course</option>
      <option>B.tech(CSE)</option>
      <option>BCA</option>
      <option>B.tech(ME)</option>
      <option>M.tech(CSE)</option>
      <option>MCA</option>
      <option>M.tech(ME)</option>
    </select>
  </div>
</div>
</div>
<div class="col-md-5" style="padding-top:20px;">
<div class="row md-3" style="padding-left:70px;">
<label for="inputPassword3" class="col-sm-4 col-form-label">Year :</label>
    <div class="col-sm-8">
    <select id="inputState" class="form-select" style="width:270px;" name="year">
      <option selected>Choose Graduation Year</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select>
  </div>
</div>
</div>
<div class="row g-3 align-items-center" style="padding-left:30px;margin-right:20px;">
  <div class="col-md-2">
    <label for="inputPassword6" class="col-form-label">Email Id :</label>
  </div>
  <div class="col-auto">
    <input type="email" style="width:225px;" placeholder="Enter email id" title="Please enter correct email address" name="email" id="email" class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-md-2">
  <label for="inputPassword6" class="col-form-label" style="margin-left:0px;">Mobile :</label>
  </div>
  <div class="col-auto">
    <input type="number" style="width:220px;" placeholder="Enter mobile number" pattern="[7-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9" name="mobile" id="mobile" class="form-control" aria-describedby="passwordHelpInline">
  </div>
</div>
  <div class="col-12" style="text-align:center;padding-top:50px;">
  <input type="submit" class="btn btn-primary" value="Submit" onclick="Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'New student has been added',
  showConfirmButton: false,
  timer: 1500
})">
  </div>
</form>
</div>
</div>
</div>
</div>
<script src="{{URL::asset('assets/js/sweetalert.js')}}"></script>
</body>
</html>