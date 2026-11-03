<?php
// "Search Collector": collects the keyword and shows results sent back by the handler
require 'includes/session_check.php';   // Session check (common)
$search = isset($_SESSION['search']) ? $_SESSION['search'] : null;

$pageTitle = 'Search'; $active = 'search.php';
include 'includes/header.php';
?>

<section id="search">
    <h2>Search My Portfolio <span class="badge">Private</span></h2>
    <form action="search_handler.php" method="post">
        <label for="q">Keyword (e.g. Python, Power BI, intern)</label>
        <input type="text" id="q" name="q" value="<?= e($search ? $search['q'] : '') ?>" required>
        <button type="submit">Search</button>
    </form>
</section>

<?php if ($search): ?>
<section id="results">
    <h2>Results for "<?= e($search['q']) ?>"</h2>
    <?php if (count($search['results']) === 0): ?>
        <p>No matches found.</p>
    <?php else: ?>
        <?php foreach ($search['results'] as $r): ?>
            <div class="result">
                <div class="entry-title"><?= e($r['title']) ?></div>
                <div class="entry-subtitle"><?= e($r['category']) ?></div>
                <p><?= e($r['description']) ?></p>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</section>
<?php endif; ?>

<?php include 'includes/footer.php'; ?>
