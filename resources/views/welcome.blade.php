<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div>
        <h2 id="Myid">ini adalah halaman welcome</h2>
        <h3>ini saya daffa surya</h3>
        <h3>saya kuliah di universitas Airlangga</h3>
        <h1>ini form</h1>
        <input type="text" placeholder="masukkan nama" id="name"/>
        <button id="click">Kirim</button>
        <button id="button">lihat</button>
        <button>Set Css</button>
        <h1 id="p"></h1>
    </div>
    <script>
    $(document).ready(function() {
        $('#Myid').click(function() {
            alert('Fahad');
        });
        
        $('#click').click(function() {
            var value = $('#name').val();  // jqueery
            // alert(value)
            $('#p').html(value)
        });

        $("button").click(function() {
            $('h3').addClass('blue');
        });

        
    });
    </script>
    <style>
        .important {font-weight: bold; font-size: 20px;}
        .blue {color: blue;}
    </style>
</body>
</html>