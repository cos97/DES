// allFunctions.js

// suma.js
function sumar(a, b) {
  return a + b;
}

// resta.js
function restar(a, b) {
  return a - b;
}

// esPrimo.js
function esPrimo(num) {
  if (num <= 1) {
    return false;
  }
  for (let i = 2; i <= Math.sqrt(num); i++) {
    if (num % i === 0) {
      return false;
    }
  }
  return true;
}

// esPar.js
function esPar(num) {
  return num % 2 === 0;
}

// factorial.js
function factorial(n) {
  if (n === 0 || n === 1) {
    return 1;
  }
  return n * factorial(n - 1);
}

module.exports = { sumar, restar, esPrimo, esPar, factorial };
