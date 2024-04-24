<?php include "./includes/header.php" ?>


<div class="container py-5">
    <div class="row">
        <div class="col-xl-5 col-lg-7 col-md-9 col-sm-11 mx-auto">
            <div class="card">
                <div class="card-body p-sm-5">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h4 class="mb-0">Register with <span class="text-primary">Listen</span></h4><a class="back-home" href="/"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="remixicon ">
                                <path d="M19 21H5C4.44772 21 4 20.5523 4 20V11L1 11L11.3273 1.6115C11.7087 1.26475 12.2913 1.26475 12.6727 1.6115L23 11L20 11V20C20 20.5523 19.5523 21 19 21ZM13 19H18V9.15745L12 3.7029L6 9.15745V19H11V13H13V19Z"></path>
                            </svg></a>
                    </div>
                    <p class="fs-6">It's time to join with Listen and gain full awesome music experience.</p>
                    <form class="mt-5">
                        <div class="mb-5"><button type="button" class="btn btn-white w-100"><span class="btn__wrap"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="remixicon ">
                                        <path d="M3.06364 7.50914C4.70909 4.24092 8.09084 2 12 2C14.6954 2 16.959 2.99095 18.6909 4.60455L15.8227 7.47274C14.7864 6.48185 13.4681 5.97727 12 5.97727C9.39542 5.97727 7.19084 7.73637 6.40455 10.1C6.2045 10.7 6.09086 11.3409 6.09086 12C6.09086 12.6591 6.2045 13.3 6.40455 13.9C7.19084 16.2636 9.39542 18.0227 12 18.0227C13.3454 18.0227 14.4909 17.6682 15.3864 17.0682C16.4454 16.3591 17.15 15.3 17.3818 14.05H12V10.1818H21.4181C21.5364 10.8363 21.6 11.5182 21.6 12.2273C21.6 15.2727 20.5091 17.8363 18.6181 19.5773C16.9636 21.1046 14.7 22 12 22C8.09084 22 4.70909 19.7591 3.06364 16.4909C2.38638 15.1409 2 13.6136 2 12C2 10.3864 2.38638 8.85911 3.06364 7.50914Z"></path>
                                    </svg><span class="ms-2">Register with Google</span></span></button></div>
                        <div class="mb-4">
                            <div class="auth__or mx-auto fw-medium"></div>
                        </div>
                        <div class="mb-3"><label for="username" class="form-label fw-medium">Username</label><input id="username" class="form-control" type="text" name="username"></div>
                        <div class="mb-3"><label for="password" class="form-label fw-medium">Password</label><input id="password" class="form-control" type="password" name="password"></div>
                        <div class="mb-3"><label for="c_password" class="form-label fw-medium">Confirm Password</label><input id="c_password" class="form-control" type="password" name="cPassword"></div>
                        <div class="mb-4">
                            <div class="form-check mb-0"><input class="form-check-input" id="agree" type="checkbox" name="agreed"><label class="form-check-label" for="agree">I agree <a href="/">Terms &amp; Condition</a></label></div>
                        </div>
                        <div class="mb-5"><button type="submit" class="btn btn-primary w-100 btn-loading">Register</button></div>
                        <p>Do you have an Account? <br><a class="fw-medium" href="<?= ROOT_URL ?>login.php">Login</a></p>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include "./includes/footer.php" ?>