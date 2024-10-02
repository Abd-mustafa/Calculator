<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Calculator</title>
    <link rel="stylesheet" href="calculate.css">
</head>

<body>

    <div id="calculator">
        <input type="text" title="Read Only" id="display" readonly>
        <div class="row">
            <input type="button" class="operator" title="Left Bracket" value="(" onclick="appendToDisplay('(')">
            <input type="button" class="operator" title="Right Bracket" value=")" onclick="appendToDisplay(')')">
            <input type="button" class="operator" title="All Clear" value="AC" onclick="clearDisplay()">
            <input style="color: #d81717; font-size: 25px;" title="Delete" type="button" class="operator" value="⌫"
                onclick="backspace()">
        </div>
        <div class="row">
            <input type="button" title="Seven" value="7" onclick="appendToDisplay('7')">
            <input type="button" title="Eight" value="8" onclick="appendToDisplay('8')">
            <input type="button" title="Nine" value="9" onclick="appendToDisplay('9')">
            <input type="button" title="Division" class="operator" value="➗" onclick="appendToDisplay('/')">
        </div>
        <div class="row">
            <input type="button" title="Four" value="4" onclick="appendToDisplay('4')">
            <input type="button" title="Five" value="5" onclick="appendToDisplay('5')">
            <input type="button" title="Six" value="6" onclick="appendToDisplay('6')">
            <input type="button" title="Multiplication" class="operator" value="✖" onclick="appendToDisplay('*')">
        </div>
        <div class="row">
            <input type="button" title="One" value="1" onclick="appendToDisplay('1')">
            <input type="button" title="Two" value="2" onclick="appendToDisplay('2')">
            <input type="button" title="Three" value="3" onclick="appendToDisplay('3')">
            <input type="button" title="Addition" class="operator" value="➕" onclick="appendToDisplay('+')">
        </div>
        <div class="row">
            <input type="button" title="Zero" value="0" onclick="appendToDisplay('0')">
            <input type="button" title="Full Stop" class="operator" value="•" onclick="appendToDisplay('.')">
            <input type="button" title="Equal" class="equal" value="=" onclick="calculate()">
            <input type="button" title="Subtract" class="operator" value="➖" onclick="appendToDisplay('-')">
        </div>
        <div class="row" style="display: flex; justify-content: center; margin: 13px 0;">
            <button class="show-btn" onclick="toggleVisibility()">Show Scientific</button>
        </div>
        <div class="trigFunctions hidden row">
            <input type="button" title="Sin" value="sin" onclick="calculateTrigFunction('sin')">
            <input type="button" title="Cos" value="cos" onclick="calculateTrigFunction('cos')">
            <input type="button" title="Tan" value="tan" onclick="calculateTrigFunction('tan')">
            <input type="button" title="Exponent" value="x^2" onclick="calculatePower(2)">
        </div>
        <div class="trigFunctions hidden row">
            <input type="button" title="Root" value="√" onclick="calculateSquareRoot()">
            <input type="button" title="Logarithm" value="log" onclick="calculateLog()">
            <input type="button" title="Exponential" value="exp" onclick="calculateExp()">
            <input type="button" title="PI" value="𝝅" onclick="appendToDisplay(Math.PI)">
        </div>
    </div>

    <script src="calculate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/12.1.0/math.js"
        integrity="sha512-bJoAPYQ2bOZCtRLkShanIf6IMJAs+8oAmdq5Qjra47q/2ggFXhQeDycgJciFdatpPmS833KvRE7wU/gLqdxz8Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>