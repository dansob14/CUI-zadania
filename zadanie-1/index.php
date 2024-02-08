<!DOCTYPE html>
<html>
    <head>
        <title>Zadanie 1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="Stylesheet" href="style.css">
    </head>
    <body>
        <div id="title">Zadanie 1</div>
        <div>
            <form method="post" id="form">
                <label id="name">Podaj swoje imię:</label><br><br>
                <input type="text" id="first_name" name="fname">
                <input type="submit" id="submit" value="Wyślij">
            </form>
        </div>
        <div id="result"></div>
        <div id="footer"><p>Aplikacja stworzona na potrzeby rekrutacji do CUI</p></div>

        <script>
            $(function () {
                $("form").on("submit", function (e) {
                    e.preventDefault();
                $.ajax({
                    type: "post",
                    url: "name.php",
                    method: "POST",
                    data: $("form").serialize(),
                    success: function (data) {
                        $("#result").html(data);
                    }
                    });
                });
            });
        </script>
    </body>
</html>




