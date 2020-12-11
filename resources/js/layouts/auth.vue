<template>
   <div class="auth-wrapper">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><i class="fa fa-cube font-25"></i></div>
                <p>Please wait...</p>        
            </div>
        </div>
        <!-- Overlay For Sidebars -->

        <div class="auth-main">
            <div class="auth_div">
                <router-view/>
            </div>
            <div class="auth_right">
                <div id="slider2" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                    <div class="carousel-inner pb-5">
                        <div class="carousel-item active">
                            <!-- <img src="../assets/images/login-slide1.png" class="img-fluid" alt="login page" /> -->
                            <div class="px-4">
                                <h2>Bootstrap 4x</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <!-- <img src="../assets/images/login-slide2.png" class="img-fluid" alt="login page" /> -->
                            <div class="px-4">
                                <h2>100% Secure</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <!-- <img src="../assets/images/login-slide2.png" class="img-fluid" alt="login page" /> -->
                            <div class="px-4">
                                <h2>Saving Time</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
        <!-- END WRAPPER -->
   </div>
</template>
<script>
import $ from 'jquery'
export default {
    mounted() {
        setTimeout(function() {
            $('.page-loader-wrapper').fadeOut();
        }, 50);
    }
}
</script>