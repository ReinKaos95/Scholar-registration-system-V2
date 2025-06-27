<?php include 'def.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="app.css">
	<title> <?php echo Title; ?></title>
</head>
<body>
   <?php if (isset($_SESSION['error'])): ?>
        <div class="error"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
    <?php endif; ?>
	<?php include 'login.php'; ?>
</body>
</html>