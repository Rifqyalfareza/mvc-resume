<div class="pb-8">
    <div class="flex items-center justify-between mb-8 px-8 pt-8">
        <h2 class="text-gray-600 text-2xl font-bold ">Resume Claim</h2>
    </div>
    <div class="bg-white px-8 rounded-lg">
        <nav class="flex mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 ms-1 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Home
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Resume Claim</span>
                    </div>
                </li>
            </ol>
        </nav>
        <table id="selection-table" >
            <thead>
                <tr>
                    <th>
                        <span class="flex items-center  text-blue-400 hover:text-blue-600">
                            No
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center  text-blue-400 hover:text-blue-600">
                            Tanggal
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center  text-blue-400 hover:text-blue-600">
                            Customer
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center  text-blue-400 hover:text-blue-600">
                            Part
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center  text-blue-400 hover:text-blue-600">
                            Problem
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>

                    <th>
                        <span class="flex items-center  text-blue-400 hover:text-blue-600">
                            Progress
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th class="text-center">
                        <span class="flex items-center text-blue-400 hover:text-blue-600">
                            Aksi
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($resumes as $resume) : ?>
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                        <td class="font-medium text-xs text-gray-900 whitespace-nowrap dark:text-white"><?= $no++ ?></td>
                        <td class="font-medium text-xs text-gray-900 whitespace-nowrap dark:text-white">
                            <?= date('d/m/Y', strtotime($resume['tanggal'])) ?>
                        </td>
                        <td class="font-medium text-xs text-gray-900 whitespace-nowrap dark:text-white"><?= $resume['singkatan'] ?></td>
                        <td class="font-medium text-xs text-gray-900 whitespace-nowrap dark:text-white"><?= $resume['part_name'] ?></td>
                        <td class="font-medium text-xs text-gray-900 whitespace-nowrap dark:text-white"><?= $resume['problem'] ?></td>
                        <td class="font-medium text-xs text-gray-900 whitespace-nowrap dark:text-white" style="text-transform: capitalize;">
                            <?php if ($resume['proses'] == 'sakanobory') : ?>
                                <div>
                                    <span class="px-2 py-0.5 inline-flex items-center gap-x-1 text-[4px] font-medium bg-red-100 text-red-800 rounded-full dark:bg-red-500/10 dark:text-red-500">
                                        <svg class="shrink-0 size-3 me-2" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path>
                                            <path d="M12 9v4"></path>
                                            <path d="M12 17h.01"></path>
                                        </svg>
                                        <?= $resume['proses']; ?>
                                    </span>
                                </div>
                            <?php elseif ($resume['proses'] == 'analysis') : ?>
                                <div>
                                    <span class="px-2 py-0.5 inline-flex items-center gap-x-1 text-[4px] font-medium bg-blue-100 text-blue-800 rounded-full dark:bg-blue-500/10 dark:text-blue-500">
                                        <svg class="shrink-0 w-3 h-3 align-middle me-1.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="12" x2="12" y1="2" y2="6"></line>
                                            <line x1="12" x2="12" y1="18" y2="22"></line>
                                            <line x1="4.93" x2="7.76" y1="4.93" y2="7.76"></line>
                                            <line x1="16.24" x2="19.07" y1="16.24" y2="19.07"></line>
                                            <line x1="2" x2="6" y1="12" y2="12"></line>
                                            <line x1="18" x2="22" y1="12" y2="12"></line>
                                            <line x1="4.93" x2="7.76" y1="19.07" y2="16.24"></line>
                                            <line x1="16.24" x2="19.07" y1="7.76" y2="4.93"></line>
                                        </svg>
                                        On <?= $resume['proses']; ?>
                                    </span>
                                </div>
                            <?php else : ?>
                                <div>
                                    <span class="pl-2 pr-4 py-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-600 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                        <svg class="shrink-0 align-middle size-3 me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                                            <path d="m9 12 2 2 4-4"></path>
                                        </svg>
                                        <?= $resume['proses']; ?>
                                    </span>
                                </div>
                            <?php endif; ?>
                        </td>
                        <td class="flex gap-2 text-center justify-center">
                            <?php if ($resume['proses'] == 'analysis'): ?>
                                <a href="#"
                                    data-modal-target="modal-analysis"
                                    data-modal-toggle="modal-analysis"
                                    data-tooltip-target="tooltip-edit-<?= $resume['id_resume_claim'] ?>"
                                    data-tooltip-placement="top"
                                    id-resume="<?= $resume['id_resume_claim'] ?>"
                                    data-problem="<?= $resume['problem'] ?>"
                                    class="bg-green-600 hover:bg-green-800 p-1">
                                    <svg class="w-5 h-5 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v9m-5 0H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-2M8 9l4-5 4 5m1 8h.01" />
                                    </svg>

                                </a>
                                <div id="tooltip-edit-<?= $resume['id_resume_claim'] ?>" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                                    Upload Analysis
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>

                            <?php elseif ($resume['proses'] == 'sakanobory'): ?>
                                <a href="#"
                                    onclick="confirmProses(<?= $resume['id_resume_claim'] ?>)"
                                    class="bg-yellow-400 hover:bg-yellow-500 p-1"
                                    data-tooltip-target="tooltip-proses-<?= $resume['id_resume_claim'] ?>">
                                    <svg class="w-5 h-5 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-6 7 2 2 4-4m-5-9v4h4V3h-4Z" />
                                    </svg>
                                </a>
                                <div id="tooltip-proses-<?= $resume['id_resume_claim'] ?>" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                                    Next Process
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            <?php else: ?>
                                <a href="#"
                                    class="bg-blue-500 hover:bg-blue-700 p-1"
                                    data-tooltip-target="tooltip-view-<?= $resume['id_resume_claim'] ?>">
                                    <svg class="w-5 h-5 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                        <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    <div id="tooltip-view-<?= $resume['id_resume_claim'] ?>" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                                        View Report
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </a>
                            <?php endif; ?>
                            <a href="#"
                                onclick="confirm(<?= $resume['id_resume_claim'] ?>)"
                                class="bg-red-500 hover:bg-red-700 p-1"
                                data-tooltip-target="tooltip-delete-<?= $resume['id_resume_claim'] ?>">
                                <svg class="w-5 h-5 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                </svg>
                            </a>
                            <div id="tooltip-delete-<?= $resume['id_resume_claim'] ?>" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                                Delete Resume
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<div id="modal-analysis" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Upload Analysis
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modal-analysis">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" action="?page=resume&action=storeAnalysis" method="POST" enctype="multipart/form-data">
                <div class="grid gap-4 mb-4 grid-cols-1">
                    <input type="hidden" name="id_resume_claim">
                    <div class="col-span-2">
                        <label for="occured" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Occured</label>
                        <textarea type="text" name="occured" id="occured" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Describe the occured" required=""></textarea>
                    </div>
                    <div class="col-span-2">
                        <label for="lost_inspection" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lost Inspection</label>
                        <textarea type="text" name="lost_inspection" id="lost_inspection" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Describe the lost inspection" required=""></textarea>
                    </div>
                    <div class="col-span-2">
                        <label for="problem" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Problem</label>
                        <textarea id="problem" name="problem" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>
                    </div>
                    <div class="col-span-2">
                        <label for="proses" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Approved ? <span class="text-red-600">*</span></label>
                        <select name="proses" id="proses" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">-- Pilih --</option>
                            <option value="Approved">Approved</option>
                            <option value="Waiting">Waiting for Approval</option>
                        </select>
                    </div>
                </div>

                <div class="col-span-2">
                        <label for="pencegahan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Report</label>
                        <input class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="pencegahan" name="pencegahan" type="file">
                    </div>
                <div class="col-span-2">
                    <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                        Upload Analysis
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function confirmProses($id) {
        Swal.fire({
            title: 'Next Process ?',
            text: "Apakah proses ini telah usai",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Do it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '?page=resume&action=updateStatus&id=' + $id;
            }
        })
    }

    function confirm($id) {
        Swal.fire({
            title: 'Are your sure ?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Do it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '?page=resume&action=delete&id=' + $id;
            }
        })
    }

    document.addEventListener('DOMContentLoaded',()=>{
        document.querySelectorAll('[data-modal-target="modal-analysis"]').forEach(button => {
            button.addEventListener('click', function() {
                const id = this.getAttribute('id-resume');
                const problem = this.getAttribute('data-problem');

                const modal = document.getElementById('modal-analysis');
                modal.querySelector('input[name="id_resume_claim"]').value = id;
                modal.querySelector('textarea[name="problem"]').value = problem;
                // modal.querySelector('form').action = '?page=resume&action=storeAnalysis';
            })
        })
    })
</script>