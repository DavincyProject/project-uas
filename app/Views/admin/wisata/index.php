<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<h1 class="text-center mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
    Halaman Kelola Wisata
</h1>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-10">
    <div class="mb-2 d-grid text-right">
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            <a href="<?= base_url('admin/wisata/add'); ?>">+ Add</a>
        </button>
    </div>

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No.
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Wisata
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga
                </th>
                <th scope="col" class="px-6 py-3">
                    Foto
                </th>
                <th scope="col" class="px-6 py-3">
                    Proses
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($wisata as $w) : ?>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class=" px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?= $no; ?>
                    </th>
                    <td class="px-6 py-4">
                        <?= $w->nama_wisata; ?>
                    </td>
                    <td class="px-6 py-4">
                        Rp. <?= number_format($w->harga, 0, ',', '.'); ?>
                    </td>
                    <td class="px-6 py-4">
                        <img src="<?= base_url('foto/' . $w->foto); ?>" style="width: 150px; height:100px;" alt="">
                    </td>
                    <td class="px-6 py-4">
                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            <a href="<?= base_url('admin/wisata/edit/' . $w->id_wisata); ?>">
                                Edit
                            </a>
                        </button>
                        <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">
                            <a href="<?= base_url('admin/wisata/delete/' . $w->id_wisata); ?>">
                                Delete
                            </a>
                        </button>
                    </td>
                </tr>
            <?php $no++;
            endforeach ?>
        </tbody>
    </table>
</div>



<?= $this->endSection(); ?>