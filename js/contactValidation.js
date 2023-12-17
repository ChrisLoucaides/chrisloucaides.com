function main() {
    let name = document.getElementById("full-name");
    let email = document.getElementById("email");
    let message = document.getElementById("message");
    let form = document.getElementById("contact-form");

    form.addEventListener("submit", (e) => {
        if (name.value === "" && message.value === "" && email.value ==="") {
            email.style.border = "3px solid red";
            message.style.border = "3px solid red";
            name.style.border = "3px solid red";
            e.preventDefault();
        }
        else if(name.value === "" && message.value === "" && email.value !== ""){
            message.style.border = "3px solid red";
            name.style.border = "3px solid red";
            email.style.border = "none";
            e.preventDefault();
        }
        else if(name.value === "" && message.value !== "" && email.value === ""){
            email.style.border = "3px solid red";
            name.style.border = "3px solid red";
            message.style.border = "none";
            e.preventDefault();
        }
        else if(name.value !== "" && message.value === "" && email.value === ""){
            email.style.border = "3px solid red";
            message.style.border = "3px solid red";
            name.style.border = "none";
            e.preventDefault();
        }
        else if(name.value !== "" && message.value === "" && email.value !== ""){
            message.style.border = "3px solid red";
            name.style.border = "none";
            email.style.border = "none";
            e.preventDefault();
        }
        else if(name.value !== "" && message.value !== "" && email.value === ""){
            email.style.border = "3px solid red";
            name.style.border = "none";
            message.style.border = "none";
            e.preventDefault();
        }

        else if(name.value !== "" && message.value !== "" && email.value !== ""){
            email.style.border = "none";
            message.style.border = "none";
            email.style.border = "none";
        }

    })
}

main();