const contact = document.querySelector('.contact');
const contactArea = document.querySelector('.contact-area');

contact.addEventListener('click', () => {
    contactArea.classList.toggle('show-contact')
})