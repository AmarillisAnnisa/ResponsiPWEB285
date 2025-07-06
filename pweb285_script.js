document.getElementById("pollForm").addEventListener("submit", function(e) {
  const radios = document.getElementsByName("pantai");
  let selected = false;
  for (let i = 0; i < radios.length; i++) {
    if (radios[i].checked) {
      selected = true;
      break;
    }
  }
  if (!selected) {
    alert("Pilih salah satu pantai dulu ya!");
    e.preventDefault();
  }
});
