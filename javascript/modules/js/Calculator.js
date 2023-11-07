class Calculator {
	constructor() {
		this.result = 0;
	}

	add(num1, num2) {
		this.result = num1 + num2;
		return this.result;
	}

	subtract(num1, num2) {
		this.result = num1 - num2;
		return this.result;
	}

	multiply (num1, num2) {
		this.result = num1 * num2;
		return this.result;
	}

	divide (num1, num2) {
		if (num2 === 0) {
			throw new Error('Cannot divide by zero');
		}
		else{
			this.result = num1 / num2;
		}
		
		return this.result;
	}
}