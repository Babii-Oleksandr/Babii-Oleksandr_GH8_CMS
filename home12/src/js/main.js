
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




