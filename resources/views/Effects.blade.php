<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(Document).ready(function() {
            $('#Hide').click(function() {
                $('p').hide();
            });

            $("#Hide").click(function() {
                $("p").show();
            });

            $("button").click(function() {
                $("#div1").fadeToggle();
                $("#div2").fadeToggle("show");
                $("#div3").fadeToggle(3000);
            });

        })
    </script>
</head>
<body>
    
    <p>if you click on the "hide" button, i will disappear</p>

    <button id="hide">hide</button>
    <button id="show">show</button>
    <button>click to fade in out box</button>

    <div id="div" style="width: 80px; height: 80px; background-color: red;"></div>
    <br>
    <div id="div" style="width: 80px; height: 80px; background-color: green;"></div>
    <br>
    <div id="div" style="width: 80px; height: 80px; background-color: green;"></div>
</body>
</html>