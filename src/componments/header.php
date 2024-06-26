<?php
   ini_set("error_reporting", 1);
   header("Cache-Control: no-cache, no-store, must-revalidate, max-age=0");
   header("Cache-Control: pre-check=0, post-check=0", false);
   header("Pragma: no-cache");

   if ( $_GET["rel"]!="page") {
?>
<!DOCTYPE html>
<html lang="fr" data-light="false" data-audiofull="false">
<head>
    <meta charset="UTF-8"/>
    <title>IOHIKI</title>
    <link rel="stylesheet" href="src/css/font.css"/>
    <link rel="stylesheet" href="src/css/root.css"/>
    <link rel="stylesheet" href="src/css/index.css"/>
    <link rel="stylesheet" href="src/css/setting.css"/>
    <link rel="stylesheet" href="src/css/account.css"/>
    <link rel="stylesheet" href="src/css/search.css"/>

    <script src="src/script/pageswap.js" defer></script>
    <script src="src/script/generic.js" defer></script>
    <script src="src/script/customEl.js" defer></script>
    <script src="src/script/createUser.js" defer></script>
</head>
<body>
    <div id="bodywrapper">
        <div id="mobilenav"></div>
        <aside id="mainmenu">
            <div id="menucontent">
                <div id="brand">
                    <a href="index" rel="page">
                        <div class="logo">
                            <svg viewBox="0 0 264.58332 264.58332">
                                <path id="headphone" d="m 195.81254,52.983305 c -3.36835,-3.31335 -7.01632,-6.387751 -10.93121,-9.188209 C 153.56217,21.391373 111.82462,21.389979 80.505458,43.793698 49.186301,66.197418 34.911643,106.2642 44.807234,143.99296 l 9.331349,-2.55422 c -8.853087,-33.75403 3.888628,-69.517388 31.908304,-89.560868 28.019673,-20.043483 65.274703,-20.043479 93.294373,-2e-6 28.01969,20.043484 40.7614,55.80685 31.90831,89.56088 l 9.32861,2.55421 c 8.65865,-33.01267 -1.1873,-67.816106 -24.76564,-91.009655 z m -5.86198,141.405765 a 37.254353,37.254353 0 0 0 12.41837,4.34082 v -73.60636 a 37.254353,37.254353 0 0 0 -12.41837,4.26071 z m 12.41837,-69.26554 v 73.60636 a 37.254353,37.254353 0 0 0 5.69164,0.46354 37.254353,37.254353 0 0 0 37.25457,-37.25407 37.254353,37.254353 0 0 0 -37.25457,-37.25456 37.254353,37.254353 0 0 0 -5.69164,0.43873 z m 0,76.48474 v -2.87838 a 37.254353,37.254353 0 0 1 -12.41837,-4.34082 v 7.2192 z m -12.41837,-72.22403 a 37.254353,37.254353 0 0 1 12.41837,-4.26071 V 121.2354 H 189.95056 Z M 74.632776,128.4546 A 37.254353,37.254353 0 0 0 62.21441,124.11377 l 10e-7,73.60636 a 37.254353,37.254353 0 0 0 12.418363,-4.26072 z m -12.418365,69.26553 -10e-7,-73.60636 a 37.254353,37.254353 0 0 0 -5.69164,-0.46353 37.254353,37.254353 0 0 0 -37.254575,37.25405 37.254353,37.254353 0 0 0 37.254575,37.25458 37.254353,37.254353 0 0 0 5.691641,-0.43874 z m 3e-6,-76.48473 -4e-6,2.87837 a 37.254353,37.254353 0 0 1 12.418366,4.34083 l 3e-6,-7.2192 z m 12.41836,72.22401 a 37.254353,37.254353 0 0 1 -12.418363,4.26072 l 3e-6,3.88814 h 12.418365 z" />
                                <path id="mic" d="m 136.94079,193.69195 a 8.5971498,8.5971498 0 0 1 -10.09699,-2.12317 8.5971498,8.5971498 0 0 1 -0.78708,-10.28774 8.5971498,8.5971498 0 0 1 9.65649,-3.63445 8.5971498,8.5971498 0 0 1 6.19142,8.25369 h -8.59715 z M 132.29166,52.916665 A 39.6875,39.6875 0 0 0 92.604164,92.604168 v 0.45062 h 39.687496 a 3.96875,3.96875 0 0 1 3.96875,3.96875 3.96875,3.96875 0 0 1 -3.96875,3.968752 H 92.604164 v 10.58333 h 39.687496 a 3.96875,3.96875 0 0 1 3.96875,3.96875 3.96875,3.96875 0 0 1 -3.96875,3.96875 H 92.604164 v 10.58334 h 39.687496 a 3.96875,3.96875 0 0 1 3.96875,3.96875 3.96875,3.96875 0 0 1 -3.96875,3.96875 H 92.604164 v 10.58333 h 39.687496 a 3.96875,3.96875 0 0 1 3.96875,3.96875 3.96875,3.96875 0 0 1 -3.96875,3.96875 H 92.604164 v 15.42438 a 39.6875,39.6875 0 0 0 39.687496,39.6875 39.6875,39.6875 0 0 0 1.22319,-0.10697 v -11.45666 a 14.413629,14.413629 0 0 1 -0.34055,0.0269 14.413629,14.413629 0 0 1 -14.41359,-14.41359 14.413629,14.413629 0 0 1 14.41359,-14.41359 14.413629,14.413629 0 0 1 14.41359,14.41359 14.413629,14.413629 0 0 1 -6.8094,12.19305 v 12.72739 A 39.6875,39.6875 0 0 0 171.97917,171.9792 V 92.604198 A 39.6875,39.6875 0 0 0 132.29166,52.916695 Z" />
                            </svg>
                        </div>
                        <h1>IOHIKI</h1>
                    </a>
                </div>
				<div id="mainnav">
                    <nav>
                        <span class="menulabel">MENU</span>
                        <ul>
                            <li><a href="index" rel="page">
                                <div class="ico"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m20.0402 6.81994-5.76-4.03c-1.57-1.1-3.98-1.04-5.48997.13l-5.01 3.91c-1 .78-1.79 2.38-1.79 3.63996v6.9c0 2.55 2.07 4.63 4.62 4.63h10.77997c2.55 0 4.62-2.07 4.62-4.62v-6.78c0-1.34996-.87-3.00996-1.97-3.77996z" opacity=".4"/>
                                    <path d="m12 18.75c-.41 0-.75-.34-.75-.75v-3c0-.41.34-.75.75-.75s.75.34.75.75v3c0 .41-.34.75-.75.75z"/>
                                </svg></div>
                                <span>Home</span>
                            </a></li>
                            <li><a href="discover" rel="page">
                                <div class="ico"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" d="m14.7898 18.9746c-6.29231 2.5169-9.43848 3.7754-11.23552 2.5542-.42608-.2895-.79357-.657-1.08311-1.0831-1.22116-1.797.03731-4.9432 2.55425-11.23553.53686-1.34215.80528-2.01322 1.26696-2.53969.11764-.13415.24395-.26046.3781-.3781.52647-.46168 1.19754-.7301 2.53969-1.26696 6.29233-2.51694 9.43853-3.77541 11.23553-2.55425.4261.28953.7936.65703 1.0831 1.08311 1.2212 1.79704-.0373 4.94321-2.5542 11.23552-.5369 1.3422-.8053 2.0133-1.267 2.5397-.1176.1342-.2439.2605-.3781.3781-.5264.4617-1.1975.7301-2.5397 1.267z" fill-rule="evenodd" opacity=".4"/>
                                    <path d="m12 8.25c-2.07107 0-3.75 1.67893-3.75 3.75 0 2.0711 1.67893 3.75 3.75 3.75 2.0711 0 3.75-1.6789 3.75-3.75 0-2.07107-1.6789-3.75-3.75-3.75z"/>
                                </svg></div>
                                <span>Discover</span>
                            </a></li>
                            <li><a href="search" rel="page">
                                <div class="ico"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m11.5 21c5.2467 0 9.5-4.2533 9.5-9.5 0-5.24671-4.2533-9.5-9.5-9.5-5.24671 0-9.5 4.25329-9.5 9.5 0 5.2467 4.25329 9.5 9.5 9.5z" opacity=".4"/>
                                    <path d="m21.3005 22.0001c-.18 0-.36-.07-.49-.2l-1.86-1.86c-.27-.27-.27-.71 0-.99.27-.27.71-.27.99 0l1.86 1.86c.27.27.27.71 0 .99-.14.13-.32.2-.5.2z"/>
                                </svg></div>
                                <span>Search</span>
                            </a></li>
                        </ul>
                    </nav>
				</div>
            </div>
        </aside>
        <div id="content-wrapper" class="scrollableElementWrapper">
            <div id="pagecontent" class="scrollableElement">
                <div id="innerwrapper">
<?php } ?>