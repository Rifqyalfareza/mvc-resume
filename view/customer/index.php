<div>
    <div class="flex items-center justify-between mb-4">
        <h2 class="text-gray-600 text-2xl font-bold ">Data Customer</h2>
        <?php include 'create.php'; ?>
        <button type="button" data-modal-target=modal-tambah data-modal-toggle=modal-tambah class="flex items-center gap-2 text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium text-sm px-2 py-2 text-center  dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5" />
            </svg>
            Create
        </button>

    </div>
    <nav class="flex pl-2 mb-5" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Projects</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Flowbite</span>
                </div>
            </li>
        </ol>
    </nav>
    <table id="selection-table">
        <thead>
            <tr>
                <th>
                    <span class="flex items-center">
                        Name
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                        </svg>
                    </span>
                </th>
                <th data-type="date" data-format="YYYY/DD/MM">
                    <span class="flex items-center">
                        Release Date
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                        </svg>
                    </span>
                </th>
                <th>
                    <span class="flex items-center">
                        NPM Downloads
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                        </svg>
                    </span>
                </th>
                <th>
                    <span class="flex items-center">
                        Growth
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                        </svg>
                    </span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Flowbite</td>
                <td>2021/25/09</td>
                <td>269000</td>
                <td>49%</td>
            </tr>
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">React</td>
                <td>2013/24/05</td>
                <td>4500000</td>
                <td>24%</td>
            </tr>
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Angular</td>
                <td>2010/20/09</td>
                <td>2800000</td>
                <td>17%</td>
            </tr>
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Vue</td>
                <td>2014/12/02</td>
                <td>3600000</td>
                <td>30%</td>
            </tr>
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Svelte</td>
                <td>2016/26/11</td>
                <td>1200000</td>
                <td>57%</td>
            </tr>
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Ember</td>
                <td>2011/08/12</td>
                <td>500000</td>
                <td>44%</td>
            </tr>
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Backbone</td>
                <td>2010/13/10</td>
                <td>300000</td>
                <td>9%</td>
            </tr>
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">jQuery</td>
                <td>2006/28/01</td>
                <td>6000000</td>
                <td>5%</td>
            </tr>
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Bootstrap</td>
                <td>2011/19/08</td>
                <td>1800000</td>
                <td>12%</td>
            </tr>
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Foundation</td>
                <td>2011/23/09</td>
                <td>700000</td>
                <td>8%</td>
            </tr>
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Bulma</td>
                <td>2016/24/10</td>
                <td>500000</td>
                <td>7%</td>
            </tr>
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Next.js</td>
                <td>2016/25/10</td>
                <td>2300000</td>
                <td>45%</td>
            </tr>
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Nuxt.js</td>
                <td>2016/16/10</td>
                <td>900000</td>
                <td>50%</td>
            </tr>
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Meteor</td>
                <td>2012/17/01</td>
                <td>1000000</td>
                <td>10%</td>
            </tr>
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Aurelia</td>
                <td>2015/08/07</td>
                <td>200000</td>
                <td>20%</td>
            </tr>
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Inferno</td>
                <td>2016/27/09</td>
                <td>100000</td>
                <td>35%</td>
            </tr>
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Preact</td>
                <td>2015/16/08</td>
                <td>600000</td>
                <td>28%</td>
            </tr>
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Lit</td>
                <td>2018/28/05</td>
                <td>400000</td>
                <td>60%</td>
            </tr>
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Alpine.js</td>
                <td>2019/02/11</td>
                <td>300000</td>
                <td>70%</td>
            </tr>
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Stimulus</td>
                <td>2018/06/03</td>
                <td>150000</td>
                <td>25%</td>
            </tr>
            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Solid</td>
                <td>2021/05/07</td>
                <td>250000</td>
                <td>80%</td>
            </tr>
        </tbody>
    </table>
</div>
<script>
    if (document.getElementById("selection-table") && typeof simpleDatatables.DataTable !== 'undefined') {

        let multiSelect = true;
        let rowNavigation = false;
        let table = null;

        const resetTable = function() {
            if (table) {
                table.destroy();
            }

            const options = {
                rowRender: (row, tr, _index) => {
                    if (!tr.attributes) {
                        tr.attributes = {};
                    }
                    if (!tr.attributes.class) {
                        tr.attributes.class = "";
                    }
                    if (row.selected) {
                        tr.attributes.class += " selected";
                    } else {
                        tr.attributes.class = tr.attributes.class.replace(" selected", "");
                    }
                    return tr;
                }
            };
            if (rowNavigation) {
                options.rowNavigation = true;
                options.tabIndex = 1;
            }

            table = new simpleDatatables.DataTable("#selection-table", options);

            // Mark all rows as unselected
            table.data.data.forEach(data => {
                data.selected = false;
            });

            table.on("datatable.selectrow", (rowIndex, event) => {
                event.preventDefault();
                const row = table.data.data[rowIndex];
                if (row.selected) {
                    row.selected = false;
                } else {
                    if (!multiSelect) {
                        table.data.data.forEach(data => {
                            data.selected = false;
                        });
                    }
                    row.selected = true;
                }
                table.update();
            });
        };


        // Row navigation makes no sense on mobile, so we deactivate it and hide the checkbox.
        const isMobile = window.matchMedia("(any-pointer:coarse)").matches;
        if (isMobile) {
            rowNavigation = false;
        }

        resetTable();
    }
</script>