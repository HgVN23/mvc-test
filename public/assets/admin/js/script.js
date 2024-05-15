setTimeout(orderDesc, 200);
function orderDesc() {
	if(document.querySelector(".sorting")) {
		document.querySelector(".sorting").click()
	}
}

// Khởi tạo
const form = document.querySelector('.mainForm');
const idInput = form.querySelector('#id_phone');
const imgInput = form.querySelector('#imgPreview');
const titleInput = form.querySelector('#title');
const brandInput = form.querySelector('#id_brand');
const infoInput = form.querySelector('#info');
const priceInput = form.querySelector('#price');
const quantityInput = form.querySelector('#quantity');

// Preview ảnh khi input
if(document.querySelector('input#img')) {
	const img = document.querySelector('input#img');
	img.onchange = () => {
		const [file] = img.files;
		if(file) {
			img.closest('form').querySelector('img').src = URL.createObjectURL(file);
		}
		else
			resetForm();
	}
}

// Reset Form
document.querySelectorAll('.resetForm').forEach(e => {
	e.addEventListener('click', resetForm);
});
function resetForm() {
	form.action = form.action.replace('update_storage', 'insert_storage');
	form.querySelector('img').src = "";
	form.querySelector('button[type="reset"]').click();
}

//Chỉnh sửa Book
function editBook(tr) {
	idInput.value = tr.querySelector('td:nth-child(1)').textContent;
	imgInput.src = tr.querySelector('img').src;
	imgInput.closest('.row').querySelector('#cover').value = tr.querySelector('img').src;
	titleInput.value = tr.querySelector('td:nth-child(3)').textContent;
	brandInput.options[parseInt(tr.querySelector('td:nth-child(4)').getAttribute('data-brand'))].selected = true;
	infoInput.value = tr.querySelector('td:nth-child(5)').textContent;
	priceInput.value = tr.querySelector('td:nth-child(6)').textContent;
	quantityInput.value = tr.querySelector('td:nth-child(7)').textContent;
	
	form.action = form.action.replace('insert_storage', 'update_storage');
}