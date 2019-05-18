function highlightTaDemo(){
	// Regexp представляет собой группу символов или знаков, которая используется для поиска определенного текстового шаблона.

	//i	Нечувствительность к регистру: делает выражение нечувствительным к регистру.
	//g	Глобальный поиск: поиск шаблона во всей строке ввода.

	var re2 = new RegExp('');
	var taHlght=highlightta(document.getElementById('highlight-div'),document.getElementById('highlight-ta'),"mark-style",re);
	} 
highlightTaDemo();