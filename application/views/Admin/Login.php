<body>

    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo align-items-center w-auto">
                                    <span class="d-none d-lg-block">Dinas Tanaman Pangan</span>
                                    <span class="d-none d-lg-block"> dan Holtikultura</span>
                                    <img src="<?= base_url('assets/img/logos.png') ?>" width="200px" height="250px" alt="">
                                </a>
                            </div>

                            <div class="card mb-3">

                                <div class="card-body bg-dark-subtle rounded-5">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your username & password to login</p>
                                    </div><?=$this->session->flashdata('flash') ?>
                                    <form class="row g-3 " method="post" action="<?= base_url('Admin/Auth/login'); ?>">
                                    
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="username" class="form-control" id="username" value="<?=set_value('username')?>" required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="password" required>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                        </div>
                                        
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary w-100">Login</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->