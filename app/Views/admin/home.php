<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mc-auto mb-5 text-center">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
        Halo,
        <span class="underline underline-offset-2 decoration-8 decoration-blue-400 dark:decoration-blue-600">
            <?= session()->get('nama'); ?>!
        </span>
    </h1>
    <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
        Selamat Datang di Dashboard Admin,<br> silahkan gunakan Navigasi untuk mengatur keperluan Website.
    </p>
</div>


<div class="container mx-10">
    <?= $this->renderSection('content'); ?>
    <div class="relative overflow-x-auto">
        <h5 class="text-center font-bold mb-5 ">List Wisata Yang Didaftarkan</h5>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama Wisata
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga Tiket
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $db = \Config\Database::connect();
                $builder = $db->table('wisata')->get()->getResult();
                ?>
                <?php foreach ($builder as $data) : ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-large text-gray-900 whitespace-nowrap dark:text-white">
                            <?= $data->nama_wisata; ?>
                        </th>
                        <td class="px-6 py-4">
                            Rp. <?= number_format($data->harga, 0, ',', '.'); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>