<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>YouGo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!--Bootstrap Css-->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        @include('layouts.nav')

        <section id="main-content">

            <div class="container">

                <div class="row">

                    @yield('content')

                    @include('layouts.sidebar')

                </div>

            </div>

        </section>

        @include('layouts.footer')

        <!--all our external javascript files-->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

        <script src="//cdn.auth0.com/js/lock/10.0/lock.min.js"></script>
        <script type="text/javascript">

var lock = new Auth0Lock('vewF4f9ta4j43IjVWn9WyKtulkq6UtDa', 'emergecode.auth0.com');


function signin() {
    lock.show({
        callbackURL: 'http://localhost/auth0/callback'
        , responseType: 'code'
        , authParams: {
            scope: 'openid email'  // Learn about scopes: https://auth0.com/docs/scopes
        }
    });
}
        </script>

    </body>
</html>
