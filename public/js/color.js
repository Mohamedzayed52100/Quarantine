var el = document.querySelectorAll('ul li');
var classlist = [];

document.body.classList.add(localStorage.getItem('pageColor') || 'red');

for (var i = 0; i < el.length; i++) {
    classlist.push(el[i].getAttribute('datacolor'));
    el[i].addEventListener("click", function() {
        document.body.classList.remove(...classlist);
        document.body.classList.add(this.getAttribute('datacolor'));
        localStorage.setItem('pageColor', this.getAttribute('datacolor'));



    }, false);

}

console.log(classlist);