<?php include 'modules/main/header.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title; ?></title>
    <meta name="description" content="<?php echo $site_description; ?>">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'modules/main/navigation.php'; ?>
    
    <main class="main-content">
        <?php include 'modules/main/hero.php'; ?>
        <?php include 'modules/main/services-tabs.php'; ?>
        <?php include 'modules/main/features.php'; ?>
    </main>
    
    <?php include 'modules/main/footer.php'; ?>
    
    <script src="assets/js/main.js"></script>
</body>
</html>
