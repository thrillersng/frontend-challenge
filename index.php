<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Homepage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="text-center">
            <h1>Welcome</h1>
            <div id="check-jquery"></div>
        </div>
        <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="node_modules/popper.js/dist/popper.min.js"></script>
        <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#check-jquery').text('document is ready. jquery is working');
            });
        </script>
    </body>
</html>