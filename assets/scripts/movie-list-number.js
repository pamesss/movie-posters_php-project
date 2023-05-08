let items = document.querySelectorAll('.movie_value');
let count = 1;

for (let i = 0; i < items.length; i++) {
  items[i].textContent = count + ".";
  count++;
}