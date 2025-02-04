@extends('dashboard')
@section('content')
    <section class="vh-100 d-flex flex-column justify-content-end">
        <div class="container-fluid py-4 d-flex flex-column justify-content-start  h-75">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-9 col-lg-6 col-xl-5">




                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>

                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="{{ route('login.respo') }}" method="POST">
                        @csrf
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <h2>Espace Responsable</h2>

                            <label class="form-label" for="form3Example3">Email address :</label>
                            <input type="email" id="form3Example3" name="email" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" autofocus />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Password input -->
                        {{-- <div class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Password :</label>
            <input type="password" id="form3Example4" name="password" class="form-control form-control-lg"
              placeholder="Enter password" />
              @if ($errors->has('password'))
              <span class="text-danger">{{ $errors->first('password') }}</span>
              @endif
          </div> --}}
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Mot de passe :</label>
                            <div class="input-group">
                                <input type="password" id="form3Example4" name="password"
                                    class="form-control form-control-lg" placeholder="Enter password" minlength="6"
                                    maxlength="20" />
                                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                    {{-- <i class="far fa-eye-slash"></i> --}}
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <script>
                            const togglePassword = document.querySelector('#togglePassword');
                            const password = document.querySelector('#form3Example4');
                            togglePassword.addEventListener('click', function(e) {
                                // toggle the type attribute
                                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                                password.setAttribute('type', type);
                                // toggle the eye icon
                                this.querySelector('i').classList.toggle('fa-eye');
                                this.querySelector('i').classList.toggle('fa-eye-slash');
                            });
                        </script>


                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="1" name="remember"
                                    id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Souviens-toi de moi
                                </label>
                            </div>
                            {{-- <a href="#!" class="text-body">Forgot password?</a> --}}
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Connexion</button>



                        </div>

                    </form>
                    @if (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div
            class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-5 px-4 px-xl-5 bg-primary">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                Copyright © 2023. All rights reserved.
            </div>
            <!-- Copyright -->

            <!-- Right -->
        </div>
    </section>
@endsection
