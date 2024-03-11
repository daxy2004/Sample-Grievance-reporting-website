// GoogleSheet.js

const scriptURL = 'https://script.google.com/macros/s/AKfycbyGIOvQra4vEuph5WZaco2QWfryp30_EXfnnk2qbLilYIZXvFHR6xoWD3WUgfKL1SZ7/exec';

document.addEventListener('DOMContentLoaded', () => {
    const form = document.forms['contact-form'];

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        try {
            const response = await fetch(scriptURL, { method: 'POST', body: new FormData(form) });
            if (response.ok) {
                alert("Thank you! Your form is submitted successfully.");
                window.location.reload();
            } else {
                throw new Error('Network response was not ok.');
            }
        } catch (error) {
            console.error('Error!', error.message);
        }
    });
});

