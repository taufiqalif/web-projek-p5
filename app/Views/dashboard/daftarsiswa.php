<?= $this->extend('dashboard/layouts/halaman'); ?>

<?= $this->section('isi'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIS</th>
                        <th>Nama Lengkap</th>
                        <th>Age</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>123456789</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>
                        <a class="btn btn-primary btn-sm" href="#" role="button">Detail</a>
                        <a class="btn btn-success btn-sm" href="#" role="button">Edit</a>
                        <a class="btn btn-danger btn-sm" href="#" role="button">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>