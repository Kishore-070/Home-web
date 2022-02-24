<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Contact Us</title>
</head>
<body>
    <div class="container mt-3">
        <h1 class="d-flex justify-content-center">CONTACT US</h1>
      <div class="mt-4">
          @if(Session::has('feedback'))
            <div class="alert alert-success" role="alert">
                {{Session::get('feedback')}}
            </div>
          @endif
        <form method="POST" enctype="multipart/form-data" action="/feedback">
            @csrf
            <div class="row">
               <div class="col">
                <label for="Firstname" class="form-label">Firstname</label>
                <input class="form-control border border-3" type="text" placeholder="Enter first name" name="firstname" required>
              </div>
              <div class="col">
                  <label for="Lastname" class="form-label">Lastname</label>
                  <input class="form-control border border-3" type="text" placeholder="Enter last name" name="lastname" required>
              </div>
            </div>
            <div>
                <label for="Email" class="form-label mt-3">Email</label>
                <input class="form-control border border-3" type="email" placeholder="Enter Email" name="Email" required>
            </div>

            <div>
                <label for="Phonenumber" class="form-label mt-3">Phone number</label>
                <input class="form-control border border-3" type="text" placeholder="Enter Phone number" name="phonenumber">
            </div>

            <div>
                <label for="Subject" class="form-label mt-3">Subject</label>
                <input class="form-control border border-3" type="text" placeholder="Subject" name="Subject" required>
            </div>

            <div>
                <label for="comment" class="form-label mt-3">Comment</label>
                <textarea class="form-control border border-3" name="Comment" id="comment" rows="7" placeholder="Enter your Query" required></textarea>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <button type="submit" class="btn btn-secondary">Submit</button>
            </div>    
        </form>
      </div> 
    </div>
</body>
</html>