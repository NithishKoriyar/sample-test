<!DOCTYPE html>
<html>

<head>
    <title>
        Blinking with JavaScript
    </title>

    <style>
      /*  #blink {
            font-size: 100px;
            font-weight:bold ;
            font-family:arial;
        }*/
    </style>
</head>

<body>
    <p
    style="  font-size: 20px;
    font-weight:bold ;
      font-family:arial;">
    <h1 style="color:black;"> Hello Geeks let's Blinkssss
    </p>

    <script type="text/javascript">
        var abc =
            document.getElementById("abc");

        setInterval(function () {
            bli.style.opacity =
            (bli.style.opacity == 0 ? 1 : 0);
        }, 500);
    </script>
</body>

</html>
