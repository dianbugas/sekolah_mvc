<div class="container mt-5">
    <div class='row'>
        <div calss='col-6'>
            <h3>Daftar Ustadz</h3>
            <ul class="list-group">
            <?php foreach( $data['ust'] as $ust ) : ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $ust['nama']; ?>
                    <a href="<?= BASEURL; ?>/Ustadz/Detail/<?= $ust['id']; ?>" class="badge badge-primary">Detail</a>
                    </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>