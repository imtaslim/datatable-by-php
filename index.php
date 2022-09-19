<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />
</head>
<body>
    <table id="tblUser">
        <thead>
            <tr>
                <th>Fullname</th>
                <th>Email</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Fullname</th>
                <th>Email</th>
            </tr>
        </tfoot>
    </table>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
    <script>
    jQuery(document).ready(function($) {
        $('#tblUser').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": "server_processing.php"
        } );
    } );
    </script>
</body>
</html>