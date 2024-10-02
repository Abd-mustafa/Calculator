// Get the display element
const display = document.getElementById("display");

// Function to append values to the display
function appendToDisplay(value) {
  display.value += value;
}

function calculateTrigFunction(func) {
  let result;
  try {
    switch (func) {
      case "sin":
        result = Math.sin(eval(document.getElementById("display").value));
        break;
      case "cos":
        result = Math.cos(eval(document.getElementById("display").value));
        break;
      case "tan":
        result = Math.tan(eval(document.getElementById("display").value));
        break;
    }
    document.getElementById("display").value = result;
  } catch (error) {
    document.getElementById("display").value = "Error";
  }
}

// Function to handle calculation
function calculate() {
  try {
    // Get the expression directly from the display
    let expression = display.value;

    // Replace sin, cos, and tan with math.sin, math.cos, and math.tan
    expression = expression.replace(/sin/g, "math.sin");
    expression = expression.replace(/cos/g, "math.cos");
    expression = expression.replace(/tan/g, "math.tan");

    // Evaluate the expression using math.js
    const result = math.evaluate(expression);

    // Display the result
    display.value = result;
  } catch (error) {
    console.error("Error:", error.message);
    display.value = "Error";
  }
}

// Function to handle backspace
function backspace() {
  display.value = display.value.slice(0, -1);
}

// Function to clear the display
function clearDisplay() {
  display.value = "";
}

function calculatePower(power) {
  let result = Math.pow(eval(document.getElementById("display").value), power);
  document.getElementById("display").value = result;
}

function calculateSquareRoot() {
  let result = Math.sqrt(eval(document.getElementById("display").value));
  document.getElementById("display").value = result;
}

function calculateLog() {
  try {
    let result = Math.log10(eval(document.getElementById("display").value));
    document.getElementById("display").value = result;
  } catch (error) {
    document.getElementById("display").value = "Error";
  }
}

function calculateExp() {
  try {
    let result = Math.exp(eval(document.getElementById("display").value));
    document.getElementById("display").value = result;
  } catch (error) {
    document.getElementById("display").value = "Error";
  }
}

function toggleVisibility(className) {
  const elements = document.getElementsByClassName(className);

  for (let i = 0; i < elements.length; i++) {
    const element = elements[i];
    element.style.display =
      element.style.display === "none" || element.style.display === ""
        ? "block"
        : "none";
  }
}

document.querySelector(".show-btn").addEventListener("click", function () {
  toggleVisibility("trigFunctions");
});
