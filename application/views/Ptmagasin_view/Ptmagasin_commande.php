                <!-- Begin Page Content -->
                <div class="container-fluid">
              
                       <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 text-center">Listes des commandes</h1>
                    <!--<p class="mb-4">Listes des commandes dans le grand magasin </p>-->
                    <br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 bg-primary">
                            <h6 class="m-0 font-weight-bold text-white "></h6>
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

    
                <!-- Return Modal -->
    <div class="modal fade" id="retour_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white" id="exampleModalLabel"> <i class="fas fa-share"></i>Retourner</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="retour_form">
                    <input type="hidden" id="retour_id" name="retour_id" value=""> 
                    <input type="hidden" id="produit_id" name="produit_id" value="">                           
                            <div class="form-group mb-3">
                                <label for="retour_quantite">Quantité à retourner</label>
                                <input type="text"  id="retour_quantite" class="form-control">
                            </div>                            
                            <div class="form-group mb-3">
                                <label for="retour_date">Date de retoure</label>
                                <input type="date" class="form-control" id="retour_date">
                            </div>                          
                         
                          
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-outline-warning" type="button" data-dismiss="modal">Annuler</button>
                            <button class="btn btn-outline-primary" type="submit" id="return">Ok</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>            

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
                    url: "<?php echo base_url(); ?>main/fetch_transfer_ptmagasin",
                    type: "post",
                    dataType: "json",
                    success: function(data){
                        var tbody= "";
                        for(var key in data.posts) {
                            var i = parseInt(key);
                            i = i+1;
                            tbody += "<tr>";
                            tbody += "<td>" +data.posts[key]["id"]  + "</td>" ; 
                            tbody += "<td>" + data.posts[key]["produit"] + "</td>";
                            tbody += "<td>" + data.posts[key]["quantite"] + " "+"Kg"+ "</td>";
                            tbody += "<td>" + data.posts[key]["envoyeur"] + "</td>";
                            tbody += "<td>" + data.posts[key]["dateCommande"] + "</td>";
                            tbody += "<td>" + ' <a href ="#" title="retourner" value="'+ data.posts[key]["id"] +'" id="edit_return" class="btn btn-sm btn-outline-info"><i class="fas fa-share"></i></a>' + "</td>";
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
        // retourner 
        /* 
            // transferer 
        $(document).on("click","#transferer", function(e){
            e.preventDefault();
            var transfer_id = $("#transfer_id").val();
            var destination = $("#liste_destination").val();
            var transfer_quantite = $("#transfer_quantite").val();
            var transfer_date = $("#transfer_date").val();
            var envoyeur = "<?php echo $this->session->userdata("username");?>";
            $.ajax({
                url : "<?php echo base_url("main/transfer_ajout");?> ",
                type: "post", 
                dataType : "json",
                data: {
                    transfer_id : transfer_id,
                    destination : destination,
                    transfer_quantite : transfer_quantite,
                    transfer_date : transfer_date,
                    envoyeur : envoyeur
                },
                success: function(data) {
                    if(data.responce == "success") {
                        $("#record").DataTable().destroy();
                                fetch();
                                $("#transfer_modal").modal('hide');
                                $("#transfer_form")[0].reset();

                                Swal.fire(
                                        'Succès',
                                        'Donné transferé',
                                        'success'
                                        );
                    }else {
                        toastr["error"](data.message);
                    }
                    console.log(data);
                    //alert(data.essai.stock);
                }
            });
            }); 
        
        
        */
        $(document).on("click","#return", function(e){
            e.preventDefault();
            var retour_id = $("#retour_id").val();
            var retour_quantite = $("#retour_quantite").val();
            var retour_date = $("#retour_date").val();
            var envoyeur = "<?php echo $this->session->userdata("username");?>";
            var produit_id = $("#produit_id").val();
           // alert(produit_id);
            $.ajax({
                url : "<?php echo base_url("main/return_ajout");?> ",
                type: "post", 
                dataType : "json",
                data: {
                    retour_id : retour_id,
                    retour_quantite : retour_quantite,
                    retour_date : retour_date,
                    envoyeur : envoyeur,
                    produit_id : produit_id
                },
                success: function(data) {
                    
                    console.log(data);
                   if(data.responce == "success") {
                       $("#record").DataTable().destroy();
                                fetch();
                                $("#retour_modal").modal('hide');
                                $("#retour_form")[0].reset();

                                Swal.fire(
                                        'Succès',
                                        'Donné retourné',
                                        'success'
                                        );
                          console.log(data.message);              
                    }else {
                        toastr["error"](data.message);
                    }
                }
            });
            }); 
       });
       
       
         // edit_return
            $(document).on("click","#edit_return", function(e){
            e.preventDefault();
            var retour_id= $(this).attr("value");
            //$("#retour_id").val(retour_id); 
           // alert(retour_id);      
           $.ajax({
               url: "<?php echo base_url();?>main/edit_retourner",
               type: "post",
               dataType: "json",
               data : {
                   retour_id : retour_id
               },
               success: function(data) {
                    //console.log(data);
                    if(data.responce == 'success'){
                        console.log(data);
                        $("#retour_modal").modal('show');
                    $("#produit_id").val(data.post.produit);
                    $("#retour_id").val(retour_id);
                    }else {
                        toastr["error"](data.message);
                    }
                  
                    
                }
            });
            });

          
      
    </script>
</body>

</html>