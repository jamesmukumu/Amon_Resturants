

<div class="modal similar__modal fade " id="loginModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="max-content similar__form form__padding">
            <div class="d-flex mb-3 align-items-center justify-content-between">
                <h6 class="mb-0">Login To Moonlit</h6>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form action="candidate-dashboard.html" method="post" class="d-flex flex-column gap-3">
                <div class="form-group">
                    <label for="email-popup" class="text-dark mb-3">Your Email</label>
                    <div class="position-relative">
                        <input type="email" name="email-popup" id="email-popup" placeholder="Enter your email" required>

                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="text-dark mb-3">Password</label>
                    <div class="position-relative">
                        <input type="password" name="password" id="password" placeholder="Enter your password" required>

                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-between align-items-center ">
                    <div class="form-check d-flex align-items-center gap-2">
                        <input class="form-check-input mt-0" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label mb-0" for="flexCheckDefault">
                            Remember me
                        </label>
                    </div>
                    <a href="#" class="forgot__password text-para" data-bs-toggle="modal" data-bs-target="#forgotModal" >Forgot Password?</a>
                </div>
                <div class="form-group my-3">
                    <button class="theme-btn btn-style sm-btn fill w-100"><span>Login</span></button>
                </div>
            </form>
            <div class="d-block has__line text-center"><p>Or</p></div>
            <div class="d-flex gap-4 flex-wrap justify-content-center mt-20 mb-20">
                <div class="is__social google">
                    <button class="theme-btn btn-style sm-btn"><span>Continue with Google</span></button>
                </div>
                <div class="is__social facebook">
                    <button class="theme-btn btn-style sm-btn"><span>Continue with Facebook</span></button>
                </div>
            </div>
            <span class="d-block text-center ">Don`t have an account? <a href="#" data-bs-target="#signupModal" data-bs-toggle="modal" class="text-primary">Sign Up</a> </span>
        </div>
      </div>
    </div>
</div>

<!-- signup form -->
<div class="modal similar__modal fade " id="signupModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="max-content similar__form form__padding">
            <div class="d-flex mb-3 align-items-center justify-content-between">
                <h6 class="mb-0">Create A Free Account</h6>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>   

            <form action="#" class="d-flex flex-column gap-3">
                <div class="form-group">
                    <label for="sname" class=" text-dark mb-3">Your Name</label>
                    <div class="position-relative">
                        <input type="text" name="sname" id="sname" placeholder="Candidate" required>
                        <i class="fa-light fa-user icon"></i>
                    </div>
                </div>

                <div class="form-group">
                    <label for="signemail" class=" text-dark mb-3">Your Email</label>
                    <div class="position-relative">
                        <input type="email" name="signemail" id="signemail" placeholder="Enter your email" required>
                        <i class="fa-sharp fa-light fa-envelope icon"></i>
                    </div>
                </div>
                <div class="form-group">
                    <label for="spassword" class=" text-dark mb-3">Password</label>
                    <div class="position-relative">
                        <input type="password" name="spassword" id="spassword" placeholder="Enter your password" required>
                        <i class="fa-light fa-lock icon"></i>
                    </div>
                </div>
                
                <div class="form-group my-3">
                    <button class="theme-btn btn-style sm-btn fill w-100"><span>Register</span></button>
                </div>
            </form>
            <div class="d-block has__line text-center"><p>Or</p></div>
            <div class="d-flex flex-wrap justify-content-center gap-4 mt-20 mb-20">
                <div class="is__social google">
                    <button class="theme-btn btn-style sm-btn"><span>Continue with Google</span></button>
                </div>
                <div class="is__social facebook">
                    <button class="theme-btn btn-style sm-btn"><span>Continue with Facebook</span></button>
                </div>
            </div>
            <span class="d-block text-center ">Have an account? <a href="#" data-bs-target="#loginModal" data-bs-toggle="modal" class="text-primary">Login</a> </span>
        </div>
      </div>
    </div>
</div>

<!-- forgot password form -->
<div class="modal similar__modal fade " id="forgotModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="max-content similar__form form__padding">
            <div class="d-flex mb-3 align-items-center justify-content-between">
                <h6 class="mb-0">Forgot Password</h6>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form action="#" class="d-flex flex-column gap-3">
                <div class="form-group">
                    <label for="fmail" class=" text-dark mb-3">Your Email</label>
                    <div class="position-relative">
                        <input type="email" name="email" id="fmail" placeholder="Enter your email" required>
                        <i class="fa-sharp fa-light fa-envelope icon"></i>
                    </div>
                </div>
                <div class="form-group my-3">
                    <button class="theme-btn btn-style sm-btn fill w-100"><span>Reset Password</span></button>
                </div>
            </form>
        
            <span class="d-block text-center ">Remember Your Password? 
                <a href="#" data-bs-target="#loginModal" data-bs-toggle="modal" class="text-primary">Login</a> </span>
        </div>
      </div>
    </div>
</div>
  