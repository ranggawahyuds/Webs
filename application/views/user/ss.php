<main id="main" class="main">


    <section class="section">
        <div class="row" >
            
            <div class="col-lg-7 mx-auto mb-8">
                <div class="card">
                    <div class="card-body bg-black bg-opacity-25"  >
                        <h5 class="card-title">General Form Elements</h5>

                        <!-- General Form Elements -->
                        <form method="POST" action="<?= base_url('admin/ss/regis')?>" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label>Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" value="<?=set_value('name')?>">
                                    <?= form_error('name', "<small class='text-danger'>", '</small>') ?>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label>Surat Dari Kampus</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="surat_kampus" name="surat_kampus">
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