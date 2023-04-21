<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>
<h1 class="text-center mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
    Tambah Tujuan Wisata Baru
</h1>

<form method="POST" action="<?= base_url('admin/wisata/save'); ?>" enctype="multipart/form-data"> <!-- menggunakan multipart untuk kirim data file foto -->
    <?= csrf_field(); ?>
    <?php $validation = \Config\Services::validation(); ?>

    <div class="mb-6">
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Wisata</label>
        <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <small class="text-red-500 font-bold"><?= $validation->getError('nama'); ?></small>
    </div>
    <div class="mb-6">
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
        <input type="text" name="des" value="<?= set_value('des'); ?>" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <small class="text-red-500 font-bold"><?= $validation->getError('des'); ?></small>
    </div>
    <div class="mb-6">
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto Wisata</label>
        <input type="file" name="foto">
        <small class="text-red-500 font-bold"><?= $validation->getError('foto'); ?></small>
    </div>
    <div class="mb-6">
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
        <input type="text" name="harga" value="<?= set_value('harga'); ?>" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <small class="text-red-500 font-bold"><?= $validation->getError('harga'); ?></small>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Add
    </button>
</form>

<?= $this->endSection(); ?>