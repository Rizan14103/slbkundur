<!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">

        <!-- Dashboard content -->
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel panel-flat">

                    <div class="panel-body">

                        <fieldset class="content-group">
                            <legend class="text-bold"><i class="icon-user"></i> Tambah Karyawan</legend>
                            <?php
                echo $this->session->flashdata('msg');
                ?>
                            <form class="form-horizontal" action="" method="post">
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Jabatan</label>
                                    <div class="col-lg-9">
                                        <select class="form-control" name="level" required>
                                            <option value="">- Pilih Jabatan -</option>
                                            <option value="admin">Kepala Sekolah</option>
                                            <option value="user">PNS</option>
                                            <option value="user">Guru Bantu</option>
                                            <option value="user">Honorer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3">Nama</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="username" class="form-control" value=""
                                            placeholder="Nama Pengguna" maxlength="100" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-3">NISN</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="NIK" class="form-control" value="" placeholder="NIK"
                                            required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-3">Email</label>
                                    <div class="col-lg-9">
                                        <input type="email" name="email" class="form-control" value=""
                                            placeholder="Email" required>
                                    </div>
                                </div>


                                <a href="users/penggunaKR" class="btn btn-default">
                                    << Kembali</a>
                                        <button type="submit" name="btnsimpan" class="btn btn-primary"
                                            style="float:right;">Simpan</button>
                            </form>

                        </fieldset>


                    </div>

                </div>
            </div>
        </div>
        <!-- /dashboard content -->