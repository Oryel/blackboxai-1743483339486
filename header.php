<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_TITLE; ?></title>
    <link rel="icon" href="favicon.svg" type="image/svg+xml">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        darkMode: 'media',
        theme: {
          extend: {}
        }
      }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="index.php" class="text-2xl font-bold text-indigo-600">SkillPath</a>
            <nav class="hidden md:flex space-x-8">
                <a href="index.php" class="text-gray-700 hover:text-indigo-600">Home</a>
                <a href="#" class="text-gray-700 hover:text-indigo-600">Categories</a>
                <a href="contact.php" class="text-gray-700 hover:text-indigo-600">Contact</a>
            </nav>
            <div class="flex items-center space-x-4">
                <?php if(isset($_SESSION['user'])): ?>
                    <span class="text-gray-700">Welcome, <?php echo $_SESSION['user']; ?></span>
                    <a href="logout.php" class="text-gray-700 hover:text-indigo-600">Logout</a>
                <?php else: ?>
                    <a href="login.php" class="text-gray-700 hover:text-indigo-600">Login</a>
                    <a href="register.php" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </header>