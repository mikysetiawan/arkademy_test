<!-- Header -->
<?php
$this->load->view('template/dashboard_header');
?>
<!-- /Header -->

<!-- Sidemenu -->
<?php
$this->load->view('template/dashboard_sidemenu');
?>
<!-- /Sidemenu -->

        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Daftar Siswa</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <?php if ($this->session->flashdata('error')){ ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                    <?php }else if($this->session->flashdata('success')){?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php } ?>
                <!-- ------------------------------TABEL LIST data-------------------------------- -->
                <div class="row" id="list-data">
                    <div class="col-md-12">
                        <div class="white-box">
                            <button id="tambah-data" class="btn waves-effect waves-light btn-info" style="margin-bottom:20px">+ Tambah Data</button>
                            <table id="tbl-data" class="ui celled table" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th width="25%">Nama</th>
                                        <th width="25%">Hobby</th>
                                        <th width="25%">Category</th>
                                        <th width="20%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no = 1;
                                    foreach($data_hobby as $data){?>
                                    <tr>
                                        <td><?php echo $no++;?></td>
                                        <td><?php echo $data->name?></td>
                                        <td><?php echo $data->hobby?></td>
                                        <td><?php echo $data->category?></td>
                                        <td>
                                            <center>
                                                <button class="btn waves-effect waves-light btn-primary" onclick='edit(<?php echo json_encode($data);?>)'><i class="mdi mdi-pencil fa-fw" data-icon="v"></i></button>
                                                <a id="delete-contract" onclick="delete_siswa(event)" href="<?php echo base_url('dashboard/delete_siswa/').$data->id;?>" class="btn waves-effect waves-light btn-danger"><i class="mdi mdi-delete fa-fw" data-icon="v"></i></a>
                                            </center>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- ----------------------------END TABEL LIST data-------------------------------- -->

                <!-- ----------------------------INPUT data BARU-------------------------------- -->
                <div class="row" id="data_new" style="display:none">
                    <div class="col-md-12">
                        <div class="white-box">
                            <form action="<?php echo base_url('dashboard/save')?>" method="post" enctype="multipart/form-data">
                                        <div class="form-body">
                                            <h3 id="title_data" class="box-title"><span><button type="button" class="btn waves-effect waves-light btn-outline-info list" style="margin-bottom:5px; margin-right: 10px; height: 25px; width:30px; padding: 0px">←</button></span> Data Baru</h3>
                                            <h3 id="title_ubah_data" style="display:none" class="box-title"><span><button type="button" class="btn waves-effect waves-light btn-outline-info list" style="margin-bottom:5px; margin-right: 10px; height: 25px; width:30px; padding: 0px;">←</button></span> Ubah Data</h3>
                                            <hr>
                                            <input name="id" type="hidden" id="id" class="form-control">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Nama</label>
                                                        <input name="name" type="text" id="name" class="form-control" placeholder="Nama">
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <label class="control-label">Hobby</label>
                                                    <div class="form-group">
                                                        <select id="hobby" name="hobby" class="form-control" data-placeholder="Pilih durasi data" tabindex="1">
                                                            <?php foreach($data_list_hobby as $hobby){?>
                                                                <option value="<?= $hobby->id?>"><?= $hobby->name?></option>
                                                            <?php }?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <div class="row">
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <label class="control-label">Category</label>
                                                    <div class="form-group">
                                                        <select id="category" name="category" class="form-control" data-placeholder="Pilih durasi data" tabindex="1">
                                                            <?php foreach($data_list_category as $category){?>
                                                                <option value="<?= $category->id?>"><?= $category->category?></option>
                                                            <?php }?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                
                                        <div class="form-actions" style="margin-top:20px">
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Simpan</button>
                                            <button type="button" class="btn btn-default list">Batal</button>
                                        </div>
                                    </form>

                        </div>
                    </div>
                </div>
                <!-- ----------------------------END INPUT data BARU-------------------------------- -->

            </div>
            <!-- /.container-fluid -->
<!-- Footer -->
<?php
$this->load->view('template/dashboard_footer');
?>
<!-- /Footer -->
<script>

function edit(data){
    $('#list-data').hide('blind');
    $('#data_new').show('blind');
    // console.log(data.name);

    //Populate edit form
    $('#title_data').hide();
    $('#title_ubah_data').show();

    $('#id').val(data.id);
    $('#name').val(data.name);
    $('#hobby').val(data.id_hobby);
    $('#category').val(data.id_category);
}

//function confirmation for delete
function delete_siswa(ev){
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
    console.log(urlToRedirect); // verify if this is the right URL

    swal({   
            title: "Apakah anda yakin ingin menghapus data ini?",   
            text: "data yang telah dihapus tidak akan dapat dikembalikan!",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Ya, hapus data ini!"
        }).then((willDelete) => {
            // redirect with javascript here as per your logic after showing the alert using the urlToRedirect value
            console.log(willDelete);
            if (willDelete.value) {
                window.location.href = urlToRedirect;
            } else {
                swal("data batal dihapus!");
            }
        });
}

$(document).ready(function() {

    var table = $('#tbl-data').DataTable();

    $("#tambah-data").click(function(){
        $('#data_id').val("");
        $('#list-data').hide('blind');
        $('#data_new').show('blind');   

        $('#title_data').show();
        $('#title_ubah_data').hide();  
        
        //Reset Form
        $('#id').val("");
        $('#name').val("");
        $('#hobby').val("");
        $('#category').val("");
    });

    $(".list").click(function(){
        $('#list-data').show('blind');
        $('#data_new').hide('blind');
    });
} );
</script>
