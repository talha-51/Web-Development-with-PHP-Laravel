class BankAccount {
	constructor(accountNumber, ownerName, balance) {
		this.accountNumber = accountNumber;
		this.ownerName = ownerName;
		this.balance = balance;
	}

	displayAccountInfo() {
		console.log(`Account Number: ${this.accountNumber}`);
		console.log(`Owner Name: ${this.ownerName}`);
		console.log(`Balance: $${this.balance}`);
	}

	deposit(amount) {
		this.amount = amount;
		console.log(`Deposit Amount: $${this.amount}`);
		this.balance = this.balance + this.amount;
	}

	withdraw(amount) {
		this.amount = amount;
		console.log(`Withdraw Amount: $${this.amount}`);
		if (this.amount > this.balance) {
			console.log("Insufficient funds");
		} else {
			this.balance = this.balance - this.amount;
		}
	}

	getBalance() {
		console.log(`Current Balance: $${this.balance}`);
	}
}

const account1 = new BankAccount(101, "Jack", 1000);
const account2 = new BankAccount(102, "Steve", 2000);

console.log("Account Information:");
account1.displayAccountInfo();
account1.deposit(300);
account1.getBalance();
account1.withdraw(100);
account1.getBalance();
console.log("Updated Account Information:");
account1.displayAccountInfo();

console.log("Account Information:");
account2.displayAccountInfo();
account2.deposit(500);
account2.getBalance();
account2.withdraw(2300);
account2.getBalance();
console.log("Updated Account Information:");
account2.displayAccountInfo();

account2.withdraw(2700);
account2.getBalance();
