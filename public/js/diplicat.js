document.getElementById("duplicateButton").addEventListener("click", function(){
    var inputContainer = document.getElementById("inputContainer");
    var inputField = document.getElementById("inputField");
    var newInput = inputField.cloneNode(true);
    inputContainer.appendChild(newInput);
  });
  