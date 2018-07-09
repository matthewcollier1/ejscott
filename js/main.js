// To shrink the navigation bar on scroll

/* function navigationShrink() {
	let nav = document.querySelector('.splash-page__navigation');
	let splashPageHeight = document.querySelector('.splash-page__image')
		.scrollHeight;

	document.addEventListener('scroll', () => {
		if (window.scrollY > splashPageHeight - 100) {
			nav.classList.add('splash-page__navigation--main');
			console.log(splashPageHeight);
		} else {
			if (window.scrollY < splashPageHeight) {
				nav.classList.remove('splash-page__navigation--main');
				console.log(splashPageHeight);
			}
		}
	});
}

navigationShrink(); */

//fix nav to top

const nav = document.querySelector('.splash-page__navigation');
const topOfNav = nav.offsetTop;
const bio = document.querySelector('.bio-page__header');
const biotest = bio.getBoundingClientRect();

window.onload = fixNav();

function fixNav() {
	if (window.scrollY >= biotest.top) {
		nav.classList.add('splash-page__navigation--main');
	} else {
		nav.classList.remove('splash-page__navigation--main');
	}
}

window.addEventListener('scroll', fixNav);

console.log(biotest.top + pageYOffset);
