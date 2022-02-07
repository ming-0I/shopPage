<?php require ('lib/top.php'); ?>


        <!-- Modal -->
        <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="w-100 pt-1 mb-5 text-right">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="get" class="modal-content modal-body border-0 p-0">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                        <button type="submit" class="input-group-text bg-success text-light">
                            <i class="fa fa-fw fa-search text-white"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Login</h1>
                <p>
                    abcdefg
                </p>
            </div>
        </div>
        <div class="row text-center pt-3">
            
            <form action="_login.php" method="post">
                <div style="text-align:center;">
                <input type="text"  placeholder=" Username" name="id" style="width:500px;height:50px;font-size:30px;padding-left: 10px;" ><br><br>
                <input type="password"  placeholder=" Password" name="pw" style="width:500px;height:50px;font-size:30px;padding-left: 10px;"><br><br>
                <button style="background-color:green; border-color:green;"type="submit" class="btn btn-primary rounded submit">Login</button><br><br>
                <p class="mb-1">Don't have an account? <a href="#" style="color:green">Sign Up</a></p>
                <p><a href="#" style="color:green">Forgot Password</a></p>
                </div>
            </form>


        </div>
    </section>
    <!-- End Categories of The Month -->


<?php require('lib/bottom.php'); ?>
