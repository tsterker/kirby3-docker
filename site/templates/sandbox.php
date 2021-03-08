<?php snippet('header') ?>

<div class="sandbox">

  <ul>
    <li>APP_ENV: <?php echo env("APP_ENV") ?></li>
    <li>DB_HOST: <?php echo env("DB_HOST") ?></li>
    <li>DB_DATABASE: <?php echo env("DB_DATABASE") ?></li>
    <li>DB_USER: <?php echo env("DB_USER") ?></li>
    <li>DB_PASSWORD: <?php echo env("DB_PASSWORD") ?></li>
  </ul>

</div>

<?php snippet('footer') ?>