$(document).ready(function () {
   $('.image-news').click(function () {
       var img = $(this);
       var src = img.attr('src');
       var body = $('body');

       body.addClass("modal-open");
       body.append(
           "<div class='popup'>"+ //Добавляем в тело документа разметку всплывающего окна
                "<div class='popup_bg'></div>"+ // Блок, который будет служить фоном затемненным
                    "<img src='"+src+"' class='popup_img' />"+ // Само увеличенное фото
            "</div>"
       );
       $(".popup").fadeIn(10); // Медленно выводим изображение
       $(".popup_bg").click(function(){	// Событие клика на затемненный фон
           $(".popup").fadeOut(10);	// Медленно убираем всплывающее окно
           setTimeout(function() {	// Выставляем таймер
               $(".popup").remove(); // Удаляем разметку всплывающего окна
               body.removeClass("modal-open");
           }, 10);
       });
   })
});