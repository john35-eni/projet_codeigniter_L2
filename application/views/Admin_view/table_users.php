                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800" id="bienvenue">Bienvenue <?php echo $this->session->userdata("username");?> </h1>
                    
                        <!-- Button Ajouter modal -->
                            <button type="button" class="btn btn-outline-info btn-md" data-toggle="modal" data-target="#modalAjouter">
                             + NOUVEAU
                            </button>  
                                              
                                            
                    <br>
                    <br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header bg-primary py-3">
                            <h6 class="m-0 font-weight-bold text-white">Liste des utilisateurs</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive  table-striped ">
                                <table class="table" id="record">
                                    <thead>
                                        <tr>
                                            <!--<th>id</th>-->
                                            <th width="10%">Image</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Telephone</th>
                                            <th>mot de passe</th>
                                            <th>level</th>                                            
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
                    <form  method="post" id="user_form" enctype="multipart/form-data">                            
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nom</span>
                                <input type="text" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" name="nom" id="nom">
                            </div>
                           <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Prenom</span>
                                <input type="text" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" name="prenom" id="prenom">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Telephone</span>
                                <input type="text" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" name="phone" id="phone">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Mot de passe</span>
                                <input type="text" class="form-control"  aria-label="Couleur" aria-describedby="basic-addon1" name="password" id="password">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">level</span>
                                <input type="number" min="0" class="form-control" placeholder="0" aria-label="Couleur" aria-describedby="basic-addon1"  name="level" id="level">
                            </div>                        
                            
                                <label for="user_image" class="form-label">Image</label>
                                 <input  type="file" id="user_image" name="user_image"/>
                          
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-outline-warning" type="button" data-dismiss="modal">Cancel</button>
                            <input class="btn btn-outline-primary" name="action" type="submit"  value="Add"/>
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
    <!-- sweetalert -->
   <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/sweetalert2/dist/sweetalert2.all.js"></script>
    <script>   
       $(function(){
            // ajouter

           $(document).on("submit", "#user_form", function(event){
               event.preventDefault();
               var nom = $("#nom").val();
               var prenom = $("#prenom").val();
               var phone = $("#phone").val();
               var password = $("#password").val();
               var level = $("#level").val();
               var extension = $("#user_image").val().split('.').pop().toLowerCase();
               if(jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg'])== -1) {
                   alert("Image invalid");
                   $("#user_image").val('');
                   return false; 
                   }
                if(nom!= ''&& prenom!='' && phone!=''&& password!='' && level!='') {
                    $.ajax({
                        url: "<?php echo base_url();?>Admin/insert_users",
                        method: 'POST',
                        data : new FormData(this),
                        contentType:false,
                        processData: false,
                        success:function(data){
                            if(data.responce == "success"){
                                $("#record").DataTable().destroy();
                                fetch();
                                toastr["success"](data.message);
                                $("#user_form")[0].reset();
                                $("#modalAjouter").modal('hide');
                            }else{
                                toastr["success"](data.message);
                                $("#user_form")[0].reset();
                                $("#modalAjouter").modal('hide');
                            }
                           
                        },
                        error: function(){
                        alert("erreur de connexion ");
                    }
                    });
                }else{
                    alert("les champ doit etre rempli");
                }
           });

           function fetch(){
                $.ajax({
                    url: "<?php echo base_url(); ?>admin/fetch_users",
                    type: "post",
                    dataType: "json",
                    success: function(data){
                        var tbody= "";
                        for(var key in data.posts) {
                            //console.log(data);
                            var i = parseInt(key);
                            i = i+1;
                            tbody += "<tr>"; 
                            tbody += "<td>" +'<img src="<?php echo base_url();?>upload/'+data.posts[key]["image"]+'" class="img-thumbnail" width="100" height="100">'+  "</td>";
                            tbody += "<td>" + data.posts[key]["username"] + "</td>";
                            tbody += "<td>" + data.posts[key]["lastName"] + "</td>";
                            tbody += "<td>" + data.posts[key]["phone"] + "</td>";
                            tbody += "<td>" + data.posts[key]["password"] + "</td>";
                            tbody += "<td>" + data.posts[key]["level"] + "</td>";
                            
                            tbody += "<td>" + '<a href="#" title="supprimer" value="'+data.posts[key]["id"] +'" id="del" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a> <a href ="#" title="modifier" value="'+ data.posts[key]["id"] +'" id="edit" class="btn btn-sm btn-outline-success"><i class="fas fa-edit"></i></a> ' + "</td>";
                            tbody +="</tr>"
                            i++;
                        }
                        $("#tbody").html(tbody);
                        $("#record").DataTable({
                            language : {
                               url : "<?php echo base_url();?>assets/js/demo/French.json"
                            },
                            "responsive" : true,
                            "pageLength" : 5,
                            "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "Tout"]]
                        });
                    },
                    error: function(){
                        alert("erreur de connexion ");
                    }
                });
           }
           fetch(); 
           //supprimer
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
                        url : "<?php echo base_url();?>Admin/delete_users",
                        type : "POST",
                        dataType : "json",
                        data : {
                            del_id : del_id
                        },
                        success : function(data) {
                            //alert(data);
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
                        },
                        error : function(xhr) {
                           // alert("erreur");
                            swalWithBootstrapButtons.fire(
                                'Erreur'+ xhr,
                                'Donné non transmis',
                                'error'
                                );
                        } 
                    }); 
                       /* $.ajax({
                        url: "<?php echo base_url();?>Admin/delete_users ",
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
                        
                        },
                        error: function() {
                            swalWithBootstrapButtons.fire(
                                'Erreur',
                                'Donné non transmis',
                                'error'
                                );
                        }
                        });*/
               
            } 
            });
            
           });
               // supprimer
              
     /*  $(document).on("click","#del", function(e){
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
           
        });*/
       });
       
    </script>
</body>

</html>