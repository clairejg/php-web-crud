<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-PRrgQVJ8NNHGieOA1grGdCTIt4h21CzJs6SnWH4YMQ6G5F5+IEzOHz67L4SQaF0o" crossorigin="anonymous">

</head>
<body>
    <!-- create form -->    

    <div class="container">
        <div class="row mt-3">
            <div class= "col-md-4 offset-4">
                <h4>Sign In
                </h4>
                
                <hr>


                <form action="<?= base_url('auth/registerUser')?>" 
                        method="post"
                        
                        class="form mb-3">
                    <?= csrf_field(); ?>

                    <div class="form-group">
                        <label for=""> Name </label>
                        <input type="text"
                                class="form-control"
                                name="name"
                                placeholder="name here"
                       >
                    </div>


                    <div class="form-group">
                        <label for=""> E-mail</label>
                        <input type="text"
                                class="form-control"
                                name="email"
                                placeholder="Email here"
                       >
                    </div>

                

                    <div class="form-group mb-3">
                        <label for=""> Password</label>
                        <input type="text"
                                class="form-control"
                                name="password"
                                placeholder="password here"
                       >
                    </div>

                    <div class="form-group">
                        <label for=""> Confirm Password</label>
                        <input type="password"
                                class="form-control"
                                name="passwordConfirm"
                                placeholder="Confirm password here"
                       >
                    </div>

                    <div class="form-group mb-3">
                        <input type="submit"
                                class="btn btn-info"
                                value= "Sign in"
                 
                       >
                    </div>
                </form>

                <br>
                <a href= "<?= site_url('auth/home'); ?>">
                    I already have an account, go to Login
                </a>


        </div>
    
    </div>


</body>
</html>
