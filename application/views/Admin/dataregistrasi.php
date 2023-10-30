<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Datatables</h5>

                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Program Studi</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Tanggal Pengajuan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                 $a = 1;
                                foreach ($registrasi as $data) {
                                    $id = $data->id;
                                ?>
                                    <tr>
                                    <th scope="row">
                                        <?= $a++; ?></th>
                                        <td> <?= $data->name ?> </td>
                                        <td> <?= $data->program_studi ?> </td>
                                        <td><span class="badge bg-warning text-dark">PENDING </td>
                                        <td> <?php echo date('d M Y',strtotime($data->createDate)) ?> </td>
                                        <td>
                                            <button class="btn btn-sm btn-info viewDetail" title="Detail" value="<?= $id ?>"><i class="ri-eye-fill"></i></button>
                                            <button class="btn btn-sm btn-dark viewDetail" title="Detail" value="<?= $id ?>"><i class="bi bi-folder"></i></button>
                                            <a href="<?= base_url('admin/transaksi/cetak/' . $id) ?>" target="_blank" class="btn btn-sm btn-primary" title="Print"><i class="ri-printer-fill"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
</main>