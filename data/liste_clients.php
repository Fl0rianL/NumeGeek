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
          ['Fabio','Mike','13 avenue du Peuplier 33000 Bordeaux','mike.fabio@gmail.com','0556455010' ],
          ['Gump','Stéphane',' 14 rue alzon 33000 Bordeaux','stéphane.gump33@gmail.com','0556455011' ],
          ['Dupont','Brigitte',' 23 place Gambetta 33000 Bordeaux','brigitte.dupont@gmail','0556455012' ],
          ['Bril','Guy','24 place Gambetta3 3000 Bordeaux','bril.guy@gmail.com','0556455013' ],
          ['Bourt','Matthieu',' 34 rue Alsace 33000 Bordeaux','bourt.matthieu@orange.fr','0556455014' ],
          ['Pili','Marc','23 rue Paul sabatier 33000 Bordeaux','pili.marc@live.fr','0556455015' ],
          ['Faure','Claude','14 rue Emile Gentil 33000 Bordeaux','faure.claude@gmail.com','0556455016' ],
          ['Guiller','Emilie','12 Impasse des Minimettes 33000 Bordeaux','guiller.emilie@gmail.com','0556455017' ],
          ['Abile','Ingrid','2 Allée Fabelle  33000 Bordeaux','ingrid.abile@gmail.com','0556455018' ],
          ['Bion','Jacquie',' 12 Avenue Monrabeau 33000 Bordeaux','bion.jacquie@sfr.fr','0556455019' ],
          ['Igari','Bernard',' 25 Impasse Noel 33000 Bordeaux','bernard.igari@gmail.com','0556455020' ],


          

          
        ]);
        var table = new google.visualization.Table(document.getElementById('liste_clients'));
        table.draw(data, {showRowNumber: true});
      }
    </script>


</head>
<body>
  
</body>
</html>