<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <title>Bobble Inc.</title>
  </head>
  <body class="d-flex h-100 text-white bg-dark bg-img">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="mb-auto">
        <div>
          <h3 class="float-md-left mb-0">Bobble Incorporated</h3>
          <nav class="nav nav-masthead justify-content-center float-md-right">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Contact</a>
          </nav>
        </div>
      </header>
      <main class="px-3">
        <h1 class="display-4">Regret your submission!</h1>
        <p class="lead">Withdraw your right to purchase an amazing product!</p>
        <div>
          <form action="/regret" method="post">
            @csrf
            @method('delete')
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input
                type="email"
                class="form-control @error('email') is-invalid @enderror"
                id="email"
                name="email"
                aria-describedby="emailHelp"
                required>
              @error('email')
                <div id="validationServerEmailFeedback" class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
              <div id="emailHelp" class="form-text">We'll share your email with anyone else.</div>
            </div>
            <button type="submit" class="btn btn-lg btn-light font-weight-bold">Submit</button>
          </form>
        </div>
      </main>
      <footer class="mt-auto text-white-50">
        <p class="text-mute">No exceptions we said.</p>
      </footer>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
  </body>
</html>
