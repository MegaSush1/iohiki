class ioPopUp extends HTMLElement {
    constructor() {
        super();
    };
    connectedCallback() {
        let content = this.innerHTML;
        this.innerHTML = `<div class="popback"></div><div class="popcontent"><div class="closebtn"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m16.19 2h-8.38c-3.64 0-5.81 2.17-5.81 5.81v8.37c0 3.65 2.17 5.82 5.81 5.82h8.37c3.64 0 5.81-2.17 5.81-5.81v-8.38c.01-3.64-2.16-5.81-5.8-5.81z"/><path d="m13.0594 12.0001 2.3-2.29999c.29-.29.29-.77 0-1.06s-.77-.29-1.06 0l-2.3 2.29999-2.30003-2.29999c-.29-.29-.77-.29-1.05999 0-.29.29-.29.77 0 1.06l2.30002 2.29999-2.30002 2.3c-.29.29-.29.77 0 1.06.15.15.33999.22.52999.22s.38-.07.53-.22l2.30003-2.3 2.3 2.3c.15.15.34.22.53.22s.38-.07.53-.22c.29-.29.29-.77 0-1.06z"/></svg></div>${content}</div>`;
        this.querySelector(".closebtn").addEventListener("click", ()=>{this.remove();})
        this.querySelector(".popback").addEventListener("click", ()=>{this.remove();})
    };
};

customElements.define("io-popup", ioPopUp);



class CustomScrollBar extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {

        this.attachShadow({ mode: "open" });

        this.targetElId = this.dataset.targetId;
        const targetEl = document.querySelector(`#${this.targetElId}`);
        const width = "10px";

        const style = document.createElement("style");

        style.textContent = `

            .custom-scrollbar {
                width: ${width};
                height: 100%;
                position: absolute;
                top: 0;
                right: 0;
            }
            .custom-scrollbar_track{
                height:100%;
                width:100%;
                background:transparent;
            }
            .custom-scrollbar_thumb{
                position:absolute;
                top:0;
                left:0;
                height:80px;
                width:100%;
                background:var(--c-text-idle);
            }

        `;
        this.shadowRoot.appendChild(style);

        this.shadowRoot.innerHTML += `
            <div class="custom-scrollbar">
                <div class="custom-scrollbar_track">
                  <div class="custom-scrollbar_thumb"></div>
                </div>
            </div>
        `;

        const scrollThumb = this.shadowRoot.querySelector(".custom-scrollbar_thumb");

        var ContainerHeight;
        var ContainerScrollHeight;
        var mouseDown = false;

        function outputsize(){
            ContainerHeight = targetEl.offsetHeight;
            ContainerScrollHeight = targetEl.scrollHeight;

            scrollThumb.style.height = (ContainerHeight / ContainerScrollHeight) *100 + "%";
        }
        new ResizeObserver(outputsize).observe(targetEl);

        function updateThumb(){
            scrollThumb.style.top = (this.scrollTop / ContainerScrollHeight) * 100  + "%";
        }

        function handleMouseDown(){
            mouseDown = true;
        }

        function updateTarget(){
            const target = e.target;

            const rect = target.getBoundingClientRect();

            const y = e.clientY - rect.top;


            targetEl.scrollTop = (scrollThumb.style.top / 100) * ContainerScrollHeight + "px";
        }

        targetEl.addEventListener("scroll",updateThumb)

        scrollThumb.addEventListener("mousedown", handleMouseDown)

        scrollThumb.addEventListener("mousemove", updateTarget)

    }
}

customElements.define("custom-scrollbar", CustomScrollBar);