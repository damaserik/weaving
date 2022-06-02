<!DOCTYPE html>
<html>
<head>

 
    <?php
        foreach($data as $data){
            $jns_konstruksi[] = $data->jns_konstruksi;
            $eff[] = (float) $data->eff;
        }
    ?>
</head>
<body>
 
    <canvas id="canvas" width="1000" height="280"></canvas>
 
    <!--Load chart js-->
    <script type="text/javascript" src="<?php echo base_url().'assets/js/chart.js'?>"></script>
    <script>
 
            var lineChartData = {
                labels : <?php echo json_encode($jns_konstruksi);?>,
                datasets : [
                     
                    {
                        fillColor: "#388cc7",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#666e99",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($eff);?>
                    }
 
                ]
                 
            }
 
        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Bar(lineChartData);
         
    </script>
</body>
</html>