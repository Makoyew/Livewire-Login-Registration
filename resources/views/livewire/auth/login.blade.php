<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Login Form</title>
</head>
<body>
    <div class="py-4 mt-10">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center mb-0 font-weight-bold text-black">Login</h1>
                        </div>
                        <div class="card-body">
                            <form @submit.prevent="submit">
                                <div class="form-group">
                                    <label class="font-weight-bold" for="email">Email:</label>
                                    <input wire:model="email" type="text" class="form-control" id="email" placeholder="Enter your email">
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold" for="password">Password:</label>
                                    <input wire:model="password" type="password" class="form-control" id="password" placeholder="Enter your password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

