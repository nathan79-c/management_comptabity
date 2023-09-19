<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">

            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
              <form method="POST" action="/">
                @method('post')
                @csrf
                <!-- MAt input -->
                <div class="form-outline mb-8">
                  <input type="text" id="form1Example13" name="matricule" class="form-control form-control-lg" />
                  <label class="form-label" for="form1Example13">MATRICULE</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form1Example23" name="password" class="form-control form-control-lg" />
                  <label class="form-label" for="form1Example23">Password</label>
                </div>


                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>





              </form>
            </div>
          </div>
        </div>
      </section>
</body>
</html>
