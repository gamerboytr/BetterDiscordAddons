window.onload = function () {
	const error = (text) => {
		document.title = "GamerboyTR Tema İndirici - Başarısız";
		document.body.innerHTML = text;
	};
	if (!window.location.search) error("<div align='center'><h1 style='font-size:40px'>Dostum Link Parenemetre Almadan İşlem Yapamam Hadi Ama :/</h1></div>");
	else window.DownloadApi.convert(window.location.search, error);
};
