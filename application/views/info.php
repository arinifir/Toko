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
                                    <li class="active">Info Buka</li>
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
                                <h4>Info Buka</h4>
                            </div>
                            <div class="card-body" align="center">
                            <hr>
                            <tr><td align="left"><strong>Hari ==></strong></td></tr>
                            <tr align="right"><td><strong>Jam Buka</strong></td><td> - </td><td><strong>Jam Tutup</strong></td></tr>
                            <br><br>
                                    <?php 
                                        foreach($info_buka as $a){ 
                                    ?>
                                        <tr>
                                            <td align="left"><strong><?php echo $a->hari ?> ==> </strong></td>
                                        </tr>
                                        
                                            <?php
                                                if($a->status == "Open"){?>
                                                    <tr align="right">
                                                        <td style="font-color: green;"><?php echo $a->jam_buka ?></td><td> - </td>
                                                        <td><?php echo $a->jam_tutup ?></td>
                                                    </tr><br>
                                            <?php
                                                }else if($a->status == "Closed"){?>
                                                    <tr>
                                                        <td><button type="button" disabled class="btn btn-outline-danger btn-sm">Closed</button></td>
                                                    </tr><br>
                                            <?php
                                                }
                                            ?>
                                            <br>
                                    <?php 
                                        }
                                    ?>
                                    <hr>
                            </div>
                        </div>
                    </div>
                </div>    
            </div><!-- .content -->