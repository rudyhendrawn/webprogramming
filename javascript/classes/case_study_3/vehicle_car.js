class Vehicle {
	constructor(model) {
		this.model = model;
	}

	displayInfo() {
		return `This is a vehicle: ${this.model}.`;
	}
  }
  
class Car extends Vehicle {
	constructor(model, doors) {
		super(model);
		this.doors = doors;
}
  
	displayInfo() {
		return `${super.displayInfo()} It has ${this.doors} doors.`;
	}

	static createSedan(model) {
		const sedan = new Car(model, 4);
		return sedan;
	}
}

function displayCarInfo() {
	const model = document.getElementById('carModel').value;
	const car = Car.createSedan(model);
	document.getElementById('carInfo').innerText = car.displayInfo();
}