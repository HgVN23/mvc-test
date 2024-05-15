if(document.querySelector('.qty')) {
	document.querySelectorAll('.qty').forEach(e => {
		e.addEventListener('change', total);
		e.addEventListener('click', total);
		e.click();
	});
}
function total() {
	const itemRow = this.closest('tr');
	const priceInput = itemRow.querySelector('.price');
	const quantityInput = itemRow.querySelector('.qty');
	const totalInput = itemRow.querySelector('.sum');

	totalInput.innerHTML = parseInt(priceInput.textContent) * quantityInput.value;
	sum();
}
function sum() {
	const total = document.querySelectorAll('.sum');
	const sum = document.querySelector('.order');

	var temp = 0;
	total.forEach(e => {
		temp += parseInt(e.textContent);
	});

	sum.innerHTML = temp;

}