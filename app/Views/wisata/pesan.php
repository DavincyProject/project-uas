<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="flex justify-center align-center">
    <div class="max-w-md bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <img class="rounded-t-lg" src="<?= base_url('foto/' . $wisata->foto); ?>" alt="<?= $wisata->nama_wisata; ?>" />
        <div class="p-5">
            <h3 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Tujuan Wisata : <?= $wisata->nama_wisata; ?></h3>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                Harga Tiket : <?= number_format($wisata->harga, 0, ',', '.'); ?>
            </p>
            <h5 class="text-red-700 font-bold text-xs mb-2">Untuk harga tiket anak setengah harga dari tiket dewasa</h5>

            <?php $validation = \Config\Services::validation() ?>
            <form method="POST" action="<?= base_url('wisata/proses'); ?>">
                <input type="hidden" name="harga" value="<?= $wisata->harga; ?>">
                <input type="hidden" name="id" value="<?= $wisata->id_wisata; ?>">
                <?= csrf_field(); ?>

                <div class="mb-6">
                    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Anak-anak</label>
                    <input type="text" name="anak" value="<?= set_value('anak'); ?>" id="base-input" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <small class="text-red-500 font-bold"><?= $validation->getError('anak'); ?></small>
                </div>
                <div class="mb-6">
                    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dewasa</label>
                    <input type="text" name="dewasa" value="<?= set_value('dewasa'); ?>" id="base-input" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <small class="text-red-500 font-bold"><?= $validation->getError('dewasa'); ?></small>
                </div>
                <div class="mb-6">
                    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Keberangkatan</label>
                    <input type="date" name="tanggal_berangkat" id="base-input" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <small class="text-red-500 font-bold"><?= $validation->getError('tanggal_berangkat'); ?></small>
                </div>
                <div class="mb-6">
                    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Kedatangan</label>
                    <input type="date" name="tanggal" id="base-input" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <small class="text-red-500 font-bold"><?= $validation->getError('tanggal'); ?></small>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Pesan Tiket
                </button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>