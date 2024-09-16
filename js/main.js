const buttons = document.querySelectorAll('.btn_info')

buttons.forEach(button => {
	button.addEventListener('click', () => {
		buttons.forEach(btn => btn.classList.remove('active'))

		button.classList.add('active')
	})
})

function showTab(tabId) {
	const tabs = document.querySelectorAll('.info_block')
	tabs.forEach(tab => (tab.style.display = 'none'))

	document.getElementById(tabId).style.display = 'block'
}

document.addEventListener('DOMContentLoaded', function () {
	showTab('info1')
})
