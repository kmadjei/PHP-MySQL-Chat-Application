const form = document.querySelector(".typing-area"),
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");

form.onsubmit = (e) => {
    e.preventDefault(); // prevent form from submitting
}

sendBtn.onclick = () => {
    // let's start Ajax
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "php/insert-chat.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200){
                let data = xhr.response;
                console.log(data);
                inputField.value = ""; // leave input blank once message is submitted
                scrollToBottom();

            }
        }
    }
    // We have to send the form data through ajax to PHP
    let formData = new FormData(form); // creating new formData object
    xhr.send(formData); // sending the form data to php
}

chatBox.onmouseenter = () => {
    chatBox.classList.add("active");
}

chatBox.onmouseleave = () => {
    chatBox.classList.remove("active")
}

setInterval(() => {
    // let's start Ajax
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "php/get-chat.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200){
                let data = xhr.response;
                console.log(data);
                chatBox.innerHTML = data;
               
                if(!chatBox.classList.contains("active")) {
                    // scrolls to bottom if chatBox element does not contain active class
                    scrollToBottom();
                }
            }
        }
    }
    // We have to send the form data through ajax to PHP
    let formData = new FormData(form); // creating new formData object
    xhr.send(formData); // sending the form data to php
}, 500); // this function will run frequently after 500ms


function scrollToBottom() {
    chatBox.scrollTop = chatBox.scrollHeight;
}