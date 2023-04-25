                <!-- Begin Page Content -->
                <div class="container-fluid">
              
                       <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 text-center">Historique des transfères</h1>
                    <!--<p class="mb-4">Listes des commandes dans le grand magasin </p>-->
                    <br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 bg-primary">
                            <h6 class="m-0 font-weight-bold text-white ">Liste des commandes</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" width="100%" id="record" >
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Produit</th>
                                                <!--<th>Couleur</th>
                                                <th>Battue</th>-->
                                                <th>Quantité</th>
                                                <!--<th>Fibre</th>
                                                <th> Fournisseur </th>
                                                <th> Nombre de colis </th>
                                                <th> Type d'emballage </th>
                                                <th> Transporteur </th>-->
                                               <!-- <th> date de depart </th>
                                                <th> date d'arriveé </th>
                                                <th> Contre paisage </th>-->
                                               <!-- <th> Stock </th> -->
                                               <th>Destination</th>
                                               <th>Envoyeur</th>
                                               <th>Date d'envoie</th>
                                                <th> Actions </th>
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody id="tbody">
                                            
                                        </tbody>
                                        <tfoot>
                                            
                                        </tfoot>
                                    </table>
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
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <!--<script src="<?php echo base_url(); ?>assets/js/demo/datatables-demo.js"></script>-->
    <script src="<?php echo base_url(); ?>assets/js/datepicker/js/bootstrap-datepicker.js"></script>
    <!-- toastr -->
    <script src="<?php echo base_url(); ?>assets/js/monscript/toastr.min.js"></script>
    <!-- fontawesome -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/fontawesome/js/all.js"></script>
    <!-- datatable -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/JSZip-2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables-1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables-1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/Buttons-1.7.0/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/Buttons-1.7.0/js/buttons.bootstrap4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/Buttons-1.7.0/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/Buttons-1.7.0/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/Responsive-2.2.7/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/Responsive-2.2.7/js/responsive.bootstrap4.min.js"></script>
   <!--<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>-->
   <!-- sweetalert -->
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/sweetalert2/dist/sweetalert2.all.js"></script>
    <script>      
      $(function(){               
           // afficher
          function fetch(){
                $.ajax({
                    url: "<?php echo base_url(); ?>main/fetch_transfer",
                    type: "post",
                    dataType: "json",
                    success: function(data){
                        var tbody= "";
                        for(var key in data.posts) {
                            var i = parseInt(key);
                            i = i+1;
                            tbody += "<tr>";
                            tbody += "<td>" + i + "</td>" ; 
                            tbody += "<td>" + data.posts[key]["produit"] + "</td>";
                            tbody += "<td>" + data.posts[key]["quantite"] + " "+"Kg"+ "</td>";
                            tbody += "<td>" + data.posts[key]["destination"] + "</td>";
                            tbody += "<td>" + data.posts[key]["envoyeur"] + "</td>";
                            tbody += "<td>" + data.posts[key]["dateCommande"] + "</td>";
                            tbody += "<td>" + '<a href="#" title="supprimer" value="'+data.posts[key]["id"] +'" id="del" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>' + "</td>";
                            tbody +="</tr>"
                            i++;
                        }
                        $("#tbody").html(tbody);
                        $("#record").DataTable({
                            language : {
                               url : "<?php echo base_url();?>assets/js/demo/French.json"
                            },
                            "responsive": true,
                            "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "Tout"]],
                            "pageLength" : 5,
                            dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                                "<'row'<'col-sm-12'tr>>" +
                                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                        buttons: [
                            'pdf', 'excel'
                        ]

                        });
                       
                    }
                });
           }
           fetch();
           // supprimer
       $(document).on("click","#del", function(e){
            e.preventDefault();
            var del_id= $(this).attr("value");

            const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-danger',
                cancelButton: 'btn btn-success mr-2'
            },
            buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
            title: 'Vous êtes sure?',
            text: "Cette action est irreversible!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Supprimer!',
            cancelButtonText: ' Annuler',
            reverseButtons: true
            }).then((result) => {
            if (result.isConfirmed) { 
                        $.ajax({
                        url: "<?php echo base_url();?>main/delete_historique ",
                        type : "POST",
                        dataType: "json",
                        data : {
                            del_id : del_id
                        },
                        success: function(data) {
                            console.log(data.id);
                            if(data.responce == "success"){
                                
                                $("#record").DataTable().destroy();
                                fetch();

                                swalWithBootstrapButtons.fire(
                                'Supprimé!',
                                'Donné supprimé',
                                'success'
                                );
                            }else if(data.responce == "error") {
                                swalWithBootstrapButtons.fire(
                                    'erreur',
                                    'Connection to database error',
                                    'error'
                                );
                            }
                        
                        }
                        });
               
            } 
            });
           
        });
        
       }); 
    </script>
</body>

</html>