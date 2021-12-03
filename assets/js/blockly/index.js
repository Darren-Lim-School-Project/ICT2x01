'use strict';

let workspace = null;

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
    if (code){
      eval(code);
    } 
  }

function moveForward() {
	alert('Moving forward..');
}

function moveDown() {
	alert('Moving down..');
}

function moveLeft() {
	alert('Moving left..');
}

function moveRight() {
	alert('Moving right..');
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

