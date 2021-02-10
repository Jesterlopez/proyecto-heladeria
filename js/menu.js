const navSlide = () => {
	const bar = document.querySelector('.icon-bar');
	const nav = document.querySelector('.links');
	const links = document.querySelectorAll('.links li');

	bar.addEventListener('click', () => {
		nav.classList.toggle('links-activado');



		links.forEach((link, index) => {
			if(link.style.animation){
				link.style.animation = '';
			}else{
				link.style.animation = `navLinkFade 0.5s ease forwards  ${index / 7 + 0.5}s`;
			}
		});
			//efecto de las lineas
		bar.classList.toggle('toggle');

	});
}

navSlide();