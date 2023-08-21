const viewSection = ({target}) => {//{target}) => {
	const sections = document.querySelectorAll('.sections>*')
	const sectionId = (target.href).split('#')[1]

	for(i=0;i<sections.length;i++) {
		sections[i].classList.remove('active')
		if(sections[i].id == sectionId) {
			sections[i].classList.add('active')
		}
	}
}

const closesSections = () => {
	const sections = document.querySelectorAll('.sections>*')
	for(i=0;i<sections.length;i++) {
		sections[i].classList.remove('active')
	}
}

const aboutButton = document.querySelector('[href="#about"]')
const servicesButton = document.querySelector('[href="#services"]')
const hireButton = document.querySelector('[href="#hire-form"]')
aboutButton.onclick = viewSection
servicesButton.onclick = viewSection
hireButton.onclick = viewSection

const closeButtons = document.getElementsByClassName('close')
for(i=0;i<closeButtons.length;i++) {
	closeButtons[i].onclick = closesSections
}
