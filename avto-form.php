<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Форма для Алеши</title>
    <script>
       $(document).ready(function() {
      $("#form").submit(function() {
         $.ajax ({
             type: "POST",
             url: "mailAvto.php",
             data: $(this).serialize()
         }).done(function() {
                $('#form').find('input').val("");
            alert("Спасибо за заявку, скоро мы с вами свяжемся");
         });
         return false;
      });
});
    </script>
</head>
<body>
    <div class="wrapper">
      
        <form id="form">
         <br>
            <input type="text" name="manufacturer" value="" placeholder="Производитель" required><br>
            <br>
            <input type="text" name="mark" value="" placeholder="марка" required><br>
            <br>
            <input type="text" name="body" value="" placeholder="кузов"><br>
            <br>
            <input type="text" name="yers" value="" placeholder="год"><br>

            <br>
            <input type="text" id="user_name" name="name" value="" placeholder="Ваше имя" required><br>
            <br>
              <input type="text" id="user_email" name="email" value="" placeholder="Email" required> <br>
              <button>Отправить</button>
              <div class="bottom_fone"></div>
            <!--  <br><br>
              <input type="checkbox" id="dog" name="check">
                <label for="dog"><span></span>согласен на обработку индивидуальных данных </label>  -->
         </form>
         </div>
</body>
</html>

