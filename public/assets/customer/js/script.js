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
if(document.querySelector('.cal')) {
	document.querySelector('.cal').addEventListener('click', total);
	document.querySelector('.cal').click();
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

function removeProduct(data) {
	document.querySelector('#titleProduct').innerHTML = data.id;
	document.querySelector('button[name="remove"]').value = data.value;
}

function update(tr) {
	if(document.querySelector('.checkoutBtn')) {
		document.querySelector('.checkoutBtn').classList.add('hidden');
		document.querySelector('.actions').innerHTML = "Hãy Cập nhật những thay đổi";
	}
	const qty = tr.querySelector('.qty');

	if(qty.value < 1) {
		qty.value = 1;
	}
	if(qty.value > parseInt(qty.max)) {
		qty.value = parseInt(qty.max);
	}

	const updateBtn = tr.querySelector('.updateBtn');
	console.log(qty.value);
	updateBtn.value = qty.value;
	updateBtn.classList.remove('hidden');
}