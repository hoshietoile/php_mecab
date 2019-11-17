
function elementAdd() {
  var trElement = document.createElement("tr");
  trElement.innerHTML = `<td><input type="text" name="check_surface[]"></td><td><input type="text" name="check_hinshi[]"></td><td><select type="text" name="check_conjugation[]"><option></option><option>未然形</option><option>連用形</option><option>終止形</option><option>連体形</option><option>仮定形</option><option>命令形</option></select></td><td><input type="text" name="check_normal[]"></td><td><input type="text" name="check_yomi[]"></td>`;
  var parentObject = document.getElementById("tableBody");
  parentObject.appendChild(trElement);
}

function elementRemove() {
  var parent = document.getElementById("tableBody");
  parent.removeChild(parent.lastChild);
}

//drag&drop moving function to be mounted...//

// var test = document.getElementsByClassName('test');
// var testArray = Array.from(test);
//
// testArray.forEach(function(element) {
//   element.addEventListener('mousedown', function() {
//     document.addEventListener('mousemove', onMouseMove);
//     element.style.position = "absolute";
//   });
// });


// function moveElement() {
//   test.style.position = "absolute";
//   window.addEventListener('onmousemove', onMouseMove);
// }

// var onMouseMove = function(event) {
//   var x = event.clientX;
//   var y = event.clientY;
//   var width = test.offsetWidth;
//   var height = test.offsetHeight;
//   test.style.left = x + "px";
//   test.style.top = y + "px";
//   console.log(width);
//   console.log(height);
//   console.log(x);
//   console.log(y);
// }

//drag&drop moving function to be mounted...//
