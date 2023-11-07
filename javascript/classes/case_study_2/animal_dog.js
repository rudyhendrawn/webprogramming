class Animal {
	constructor(name) {
		this.name = name;
	}

	makeSound() {
		return `${this.name} makes a sound.`;
	}
}

class Dog extends Animal {
	constructor(name) {
		super(name);
	}

	makeSound() {
		return `${this.name} barks.`;
	}

	static createPuppy(name) {
		const puppy = new Dog(name);
		return puppy;
	}
}

function makeSound() {
	const name = document.getElementById('animalName').value;
	const animal = Dog.createPuppy(name); // This should be Dog.createPuppy(name)
	document.getElementById('animalInfo').innerText = animal.makeSound();
}
  