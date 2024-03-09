console.log("hi how are you");


// ==================== search section styling ============================

const search_btn = document.querySelector(".search-btn");
const search_input_box = document.querySelector(".search-input-box");
// console.log(search_btn);
search_btn.addEventListener("click", ()=>{
    // console.log(search_input_box.value);
    
    if(search_input_box.value == "")
    {
        console.log("nothing is entered");
    }
    else
    {
 
        console.log(search_input_box.value);
    }
})
