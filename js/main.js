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

// Only Commented Out for menu test, re-establish after done

/* const nav = document.querySelector(".splash-page__navigation");
const bio = document.querySelector(".bio-page__header");
const biotest = bio.getBoundingClientRect();

window.onload = fixNav();

function fixNav() {
	if (window.scrollY >= biotest.top) {
		nav.classList.add("splash-page__navigation--main");
	} else {
		nav.classList.remove("splash-page__navigation--main");
	}
}

window.addEventListener("scroll", fixNav);

console.log(biotest.top + pageYOffset); */

/* function toggleBurger() {
	const toggle = document.querySelector(".nav-toggle");
	const toggleLinks = document.querySelector(
		".splash-page__mobile-nav-links"
	);
	let togglePage = document.querySelector(".splash-page__mobile-nav");

	toggle.addEventListener("click", function() {
		this.classList.toggle("opened");
		toggleLinks.classList.toggle("opened");
		togglePage.classList.add("splash-page__mobile-nav-open");
	});

	const items = togglePage.getElementsByTagName("li");

	for (var i = 0; i < items.length; i++) {
		items[i].addEventListener("click", () => {
			togglePage.classList.remove("splash-page__mobile-nav-open");
		});
	}
}

toggleBurger(); */

(function() {
	var Menu = (function() {
		const burger = document.querySelector(".nav-toggle");
		const togglePage = document.querySelector(".splash-page__mobile-nav");
		const menuList = document.querySelector(
			".splash-page__mobile-nav-links"
		);
		const menuItems = document.querySelectorAll(".menu__items");

		let active = false;

		const toggleMenu = function() {
			if (!active) {
				burger.classList.add("opened");
				menuList.classList.add("opened");
				togglePage.classList.add("splash-page__mobile-nav-open");
				for (var i = 0, ii = menuItems.length; i < ii; i++) {
					menuItems[i].classList.add("opened");
				}

				active = true;
			} else {
				burger.classList.remove("opened");
				menuList.classList.remove("opened");
				togglePage.classList.remove("splash-page__mobile-nav-open");
				for (var i = 0, ii = menuItems.length; i < ii; i++) {
					menuItems[i].classList.remove("opened");
				}

				active = false;
			}
		};

		var bindActions = function() {
			burger.addEventListener("click", toggleMenu, false);
			menuList.addEventListener("click", toggleMenu, false);
		};

		const init = function() {
			bindActions();
		};

		return {
			init: init
		};
	})();

	Menu.init();
})();
