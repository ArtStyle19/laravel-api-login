<!DOCTYPE html>
<html>
<head>
    <title>LED Control</title>
</head>
<body>
    <h1>LED is currently: {{ $state ? 'ON' : 'OFF' }}</h1>

    @if(session('status'))
        <p>{{ session('status') }}</p>
    @endif

    <form method="POST" action="/toggle-led">
        @csrf
        <button type="submit">Toggle LED</button>
    </form>
</body>
</html>
