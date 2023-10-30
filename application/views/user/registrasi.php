<main id="main" class="main">


    <section class="section">
        <div class="row" >
            
            <div class="col-lg-7 mx-auto mb-8">
                <div class="card">
                    <div class="card-body bg-black bg-opacity-25"  >
                        <h5 class="card-title">General Form Elements</h5>

                        <!-- General Form Elements -->
                        <form method="POST" action="<?= base_url('admin/registrasi/regis')?>">
                            <div class="row mb-3">
                                <label>Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" value="<?=set_value('name')?>">
                                    <?= form_error('name', "<small class='text-danger'>", '</small>') ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label>Nim</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="nim" value="<?=set_value('nim')?>">
                                    <?= form_error('nim', "<small class='text-danger'>", '</small>') ?>
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <label>Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki - Laki" required>
                                        Laki - Laki                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" required> 
                                        Perempuan
                                    </div>

                                </div>
                            </fieldset>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label" >Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email" value="<?=set_value('email')?>">
                                    <?= form_error('email', "<small class='text-danger'>", '</small>') ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Nomor Telp/WA</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="no_hp" value="<?=set_value('no_hp')?>">
                                    <?= form_error('no_hp', "<small class='text-danger'>", '</small>') ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">Alamat Domisili</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alamat_domisili" value="<?=set_value('alamat_domisili')?>">
                                    <?= form_error('alamat_domisili', "<small class='text-danger'>", '</small>') ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputTime" class="col-sm-2 col-form-label">Fakultas</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="fakultas" value="<?=set_value('fakultas')?>">
                                    <?= form_error('fakultas', "<small class='text-danger'>", '</small>') ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputTime" class="col-sm-2 col-form-label">Program Studi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="program_studi" value="<?=set_value('program_studi')?>">
                                    <?= form_error('program_studi', "<small class='text-danger'>", '</small>') ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputTime" class="col-sm-2 col-form-label">Asal Kampus</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="asal_kampus" value="<?=set_value('asal_kampus')?>">
                                    <?= form_error('asal_kampus', "<small class='text-danger'>", '</small>') ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputTime" class="col-sm-2 col-form-label">Lama Magang</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="asal_kampus" value="<?=set_value('')?>">
                                    <?= form_error('name', "<small class='text-danger'>", '</small>') ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Surat Dari Kampus</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" name="surat_kampus">
                                    <?= form_error('surat_kampus', "<small class='text-danger'>", '</small>') ?>
                                </div>
                            </div>
                            <div class="row mb-5 mt-5">
                                <div class="col-sm-3 mx-auto">
                                    <button type="submit" class="btn btn-primary">Submit Form</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->
                    </div>
                </div>
            </div>
        </div>

    </section>

</main><!-- End #main -->