<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register</title>
        <link href="asset/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body style="background-color:#1ABC9C;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('register') }}">
                                          @csrf


                                          <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Name</label>

                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} py-4" id="inputEmailAddress" type="text" name="name" value="{{ old('name') }}" placeholder="Enter Name" required autofocus />

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $name }}</strong>
                                                </span>
                                            @enderror
                                          </div>

                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label>

                                              <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} py-4" id="inputEmailAddress" type="email" name="email" value="{{ old('email') }}" placeholder="Enter Email" required autocomplete="email" autofocus />

                                              @error('email')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $email }}</strong>
                                                  </span>
                                              @enderror
                                            </div>

                                            <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label>

                                                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} py-4" id="inputPassword" type="password" name="password" placeholder="Enter password" required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $password }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>

                                                <input class="form-control py-4" id="inputConfirmPassword" type="password" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">

                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-info ml-4 float-right">
                                                        {{ __('Register') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="{{ route('login') }}">Have an account? Sign In!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <section class="copyright py-4 text-center text-white">
              <div class="container">
                <small>Copyright &copy; <?php echo date('Y'); ?></small>
              </div>
            </section>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="asset/js/scripts.js"></script>
    </body>
</html>
