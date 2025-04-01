<?php 
require_once 'config.php';
$pageTitle = 'Page Not Found | ' . SITE_TITLE;
?>

<?php require_once 'header.php'; ?>

<main class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto text-center">
        <div class="text-9xl font-bold text-indigo-100 mb-6">404</div>
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Page Not Found</h1>
        <p class="text-xl text-gray-600 mb-8">The page you're looking for doesn't exist or has been moved.</p>
        
        <div class="relative max-w-md mx-auto mb-8">
            <input type="text" placeholder="Search roadmaps..." 
                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            <button class="absolute right-2 top-2 text-gray-400 hover:text-indigo-600">
                <i class="fas fa-search"></i>
            </button>
        </div>

        <a href="index.php" class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition-colors">
            <i class="fas fa-home mr-2"></i> Return to Homepage
        </a>
    </div>
</main>

<?php require_once 'footer.php'; ?>