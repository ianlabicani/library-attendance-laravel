<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library Attendance</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <style>
    </style>
</head>

<body>
    {{ $slot }}
</body>
<script>
    let sessionSecElements = document.querySelectorAll(".session-sec");

    function updateSeconds(element) {
        let initialSeconds = parseInt(element.textContent, 10);
        initialSeconds++;
        element.textContent = initialSeconds;
    }

    sessionSecElements.forEach(function(element) {
        setInterval(function() {
            updateSeconds(element);
        }, 1000);
    });
</script>

</html>
