<aside class="left-sidebar">
    <?php if (!empty($companies)) : ?>
        <h5 style="padding-left:35px; font-size: 21px;">Компании:</h5>
        <ul style="margin: 5px;">
            <?php
            foreach ($companies as $value) { ?>
                <li class="gain-right a-edit"><a href="/companies/<?= $value ?>"><?= $value ?> </a></li>
            <?php } ?>
        </ul>
        <br>
    <?php endif; ?>
</aside>