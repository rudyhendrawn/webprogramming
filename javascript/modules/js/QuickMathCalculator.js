class QuickMathCalculator extends Calculator {
	static performOperation(operation, num1, num2) {
		const quickMathCalc = new QuickMathCalculator();
		switch (operation) {
			case 'add':
				return quickMathCalc.add(num1, num2);
			case 'subtract':
				return quickMathCalc.subtract(num1, num2);
			case 'multiply':
				return quickMathCalc.multiply(num1, num2);
			case 'divide':
				return quickMathCalc.divide(num1, num2);
			default:
				throw new Error('Invalid operation');
		}
	}
}