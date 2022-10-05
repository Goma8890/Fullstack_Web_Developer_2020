//Open Button
const openBtn = document.querySelector(".js-open");
const modalBg = document.getElementById("modal-background");
const modalBox = document.getElementById("modal-box");
 
// Adding Event Listener
openBtn.addEventListener("click", function(event){
    event.preventDefault();
    // console.log("Hello Tony");
    modalBg.classList.add("active");
    modalBox.classList.add("active");
});

// Close and Accept Buttons
const closeBtns = document.querySelectorAll(".js-close");
closeBtns.forEach(node => {
    // console.log("node is", node);
    node.addEventListener("click", function(e){
        e.preventDefault();
        modalBg.classList.remove("active");
        modalBox.classList.remove("active");
    });
});


