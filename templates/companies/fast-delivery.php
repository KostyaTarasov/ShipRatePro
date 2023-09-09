<?php $title = "Быстрая доставка";
$h1 = $title;
include __DIR__ . '/../header.php'; ?>

<div class="main">
    <form action="/companies/fast-delivery" method="post">
        <label for="sourceKladrFast">Откуда (КЛАДР):</label>
        <input type="text" id="sourceKladrFast" name="sourceKladrFast"><br>

        <label for="targetKladrFast">Куда (КЛАДР):</label>
        <input type="text" id="targetKladrFast" name="targetKladrFast"><br>

        <label for="weightFast">Вес (кг):</label>
        <input type="text" id="weightFast" name="weightFast"><br>

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