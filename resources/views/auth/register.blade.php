@include('back.inc.head')
<main class="main-content  mt-0">
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('/assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Sign Up</h4>
                  <p class="mb-0">Enter your email and password to register</p>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="input-group input-group-outline mb-3">
                      <input id="name" class="form-control" type="text" name="name" placeholder="Name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>

                    <div class="input-group input-group-outline mb-3">

                      <input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="Email" required autocomplete="username" />
                    </div>

                    <div class="input-group input-group-outline mb-3">
                      <input id="password"  class="form-control" type="password" name="password" placeholder="password" required autocomplete="new-password" />
                    </div>

                    <div class="input-group input-group-outline mb-3">
                      <input id="password_confirmation" class="form-control" type="password" placeholder="password confirmation" name="password_confirmation" required autocomplete="new-password"  />
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign Up</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-primary text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  @include('back.inc.footer')
