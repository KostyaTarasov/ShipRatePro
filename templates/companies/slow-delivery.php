<?php $title = "Медленная доставка";
$h1 = $title;
include __DIR__ . '/../header.php'; ?>

<div class="main">
    <form action="/companies/slow-delivery" method="post">
        <label for="sourceKladrSlow">Откуда (КЛАДР):</label>
        <input type="text" id="sourceKladrSlow" name="sourceKladrSlow"><br>

        <label for="targetKladrSlow">Куда (КЛАДР):</label>
        <input type="text" id="targetKladrSlow" name="targetKladrSlow"><br>

        <label for="weightSlow">Вес (кг):</label>
        <input type="text" id="weightSlow" name="weightSlow"><br>

        <input type="submit" value="Рассчитать">
    </form>

    <?php
    if (isset($response['error']) && !empty($response['error'])) : ?>
        <p> <?= htmlspecialchars($response['error']) ?> </p>
    <?php elseif (isset($response['price'], $response['date']) && !empty($response['price']) && !empty($response['date'])) : ?>
        <p>Цена: <?= $response['price'] ?> </p>
        <p>Дата: <?= $response['date'] ?> </p>
    <?php endif; ?>
</div>
<?php include __DIR__ . '/../footer.php'; ?>