const uno = document.getElementById('uno');
const dos = document.getElementById('dos');
const label1 = document.getElementById('valuno');
const label2 = document.getElementById('valdos');
uno.addEventListener('input', () => {
  let val= uno.value;
  //el atributo value es un string, el signo "+" transforma en number
  dos.value= 100 - (+val);
  label1.innerHTML = val + "%";
  label2.innerHTML = dos.value + "%";
});
dos.addEventListener('input', () => {
  let val= dos.value;
  //el atributo value es un string, el signo "+" transforma en number
  uno.value= 100 - (+val);
  label1.innerHTML = uno.value + "%";
  label2.innerHTML = val + "%";
});