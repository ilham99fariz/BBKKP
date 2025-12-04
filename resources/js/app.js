import './bootstrap';
import 'alpinejs';
import 'bootstrap';
import '../css/app.css';

document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll(".accordion .ac-item h5");

    items.forEach(item => {
        item.addEventListener("click", function () {
            this.parentElement.classList.toggle("active");
        });
    });
});
