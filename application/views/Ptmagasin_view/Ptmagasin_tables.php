                <!-- Begin Page Content -->
                <div class="container-fluid">
              
                       <!-- Page Heading -->
                  <!--  <h1 class="h3 mb-2 text-gray-800 text-center">Arrivages des fils</h1>-->
                    <!--<p class="mb-4">Listes des commandes dans le grand magasin </p>-->
                    
                    
                        <!-- Button Ajouter modal -->
                    <div class="row">    
                    <div class="col-md-4 ">
                            <button type="button" class="btn btn-outline-info" id="ajouterbtn">
                            <i class="fas fa-plus"></i> NOUVELLE
                            </button> 
                    </div>
                    <div class="col-md-offset-12"> 
                            <button class="btn btn-warning pull-rigth" id="total_stock">Total stock :  </button> 
                           <a href="<?php base_url();?>historique"> <button class="btn btn-info pull-rigth" id="total_envoyer">Total envoyer :  </button> </a>                 
                    </div> 
                    </div>               
                    <br>
                    <br>
                    <!-- DataTales Example -->
                    <div class="row">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 bg-primary">
                            <h6 class="m-0 font-weight-bold text-white ">Arrivages des fils</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" width="100%" id="record" >
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>N° commande</th>
                                                <th>Couleur</th>
                                                <th>Battue</th>
                                                <th>Quantité</th>
                                                <th>Fibre</th>
                                                <th> Fournisseur </th>
                                                <th> Nombre de colis </th>
                                                <th> Type d'emballage </th>
                                                <th> Transporteur </th>
                                                <th> date de depart </th>
                                                <th> date d'arriveé </th>
                                                <th> Contre paisage </th>
                                                <th> Location </th>
                                                <th> Stock </th>
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
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    
    <!-- Ajouter Modal -->
    <div class="modal fade" id="modalAjouter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title text-white" id="exampleModalLabel"><i class="fa fa-plus"></i> Ajouter</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                   <div class="container">
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
                                <span class="input-group-text" id="basic-addon1">Nombre de colis</span>
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
                           
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Contre paisage</span>
                                <input type="number" min="0" placeholder="0" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="cpaisage">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Stock</span>
                                <input type="number" min="0" placeholder="0" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="stock">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Quantité à garder</span>
                                <input type="number" min="0" placeholder="0" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="agarder">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Location</span>
                                <!--<input type="text"  class="form-control" id="transfer_destination">-->
                                <select id="liste_location" class="form-control" aria-label="Couleur" aria-describedby="basic-addon1">
                                </select>
                            </div>
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
                <!-- Edit Modal -->
    <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title text-white" id="exampleModalLabel"> <i class="fas fa-edit"></i> Modifier</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="edit_form">
                    <input type="hidden" id="edit_record_id" name="edit_record_id" value="">                            
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">N° Commande</span>
                                <input type="text" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="edit_numCommande">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Couleur</span>
                                <input type="text" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="edit_couleur">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Batte</span>
                                <input type="text" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="edit_batte">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Quantité</span>
                                <input type="number" min="0" class="form-control" placeholder="0" aria-label="Couleur" aria-describedby="basic-addon1" id="edit_quantite">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Fibre</span>
                                <input type="text" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="edit_fibre">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Fournisseur</span>
                                <input type="text" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="edit_fournisseur">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nombre de colis</span>
                                <input type="number" placeholder="0" min="0" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="edit_nbPolibague">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Type d'embalage</span>
                                <input type="text" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="edit_tpEmbalage">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Transporteur</span>
                                <input type="text" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="edit_transporteur">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Départ</span>
                                <input type="date" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="edit_depart">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Arrivé</span>
                                <input type="date" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="edit_arrive">
                            </div>                           
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Contre paisage</span>
                                <input type="number" min="0" placeholder="0" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="edit_cpaisage">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Stock</span>
                                <input type="number" min="0" placeholder="0" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="edit_stock">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Quantité à garder</span>
                                <input type="number" min="0" placeholder="0" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" id="edit_agarder">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Location</span>
                                <!--<input type="text"  class="form-control" id="transfer_destination">-->
                                <select id="edit_liste_location" class="form-control" aria-label="Couleur" aria-describedby="basic-addon1">
                                </select>
                            </div>
                          
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-outline-warning" type="button" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-outline-primary" type="submit" id="update">Modifier</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>

                <!-- transfer Modal -->
    <div class="modal fade" id="transfer_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white" id="exampleModalLabel"> <i class="fas fa-share"></i> Transferer</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="transfer_form">
                    <input type="hidden" id="transfer_id" name="transfer_id" value="">                            
                            <div class="form-group mb-3">
                                <label for="transfer_quantite">Quantité à transferer</label>
                                <input type="text"  id="transfer_quantite" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="transfer_destination">Déstination</label>
                                <!--<input type="text"  class="form-control" id="transfer_destination">-->
                                <select id="liste_destination" class="form-control">
                                </select>
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="transfer_date">Date de transfère</label>
                                <input type="date" class="form-control" id="transfer_date">
                            </div>                          
                         
                          
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-outline-warning" type="button" data-dismiss="modal">Annuler</button>
                            <button class="btn btn-outline-primary" type="submit" id="transferer">Ok</button>
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
           var cpaisage = $("#cpaisage").val();
           var stock = $("#stock").val();
           var agarder = $("#agarder").val();
           var location = $("#liste_location").val();
              if(numCommande == "" || couleur == "" || batte == "" || quantite == "" || fibre == "" || fournisseur == "" || nbPolibague =="" || tpEmbalage =="" || transporteur == "" || depart == "" || arrive =="" || stock == "" || cpaisage == "" || agarder == "" || location =="") {
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
                          arrive : arrive,
                          cpaisage : cpaisage,
                          stock : stock,
                          agarder : agarder,
                          location : location
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
            
           
       //});
   //$(function(){
           // afficher
          function fetch(){
                $.ajax({
                    url: "<?php echo base_url(); ?>main/fetch",
                    type: "post",
                    dataType: "json",
                    success: function(data){
                        var total_stock = data.totalStock.totalstock;
                        var total_envoyer = data.totalEnvoyer.totalenvoyer;
                        var tbody= "";
                        for(var key in data.posts) {
                            var i = parseInt(key);
                            i = i+1;
                            tbody += "<tr>";
                            tbody += "<td>" + i + "</td>" ; 
                            tbody += "<td>" + data.posts[key]["numCommande"] + "</td>";
                            tbody += "<td>" + data.posts[key]["couleur"] + "</td>";
                            tbody += "<td>" + data.posts[key]["batte"] + "</td>";
                            tbody += "<td>" + data.posts[key]["quantite"] + " "+"Kg"+ "</td>";
                            tbody += "<td>" + data.posts[key]["fibre"] + "</td>";
                            tbody += "<td>" + data.posts[key]["fournisseur"] + "</td>";
                            tbody += "<td>" + data.posts[key]["nbPolibague"] + "</td>";
                            tbody += "<td>" + data.posts[key]["tpEmbalage"] + "</td>";
                            tbody += "<td>" + data.posts[key]["transporteur"] + "</td>";
                            tbody += "<td>" + data.posts[key]["depart"] + "</td>";
                            tbody += "<td>" + data.posts[key]["arrive"] + "</td>";
                            tbody += "<td class='bg-warning text-white'>" + data.posts[key]["cpaisage"] + " "+" Kg"+ "</td>";
                            tbody += "<td>" + data.posts[key]["location"] + "</td>";
                            tbody += "<td>" + data.posts[key]["stock"] + " "+"Kg "+"<span class='text-danger'>" + "(" +data.posts[key]["agarder"] +")" + "</span>" +"</td>";
                            tbody += "<td>" + '<a href="#" title="supprimer" value="'+data.posts[key]["id"] +'" id="del" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a> <a href ="#" title="modifier" value="'+ data.posts[key]["id"] +'" id="edit" class="btn btn-sm btn-outline-success"><i class="fas fa-edit"></i></a> <a href ="#" title="transferer" value="'+ data.posts[key]["id"] +'" id="edit_transfer" class="btn btn-sm btn-outline-info"><i class="fas fa-share"></i></a>' + "</td>";
                            tbody +="</tr>"
                            i++;
                        }
                        console.log(total_stock);
                        console.log(total_envoyer);
                        $("#tbody").html(tbody);
                        if(total_stock!= null){
                            $("#total_stock").text(" Total stock : " + total_stock + " Kg");
                        }else{
                            $("#total_stock").text(" Total stock : " + 0 + " Kg");
                        }
                        
                        if(total_envoyer!= null){
                            $("#total_envoyer").text(" Total envoyer : " + total_envoyer + " Kg");
                        }else{
                            $("#total_envoyer").text(" Total envoyer : " + 0 + " Kg");
                        }
                        
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
                       /* var i = "1"; 
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
                           { "render": function(){
                               return a= i++;
                            }  },
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
                            {"render": function ( data, type, row, meta ) { var a = '<a href="#" value="'+row.id +'" id="del" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a> <a href ="#" value="'+ row.id +'" id="edit" class="btn btn-sm btn-outline-success"><i class="fas fa-edit"></i></a> <a href ="#" value="'+ row.id +'" id="edit" class="btn btn-sm btn-outline-info"><i class="fas fa-share"></i></a>';                                     
                                
                               return a; 
                            }}
                           // { "render ": function(){ var a='<button class="btn btn-success btn-sm">sup <button>'; return a;  }}
                          ]
                        } );*/
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
                        url: "<?php echo base_url();?>main/delete ",
                        type : "POST",
                        dataType: "json",
                        data : {
                            del_id : del_id
                        },
                        success: function(data) {
                            //console.log(data);
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


            //alert(del_id);
           
        });
         // update
       
       $(document).on("click", "#update", function(e){
            e.preventDefault();
            var edit_record_id = $("#edit_record_id").val();
            var edit_numCommande = $("#edit_numCommande").val();
            var edit_couleur = $("#edit_couleur").val();
            var edit_batte = $("#edit_batte").val();
            var edit_quantite = $("#edit_quantite").val();
            var edit_fibre = $("#edit_fibre").val();
            var edit_fournisseur = $("#edit_fournisseur").val();
            var edit_nbPolibague = $("#edit_nbPolibague").val();
            var edit_tpEmbalage = $("#edit_tpEmbalage").val();
            var edit_transporteur = $("#edit_transporteur").val();
            var edit_depart = $("#edit_depart").val();
            var edit_arrive = $("#edit_arrive").val();
            var edit_cpaisage = $("#edit_cpaisage").val();
            var edit_stock = $("#edit_stock").val();
            var edit_agarder = $("#edit_agarder").val();
            var edit_liste_location = $("#edit_liste_location").val();

            if(edit_record_id == "" || edit_numCommande == ""|| edit_couleur == "" || edit_batte == "" || edit_quantite == "" || edit_fibre == "" || edit_fournisseur == "" || edit_nbPolibague == "" || edit_tpEmbalage == "" || edit_transporteur == "" || edit_depart == "" || edit_arrive == "" || edit_cpaisage == "" || edit_stock == "" || edit_agarder == "") {
                toastr["error"]("tout les formulaire doivent être remplie");
            }else {
                $.ajax({
                    url : "<?php echo base_url();?>main/update",
                    type: "post",
                    dataType : "json",
                    data : {
                        edit_record_id : edit_record_id,
                        edit_numCommande : edit_numCommande,
                        edit_couleur : edit_couleur,
                        edit_batte : edit_batte,
                        edit_quantite : edit_quantite,
                        edit_fibre :edit_fibre,
                        edit_fournisseur : edit_fournisseur,
                        edit_nbPolibague : edit_nbPolibague,
                        edit_tpEmbalage : edit_tpEmbalage,
                        edit_transporteur : edit_transporteur,
                        edit_depart : edit_depart,
                        edit_arrive : edit_arrive,
                        edit_cpaisage : edit_cpaisage,
                        edit_stock : edit_stock,
                        edit_agarder : edit_agarder,
                        edit_liste_location : edit_liste_location
                    }, 
                    success: function(data) {
                        if(data.responce == 'success'){
                             //alert(data.message);
                             $("#record").DataTable().destroy();
                             fetch();
                             toastr["success"](data.message);
                             $("#edit_modal").modal('hide');
                             $("#formAjout")[0].reset();
                         }else{
                             //alert(data.message);
                             toastr["error"](data.message);
                         }
                    }
                });
            }
       });

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
       });
       
        // editer
        $(document).on("click","#edit", function(e){
            e.preventDefault();
            var edit_id= $(this).attr("value");
            //alert(edit_id);
            $.ajax({
                url: "<?php echo base_url();?>main/edit",
                type: "post",
                dataType: "json",
                data: {
                    edit_id: edit_id
                },
                success: function(data) {
                    $("#edit_modal").modal('show');
                    console.log(data);
                    //alert(data.location);
                    var edit_liste_location="";
                    for( var key in data.location) {
                        edit_liste_location += "<option>"+ data.location[key]["nomLocation"] + "</option>";
                    }
                    $("#edit_liste_location").html(edit_liste_location);
                    $("#edit_record_id").val(data.post.id)
                    $("#edit_numCommande").val(data.post.numCommande);
                    $("#edit_couleur").val(data.post.couleur);
                    $("#edit_batte").val(data.post.batte);
                    $("#edit_quantite").val(data.post.quantite);
                    $("#edit_fibre").val(data.post.fibre);
                    $("#edit_fournisseur").val(data.post.fournisseur);
                    $("#edit_nbPolibague").val(data.post.nbPolibague);
                    $("#edit_tpEmbalage").val(data.post.tpEmbalage);
                    $("#edit_transporteur").val(data.post.transporteur);
                    $("#edit_depart").val(data.post.depart);
                    $("#edit_arrive").val(data.post.arrive);
                    $("#edit_cpaisage").val(data.post.cpaisage);
                    $("#edit_stock").val(data.post.stock);
                    $("#edit_agarder").val(data.post.agarder);
                    $("#edit_liste_location").val(data.post.location);
                }
            });

          
        });
         // edit_transfer
            $(document).on("click","#edit_transfer", function(e){
            e.preventDefault();
            var transfer_id= $(this).attr("value");
            //alert(transfer_id);
           
            $.ajax({
               url: "<?php echo base_url();?>main/destination",
               type: "post",
               dataType: "json",
               success: function(data) {
                    $("#transfer_modal").modal('show');
                    var liste_destination ="";
                    for( var key in data.posts) {
                        liste_destination += "<option>" + data.posts[key]["idDestination"] + " " + data.posts[key]["nom"] + "</option>";
                    }
                    $("#liste_destination").html(liste_destination);
                    //console.log(data);
                    //console.log(transfer_id);
                    $("#transfer_id").val(transfer_id);
                }
            });
            });
             //ajouter modal
           $(document).on("click","#ajouterbtn", function(e){
             e.preventDefault();
                $.ajax({
                url: "<?php echo base_url();?>main/location",
                type: "post",
                dataType: "json",
                success: function(data) {
                    $("#modalAjouter").modal('show');
                    console.log(data);
                    var liste_location="";
                    for( var key in data.posts) {
                        liste_location += "<option>"+ data.posts[key]["nomLocation"] + "</option>";
                    }
                    $("#liste_location").html(liste_location);
                }
            });
        });

          
      
    </script>
</body>

</html>