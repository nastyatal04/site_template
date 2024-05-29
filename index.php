<?require('php/functions.php')?>
<style>
    /* Стили для секции-героя */
.hero-section {
font-family: 'Montserrat', sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100px;
  background-color: gold;
  color: black;
  overflow: hidden;
}

.hero-title {
  font-size: 8rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.5rem;
  animation: hero-title-animation 3s ease-in-out infinite;
}

/* Анимация для заголовка */
@keyframes hero-title-animation {
  0% {
    transform: translateY(0);
    text-shadow: 0 0 20px rgba(while, while, while, 0.5);
  }
  50% {
    transform: translateY(-20px);
    text-shadow: 0 0 40px rgba(while, while, while, 0.8);
  }
  100% {
    transform: translateY(0);
    text-shadow: 0 0 20px rgba(while, while, while, 0.5);
  }
}
</style>
<?
showHeader();

if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Запрос на получение данных для слайдера
$sql = "SELECT * FROM `news_slider`";
$result = $connect->query($sql);
?>
<body>
    <div class="slider">
        <?php
        if ($result->num_rows > 0) {
            $i = 0;
            while ($row = $result->fetch_assoc()) {
                echo '<div class="slide' . ($i == 0 ? ' active' : '') . '">';
                echo '<img src="' . $row["image_url"] . '" alt="' . $row["title"] . '">';
                echo '<div class="slide-content">';
                echo '<h2>' . $row["title"] . '</h2>';
                echo '<p>' . $row["content"] . '</p>';
                echo '</div>';
                echo '</div>';
                $i++;
            }
        } else {
            echo "Нет данных для отображения слайдера.";
        }
        ?>
    </div>
    <div class="hero-section">
        <h1 class="hero-title">наши услуги</h1>
    </div>
        <!-- поворотные каточки -->
        <div class="container2">
        <?php

            // Получение данных из базы данных
            $sql = "SELECT * FROM `services`";
            $result = $connect->query($sql);

            // Вывод карточек
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='card2'>";
                    echo "<div class='card2-inner'>";
                    echo "<div class='card2-front'>";
                    echo "<h3>" . $row["title"] . "</h3>";
                    echo "<p>" . $row["description"] . "</p>";
                    echo "</div>";
                    echo "<div class='card2-back'>";
                    echo "<h3>" . $row["title"] . "</h3>";
                    echo "<p>" . $row["description"] . "</p>";
                    echo "<a href='#' class='btn2'>Подробнее</a>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "Нет данных в базе данных.";
            }

            $connect->close();
        ?>
    </div>

    <p>---------------222222222222222222222--------------------------------------</p>
            
    <div class="form-container">
    <h2>Остались вопросы? - напишите нам</h2>
    <form id="contact-form" action="">
      <div class="form-group">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="phone">Телефон:</label>
        <input type="tel" id="phone" name="phone" required>
      </div>
      <button type="submit" class="submit-btn">Отправить</button>
    </form>
  </div>
    <?showFooter();?>
</body>
</html>



