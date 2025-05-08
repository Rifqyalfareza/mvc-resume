<?php
ob_start();
session_start(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="src/output.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="node_modules/preline/preline.js"></script>

    <link href="node_modules/flowbite/dist/flowbite.min.css" rel="stylesheet">
    
</head>
<body class="bg-gray-100" dir="ltr">
    <?php include 'src/components/toast.php'; ?>
    <?php include 'src/components/navbar.php'; ?>
    <?php include 'src/components/sidebar.php'; ?>
    <div class="p-4 sm:ml-64">
        <div class="rounded-lg bg-white mt-14">
            <?php include 'routes/app.php'; ?>
            <div class="py-5 ">
                <h1 class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a href="https://flowbite.com/" class="hover:underline">Alfareza™</a>. All Rights Reserved.</span></h1>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="node_modules/flowbite/dist/flowbite.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>
    <script src="src/assets/table.js"></script>
    
</body>
</html>
<?php ob_end_flush(); ?>