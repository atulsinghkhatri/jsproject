<!DOCTYPE html>
<html>
   <head>
      <meta charset = "UTF-8">
      <meta http-equiv = "X-UA-Compatible" content = "IE = edge,chrome = 1">
      <title>Hello World using Backbone.js</title>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

   </head>
   
   <body>
      <table id="table_id">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>
<script>
   $(document).ready( function () {
    $('#table_id').DataTable();
} );
   </script>
      
   </body>
</html>