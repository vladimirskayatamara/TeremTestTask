alert('Привет, мир!'); //вывожу модальное окно


//при клике на первую кнопку скрывается блок с заголовком
let firstButton = document.getElementById('firstButton');
firstButton.onclick = function() {
let block1 = document.getElementById('firstBlock');
if (block1.style.display !== 'none') {
    block1.style.display = 'none';
}
else {
    block1.style.display = 'block';
}
};

//при клике на вторую кнопку блоки меняются местами
$(function(){
jQuery.fn.swap = function(b) {
b = jQuery(b)[0];
var a = this[0],
    a2 = a.cloneNode(true),
    b2 = b.cloneNode(true),
    stack = this;
a.parentNode.replaceChild(b2, a);
b.parentNode.replaceChild(a2, b);
stack[0] = a2;
return this.pushStack( stack );
};

$('#secondButton').on('click', function(){
    $('.block-2').swap('.block-3');});
});


