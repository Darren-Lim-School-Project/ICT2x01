'use strict';

var topcord = 288;
var leftcord = 128;
var maxBlocksAvailable = 10;

let workspace = Blockly.inject('blocklyDiv',
					{media: 'https://unpkg.com/blockly/media/',
					toolbox: document.getElementById('toolbox-categories'),
					maxBlocks: maxBlocksAvailable,
				});

function showCode() {
	// Generate JavaScript code and display it.
	Blockly.JavaScript.INFINITE_LOOP_TRAP = null;
	var code = Blockly.JavaScript.workspaceToCode(workspace);
	if (code) {
		eval(code);
		//alert("(" + topcord + "," + leftcord + ")");
		checkSolved(topcord, leftcord);
	}
}

function checkSolved(top, left) {
	if (top === 0 && left === 128) {
		console.log("Puzzle solved!");

		var newscore = workspace.remainingCapacity();
		// James: add the code to add user to leaderboard here (carid, score, difficulty)
		console.log(difficulty);
		console.log(newscore);
		console.log(carid);
		//onsole.log(getName());
		var uname = getName();
		//insert_to_leaderboard(carid, newscore, difficulty, getName());
		// end db insertion
		var link = 'insertToDB.php?name=' + uname + "&carid=" + carid + "&difficulty=" + difficulty + "&score=" + newscore ;
		location.href =  link;

		alert("Yay! You have completed the challenge!\nYou will be added to the leaderboard (:\nClick 'OK' to be redirected back to the dashboard.");
		//location.href = 'index.php';

	}
}

function getName() {
	let text;
	let person = prompt("Please enter your name:", "AAA");
	if (person == null || person == "") {
		text = "User cancelled the prompt.";
	} else {
		text = "Hello " + person + "! How are you today?";
	}
	return person;
}

// function insert_to_leaderboard(carid, newscore, difficulty, uname) {
// 	console.log(carid);
// 	console.log(newscore);
// 	console.log(difficulty);
// 	console.log(uname);
// 	// const sqlite3 = require('sqlite3').verbose();
// 	//
// 	// var db = sqlite3.Database('../../db/db_user');
// 	var db = openDatabase('db_user', '1.0', 'my first database', 2 * 1024 * 1024);
//
// 	//const cols = Object.keys(values).join(", ");
// 	//const placeholders = Object.keys(values).fill('?').join(", ");
// 	//var placeholders = [uname, newscore, carid, difficulty];
// 	db.run('INSERT INTO scoreboard(username, score, carid, difficulty)  VALUES (?,?,?,?)',
// 		[values[carid], values[newscore], values[difficulty], values[uname]]),
// 		(err) => { if (err) {
// 		console.log(err);
// 	} else {
// 		console.log('success');
// 	}};
// 	console.log(sql);
//
// }

function isOutOfBounds() {
	// top cannot be less than 0 or more than 320
	// left cannot be less than 0 or more than 320
	if (topcord < 0 || topcord >= 320 || leftcord < 0 || leftcord >= 320) {
		console.log("You just went out of bounds mate..");
		return true;
	} else {
		console.log("(" + topcord + "," + leftcord + ")");
		return false;
	}
}

function isOutOfPath() {
	
}

function moveForward() {
	const element = document.querySelector('.car_location');
	
	// move the car forward once
	var carloc = document.getElementsByClassName("car_location");
	for (var i = 0; i < carloc.length; i++) {
		topcord = topcord - 32;
		if (!isOutOfBounds()) {
			carloc[i].style.top = topcord + "px";
			carloc[i].style.transform = "rotate(0deg)";
		} else {
			topcord = topcord + 32;
		}
	}
}

function moveDown() {
	const element = document.querySelector('.car_location');

	// move the car forward once
	var carloc = document.getElementsByClassName("car_location");
	for (var i = 0; i < carloc.length; i++) {
		topcord = topcord + 32;
		if (!isOutOfBounds()) {
			carloc[i].style.top = topcord + "px";
			carloc[i].style.transform = "rotate(180deg)";
		} else {
			topcord = topcord - 32;
		}
	}
}

function moveLeft() {
	const element = document.querySelector('.car_location');

	// move the car left once
	var carloc = document.getElementsByClassName("car_location");
	for (var i = 0; i < carloc.length; i++) {
		leftcord = leftcord - 32;
		if (!isOutOfBounds()) {
			carloc[i].style.left = leftcord + "px";
			carloc[i].style.transform = "rotate(270deg)";
		} else {
			leftcord = leftcord + 32;
		}
	}
}

function moveRight() {
	const element = document.querySelector('.car_location');

	// move the car right once
	var carloc = document.getElementsByClassName("car_location");
	for (var i = 0; i < carloc.length; i++) {
		leftcord = leftcord + 32;
		if (!isOutOfBounds()) {
			carloc[i].style.left = leftcord + "px";
			carloc[i].style.transform = "rotate(90deg)";
		} else {
			leftcord = leftcord - 32;
		}
	}
}

Blockly.Blocks['up'] = {
	init: function() {
		this.appendValueInput("VALUE").setCheck("String").appendField(new Blockly.FieldImage(
			"../../../assets/img/movement_up.png",
			50,
			50,
			"*"));
		this.setPreviousStatement(true, null);
		this.setNextStatement(true, null);
		this.setColour(255);
		this.setTooltip("move the car up");
		this.setHelpUrl("");
	}
};

Blockly.Blocks['down'] = {
	init: function() {
		this.appendValueInput("VALUE").setCheck("String").appendField(new Blockly.FieldImage(
			"../../../assets/img/movement_down.png",
			50,
			50,
			"*"));
		this.setPreviousStatement(true, null);
		this.setNextStatement(true, null);
		this.setColour(255);
		this.setTooltip("move the car down");
		this.setHelpUrl("");
	}
};


Blockly.Blocks['left'] = {
	init: function() {
		this.appendValueInput("VALUE").setCheck("String").appendField(new Blockly.FieldImage(
			"../../../assets/img/movement_left.png",
			50,
			50,
			"*"));
		this.setPreviousStatement(true, null);
		this.setNextStatement(true, null);
		this.setColour(255);
		this.setTooltip("move the car left");
		this.setHelpUrl("");
	}
};

Blockly.Blocks['right'] = {
	init: function() {
		this.appendValueInput("VALUE").setCheck("String").appendField(new Blockly.FieldImage(
			"../../../assets/img/movement_right.png",
			50,
			50,
			"*"));
		this.setPreviousStatement(true, null);
		this.setNextStatement(true, null);
		this.setColour(255);
		this.setTooltip("move the car right");
		this.setHelpUrl("");
	}
};

