<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>


<h1 class="text-center mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
    Lihat Order Yang Telah Sukses
</h1>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No.
                </th>
                <th scope="col" class="px-6 py-3">
                    Tujuan Wisata
                </th>
                <th scope="col" class="px-6 py-3">
                    Total
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $total = 0;

            foreach ($pesan as $data) :
                $total += $data->total;
            ?>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class=" px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?= $no; ?>
                    </th>
                    <td class="px-6 py-4">
                        <?= $data->nama_wisata; ?>
                    </td>
                    <td class="px-6 py-4">
                        Rp. <?= number_format($data->total, 0, ',', '.'); ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $data->status; ?>
                    </td>
                </tr>
            <?php
                $no++;
            endforeach
            ?>
        </tbody>
        <p class="m-3 text-lg text-gray-500 md:text-xl dark:text-gray-400">Total Keseluruhan : Rp. <?= number_format($total, 0, ',', '.'); ?></p>
    </table>
</div>



<?= $this->endSection(); ?>