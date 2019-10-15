<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MuslimSalat | @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase-auth.js"></script>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

        <script>
          // Your web app's Firebase configuration
          var firebaseConfig = {
            apiKey: "AIzaSyCNu7ZOlpTTe87TY0B0g2uR2hm5-ludDVQ",
            authDomain: "acid-eai.firebaseapp.com",
            databaseURL: "https://acid-eai.firebaseio.com",
            projectId: "acid-eai",
            storageBucket: "acid-eai.appspot.com",
            messagingSenderId: "805250270249",
            appId: "1:805250270249:web:059d845971225b834e8838",
            measurementId: "G-YHVPFNQPRY"
          };
          // Initialize Firebase
          firebase.initializeApp(firebaseConfig);
        </script>

    </head>
    <body onload="checkSignIn()">
      <nav class="navbar navbar-dark bg-danger sticky-top">
        <a class="navbar-brand" href="/home">
          <i class="fa fa-line-chart" aria-hidden="true"></i>
          MuslimSalat
        </a>
        <ul class="navbar nav mr-auto">
        </ul>
        <ul class="navbar nav ml-auto">
          <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="dropdownUser" style="color:white;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Profile
           </a>
           <div class="dropdown-menu" aria-labelledby="dropdownUser">
             <a class="dropdown-item" href="#" onclick="signOut()">
               <i class="fa fa-sign-out" aria-hidden="true"></i>
               Logout
             </a>
           </div>
         </li>
        </ul>
      </nav>
      <div class="container mt-5">
        @yield('content')
      </div>
    </body>
    <script>
    function checkSignIn() {
      firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
          user.providerData.forEach(function (profile) {
            // console.log("Sign-in provider: " + profile.providerId);
            // console.log("  Provider-specific UID: " + profile.uid);
            // console.log("  Name: " + profile.displayName);
            // console.log("  Email: " + profile.email);
            // console.log("  Photo URL: " + profile.photoURL);
            var providerIcon;
            switch (profile.providerId) {
              case "google.com" :
                providerIcon = '<i class="fa fa-google" aria-hidden="true"></i> ';
                break;
              case "facebook.com" :
                providerIcon = '<i class="fa fa-facebook-official" aria-hidden="true"></i> ';
                break;
              default:
                providerIcon = '<i class="fa fa-github" aria-hidden="true"></i> ';
                break;
            }

            var username = (profile.displayName) ? profile.displayName : profile.email;
            document.getElementById("dropdownUser").innerHTML= providerIcon+username;
          });
        } else {
          window.location = "/";
        }
      });
    }

    function signOut() {
      firebase.auth().signOut().then(function() {
        window.location = "/";
      }).catch(function(error) {
      // An error happened.
      });
    }

    $(document).ready(function () {
      $(".locationCard").on("click", function(){
        var id = $(this).attr('id');
        $.get('/prayertime/'+id, function(resp) {
          $("#resultPrayerTime").empty();
          $("#resultPrayerTime").html(resp);
        })
      });
    });
    </script>

    @stack('script')
</html>
