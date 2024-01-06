<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel base Login</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main id="login">
        <div class="row h-100">
            <div class="col-6">
                <img src="https://edx-cdn.org/v3/prod/logo-white.svg" class="logo-ed" alt="logo-edX">
                <div class="text-title d-flex justify-content-center align-items-center align-content-center">
                    <div class="yellow-line mx-4"></div>
                    <h1 class="text-light mx-3">Inizia a imparare <span class="text-info">con edX</span></h1>
                </div>

            </div>
            <div class="col-6">
                <div class="h-100 d-flex flex-column  justify-content-center align-items-center align-content-center">
                    <section id="Registrazione">
                        <h2>Registrazione</h2>
                        <form action="" method="POST">
                            <input type="text" class=" form-control rounded-0 my-2" name="nameUser" value="" placeholder="Nome">
                            <input type="text" class="form-control rounded-0 my-2" name="surnameUser" value="" placeholder="Cognome">
                            <input type="email" class="form-control rounded-0 my-2" name="emailUser" value="" placeholder="Email">
                            <input type="text" class="form-control rounded-0 my-2" name="passwordUser" value="" placeholder="Password">
                            <div class="d-flex py-3">
                                <input type="checkbox" class="form-check-input" checked>
                                <span class="fs-6 px-3">Accetto che edX possa inviarmi messaggi di marketing.</span>
                            </div>
                            <p class="condizioni">By creating an account, you agree to the Termini e Condizioni del
                                Servizio and you acknowledge that edX and each Member process your personal data in
                                accordance with the Informativa sulla privacy.</p>
                            <button type="submit" class="btn rounded-0 btn-red my-3">Crea un account gratis</button>
                        </form>
                    </section>
                </div>
            </div>
        </div>

    </main>
</body>

</html>
