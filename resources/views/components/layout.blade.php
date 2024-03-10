<!DOCTYPE html>

<title>My blog</title>
<link rel="stylesheet" href="app.css">

<body>
    {{ $slot }}
</body>






































<style>
    body {
        background: white;
        color: black;
        max-width: 600px;
        margin: auto;
        font-family: sans-serif;

    }

    h2,
    a {
        font-size: 1.5rem;
        color: rgb(0, 58, 81);
        text-decoration: none
    }

    p {
        line-height: 1.6;
    }


    article+article {
        margin-top: 3rem;
        padding-top: 3rem;
        border-top: 2px solid rgb(0, 58, 81);
    }
</style>
