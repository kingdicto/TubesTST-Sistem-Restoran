
<b>Report</b>
<p>Data Report</p>
<?php if (! empty($report) && is_array($report)): ?>
    <div class="chart-container" style="position: relative; height:40vh; width:80vw">
        <canvas id="dataReport"></canvas>
    </div>
    <script src="<?= base_url('chartjs/Chart.bundle.min.js') ?>"></script>
    <script>
        var dataReport = document.getElementById('dataReport');
        var data_sales_report = [];
        var data_label = [];
        <?php foreach ($report as $report_item): ?>
            var total_sales = <?= esc($report_item['total_sales']) ?>;
            var total_store_cost = <?= esc($report_item['total_store_cost']) ?>;
            var profit = total_sales - total_store_cost;
            var time_id = <?= esc($report_item['time_id']) ?>;
            data_sales_report.push(profit);
            data_label.push(time_id);
        <?php endforeach ?>
        var data_chart_profit = {
            labels : data_label,
            datasets:[{
                label : 'Profit/Loss',
                data : data_sales_report,
                fill : false
            }]
        };
        var chart_profit = new Chart(dataReport,{
            type : 'line',
            data : data_chart_profit
        });
    </script>
<?php else: ?>
<h3>No Data</h3>
<p>Unable to find any data for you.</p>
<?php endif ?>


<!DOCTYPE html>
<html>
<head>
    <title>Chart Example</title>
    <!-- Include Chart.js library -->
    <script src="chart.js/Chart.bundle.min.js"></script>
</head>
<body>
    <canvas id="myChart" width="400" height="400"></canvas>

    <script>
        // Assume $top_menu_data is an array containing data from the controller
        var topMenuData = <?php echo json_encode($data); ?>;
        
        // Extract menu names and total orders for Chart.js
        var menuNames = topMenuData.map(function(Menu) {
            return item.Menu;
        });

        var totalOrders = topMenuData.map(function(item) {
            return item.TotalPesanan;
        });

        // Create a chart using Chart.js
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: menuNames,
                datasets: [{
                    label: 'Total Orders',
                    data: totalOrders,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>

