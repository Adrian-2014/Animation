<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index saya</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&display=swap" rel="stylesheet">
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>

    <!-- Nav -->

    <nav>
        <div class="judul">
            <a href="">Adrian</a>
        </div>


        <div class="link">
            <div class="link-item"><a href="">Home</a></div>
            <div class="link-item"><a href="">About</a></div>
            <div class="link-item"><a href="">More</a></div>
        </div>
    </nav>

    <!-- Nav End -->

    <!-- container -->

    <div class="container" onmousedown="handleMouseDown()">

        <div class="button">
            <button id="next" class="next"><i data-feather='play-circle' class="pl"></i></button>
        </div>

        <div class="slide" id="slide">

            <div class="item">
                <img src="{{ asset('photorealistic-galaxy-background.jpg') }}">
                <div class="content">
                    <div class="name">This is Our Galaxy</div>
                    <div class="des">
                        The spiral is like a coin spinning through the void, drifting toward the unknown. But trust me, this is where we belong.
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('wallpaperflare.com_wallpaper.jpg') }}">
                <div class="content">
                    <div class="name">This is The Nebula</div>
                    <div class="des">
                        Beautiful and perfect like a butterfly, revealing the true splendor of the universe. Yet behind that beauty lies the unexpected sign of a star's demise.
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('planet-earth-background.jpg') }}">
                <div class="content">
                    <div class="name">This is Our Home, Earth</div>
                    <div class="des">
                        Though it appears small and helpless, adrift in the vast expanse of stars, this is the best home we could ever hope for.
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- Container End -->
    <script>
        document.getElementById("but").addEventListener("click", function() {
            var div = document.querySelector(".other");
            div.classList.toggle('active');
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script>
        feather.replace();
    </script>
</body>

</html>
