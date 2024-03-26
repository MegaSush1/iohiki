document.querySelector("#scheme div").addEventListener("click", ()=>{
    const doctheme = document.querySelector("html")

    if(doctheme.getAttribute("data-light")=="false"){
        doctheme.setAttribute("data-light",true)
    }
    else{
        doctheme.setAttribute("data-light",false)
    }
});