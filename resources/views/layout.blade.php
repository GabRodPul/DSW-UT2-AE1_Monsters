<!DOCTYPE html>
<html>
    <head>
        <title>Monsters</title>
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        {{-- @vite('/public/app.css') --}}
        <link rel="stylesheet" href="/app.css">
        <script>
            // Yo estoy loco te lo juro
            // https://stackoverflow.com/questions/21147149/flash-of-unstyled-content-fouc-in-firefox-only-is-ff-slow-renderer
            // to prevent Firefox FOUC, this must be here
            let FF_FOUC_FIX;
        </script>
    </head>
    <body>
        <div class="container">
            <header>
                <h1>A Monster Hunter App</h1>
            </header>
            <main>
                @yield("content");
            </main>
            <footer>
                <p>Gabriel Rodríguez Pulido - 2024</p>
            </footer>
        </div>
    </body>
</html>