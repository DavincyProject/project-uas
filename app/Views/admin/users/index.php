<?= $this->extend('admin/layout/template'); ?>

<?= $this->section('content'); ?>

<h1 class="text-center mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
    Lihat User Yang Terdaftar
</h1>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No.
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama User
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal Pendaftaran
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($users as $data) : ?>
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class=" px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?= $no; ?>
                    </th>
                    <td class="px-6 py-4">
                        <?= $data->nama_users; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $data->email; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $data->created_at; ?>
                    </td>
                </tr>
            <?php $no++;
            endforeach ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>