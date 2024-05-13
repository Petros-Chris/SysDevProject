function changeLanguage() {
    var button = document.getElementById('language-button');
    if (button.innerHTML === 'En') {
        button.innerHTML = 'fr';
    } else {
        button.innerHTML = 'En';
    }
}

