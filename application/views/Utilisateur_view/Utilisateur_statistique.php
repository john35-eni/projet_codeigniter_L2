                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Diagrammes</h1>
                    <p class="mb-4"></p>
                    <div class="col-lg-4 col-md-4  mb-4">
                    <div class="input-group mb-3">
                                <span class="input-group-text" id="year">Année :</span>
                                <select name="annee" id="annee" class="form-control">
                                <?php
                                    foreach ($year_list->result() as $row) {
                                        echo '<option value="'.$row->annee.'">'.$row->annee.'</option>';
                                    }
                                ?>
                                </select>
                            </div>
                    </div>
                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-8 col-lg-7">

                            <!-- Bar Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Contres pesage</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-bar">
                                        <canvas id="myBarChart"></canvas>
                                    </div>
                                    <hr>
                                    Diagramme en barre de tout les commandes qui sont arrivé.
                                </div>
                            </div>

                        </div>

                        <!-- Donut Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Pourcentages</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <hr>
                                    Pourcentage des commandes arrivé
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Floreal 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url();?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url();?>assets/vendor/chart.js/Chart.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url();?>assets/js/demo/chart-pie-demo.js"></script>
    <!--<script src="<?php echo base_url();?>assets/js/demo/chart-bar-demo.js"></script>-->
    <script>
        $(document).ready(function(){
           //$("#myBarChart").text("coucou");
            $('#annee').change(function(){
                var annee =parseInt( $(this).val());
                //alert(annee);
                if (annee !='') {
                    requete(annee);
                }
            });
        });
    </script>
   
    <script>
        function requete(annee){
            $.ajax({
                url:"<?php echo base_url();?>main/fetch_data_stat",
                method: "POST",
                data:{annee : annee},
                dataType : "json",
                success: function(data) {
                    var moi = [];
                    var quantite = [];
                    console.log(data);
                    for(var key in data){
                        //alert (data[key]["moi"] +' '+ data[key]["quantite"]);
                        
                         moi.push(data[key]["moi"]);
                         
                         quantite.push(data[key]["quantite"]);

                    }
                    draw_diagramme(quantite);
                }
            });

        }
        function draw_diagramme(quantite) {
                  // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Bar Chart Example
var donnee = ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"]; 
//var moi = donne;
var quant = quantite;
var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: donnee,
    datasets: [{
      label: "Contre pesage",
      backgroundColor: "#4e73df",
      hoverBackgroundColor: "#2e59d9",
      borderColor: "#4e73df",
      //data: [4215, 5312, 6251, 7841, 9821, 14984,3000],
      data: quantite,
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 12
        },
        maxBarThickness: 25,
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 20000,
          maxTicksLimit: 12,
          padding: 10,
          // Include a dollar sign in the ticks
        /*  callback: function(value, index, values) {
            return '$' + number_format(value);
          }*/
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      backgroundColor: "rgb(100,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
     /* callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
        }
      }*/
    },
  }
});
        }
    </script>
     


</body>

</html>