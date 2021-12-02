(function () {
  const name = prompt("what is your name");

  const date = new Date();
  const hour = date.getHours();

  let greeting;

  if (hour >= 5 && hour < 12) {
    greeting = `Good Morning`;
  } else if (hour >= 12 && hour < 18) {
    greeting = `Good Afternoon`;
  } else {
    greeting = `Good Evening`;
  }

  alert(`${greeting} ${name}! Thank you for visiting my portfolio website!`);
})();
