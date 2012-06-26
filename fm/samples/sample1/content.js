$(document).ready(function()
{


	for (x = 1; x < 10; x += 1) {
		setTimeout(function () {
			console.log(x);
		}, 10);
	}
    // вешаем обработчик на все ссылки в нашем меню Navigation
    $("ul.Navigation a").click(function(){
		var url = this.attributes["href"].value; // возьмем ссылку
        //var url = $(this).attributes("href"); // возьмем ссылку
            url = url + "?ajax=true";        // добавим к ней параметр ajax=true
        $("#MainContent").load(url);    // загружаем обновленное содержимое
        return false;                   // возвращаем false - дабы не сработал переход по ссылке
    });
});