<?php include_once("src/componments/header.php"); ?>
<div id="innercontent" class="searchPage">
    <section class="searchbar">
        <div class="searchinputwrapper">
            <div class="searchinput">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="m11.5 21c5.2467 0 9.5-4.2533 9.5-9.5 0-5.24671-4.2533-9.5-9.5-9.5-5.24671 0-9.5 4.25329-9.5 9.5 0 5.2467 4.25329 9.5 9.5 9.5z" opacity=".4"/>
                    <path d="m21.3005 22.0001c-.18 0-.36-.07-.49-.2l-1.86-1.86c-.27-.27-.27-.71 0-.99.27-.27.71-.27.99 0l1.86 1.86c.27.27.27.71 0 .99-.14.13-.32.2-.5.2z"/>
                </svg>
                <input type="type"/>
                <svg class="resetsearchinput" viewBox="6 6 12 12" xmlns="http://www.w3.org/2000/svg">
                    <path d="m13.0594 12.0001 2.3-2.29999c.29-.29.29-.77 0-1.06s-.77-.29-1.06 0l-2.3 2.29999-2.30003-2.29999c-.29-.29-.77-.29-1.05999 0-.29.29-.29.77 0 1.06l2.30002 2.29999-2.30002 2.3c-.29.29-.29.77 0 1.06.15.15.33999.22.52999.22s.38-.07.53-.22l2.30003-2.3 2.3 2.3c.15.15.34.22.53.22s.38-.07.53-.22c.29-.29.29-.77 0-1.06z"/>
                </svg>
            </div>
        </div>
    </section>
    <section class="searchresult"></section>
</div>
<?php include_once("src/componments/footer.php"); ?>