<?php 
require_once 'config.php';

// Validate roadmap ID
if (!isset($_GET['id']) || !isset($roadmaps[$_GET['id']])) {
    header('Location: 404.php');
    exit();
}

$roadmap = $roadmaps[$_GET['id']];
$pageTitle = $roadmap['title'] . ' | ' . SITE_TITLE;
?>

<?php require_once 'header.php'; ?>

<main class="container mx-auto px-4 py-8">
    <div class="mb-6">
        <a href="index.php" class="text-indigo-600 hover:text-indigo-800 flex items-center">
            <i class="fas fa-arrow-left mr-2"></i> Back to Roadmaps
        </a>
    </div>

    <section class="mb-12">
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <img src="<?php echo $roadmap['image']; ?>" alt="<?php echo $roadmap['title']; ?>" class="w-full h-64 object-cover">
            <div class="p-6">
                <div class="flex justify-between items-start mb-4">
                    <h1 class="text-3xl font-bold text-gray-800"><?php echo $roadmap['title']; ?></h1>
                    <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm">
                        <?php echo $roadmap['difficulty']; ?>
                    </span>
                </div>
                <p class="text-gray-600 mb-6"><?php echo $roadmap['description']; ?></p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Learning Path</h2>
        <div class="space-y-6">
            <?php foreach ($roadmap['steps'] as $index => $step): ?>
            <div class="bg-white rounded-xl shadow-md p-6">
                <div class="flex items-start">
                    <div class="bg-indigo-100 text-indigo-800 rounded-full w-10 h-10 flex items-center justify-center mr-4 flex-shrink-0">
                        <?php echo $index + 1; ?>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2"><?php echo $step['title']; ?></h3>
                        <?php if (!empty($step['resources'])): ?>
                        <div class="mt-3">
                            <h4 class="text-sm font-medium text-gray-500 mb-2">RESOURCES</h4>
                            <ul class="space-y-2">
                                <?php foreach ($step['resources'] as $resource): ?>
                                <li class="flex items-center">
                                    <i class="fas fa-bookmark text-indigo-500 mr-2"></i>
                                    <span class="text-gray-700"><?php echo $resource; ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Related Roadmaps</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php 
            // Display first 2 roadmaps (excluding current one) as related
            $count = 0;
            foreach ($roadmaps as $id => $related): 
                if ($id != $_GET['id'] && $count < 2): 
                    $count++;
            ?>
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <img src="<?php echo $related['image']; ?>" alt="<?php echo $related['title']; ?>" class="w-full h-32 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-800 mb-1"><?php echo $related['title']; ?></h3>
                    <p class="text-gray-600 text-sm mb-3"><?php echo substr($related['description'], 0, 80) . '...'; ?></p>
                    <a href="roadmap.php?id=<?php echo $id; ?>" class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">
                        View Roadmap <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
            <?php 
                endif;
            endforeach; 
            ?>
        </div>
    </section>
</main>

<?php require_once 'footer.php'; ?>