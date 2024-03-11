/* GoogleSheet.css */

* {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    font-family: 'Poppins', sans-serif;
    font-size: 18px;
}

body {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f4f4f4;
}

.container {
    width: 80%;
    max-width: 500px;
    padding: 30px;
    border: 2px solid #eeeeee;
    border-radius: 20px;
    background-color: #003b5b;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    color: white;
}

h4 {
    margin-bottom: 20px;
    font-size: 28px;
}

input,
textarea {
    width: 100%;
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

#submit {
    border: none;
    background-color: orangered;
    color: white;
    width: 100%;
    padding: 15px;
    margin-top: 20px;
    border-radius: 5px;
    cursor: pointer;
}

#submit:hover {
    background-color: #333333;
}
