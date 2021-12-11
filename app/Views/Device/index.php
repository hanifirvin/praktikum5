<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Device</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Device name</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($device as $d) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/<?= $d['Gambar']; ?>" alt="" class="image""></td>
                        <td><?= $d['device_name']; ?></td>
                        <td><?= $d['device_brand']; ?></td>
                        <td><?= $d['device_quantity']; ?></td>
                        <td><?= $d['device_status']; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>