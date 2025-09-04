<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html {
            cursor: none;
        }

        .cursor {
            position: fixed;
            top: 0;
            left: 0;
            width: 50px;
            /* or your bird's size */
            height: 50px;
            z-index: 9999;
            pointer-events: none;
        }

        .bird-cursor {
            width: 100%;
            height: 100%;
            object-fit: contain;
            animation: float 2s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-5px);
            }
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <div id="cursor" class="cursor">
        <img src="https://cdn.britannica.com/35/3635-050-96241EC1/Scarlet-macaw-ara-macao.jpg" alt="Bird Cursor"
            class="bird-cursor" width="200px" />
    </div>

    <script>

        $(window).mousemove(function (e) {
            $("#cursor").css({
                transform: `translate(${e.clientX}px, ${e.clientY}px)`
            });
        });

    </script>
</body>

</html>