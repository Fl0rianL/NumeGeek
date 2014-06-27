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

        data.addColumn('string', 'Référence');
        data.addColumn('string', 'Nom');
        data.addColumn('string', 'Catégorie');
        data.addColumn('string', 'Description');
        
        data.addRows([
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
          ['22','Mike','vfvfv','fg' ],
    
        
          ['poiuyf','Jim', 'g','kjgc']
          

          
        ]);
        var table = new google.visualization.Table(document.getElementById('liste_produits'));
        table.draw(data, {showRowNumber: true});
      }
    </script>


</head>
<body>
  
</body>
</html>