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
          ['204060','26/06/2014','17934560','1','En cours' ],
          ['204061','26/06/2014','17934561','1','En cours' ],
          ['204062','26/06/2014','17934562','1','En cours' ],
          ['204063','25/06/2014','17934563','2','Reçu' ],
          ['204064','24/06/2014','17934564','1','Reçu' ],
          ['204065','24/06/2014','17934565','1','Reçu' ],
          ['204066','24/06/2014','17934566','2','Reçu' ],
          ['204067','23/06/2014','17934567','1','Reçu' ],
          ['204068','23/06/2014','17934568','1','Reçu' ],
          ['204069','22/06/2014','17934569','1','Reçu' ],
          ['204070','22/06/2014','17934570','1','Reçu' ],
          ['204071','22/06/2014','17934571','1','Reçu' ],
          ['204072','22/06/2014','17934572','1','Reçu' ],
          ['204073','22/06/2014','17934573','1','Reçu' ],
          ['204074','22/06/2014','17934574','1','Reçu' ],
          ['204075','22/06/2014','17934575','1','Reçu' ],
          ['204076','22/06/2014','17934576','1','Reçu' ],
          ['204077','22/06/2014','17934577','1','Reçu' ],
          ['204078','21/06/2014','17934578','1','Reçu' ],
          ['204079','21/06/2014','17934579','1','Reçu' ],
          ['204080','21/06/2014','17934580','1','Reçu' ],
          ['204081','21/06/2014','17934581','1','Reçu' ],
          ['204082','21/06/2014','17934582','1','Reçu' ],
          ['204083','20/06/2014','17934583','1','Reçu' ],
          ['204084','20/06/2014','17934584','1','Reçu' ],
          ['204085','20/06/2014','17934585','1','Reçu' ],
          ['204086','20/06/2014','17934586','1','Reçu' ],
          ['204087','19/06/2014','17934587','1','Reçu' ],
          ['204088','19/06/2014','17934588','1','Reçu' ],
          ['204089','19/06/2014','17934589','1','Reçu' ]

          

          
        ]);
        var table = new google.visualization.Table(document.getElementById('commandes_clients'));
        table.draw(data, {showRowNumber: true});
      }
    </script>


</head>
<body>
  
</body>
</html>