<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Beranda</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Beranda</a></li>
                                    <li class="active">Menu</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
        <div class="content ">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Menu</h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Makanan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Minuman</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Lainnya</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <hr>
                                        <div class="row" align="center">
                                            <?php
                                                foreach($menu1 as $m1):
                                            ?>
                                                 <div class="col-sm-2 col-md-2">
                                                    <div class="thumbnail">
                                                        <img src="<?php echo base_url('assets_admin/products/' . $m1->gambar) ?>" max-width="100%" max-height="100%" height="100px" />
                                                        <div class="caption">
                                                            <h3 style="min-height:60px;"><?=$m1->nama_menu?></h3>
                                                            <p>Rp. <?=$m1->harga_menu?></p>
                                                            <button title="Lihat" type="button" class="btn btn-primary" data-toggle="modal" data-target="#mediumModal2<?php echo $m1->id_menu; ?>">Lihat</button> 
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                                endforeach;
                                            ?>
                                        </div>
                                     </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <hr>
                                        <div class="row" align="center">
                                            <?php
                                                foreach($menu2 as $m2):
                                            ?>
                                                 <div class="col-sm-2 col-md-2">
                                                    <div class="thumbnail">
                                                        <img src="<?php echo base_url('assets_admin/products/' . $m2->gambar) ?>" max-width="100%" max-height="100%" height="100px" />
                                                        <div class="caption">
                                                            <h3 style="min-height:60px;"><?=$m2->nama_menu?></h3>
                                                            <p>Rp. <?=$m2->harga_menu?></p>
                                                            <button title="Lihat" type="button" class="btn btn-primary" data-toggle="modal" data-target="#mediumModal2<?php echo $m2->id_menu; ?>">Lihat</button> 
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                                endforeach;
                                            ?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <hr>
                                        <div class="row" align="center">
                                            <?php
                                                foreach($menu3 as $m3):
                                            ?>
                                                <div class="col-sm-3 col-md-3">
                                                    <div class="thumbnail">
                                                        <img src="<?php echo base_url('assets_admin/products/' . $m3->gambar) ?>" max-width="100%" max-height="100%" height="100px" />
                                                        <div class="caption">
                                                            <h3 style="min-height:60px;"><?=$m3->nama_menu?></h3>
                                                            <p>Rp. <?=$m3->harga_menu?></p>
                                                            <button title="Lihat" type="button" class="btn btn-primary" data-toggle="modal" data-target="#mediumModal2<?php echo $m3->id_menu; ?>">Lihat</button> 
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                                endforeach;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div><!-- .content -->
             <!-- modal edit data -->
 <?php 
            foreach($menu as $a){ 
        ?>
        <div class="modal fade" id="mediumModal2<?php echo $a->id_menu;?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg-8" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel"><strong>Lihat <?php echo $a->nama_menu;?></strong></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <?= form_open_multipart('datamenu/update'); ?>    
                        <div class="form-group" align="center">    
                            <img src="<?php echo base_url('assets_admin/products/' . $a->gambar) ?>" max-width="100%" max-height="100%" height="200px" />
                        </div>
                        <input type="hidden" name="id_menu" value="<?php echo $a->id_menu;?>" required>
                        <div class="form-group">
                                <label class=" form-control-label">Nama</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-font"></i></div>
                                    <input class="form-control" name="nama_menu" value="<?php echo $a->nama_menu;?>" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Harga</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-dollar"></i></div>
                                    <input type="text" class="form-control" name="harga_menu" value="Rp. <?php echo $a->harga_menu;?>" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Deskripsi</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa  fa-align-justify"></i></div>
                                    <textarea class="form-control" name="desk_menu" rows="4" value="<?php echo $a->desk_menu;?>" disabled><?php echo $a->desk_menu;?></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- modal edit data -->