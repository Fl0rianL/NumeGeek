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
        data.addColumn('string', 'Marque');
        data.addColumn('string', 'Nom');
        data.addColumn('string', 'Catégorie');
        data.addColumn('string', 'Description');
        
        data.addRows([
          ['Apple001','Apple','iPhone 5s','Smartphone','iPhone 5s 16 Go Blanc iOS7' ],
          ['Apple002','Apple','iPad Air','Ordinateur','iPad Air 128 Go Noire iOS7 ' ],
          ['Apple003','Apple','Mac Pro','Ordinateur','Intel Xeon E5 3,7 GHz, 256 Go, 12 Go de RAM, AMD FirePro D300' ],
          ['Apple004','Apple','MacBook Air','Ordinateur','Intel Core i5 bicoeur 1,3 GHz 4 Go 128 Go Flash Autonomie: 12h' ],
          ['Asus001','Asus','TAICHI 21','Ordinateur','i5-3317U, 4 Go, Disque Dur:128 Go' ],
          ['Asus002','Asus','Transformer Book TX300','Ordinateur','Ecran 13.3,Disque Dur SATA 500 Go,Intel Core i5 2,6 GHz,6 Go' ],
          ['HP001','HP','HP Chromebook Blanc','Ordinateur','Ecran 14 pouces,disque dur 16 Go, RAM 4 Go,Intel Celeron 2955U 1.4 Ghz,Carte Graphique : Intel HD Graphics' ],
          ['HP002','HP','HP Chromebook Rouge','Ordinateur','Ecran 14 pouces,disque dur 16 Go, RAM 4 Go,Intel Celeron 2955U 1.4 Ghz,Carte Graphique : Intel HD Graphics' ],
          ['LG001','LG','G2','Smartphone','Appareil photo 13 mégapixels , Qualcomm quad-core 2,26 GHz,50 Go de stockage sur Box' ],
          ['LG002','LG','Optimus F5','Smartphone','NFC LTE' ],
          ['Samsung001','Samsung','Galaxy S5','Smartphone','16 Mégapixels,Android 4.4.2,16 Go ' ],
          ['Samsung002','Samsung','Galaxy Tab 3','Ordinateur','Android 4.2 Jelly Bean ,1.6 GHz Intel Atom Z2560,16 Go' ],
          ['Samsung003','Samsung','Galaxy Note 10','Ordinateur','Android 4.3 Jelly Bean,Samsung Exynos 5420 Quad-Core,16 Go ' ],
          ['Sony001','Sony','Xperia Z','Smartphone','Android 4.2,Qualcomm Quad Core 1.5 GHz,16 Go' ],
          ['Sony002','Sony','Xperia Z2','Smartphone','Android 4.4,Snapdragon Quad-core 2,3 GHZ,16 Go' ]
          
    
      
          

          
        ]);
        var table = new google.visualization.Table(document.getElementById('liste_produits'));
        table.draw(data, {showRowNumber: true});
      }
    </script>


</head>
<body>
  
</body>
</html>