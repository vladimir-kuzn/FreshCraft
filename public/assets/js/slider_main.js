function theRotator() {
    // Устанавливаем прозрачность всех картинок в 0
    $('.slide_image img').css({opacity: 0.0});

    // Берем первую картинку и показываем ее (по пути включаем полную видимость)
    $('.slide_image img:first').css({opacity: 1.0});

    // Вызываем функцию rotate для запуска слайдшоу, 5000 = смена картинок происходит раз в 5 секунд
    setInterval('rotate()',5000);
}

function rotate() {
    // Берем первую картинку
    var current = ($('.slide_image img.show')?  $('.slide_image img.show') : $('.slide_image img:first'));

    // Берем следующую картинку, когда дойдем до последней начинаем с начала
    var next = ((current.next().length) ? ((current.next().hasClass('show')) ? $('.slide_image img:first') :current.next()) : $('.slide_image img:first'));

    // Картинки в случайном порядке
    var sibs = current.siblings();
    var rndNum = Math.floor(Math.random() * sibs.length );
    var next = $( sibs[ rndNum ] );

    // Подключаем эффект растворения/затухания для показа картинок, css-класс show имеет больший z-index
    next.css({opacity: 0.0})
        .addClass('show')
        .animate({opacity: 1.0}, 1000);

    // Прячем текущую картинку
    current.animate({opacity: 0.0}, 1000)
        .removeClass('show');
}

$(document).ready(function() {
    // Запускаем слайдшоу
    theRotator();
});
