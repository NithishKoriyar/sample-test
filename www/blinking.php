<!DOCTYPE html>
<html>

<head>
    <title>
        Blinking with JavaScript
    </title>

    <style>
        #blink {
            font-size: 100px;
            font-weight:bold ;
            font-family:arial;
        }
    </style>
</head>

<body>
    <p
    style="  font-size: 20px;
    font-weight:bold ;
      font-family:arial;">
    <h1 style="color:red;"> Hello Geeks let's Blink
    </p>

    <script type="text/javascript">
        var blinks =
            document.getElementById("bliks");

        setInterval(function () {
            blink.style.opacity =
            (blink.style.opacity == 0 ? 1 : 0);
        }, 1000);
    </script>
</body>

</html>
