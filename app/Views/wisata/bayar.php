<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="flex justify-center align-center">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <h4 class="font-bold mb-3 text-center">Daftar Pembayaran Tiket Anda</h4>
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
                        Total
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Bayar
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($pesan as $data) : ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?= $no; ?>
                        </th>
                        <td class="px-6 py-4">
                            <?= $data->nama_wisata; ?>
                        </td>
                        <td class="px-6 py-4">
                            Rp. <?= number_format($data->total, 0, ',', '.'); ?>
                        </td>
                        <td class="px-6 py-4">
                            <a href="https://app.sandbox.midtrans.com/snap/v2/vtweb/<?= $data->snap; ?>" target="_blank" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Bayar
                            </a>
                        </td>
                        <?php if ($data->status !== 'settlement') { ?>

                            <td class="px-6 py-4">
                                <a href="<?= base_url('wisata/cek/' . $data->id_pesan); ?>" class="px-3 py-2 text-xs font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                    Verifikasi
                                </a>
                            </td>

                        <?php } ?>
                        <td class="px-6 py-4">
                            <?= $data->status; ?>
                        </td>
                    </tr>

                <?php $no++;
                endforeach ?>
            </tbody>
        </table>
    </div>
</div>


<?= $this->endSection(); ?>