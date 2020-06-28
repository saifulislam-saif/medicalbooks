@extends('layouts.app')

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
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()" action="">Profile</button>
            </div>
            @foreach ($users as $user)
            <form method="GET" action="{{ url('edit-profile') }}" id="login" class="input-group">
                                <p><b>Name:</b> {{$user->name}}</p><br>
                                <p><b>Email:</b> {{$user->email}}</p><br>
                                <p><b>Phone Number:</b> {{$user->phone_number}}</p><br>
                <button type="submit" class="submit-btn">Edit Profile</button>
                <a href="#" class="forgot_text">Forgot password?</a>
            </form>
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
