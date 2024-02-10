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
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
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
                <img src="arnaud-mariat-45Z6hW1dQMI-unsplash.jpg">
                <div class="content">
                    <div class="name"> This is Our Galaxy</div>
                    <div class="des">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt qui nam
                        laboriosam doloremque aliquam eius deus arkham knight.
                        Lorem, ipsum dolor.
                    </div>
                </div>
                <div class="other">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt hic sapiente neque dolore soluta totam.
                </div>
                <button id="but">View More</button>
            </div>

            <div class="item">
                <img src="nasa-rTZW4f02zY8-unsplash.jpg">
                <div class="content">
                    <div class="name">This is The Universe</div>
                    <div class="des">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt qui nam
                        laboriosam doloremque aliquam eius deus arkham knight.
                        Lorem, ipsum dolor.
                    </div>
                </div>
                <div class="other">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt hic sapiente neque dolore soluta totam.
                </div>
                <button id="but">View More</button>
            </div>
            <div class="item">
                <img src="greg-rakozy-oMpAz-DN-9I-unsplash.jpg">
                <div class="content">
                    <div class="name">This is Our Home, Earth</div>
                    <div class="des">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt qui nam
                        laboriosam doloremque aliquam eius deus arkham knight.
                        Lorem, ipsum dolor.
                    </div>
                </div>
                <div class="other">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt hic sapiente neque dolore soluta totam.
                </div>
                <button id="but">View More</button>
            </div>

            <div class="item">
                <img src="vincentiu-solomon-ln5drpv_ImI-unsplash.jpg">
                <div class="content">
                    <div class="name">Beautiful Isn't?</div>
                    <div class="des">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt qui nam
                        laboriosam doloremque aliquam eius deus arkham knight.
                        Lorem, ipsum dolor.
                    </div>
                </div>
                <div class="other">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt hic sapiente neque dolore soluta totam.
                </div>
                <button id="but">View More</button>
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