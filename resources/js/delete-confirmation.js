const confirmButton = document.querySelector('.confirm-btn');
const closeButton = document.querySelector('.btn-close');
const modal = document.getElementById('delete-modal');
const modalContent = document.querySelector('.modal-body');
const deleteForms = document.querySelectorAll('.delete-form');
deleteForms.forEach(form => {
    form.addEventListener('submit', e => {
        e.preventDefault();
        modal.style = "display: block"
        const title = form.dataset.title;
        modalContent.innerText = `Do you want to delete ${title}?`;
        confirmButton.addEventListener('click', () => {
            form.submit();
        })
    })
});
closeButton.addEventListener('click', () => {
    modal.style = "display: none"

})