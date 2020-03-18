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
                                    <li class="active">Info Buka</li>
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
                                            <th>Hari</th>
                                            <th>Jam Buka</th>
                                            <th>Jam Tutup</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                     foreach($info_buka as $a){ 
                                    ?>
                                    <tbody>
                                        <tr>
                                        <td>
                                            <button title="Edit" type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#mediumModal2<?php echo $a->id;?>"></button> 
                                            <a title="Hapus" href="<?php echo base_url('datainfo/hapus/'.$a->id); ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')" type="button" class="btn btn-danger fa fa-trash"></a>     
                                        </td>
                                        <td><?php echo $a->id ?></td>
                                        <td><?php echo $a->hari ?></td>
                                        <td><?php echo $a->jam_buka ?></td>
                                        <td><?php echo $a->jam_tutup ?></td>
                                        <?php
                                        if($a->status == "Open"){?>
                                            <td><a type="button" href="<?php echo base_url('datainfo/tutup/'.$a->id); ?>" onclick="return confirm('Anda ingin mengubah status??')" class="btn btn-outline-success btn-sm" >Open</a></td>
                                        <?php
                                        }else if($a->status == "Closed"){?>
                                            <td><a type="button" href="<?php echo base_url('datainfo/buka/'.$a->id); ?>" onclick="return confirm('Anda ingin mengubah status??')" class="btn btn-outline-danger btn-sm">Closed</a></td>
                                        <?php
                                        }
                                        ?>
                                            
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
                        <form action="<?php echo base_url(). 'datainfo/tambah_aksi'; ?>" method="post" class="form-horizontal">
                            <div class="form-group">
                                <label class=" form-control-label">Hari</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar-o"></i></div>
                                    <select class="form-control" name="hari">
                                        <option name="hari" value="Senin">Senin</option>
                                        <option name="hari" value="Selasa">Selasa</option>
                                        <option name="hari" value="Rabu">Rabu</option>
                                        <option name="hari" value="Kamis">Kamis</option>
                                        <option name="hari" value="Jum'at">Jum'at</option>
                                        <option name="hari" value="Sabtu">Sabtu</option>
                                        <option name="hari" value="Minggu">Minggu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Jam Buka</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
                                    <input type="time" class="form-control" name="jam_buka" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Jam Tutup</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
                                    <input type="time" class="form-control" name="jam_tutup" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Status</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-check-square-o"></i></div>
                                    <select class="form-control" name="status">
                                        <option name="status" value="Open">Open</option>
                                        <option name="status" value="Closed">Closed</option>
                                    </select>
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
            foreach($info_buka as $a){ 
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
                    <form action="<?php echo base_url(). 'datainfo/update'; ?>" method="post" class="form-horizontal">
                            <input type="hidden" name="id" value="<?php echo $a->id ?>">
                            <div class="form-group">
                                <label class=" form-control-label">Hari</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-calendar-o"></i></div>
                                    <select class="form-control" name="hari">
                                        <option name="hari" value="<?php echo $a->hari;?>"><?php echo $a->hari;?></option>
                                        <option name="hari" value="Senin">Senin</option>
                                        <option name="hari" value="Selasa">Selasa</option>
                                        <option name="hari" value="Rabu">Rabu</option>
                                        <option name="hari" value="Kamis">Kamis</option>
                                        <option name="hari" value="Jum'at">Jum'at</option>
                                        <option name="hari" value="Sabtu">Sabtu</option>
                                        <option name="hari" value="Minggu">Minggu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Jam Buka</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
                                    <input type="time" class="form-control" name="jam_buka" value="<?php echo $a->jam_buka;?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Jam Tutup</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
                                    <input type="time" class="form-control" name="jam_tutup" value="<?php echo $a->jam_tutup;?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Status</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-check-square-o"></i></div>
                                    <select class="form-control" name="status">
                                        <option name="status" value="<?php echo $a->status;?>"><?php echo $a->status;?></option>
                                        <option name="status" value="Open">Open</option>
                                        <option name="status" value="Closed">Closed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <input type="submit" class="btn btn-primary" name="ubah" value="Ubah">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- modal edit data -->
