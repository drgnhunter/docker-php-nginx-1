<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngator Learning Student Portal</title>
    <link rel="stylesheet" href="stylesheets/bootstrap.css" />
        <link rel="stylesheet" href="stylesheets/style.css" />
    <link rel="stylesheet" href="/node_modules/aos/dist/aos.css" />
    <link rel="stylesheet" href="/node_modules/atropos/atropos.css" />
</head>

<body>




    <section class="login-container overflow-x-hidden">
        <article class="login-side-bg"></article>
        <article class="form-container">
            <!-- <div class="intro">
                <h1>Welcome Back</h1>
                <p>Welcome Back, Please Enter Your details</p>
            </div> -->

            <!-- <form onsubmit="return false;" class="form">
                <div class="email-input">
                    <span class="material-icons-round icon-size"> mail_outline </span>
                    <span id="seperator"></span>
                    <div class="input-container">
                        <p class="sub-title">Email Address</p>
                        <input type="email" name="usermail" id="email" />
                    </div>
                </div>

                <div class="email-input">
                    <span class="material-icons-round icon-size"> password </span>
                    <span id="seperator"></span>
                    <div class="input-container">
                        <p class="sub-title">Password</p>
                        <input type="password" name="userpass" id="password" />
                    </div>
                </div>

                <button id="submit">Continue</button>
            </form> -->
            <section class=" col-9">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-12 col-xl-11">
                            <div class="card text-black" style="border-radius: 25px;">
                                <div class="card-body p-md-5">
                                    <div class="row justify-content-center">
                                        <div class="col-12 order-2 order-lg-1">

                                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Admin Sign In</p>

                                            <form class="">


                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <label class="form-label" for="form3Example3c">Admin Email</label>
                                                        <input type="email" id="form3Example3c" class="form-control" />
                                                    </div>
                                                </div>


                                                <!-- 
                                                <div class="form-check d-flex justify-content-center mb-5">
                                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                                                    <label class="form-check-label" for="form2Example3">
                                                        I agree all statements in <a href="#!">Terms of service</a>
                                                    </label>
                                                </div> -->

                                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                    <button onclick="adminSignin();" type="button" class="btn btn-primary btn-lg">Sign In</button>
                                                </div>

                                            </form>
                                            <!-- <article class="outro">
                                                <div class="ending">
                                                    <p>Or Continue With</p>
                                                </div>

                                                <div style="display: flex;  justify-content: center;align-items: center; " class="  flex-row justify-content-center socials">
                                                    <a class="social-btn" href="" id="g-btn">
                                                        <p>Google</p>
                                                    </a>
                                                    <a style="flex:0;" class="social-btn" href="" id="a-btn">
                                                        <p>Apple</p>
                                                    </a>
                                                    <a style="flex:0;" class="social-btn" href="" id="fb-btn">
                                                        <p>Facebook</p>
                                                    </a>
                                                </div>
                                            </article> -->

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </article>

   <!-- Modal -->
<div class="modal fade" id="adminModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label>Admin OTP</label>
        <input id="otp" class="form-control"/>
      </div>
      <div class="modal-footer">

        <button onclick="enterAdminOTP();" type="button" class="btn btn-primary">Enter</button>
      </div>
    </div>
  </div>
</div>

    </section>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>

    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>