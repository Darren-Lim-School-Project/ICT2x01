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
      alert(code);
    }
  }

Blockly.Blocks['forward'] = {
  init: function() {
    this.appendValueInput("VALUE").setCheck("String").appendField(new Blockly.FieldImage(
        "./assets/img/movement_forward.png",
        50,
        50,
        "*"));
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(255);
 this.setTooltip("Moves the car forward");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['left'] = {
  init: function() {
    this.appendValueInput("VALUE").setCheck("String").appendField(new Blockly.FieldImage(
        "./assets/img/movement_turnleft.png",
        50,
        50,
        "*"));
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(255);
 this.setTooltip("turn the car left");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['right'] = {
  init: function() {
    this.appendValueInput("VALUE").setCheck("String").appendField(new Blockly.FieldImage(
        "./assets/img/movement_turnright.png",
        50,
        50,
        "*"));
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(255);
 this.setTooltip("turn the car right");
 this.setHelpUrl("");
  }
};

