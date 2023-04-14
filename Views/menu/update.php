<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
</head>
<body>
    <h1><?= $title ?></h1>

    <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <form action="/menu/update/<?= $menu['id'] ?>" method="post">
        <?= csrf_field() ?>
        <input type="hidden" name="_method" value="PUT" />

        <div>
            <label for="nmmenu">Nama Menu</label>
            <input type="text" name="nmmenu" value="<?= $menu['nmmenu'] ?>" />
        </div>

        <div>
            <label for="harga">Harga</label>
            <input type="text" name="harga" value="<?= $menu['harga'] ?>" />
        </div>

        <div>
            <label for="gambar">Gambar</label>
            <input type="text" name="gambar" value="<?= $menu['gambar'] ?>" />
        </div>

        <div>
            <button type="submit">Update</button>
        </div>
    </form>
</body>
</html>
