<html>
    <head></head>
    <body>
        <h3>Contact Form</h3>
        <h4>{{ $content['name'] }}</h4>
        <ul>
            <li><a href="mailto:{{$content['email']}}">{{ $content['email'] }}</a></li>
            <li>{{ $content['phone'] }}</li>
        </ul>
        <p>
            {{ $content['message'] }}
        </p>
    </body>
</html>
