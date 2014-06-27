<!DOCTYPE HTML>
<html>
<head>

<!-- Bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.theme.min.css">
<link href="css/sb-admin.css" rel="stylesheet">
    <script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
      google.load('visualization', '1', {packages:['table']});
      google.setOnLoadCallback(drawTable);
      function drawTable() {
        var data = new google.visualization.DataTable();

        data.addColumn('string', 'Numéro de commande');
        data.addColumn('string', 'Date');
        data.addColumn('string', 'Client');
        data.addColumn('string', 'Quantité');
        data.addColumn('string', 'Statut');
        
        data.addRows([
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ],
          ['22','Mike','vfvfv','fg','rty' ]

          

          
        ]);
        var table = new google.visualization.Table(document.getElementById('commandes_clients'));
        table.draw(data, {showRowNumber: true});
      }
    </script>


</head>
<body>
  
</body>
</html>