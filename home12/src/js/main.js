
$(document).ready(function () {

  var calc = $('.calculator');
  var calcDisplay = calc.find('.calculator__display');
  var calcKeys = calc.find('.calculator__key');
  var calcButton = calc.find('.calculator__button');
  var calcClear = calc.find('.calculator__clear');
  var calcEqual = calc.find('.calculator__key--equal');
  var calcPower = calc.find('.calculator__power');
  var calcSpace = calc.find('.calculator__backspace');

  calcKeys.each(function () {
    var current = $(this).attr('value');
    $(this).text(current);
  });

  calcButton.on('click', function () {
    calcDisplay.val( calcDisplay.val() + $(this).attr('value') );
  });

  calcClear.on('click', function () {
    calcDisplay.val('');
  });

  calcEqual.on('click', function () {
    calcDisplay.val( eval( calcDisplay.val() ) );
  });

  calcPower.on('click', function () {
    calcDisplay.val( Math.pow( calcDisplay.val(), 3 ) );
  });

  calcSpace.on('click', function () {
    calcDisplay.val( calcDisplay.val().substring(0, calcDisplay.val().length-1) );
  });

});

/////////////////////////////////////////////////////////////////////////////////////////////////


function plus() {
  let num1, num2, result;
  num1 = document.getElementById('n1').value;
  num1 = parseInt(num1);

  num2 = document.getElementById('n2').value;
  num2 = parseInt(num2);

  result = num1 + num2;
  document.getElementById('out').innerHTML = `Результат: ${result}`;
}

function minus() {
  let num1, num2, result;
  num1 = document.getElementById('n1').value;
  num1 = parseInt(num1);

  num2 = document.getElementById('n2').value;
  num2 = parseInt(num2);

  result = num1 - num2;
  document.getElementById('out').innerHTML = `Результат: ${result}`;
}

function multiplication() {
  let num1, num2, result;
  num1 = document.getElementById('n1').value;
  num1 = parseInt(num1);

  num2 = document.getElementById('n2').value;
  num2 = parseInt(num2);

  result = num1 * num2;
  document.getElementById('out').innerHTML = `Результат: ${result}`;
}

function division() {
  let num1, num2, result;
  num1 = document.getElementById('n1').value;
  num1 = parseInt(num1);

  num2 = document.getElementById('n2').value;
  num2 = parseInt(num2);

  result = num1 / num2;
  document.getElementById('out').innerHTML = `Результат: ${result}`;
}

function pow() {
  let num1, num2, result;
  num1 = document.getElementById('n1').value;
  num1 = parseInt(num1);

  num2 = document.getElementById('n2').value;
  num2 = parseInt(num2);

  result = num1 ** num2;
  document.getElementById('out').innerHTML = `Результат: ${result}`;
}

function sqrt() {
  let num1, result;
  num1 = document.getElementById('n1').value;
  num1 = parseInt(num1);

  result = Math.sqrt(num1);
  document.getElementById('out').innerHTML = `Результат: ${result}`;
}

function cos() {
  let num1, result;
  num1 = document.getElementById('n1').value;
  num1 = parseInt(num1);

  result = Math.cos(num1 * Math.PI / 180);
  document.getElementById('out').innerHTML = `Результат: ${result}`;
}

function sin() {
  let num1, result;
  num1 = document.getElementById('n1').value;
  num1 = parseInt(num1);

  result = Math.sin(num1 * Math.PI / 180);
  document.getElementById('out').innerHTML = `Результат: ${result}`;
}
//
// function factorial(num1) {
//   if (num1 == 1) return 1;
//   else return num1 * factorial(num1-1);
// }






