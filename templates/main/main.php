<?php $title = "";
$h1 = "Главная страница";
include __DIR__ . '/../header.php';
?>

<div class="main">
    <div class="main a-edit">
        <ul class="products-list">
            <?php foreach ($companies as $item) : ?>
                <li class="products-item a-edit" onclick="location.href='/companies/<?= $item ?>'">
                    <h1 class="font-text-head products-title text-big"><?= $item ?></h1>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <section aria-label="Контакты">
        <?php include __DIR__ . '/../pages/contact.php'; ?>
    </section>
</div>
<?php include __DIR__ . '/../footer.php'; ?>