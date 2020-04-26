<!DOCTYPE html>
<!--
  * Date: 02.2020
  * Автор: Сергей Тарасов aka MILITER
  * Author: Sergei Tarasov aka MILITER
  * Web-site: https://htmlcssjs.pro
  * E-mail: master@htmlcssjs.pro
  * Telegram: @htmlcssjspro
-->
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>htmlcssjs.pro/admin</title>
  <meta name="description" content="htmlcssjs.pro/admin">
  <meta name="author" content="Sergei Tarasov aka MILITER https://htmlcssjs.pro">

  <link rel="stylesheet" href="./css/admin.style.min.css">
</head>

<body>
  <span>админ-панель</span>

  <form method="post">
    <?php foreach ($db_content as $key => $value) : ?>
      <p>
        <label style="display: inline-block;"><?= $key ?>
          <input type="text" name="<?= $key ?>" value="<?= $value ?>">
        </label>
      </p>
    <?php endforeach ?>
    <!-- <input type="hidden" name="save" value="save"> -->
    <button type="submit">Сохранить изменения</button>
  </form>

  <script src="./js/admin.script.min.js"></script>
</body>

</html>
