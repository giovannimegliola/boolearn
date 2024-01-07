<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Boolearn | Login</title>

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
                    <section id="Accedi">
                        <h2>Log in</h2>
                        <span>Do you need to register?<a href="{{route('login.show')}}" class="text-primary"> Click here.</a> </span>
                        <form action="" method="GET">
                            <input type="text" class=" form-control rounded-0 my-2" name="user" value=""
                                placeholder="Insert Name or email">
                            <input type="text" class="form-control rounded-0 my-2" name="password" value="" placeholder="Password">

                            <button type="submit" class="btn rounded-0 btn-red my-3">Log in</button>
                            <a href="#" class="btn rounded-0 btn-white my-3 mx-2">Forgot your password?</a>
                        </form>

                        <h5>Alternatively, you can log in with:</h5>
                        <button class="btn btn-white p-0 text-start fs-6"><a
                                href="https://courses.edx.org/enterprise/login"><i
                                    class="fa-solid fa-landmark fs-6 px-2"></i>School or work credentials</a></button>



                        <div class="row d-flex p-3  gap-2">
                            <a href="https://appleid.apple.com/auth/authorize?client_id=org.edx.serviceid.prod&redirect_uri=https://courses.edx.org/auth/complete/apple-id/&state=vdLyLF199WhRILxDMyZZKt3o3VNddyku&response_type=code&response_mode=form_post&scope=email+name"
                                class="col-lg-5 col-md-8  bg-black text-light px-3 py-1 d-flex align-content-center flex-row">
                                <i class="fa-brands fa-apple fs-6 px-2"></i> <span>Apple</span>
                            </a>
                            <a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=1518363378406228&kid_directed_site=0&app_id=1518363378406228&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fv12.0%2Fdialog%2Foauth%3Fclient_id%3D1518363378406228%26redirect_uri%3Dhttps%253A%252F%252Fcourses.edx.org%252Fauth%252Fcomplete%252Ffacebook%252F%26state%3Dhs2FpN6XtESu7ylhlv56h5JaRiugSbMY%26return_scopes%3Dtrue%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3D03c68ce5-c44d-43ff-83f7-4a3687f6a4c2%26tp%3Dunspecified&cancel_url=https%3A%2F%2Fcourses.edx.org%2Fauth%2Fcomplete%2Ffacebook%2F%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3Dhs2FpN6XtESu7ylhlv56h5JaRiugSbMY%23_%3D_&display=page&locale=it_IT&pl_dbl=0"
                                class="col-lg-5 col-md-8 bg-primary text-light px-3 py-1 d-flex align-content-center flex-row">
                                <i class="fa-brands fa-facebook fs-6 px-2"></i><span>Facebook</span>
                            </a>
                            <a href="https://accounts.google.com/o/oauth2/auth/oauthchooseaccount?client_id=370673641490-nd3s6q740l96uvk1vivsab65rltkgoc0.apps.googleusercontent.com&redirect_uri=https%3A%2F%2Fcourses.edx.org%2Fauth%2Fcomplete%2Fgoogle-oauth2%2F&state=q4uDWvCzNMzlEQuUY8Q8YiQ7OIjV27yK&response_type=code&scope=openid%20email%20profile&service=lso&o2v=1&theme=glif&flowName=GeneralOAuthFlow"
                                class="col-lg-5 col-md-8  bg-primary text-light px-3 py-1 d-flex align-content-center flex-row">
                                <img src="https://edxuploads.s3.amazonaws.com/btn_google_light.svg" class="icon"
                                    alt="logo-google"><span class="px-2">Google</span>
                            </a>
                            <a href="https://login.microsoftonline.com/common/oauth2/authorize?client_id=5ea2d1b0-1713-4069-a764-1be8f40a6210&redirect_uri=https://courses.edx.org/auth/complete/azuread-oauth2/&state=Z99LE7we27xXHVDQfT55E03z9Jj1nzuq&response_type=code&scope=openid+profile+user_impersonation+email&msafed=0"
                                class="col-lg-5 col-md-8  bg-black text-light px-3 py-1 d-flex align-content-center flex-row">
                                <img src="https://edxuploads.s3.amazonaws.com/MSFT-logo-only.png" class="icon"
                                    alt="logo-microsoft"> <span class="px-2">Microsoft</span>
                            </a>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    </main>
</body>

</html>
