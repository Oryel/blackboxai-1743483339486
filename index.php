<?php require_once 'config.php'; ?>
<?php require_once 'header.php'; ?>

<main class="container mx-auto px-4 py-8">
    <section class="hero bg-indigo-50 rounded-xl p-8 mb-12">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Your Learning Roadmap Starts Here</h1>
            <p class="text-xl text-gray-600 mb-8">Structured paths to master any tech skill</p>
            <div class="relative max-w-md mx-auto">
                <input type="text" placeholder="Search roadmaps..." 
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <button class="absolute right-2 top-2 text-gray-400 hover:text-indigo-600">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Popular Roadmaps</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach($roadmaps as $id => $roadmap): ?>
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <img src="<?php echo $roadmap['image']; ?>" alt="<?php echo $roadmap['title']; ?>" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-bold text-gray-800"><?php echo $roadmap['title']; ?></h3>
                        <span class="bg-indigo-100 text-indigo-800 text-xs px-2 py-1 rounded-full">
                            <?php echo $roadmap['difficulty']; ?>
                        </span>
                    </div>
                    <p class="text-gray-600 mb-4"><?php echo $roadmap['description']; ?></p>
                    <a href="roadmap.php?id=<?php echo $id; ?>" 
                       class="inline-block bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition-colors">
                        View Roadmap
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Categories</h2>
        <div class="flex flex-wrap gap-3">
            <button class="px-4 py-2 bg-indigo-100 text-indigo-800 rounded-full hover:bg-indigo-200">Web Development</button>
            <button class="px-4 py-2 bg-indigo-100 text-indigo-800 rounded-full hover:bg-indigo-200">Data Science</button>
            <button class="px-4 py-2 bg-indigo-100 text-indigo-800 rounded-full hover:bg-indigo-200">Mobile</button>
            <button class="px-4 py-2 bg-indigo-100 text-indigo-800 rounded-full hover:bg-indigo-200">DevOps</button>
            <button class="px-4 py-2 bg-indigo-100 text-indigo-800 rounded-full hover:bg-indigo-200">Design</button>
        </div>
    </section>
</main>

<?php require_once 'footer.php'; ?>