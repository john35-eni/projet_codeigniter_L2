                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">Listes des commandes dans le grand magasin </p>
                    
                        <!-- Button Ajouter modal -->
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalAjouter">
                            + Ajouter
                            </button>  
                         <!-- Print button--> 
                         <button type="button" class="btn btn-primary btn-sm" > <i class=""> </i>
                            Imprimer
                            </button>                     
                                            
                    <br>
                    <br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Liste des commandes</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive  table-striped">
                                <table class="table " id="record">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>N° commande</th>
                                            <th>Couleur</th>
                                            <th>Battue</th>
                                            <th>Quantité</th>
                                            <th>Fibre</th>
                                            <th> Fournisseur </th>
                                            <th> Nombre de polybag </th>
                                            <th> Type d'emballage </th>
                                            <th> Transporteur </th>
                                            <th> date de depart </th>
                                            <th> date d'arriveé </th>
                                            <!--<th> Commentaire </th>-->
                                            <!--<th> date d'arriveé </th>-->
                                            <th> Actions </th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        
                                    </tfoot>
                                    <tbody>
                                        
                                    </tbody>
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

    
    <!-- Ajouter Modal -->
    <div class="modal fade" id="modalAjouter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="formAjout">                            
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">N° Commande</span>
                                <input type="text" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="numCommande">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Couleur</span>
                                <input type="text" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="couleur">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Batte</span>
                                <input type="text" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="batte">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Quantité</span>
                                <input type="number" min="0" class="form-control" placeholder="0" aria-label="Couleur" aria-describedby="basic-addon1" id="quantite">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Fibre</span>
                                <input type="text" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="fibre">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Fournisseur</span>
                                <input type="text" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="fournisseur">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nombre de polybag</span>
                                <input type="number" placeholder="0" min="0" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="nbPolibague">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Type d'embalage</span>
                                <input type="text" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="tpEmbalage">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Transporteur</span>
                                <input type="text" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="transporteur">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Départ</span>
                                <input type="date" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="depart">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Arrivé</span>
                                <input type="date" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="arrive">
                            </div>                           
                           
                         
                          
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-outline-warning" type="button" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-outline-primary" type="submit" id="add">Ajouter</button>
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
    <script>      
       // ajouter
       $(function(){
            /*$('#arrive').datepicker({
                format: "dd/mm/yyyy"
            });
            $('#depart').datepicker({
                format: "dd/mm/yyyy"
            });*/

           $("#add").on("click", function(e){
           e.preventDefault();
           var numCommande = $("#numCommande").val();
           var couleur = $("#couleur").val();
           var batte = $("#batte").val();
           var quantite = $("#quantite").val();
           var fibre = $("#fibre").val();
           var fournisseur = $("#fournisseur").val();
           var nbPolibague = $("#nbPolibague").val();
           var tpEmbalage = $("#tpEmbalage").val();
           var transporteur = $("#transporteur").val();
           var depart = $("#depart").val();
           var arrive = $("#arrive").val();
              if(numCommande == "" || couleur == "" || batte == "" || quantite == "" || fibre == "" || fournisseur == "" || nbPolibague =="" || tpEmbalage =="" || transporteur == "" || depart == "" || arrive =="") {
                  //alert( "les champs sont obligatoire");
                  toastr["error"]("Les champs du formulaire sont obligatoire");
              }else {
                  $.ajax({
                      url : "<?php echo base_url();?>main/insert",
                      type : 'post',
                      dataType : 'json',
                      data : {
                          numCommande : numCommande,
                          couleur : couleur,
                          batte : batte,
                          quantite : quantite,
                          fibre : fibre,
                          fournisseur : fournisseur,
                          nbPolibague : nbPolibague,
                          tpEmbalage : tpEmbalage,
                          transporteur : transporteur,
                          depart : depart,
                          arrive : arrive
                      },
                      success: function(data) {
                         if(data.responce == 'success'){
                             //alert(data.message);
                             $("#record").DataTable().destroy();
                             fetch();
                             toastr["success"](data.message);
                             $("#modalAjouter").modal('hide');
                             $("#formAjout")[0].reset();
                         }else{
                             //alert(data.message);
                             toastr["error"](data.message);
                         }
                      }
                  });
                  
              }
           });
            
           
       });
       $(function(){
           // afficher
          function fetch(){
                $.ajax({
                    url: "<?php echo base_url(); ?>main/fetch",
                    type: "post",
                    dataType: "json",
                    success: function(data){
                        //var i = "1"; 
                        //console.log(data);
                        $('#record').DataTable( {
                        "data":  data.posts, 
                        "responsive": true,
                         dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                                "<'row'<'col-sm-12'tr>>" +
                                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                        buttons: [
                            'pdf', 'excel'
                        ],
                        "columns": [
                            //{"data": "id"},
                           /*{ "render": function(){
                               return a= i++;
                            }  },*/
                            {"data": "id"},
                            { "data": "numCommande" },
                            { "data": "couleur" },
                            { "data": "batte" },
                            { "data": "quantite" },
                            { "data": "fibre" },
                            { "data": "fournisseur"},
                            { "data": "nbPolibague"},
                            { "data": "tpEmbalage"},
                            { "data": "transporteur"},
                            { "data": "depart"},
                            { "data": "arrive"},
                            /*{"render": function ( data, type, row, meta ) { var a= '<a href="#" value="${row.id}" id="del" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a> <a href ="#" value="${row.id}" id="edit" class="btn btn-sm btn-outline-success"><i class="fas fa-edit"></i></a>';                                     
                                
                               return a; 
                            }}*/
                           // { "render ": function(){ var a='<button class="btn btn-success btn-sm">sup <button>'; return a;  }}
                          ]
                        } );
                    }
                });
           }
           fetch();
       });
       // supprimer
       $(document).on("click","#del", function(e){
            e.preventDefault();
            var del_id= $(this).attr("value");
            alert(del_id);
        });

       
    </script>
</body>

</html>