<div class="container d-flex flex-row justify-content-between">
 <div class="card border-success col-5">
   <div class="card-header h3">WOW</div>
   <div class="card-body">
     <h4 class="card-title">Chart1</h4>
     <div>
       <canvas id="myChart"></canvas>
     </div>
   </div>
 </div>

 <div class="card border-success col-5">
   <div class="card-header h3">WOW</div>
   <div class="card-body">
     <h4 class="card-title">Chart2</h4>
     <div>
       <canvas id="myChart2"></canvas>
     </div>
   </div>
 </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

// alert('data.php');
    // Fetch data from the PHP script
    fetch('../data.php')  // Update this to the correct path to your PHP file
        .then(response => response.json())
        .then(data => {
            // Prepare data for the chart
            const labels = data.map(item => item.product_name);
            const salesData = data.map(item => item.total_sales);

            // Create the first chart
            const ctx1 = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx1, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Total Sales',
                        data: salesData,
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

            // You can add the second chart here if needed
            const ctx2 = document.getElementById('myChart2').getContext('2d');
            const myChart2 = new Chart(ctx2, {
                type: 'line',  // Example: different type for the second chart
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Total Sales',
                        data: salesData,
                        backgroundColor: 'rgba(153, 102, 255, 0.2)',
                        borderColor: 'rgba(153, 102, 255, 1)',
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
        });
</script>


























