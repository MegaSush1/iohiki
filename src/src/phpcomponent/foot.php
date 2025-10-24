<script>
    const head = document.querySelector("header")
    document.querySelector("header .toggleMenu").addEventListener("click",()=>{
        if (head.classList.contains("open")) {
            head.classList.remove("open")
        }else{
        head.classList.add("open")
        }
    });
    window.addEventListener("scroll",()=>{
        if (window.scrollY > 60){
            head.classList.add("float");
        }else{
            head.classList.remove("float");
        }
    });
</script>