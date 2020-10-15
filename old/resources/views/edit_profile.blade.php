<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>MedicalBooksOnline.Net</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css/loginpage.css') }}">

</head>

<body>
    <div class="body">
        <div class="form-box" >
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()" action="">Profile</button>
            </div>

            @foreach ($users as $user)
 <!--           <form method="POST" action="{{ route('login') }}" id="login" class="input-group">-->
            <div id="login"  class="input-group">
                {!! Form::open(['url'=>'update-profile','files'=>true]) !!}
                        <div class="form-group">
                            <label for="email">Name</label>
                            <input type="name" class="input-field" name="name" placeholder="Name" value="{{ $user->name }}">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="input-field" name="email" placeholder="Email" value="{{ $user->email }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Phone Number</label>
                            <input type="text" class="input-field" name="phone_number" placeholder="Phone number" value="{{ $user->phone_number }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Password</label>
                            <input type="password" class="input-field" name="password" placeholder="Password" >
                        </div>
                    <button type="submit" class="submit-btn">Update Profile</button>
                {!! Form::close() !!}
            <!--</form>-->
            </div>
            @endforeach

        </div>
    </div>

    <!-- jQuery link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        const x = document.getElementById('login')
        const y = document.getElementById('register')
        const z = document.getElementById('btn')

        function login() {
            x.style.left = "500px";
  //          y.style.left = "450px";
            z.style.left = "0px";
        }

        });
    </script>
</body>

</html>
