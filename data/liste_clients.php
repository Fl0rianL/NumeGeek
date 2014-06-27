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

        data.addColumn('string', 'Nom');
        data.addColumn('string', 'Prénom');
        data.addColumn('string', 'Adresse');
        data.addColumn('string', 'Email');
        data.addColumn('string', 'Téléphone');
        
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
        var table = new google.visualization.Table(document.getElementById('liste_clients'));
        table.draw(data, {showRowNumber: true});
      }
    </script>


</head>
<body>
  
</body>
</html>