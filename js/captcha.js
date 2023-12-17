function main(){
    let form = document.getElementById("contact-form")
    let captcha = document.getElementById("enter-number")
    form = form.addEventListener("submit", (e) => {
        captcha.style.display = "block";
    })

}
