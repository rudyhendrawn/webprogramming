class User {
	constructor(name) {
		this.name = name;
	}

	sayHello() {
		return `Hello, my name is ${this.name}`;
	}
}
class Admin extends User {
	constructor(name) {
		super(name);
		this.permissions = [];
	}

	addPermission(permission) {
		this.permissions.push(permission);
	}

	static createSuperAdmin(name) {
		const admin = new Admin(name);
		admin.addPermission('super');
		return admin;
	}
}

function createUser() {
	const name = document.getElementById('userName').value;
	const user = new User(name);
	console.log("create user");
	document.getElementById('userInfo').innerText = user.sayHello();
}

function createAdmin() {
	const name = document.getElementById('adminName').value;
	const admin = Admin.createSuperAdmin(name);
	console.log("create admin");
	document.getElementById('userInfo').innerText = `${admin.sayHello()} and I am a super admin`;
}