document.getElementById('signupForm').addEventListener('submit', function(event) {
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();

    if (name === "" || email === "") {
        alert("Name and Email are required!");
        event.preventDefault();
    }
});
