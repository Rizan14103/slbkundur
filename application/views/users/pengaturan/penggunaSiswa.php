<!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <?php
    echo $this->session->flashdata('msg');
    ?>
        <!-- Dashboard content -->
        <div class="row">
            <!-- Basic datatable -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title"><i class="icon-users"></i> Data Pegawai</h5>
                    <hr style="margin:0px;">
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                        </ul>
                    </div>


                    <br>
                    <a href="users/penggunaSiswa/t" class="btn btn-primary">+ <i class="icon-user"></i> Pengguna
                        Baru</a>
                </div>

                <table class="table datatable-basic" width="100%">
                    <thead>
                        <tr>
                            <th width="30px;">No.</th>
                            <th>Nama Lengkap</th>
                            <th>NISN</th>
                            <th>Email</th>
                            <th>Jabatan</th>
                            <th>Tanggal Masuk</th>

                            <th class="text-center" width="40"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
              $no = 1;
              foreach ($level_karyawan->result() as $baris) {
              ?>
                        <tr>
                            <td><?php echo $no.'.'; ?></td>

                            <td><?php echo $baris->nama_karyawan; ?></td>
                            <td><?php echo $baris->NIK; ?></td>
                            <td><?php echo $baris->email; ?></td>
                            <td><?php if($baris->level == "s_admin"){echo "Super Admin";}else{echo ucwords($baris->level);} ?>
                            </td>
                            <td><?php
                      if($baris->status == "" or $baris->status == NULL){ ?>
                                <button type="button" class="btn btn-danger btn-xs"><i class="icon-cross3"></i></button>
                                <?php
                      }else{ ?>
                                <button type="button" class="btn btn-success btn-xs"><i
                                        class="icon-checkmark4"></i></button>
                                <?php
                      } ?>
                            </td>
                            <td><?php if($baris->tgl_daftar == ""){ echo "-";}else{echo $baris->tgl_daftar;} ?></td>
                            <td><?php if($baris->terakhir_login == ""){ echo "-";}else{echo $baris->terakhir_login;} ?>
                            </td>
                            <td>
                                <a href="users/penggunaSiswa/d/<?php echo $baris->id_user; ?>"
                                    class="btn btn-info btn-xs"><i class="icon-eye"></i></a>
                                <a href="users/penggunaSiswa/e/<?php echo $baris->id_user; ?>"
                                    class="btn btn-success btn-xs"><i class="icon-pencil7"></i></a>
                                <a href="users/penggunaSiswa/h/<?php echo $baris->id_user; ?>"
                                    class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda yakin?')"><i
                                        class="icon-trash"></i></a>
                            </td>
                        </tr>
                        <?php
              $no++;
              } ?>
                    </tbody>
                </table>
            </div>
            <!-- /basic datatable -->
        </div>
        <!-- /dashboard content -->