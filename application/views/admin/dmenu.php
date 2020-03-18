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
                            <li class="active">Data Menu</li>
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
                                    <th>Gambar</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Deskripsi</th>
                                    <th>Kategori</th>
                                </tr>
                            </thead>
                            <?php
                            foreach ($menu as $a) {
                            ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <button title="Edit" type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#mediumModal2<?php echo $a->id_menu; ?>"></button>
                                            <a title="Hapus" href="<?php echo base_url('datamenu/hapus/' . $a->id_menu); ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')" type="button" class="btn btn-danger fa fa-trash"></a>
                                        </td>
                                        <td align="center"><img src="<?php echo base_url('assets_admin/products/' . $a->gambar) ?>" width="64" /></td>
                                        <td><?php echo $a->nama_menu ?></td>
                                        <td><?php echo "Rp " . $a->harga_menu ?></td>
                                        <td><?php echo $a->desk_menu ?></td>
                                        <td><?php echo $a->nama_kat ?></td>
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
                <?= form_open_multipart('datamenu/tambah_aksi'); ?>    
                <div class="form-group">
                        <label class=" form-control-label">Nama</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-font"></i></div>
                            <input class="form-control" name="nama_menu" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Harga</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                            <input type="number" class="form-control" name="harga_menu" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Jenis</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-list-ul"></i></div>
                            <select class="form-control" name="jenis_menu">
                                <?php
                                    foreach($kategori as $k):
                                ?>
                                    <option name="jenis_menu" value="<?php echo $k->nama_kat;?>"><?php echo $k->nama_kat;?></option>
                                <?php
                                    endforeach;
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Gambar</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-picture-o"></i></div>
                            <input type="file" name="gambar" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" form-control-label">Deskripsi</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa  fa-align-justify"></i></div>
                            <textarea class="form-control" name="desk_menu" rows="4" required></textarea>
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
            foreach($menu as $a){ 
        ?>
        <div class="modal fade" id="mediumModal2<?php echo $a->id_menu;?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg-8" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel"><strong>Ubah Data <?php echo $a->id_menu;?></strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <?= form_open_multipart('datamenu/update'); ?>    
                        <div class="form-group" align="center">    
                            <img src="<?php echo base_url('assets_admin/products/' . $a->gambar) ?>" width="86" />
                        </div>
                        <input type="hidden" name="id_menu" value="<?php echo $a->id_menu;?>" required>
                        <div class="form-group">
                                <label class=" form-control-label">Nama</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-font"></i></div>
                                    <input class="form-control" name="nama_menu" value="<?php echo $a->nama_menu;?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Harga</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                    <input type="number" class="form-control" name="harga_menu" value="<?php echo $a->harga_menu;?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Jenis</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-list-ul"></i></div>
                                    <select class="form-control" name="jenis_menu">
                                        <option name="jenis_menu" value="<?php echo $a->nama_kat;?>"><?php echo $a->nama_kat;?></option>
                                        <?php
                                            foreach($kategori as $k):
                                        ?>
                                            <option name="jenis_menu" value="<?php echo $k->nama_kat;?>"><?php echo $k->nama_kat;?></option>
                                        <?php
                                            endforeach;
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Gambar</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-picture-o"></i></div>
                                    <input type="file" name="gambar" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Deskripsi</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa  fa-align-justify"></i></div>
                                    <textarea class="form-control" name="desk_menu" rows="4" value="<?php echo $a->desk_menu;?>" required><?php echo $a->desk_menu;?></textarea>
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
        <?php } ?>
        <!-- modal edit data -->