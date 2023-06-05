

<!DOCTYPE html>
<html>
<head>
    <title>My App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <section class="vh-100 bg-dark">
        <div class="container py-5 ">
          <div class="row d-flex justify-content-center ">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 ">

                  <div class="mb-md-5 mt-md-4 pb-5 text-center">

                      @yield('heading')

                      @yield('content')
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Include any common JavaScript files here -->
</body>
</html>
