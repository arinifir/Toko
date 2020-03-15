        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Tables</a></li>
                                    <li class="active">Data Admin</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="#" type="button" class="fa fa-plus" data-toggle="modal" data-target="#mediumModal"> <strong class="card-title">Tambah Data</strong></a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Aksi</th>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>No Telepon</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                     foreach($admin as $a){ 
                                    ?>
                                    <tbody>
                                        <tr>
                                        <td>
                                            <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#mediumModal2<?php echo $a->id;?>"></button> 
                                            <a href="<?php echo base_url('dataadmin/hapus/'.$a->id); ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')" type="button" class="btn btn-danger fa fa-trash"></a>     
                                        </td>
                                        <td><?php echo $a->id ?></td>
                                        <td><?php echo $a->nama ?></td>
                                        <td><?php echo $a->jk ?></td>
                                        <td><?php echo $a->notelp ?></td>
                                        <td><?php echo $a->username ?></td>
                                        </tr>
                                    </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        <!-- modal tambah data -->
        <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg-8" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel"><strong>Tambah Data</strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url(). 'dataadmin/tambah_aksi'; ?>" method="post" class="form-horizontal">
                            <div class="form-group">
                                <label class=" form-control-label">Nama</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-file-text"></i></div>
                                    <input class="form-control" name="nama" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Jenis Kelamin</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-check-square-o"></i></div>
                                    <select class="form-control" name="jk">
                                        <option name="jk" value="Laki-Laki">Laki-Laki</option>
                                        <option name="jk" value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">No Telepon</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input class="form-control" name="notelp" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Username</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input class="form-control" name="username" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Password</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <input type="submit" class="btn btn-primary" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal tambah data -->
        <!-- modal edit data -->
        <?php 
            foreach($admin as $a){ 
        ?>
        <div class="modal fade" id="mediumModal2<?php echo $a->id;?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg-8" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel"><strong>Ubah Data <?php echo $a->id;?></strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url(). 'dataadmin/update'; ?>" method="post" class="form-horizontal">
                            <input type="hidden" name="id" value="<?php echo $a->id ?>">
                            <div class="form-group">
                                <label class=" form-control-label">Nama</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-file-text"></i></div>
                                    <input class="form-control" name="nama" value="<?php echo $a->nama;?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Jenis Kelamin</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-check-square-o"></i></div>
                                    <select class="form-control" name="jk">
                                        <option name="jk" value="<?php echo $a->jk;?>"><?php echo $a->jk;?></option>
                                        <option name="jk" value="Laki-Laki">Laki-Laki</option>
                                        <option name="jk" value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">No Telepon</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input class="form-control" name="notelp" value="<?php echo $a->notelp;?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Username</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input class="form-control" name="username" value="<?php echo $a->username;?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Password</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                    <input type="password" class="form-control" name="password" value="<?php echo md5($a->password);?>" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <input type="submit" class="btn btn-primary" value="Ubah">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- modal edit data -->