// To shrink the navigation bar on scroll

function navigationShrink() {
	let nav = document.querySelector('.splash-page__navigation');
	let splashPageHeight = document.querySelector('.splash-page').clientHeight;

	document.addEventListener('scroll', () => {
		if (window.scrollY > splashPageHeight - 100) {
			nav.classList.add('splash-page__navigation--main');
		} else {
			if (window.scrollY < splashPageHeight) {
				nav.classList.remove('splash-page__navigation--main');
			}
		}
	});
}

navigationShrink();
