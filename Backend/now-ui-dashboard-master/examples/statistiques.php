<?php
include $_SERVER['DOCUMENT_ROOT'].'/Controller/ForumC.php';
$forum1C=new ForumC();
$list=$forum1C->afficherCategories();


?>
<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Forum', 'Categories'],
                <?php
                    foreach ($list as $row){
                ?>
                ['<?php echo $row['nom']; ?>', <?php echo $forum1C->NombreCategorie($row['nom']);  ?>],
                <?php
                }
                ?>
                ['', 0]
            ]);

            var options = {
                title: 'Les Statistiques'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
</head>
<body>
<div id="piechart" style="width: 900px; height: 500px;"></div>
</body>
</html>
