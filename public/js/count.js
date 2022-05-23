var count = document.getElementById('count'),
    textarea = document.getElementById('text'),
    maxlength = textarea.getAttribute('maxlength');
console.log(maxlength);


textarea.oninput = function() {




    count.innerHTML = maxlength - this.value.length;

    if (count.innerHTML <= 10)
        count.style.color = 'red';
    else if (count.innerHTML >= 10)
        count.style.color = 'black';

}