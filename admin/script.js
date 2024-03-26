var userRow = document.querySelectorAll("#userAccount table tr");

const infoDisplay = document.querySelector("#accountinfo");

userRow.forEach((user)=>{
    user.addEventListener("click",()=>{
        console.log(user.querySelector(".uid").innerText);

        infoDisplay.querySelector("#uid_focus").innerText = user.querySelector(".uid").innerText;
        infoDisplay.querySelector("#name").innerText = user.querySelector(".name").innerText;
        infoDisplay.querySelector("#surname").innerText = user.querySelector(".surname").innerText;
        infoDisplay.querySelector("#mail").innerText = user.querySelector(".mail").innerText;
        infoDisplay.querySelector("#password").innerText = user.querySelector(".password").innerText;
        infoDisplay.querySelector("#account_creation").innerText = user.querySelector(".create_date").innerText;
    });
});