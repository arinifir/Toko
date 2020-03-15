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
                                <strong class="card-title">Data Tables</strong>
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
                                    // foreach($admin as $a){ 
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td>Aksi</td>
                                            <td>ID</td>
                                            <td>Nama</td>
                                            <td>Jenis Kelamin</td>
                                            <td>No Telepon</td>
                                            <td>Username</td>
                                        <!-- <td>
                                            <?php
                                            //tombol untuk melakukan aksi edit dan hapus data
                                            echo anchor('dataAdmin/edit/'.$a->id,'Edit'); 
                                            echo anchor('dataAdmin/hapus/'.$a->id,'Hapus'); ?>
                                            
                                        </td>
                                        <td><?php echo $a->id ?></td>
                                        <td><?php echo $a->nama ?></td>
                                        <td><?php echo $a->jk ?></td>
                                        <td><?php echo $a->notelp ?></td>
                                        <td><?php echo $a->username ?></td> -->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->