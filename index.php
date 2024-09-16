<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Webmotor</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/reset.css">
</head>
<body>
  <main>
    <div class="container">
      <div class="tab_block">
        <button id="btn1" class="btn_info" onclick="showTab('info1')">
          <h3 class="title_1"><?php echo "Заголовок таба 1"?></h3>
          <p class="text_tab">Равным образом, высококачественный прототип будущего проекта способствует повышению качества анализа существующих паттернов </p>
        </button>
        <button id="btn2" class="btn_info" onclick="showTab('info2')">
          <h3 class="title_1"><?php echo "Заголовок таба 2"?></h3>
          <p class="text_tab">Равным образом, высококачественный прототип будущего проекта способствует повышению качества анализа существующих паттернов </p>
        </button>
        <button id="btn3" class="btn_info" onclick="showTab('info3')"> 
          <h3 class="title_1"><?php echo "Заголовок таба 3"?></h3>
          <p class="text_tab">Равным образом, высококачественный прототип будущего проекта способствует повышению качества анализа существующих паттернов </p>
        </button>
      </div>
      <div class="info" >
        <div class="info_block" id="info1" style="display: none;">
          <h3><?php echo "Контент таба 1"?></h3>
          <div class="text">
            <p>Безусловно, начало повседневной работы по формированию позиции способствует подготовке и реализации модели развития.
            </p>
            <ul >
              <li>Элемент ненумерованного списка</li>
              <li>Элемент ненумерованного списка</li>
            </ul>
            <p>Идейные соображения высшего порядка, а также постоянное информационно-пропагандистское обеспечение нашей деятельности выявляет срочную потребность приоретизации разума над эмоциями. </p>
            <ol >
              <li>Элемент нумерованного списка</li>
              <li>Элемент нумерованного списка</li>
            </ol>
            <p>Каждый из нас понимает очевидную вещь: выбранный нами инновационный путь в значительной степени обусловливает важность </p>
          </div>  
          <button class="btn_info1">Кнопка действия</button>      
        </div>
        <div class="info_block" id="info2" style="display: none;">
          <h3><?php echo "Контент таба 2"?></h3>
          <div class="forma" >
            <form action="register.php" method="post">
              <input type="name" name="firstname" placeholder="Имя" class="inputform">
              <input type="email" name="email" placeholder="Email" class="inputform">
              <input type="password" name="password" placeholder="Пароль" class="inputform">
              <button type="submit" class="btn_form">Кнопка действия</button>
            </form>
          
          </div>
        </div> 
        <div class="info_block" id="info3" style="display: none;">
          <h3><?php echo "Контент таба 3"?></h3>
          
        </div>
      </div>
    </div>
  </main>
  <script src="/js/main.js"></script>
</body>
</html>
