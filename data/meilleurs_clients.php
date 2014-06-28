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
        
        data.addColumn('string', 'Client');
        data.addColumn('number', 'Nombre de commande');
        
        data.addRows([
          ['Ingrid',  {v: 10000, f: '22'}, ],
          ['Guy',   {v:8000,   f: '21'},  ],
          ['Bernard', {v: 12500, f: '19'}, ],
          ['Brigitte',   {v: 7000,  f: '17'},  ]
        ]);
        var table = new google.visualization.Table(document.getElementById('meilleur_client'));
        table.draw(data, {showRowNumber: true});
      }
    </script>


</head>
<body>
  
</body>
</html>