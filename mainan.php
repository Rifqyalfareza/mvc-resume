<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="src/output.css" rel="stylesheet" />
    <!-- Flowbite CSS (optional, sebenernya flowbite lebih ke JS) -->
    <link href="node_modules/flowbite/dist/flowbite.min.css" rel="stylesheet">
    <!-- Flowbite JS -->
    <script src="node_modules/flowbite/dist/flowbite.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>
    <script src="node_modules/preline/preline.js"></script>
</head>

<body class="bg-gray-100">
    <?php include 'src/components/navbar.php'; ?>
    <?php include 'src/components/sidebar.php'; ?>
    <div class="p-4 sm:ml-64">
        <div class="rounded-lg bg-white dark:border-gray-700 mt-14">
            <?php include 'routes/app.php'; ?>
        </div>
    </div>
</body>

</html>
<?php ob_end_flush(); ?>