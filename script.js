document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();
    let formData = new FormData(this);
    for (let [key, value] of formData.entries()) {
        console.log(key + ': ' + value);
    }
});
