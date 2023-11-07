window.performOperation = function (operation) {
	const num1 = parseFloat(document.getElementById('num1').value);
	const num2 = parseFloat(document.getElementById('num2').value);
	try {
		const result = QuickMathCalculator.performOperation(operation, num1, num2);
		document.getElementById('result').innerText = `Result: ${result}`;
	} catch (error) {
		document.getElementById('result').innerText = `Error: ${error.message}`;
	}
}