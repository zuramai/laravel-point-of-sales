<template>
  <div class="card">
    <div class="auth_brand">
        <a class="navbar-brand" href="javascript:void(0);"><i class="fa fa-cube font-25"></i> Laravel POS</a>
    </div>
    <div class="body">
        <p class="lead">Login to your account</p>
        <form class="form-auth-small m-t-20" @submit.prevent="login" @keydown="form.onKeydown($event)">
            <div class="form-group">
                <label for="signin-username" class="control-label sr-only">{{ $t('username') }}</label>
                <input type="username" v-model="form.username" :class="{ 'is-invalid': form.errors.has('username') }" class="form-control round" id="signin-username" placeholder="Username">
                <has-error :form="form" field="username" />
            </div>
            <div class="form-group">
                <label for="signin-password" class="control-label sr-only">{{ $t('password') }}</label>
                <input type="password"  v-model="form.password" :class="{ 'is-invalid': form.errors.has('password') }" class="form-control round" id="signin-password" value="thisisthepassword" placeholder="Password">
                <has-error :form="form" field="password" />
            </div>
            <div class="form-group clearfix">
                <label class="fancy-checkbox element-left">
                    <input type="checkbox">
                    <span>Remember me</span>
                </label>								
            </div>
            <v-button :loading="form.busy" :block="true" :round="true">
              {{ $t('login') }}
            </v-button>
            <!-- <div class="bottom">
                <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">Forgot password?</a></span>
                <span>Don't have an account? <a href="page-register.html">Register</a></span>
            </div> -->
        </form>
    </div>
  </div>
</template>

<script>
import Form from 'vform'
import Cookies from 'js-cookie'
import LoginWithGithub from '~/components/LoginWithGithub'

export default {
  components: {
    LoginWithGithub
  },
  layout:'auth',

  middleware: 'guest',

  metaInfo () {
    return { title: this.$t('login') }
  },

  data: () => ({
    form: new Form({
      username: '',
      password: ''
    }),
    remember: false
  }),

  methods: {
    async login () {
      // Submit the form.
      const { data } = await this.form.post('/api/login')

      // Save the token.
      this.$store.dispatch('auth/saveToken', {
        token: data.token,
        remember: this.remember
      })

      // Fetch the user.
      await this.$store.dispatch('auth/fetchUser')

      // Redirect home.
      this.redirect()
    },

    redirect () {
      const intendedUrl = Cookies.get('intended_url')

      if (intendedUrl) {
        Cookies.remove('intended_url')
        this.$router.push({ path: intendedUrl })
      } else {
        this.$router.push({ name: 'home' })
      }
    }
  }
}
</script>
