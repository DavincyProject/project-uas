<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="flex justify-center align-center">
    <div class="p-8 flex justify-center flex-row gap-5 flex-wrap">
        <?php foreach ($wisata as $data) : ?>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <img class="rounded-t-lg object-cover h-[170px] w-[300px]" src="<?= base_url('foto/' . $data->foto); ?>" alt="" />

                <div class="p-5 text-center">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?= $data->nama_wisata; ?></h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?= $data->deskripsi; ?></p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Rp. <?= number_format($data->harga, 0, ',', '.'); ?> / Orang</p>
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg aria-hidden="true" class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
                        </svg>
                        <a href="<?= base_url('wisata/pesan/' . $data->id_wisata); ?>">Pesan Tiket</a>
                    </button>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<?= $this->endSection(); ?>