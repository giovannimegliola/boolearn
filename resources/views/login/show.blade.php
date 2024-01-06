<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Boolearn | Register</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main id="login">
        <div class="row h-100">
            <div class="col-6">
                <a href="{{route('home')}}"><img src="{{Vite::asset('/resources/img/vectorlogo.png')}}" class="logo-ed" alt="logo-edX"></a>
                <div class="text-title d-flex justify-content-center align-items-center align-content-center">
                    <div class="yellow-line mx-4"></div>
                    <h1 class="text-light mx-3">Start learning <span class="text-info">with Boolearn</span></h1>
                </div>

            </div>
            <div class="col-6">
                <div class="h-100 d-flex flex-column  justify-content-center align-items-center align-content-center">
                    <section id="Registrazione">
                        <h2>Register</h2>
                        <form action="" method="POST">
                            <input type="text" class=" form-control rounded-0 my-2" name="nameUser" value="" placeholder="Name">
                            <input type="text" class="form-control rounded-0 my-2" name="surnameUser" value="" placeholder="Surname">
                            <input type="email" class="form-control rounded-0 my-2" name="emailUser" value="" placeholder="Email">
                            <input type="text" class="form-control rounded-0 my-2" name="passwordUser" value="" placeholder="Password">
                            <div class="d-flex py-3">
                                <input type="checkbox" class="form-check-input" checked>
                                <span class="fs-6 px-3">I accept that Boolearn can send me marketing content via email.</span>
                            </div>
                            <p class="condizioni">By creating an account, you agree to the Terms and Conditions of our service and you acknowledge that Boolearn and each member process your personal data in
                                accordance with the privacy policy.</p>
                            <button type="submit" class="btn rounded-0 btn-red my-3">Create a free account</button>
                        </form>
                    </section>
                </div>
            </div>
        </div>

    </main>
</body>

</html>
