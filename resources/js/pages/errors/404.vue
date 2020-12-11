<template>
    <div class="card">
        <div class="auth_brand">
            <a class="navbar-brand" href="javascript:void(0);"><i class="fa fa-cube font-25"></i> Laravel POS</a>
        </div>
        <div class="body">
            <p class="lead mb-3"><span class="number left">404 </span><span class="text">Oops! <br/>Page Not Found</span></p>
            <p>The page you were looking for could not be found, please <a href="javascript:void(0);">contact us</a> to report this issue.</p>
            <div class="margin-top-30">
                <a href="#" @click="$router.go(-1)" class="btn btn-round btn-default btn-block"><i class="fa fa-arrow-left"></i> <span>Go Back</span></a>
                <router-link :to="{name: 'home'}" class="btn btn-round btn-primary btn-block"><i class="fa fa-home"></i> <span>Home</span></router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  name: 'NotFound',
  layout: 'auth'
}
</script>
