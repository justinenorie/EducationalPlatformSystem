// Check the user's preference from localStorage
const userMode = localStorage.getItem('mode');
if (userMode) {
  document.body.classList.add(userMode);
}

function toggleMode(mode) {
  const body = document.body;
  body.classList.toggle('light-mode', mode === 'light');
  body.classList.toggle('dark-mode', mode === 'dark');

  // Save the user's preference to localStorage
  localStorage.setItem('mode', mode);
}
