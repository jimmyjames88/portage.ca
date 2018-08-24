<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Portage Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/bootstrap-datetimepicker.min.css" />
        <link rel="stylesheet" href="/css/admin.css" />

        @yield('scripts')
    </head>
    <body>
        <div class="wrapper">
            <div class="flex-wrapper">

                @include('admin._nav')
                <main>

                    @if($flash = session('message'))
                    <p class="alert alert-success">
                        {{ $flash }}
                    </p>
                    @endif

                    @yield('content')
                </main>
            </div>
        </div>

        <script src="/js/logout.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script
            src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
            integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
            crossorigin="anonymous">
        </script>
        <script src="/js/bootstrap-datetimepicker.min.js"></script>
        <script>
        $(function(){
            $('.datetimepicker').datetimepicker();
        });
        </script>
    </body>
</html>
