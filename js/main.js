particlesJS(
	'particles-js',

	{
		particles: {
			number: {
				value: 150,
				density: {
					enable: true,
					value_area: 800,
				},
			},
			color: {
				value: '#000',
			},
			shape: {
				type: 'circle',
				stroke: {
					width: 0,
					color: '#000000',
				},
				polygon: {
					nb_sides: 5,
				},
				image: {
					src: 'img/github.svg',
					width: 100,
					height: 100,
				},
			},
			opacity: {
				value: 1,
				random: false,
				anim: {
					enable: false,
					speed: 1,
					opacity_min: 0.1,
					sync: false,
				},
			},
			size: {
				value: 5,
				random: true,
				anim: {
					enable: false,
					speed: 40,
					size_min: 0.1,
					sync: false,
				},
			},
			line_linked: {
				enable: true,
				distance: 150,
				color: '#000',
				opacity: 1,
				width: 1,
			},
			move: {
				enable: true,
				speed: 6,
				direction: 'none',
				random: false,
				straight: false,
				out_mode: 'out',
				attract: {
					enable: false,
					rotateX: 600,
					rotateY: 1200,
				},
			},
		},
		interactivity: {
			detect_on: 'canvas',
			events: {
				onhover: {
					enable: true,
					mode: 'repulse',
				},
				onclick: {
					enable: true,
					mode: 'push',
				},
				resize: true,
			},
			modes: {
				grab: {
					distance: 400,
					line_linked: {
						opacity: 1,
					},
				},
				bubble: {
					distance: 400,
					size: 40,
					duration: 2,
					opacity: 8,
					speed: 3,
				},
				repulse: {
					distance: 200,
				},
				push: {
					particles_nb: 4,
				},
				remove: {
					particles_nb: 2,
				},
			},
		},
		retina_detect: true,
		config_demo: {
			hide_card: false,
			background_color: '#b61924',
			background_image: '',
			background_position: '50% 50%',
			background_repeat: 'no-repeat',
			background_size: 'cover',
		},
	}
)

// const loginTitle = document.querySelector('.login__title')
// const loginBtn = document.querySelector('.btn__login-login')
// const signupBtn = document.querySelector('.btn__login-signup')
// const loginFormBtn = document.querySelector('.login__form--submit')
// const inputSignup = document.querySelectorAll('.input--signup')
// const particlesHeader = document.querySelector('.particles')

// const signupClick = () => {
// 	loginBtn.classList.remove('btn-primary')
// 	loginBtn.classList.add('btn-outline-primary')
// 	signupBtn.classList.add('btn-primary')
// 	signupBtn.classList.remove('btn-outline-primary')
// 	loginTitle.textContent = 'Zarejestruj się!'
// 	loginFormBtn.textContent = 'Zarejestruj się'

// 	inputSignup.forEach(input => {
// 		input.style.display = 'block'
// 	})

// }
// const loginClick = () => {
// 	signupBtn.classList.remove('btn-primary')
// 	signupBtn.classList.add('btn-outline-primary')
// 	loginBtn.classList.add('btn-primary')
// 	loginBtn.classList.remove('btn-outline-primary')
// 	loginTitle.textContent = 'Zaloguj się!'
// 	loginFormBtn.textContent = 'Zaloguj się'

// 	inputSignup.forEach(input => {
// 		input.style.display = 'none'
// 	})
// }

// signupBtn.addEventListener('click', signupClick)
// loginBtn.addEventListener('click', loginClick)
