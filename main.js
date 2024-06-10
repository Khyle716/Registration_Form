function SeePass() {
  
  var input = document.getElementById('InputPass');
  var btn = document.getElementById('VisiblePass');
  
  if (input.type === "password") {
    input.type = "text"
    btn.value = "—"
  } else {
    input.type = "password"
    btn.value = "O"
  }
}