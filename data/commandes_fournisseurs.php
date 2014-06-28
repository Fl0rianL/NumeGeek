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
        data.addColumn('string', 'Fournisseur');
        data.addColumn('string', 'Quantité');
        data.addColumn('string', 'Statut');
        
        data.addRows([
          ['123410','27/06/2014','Apple','10','En cours' ],
          ['123411','27/06/2014','Apple','10','En cours' ],
          ['123412','26/06/2014','Apple','10','En cours' ],
          ['123414','26/06/2014','HP','6','En cours' ],
          ['123415','26/06/2014','HP','2','En cours' ],
          ['123416','26/06/2014','Apple','10','En cours' ],
          ['123417','25/06/2014','Samsung','15','Reçu' ],
          ['123418','24/06/2014','Apple','10','Reçu' ],
          ['123419','23/06/2014','Asus','4','Reçu' ],
          ['123420','23/06/2014','Asus','6','Reçu' ],
          ['123421','22/06/2014','Apple','10','Reçu' ],
          ['123422','22/06/2014','Samsung','13','Reçu' ],
          ['123423','21/06/2014','Sony','3','Reçu' ],
          ['123424','21/06/2014','Sony','8','Reçu' ],
          ['123425','21/06/2014','Asus','7','Reçu' ],
          ['123426','21/06/2014','Asus','4','Reçu' ],
          ['123427','21/06/2014','Apple','12','Reçu' ],
          ['123428','20/06/2014','LG','7','Reçu' ],
          ['123429','20/06/2014','LG','5','Reçu' ],
          ['123430','20/06/2014','Apple','13','Reçu' ],
          ['123431','20/06/2014','Samsung','14','Reçu' ],
          ['123432','19/06/2014','Samsung','12','Reçu' ],
          ['123433','19/06/2014','Sony','3','Reçu' ],
          ['123434','19/06/2014','LG','4','Reçu' ]

          

          
        ]);
        var table = new google.visualization.Table(document.getElementById('commandes_fournisseurs'));
        table.draw(data, {showRowNumber: true});
      }
    </script>


</head>
<body>
  
</body>
</html>