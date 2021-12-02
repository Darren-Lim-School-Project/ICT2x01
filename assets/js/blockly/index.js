'use strict';

let workspace = null;

var topcord = 288;
var leftcord = 128;

function start() {
	// Create main workspace.
	workspace = Blockly.inject('blocklyDiv',
		{
			toolbox: document.getElementById('toolbox-categories'),
		});
}

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
	}
}

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
		} else {
			leftcord = leftcord - 32;
		}
	}
}

Blockly.Blocks['up'] = {
	init: function() {
		this.appendValueInput("VALUE").setCheck("String").appendField(new Blockly.FieldImage(
			"./assets/img/movement_up.png",
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
			"./assets/img/movement_down.png",
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
			"./assets/img/movement_left.png",
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
			"./assets/img/movement_right.png",
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

