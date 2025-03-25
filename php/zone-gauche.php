<?php
    session_start();
    ?>
<div id="z-gauche">
<!-- emblème du site -->
<a href="accueil.php"><img id="logo-top-left" src="../img/logo-top-left.jpg"></a>

<!-- liste des boutons de la barre de gauche -->
<ul id="liste-bouton-gauche">
    <a href="accueil.php"><li class="large-button-left">
    <svg class="icon-left" style="scale:200%;" width="16px" height="16px" viewBox='0 0 16 16' xmlns='http://www.w3.org/2000/svg'><path d='M8.5 1.004 1.5 7H3v7.004L9 14V9.246h3V14l2 .004V7h1.5zM5 9h2v2H5z' fill='#FFFFFF'/><path color='#000' d='M0 0h16v16H0z' fill='gray' fill-opacity='.01'/>
    </svg>
    <button class="button-left accueil">Accueil</button>
        </li></a>
  <a href="produits.php?cat=cd"><li class="large-button-left">
    <svg class="icon-left accueil" style="scale:200%;transform: translateY(1px);" width="16px" height="16px" viewBox='0 0 16 16' xmlns='http://www.w3.org/2000/svg'><g color='#bebebe'><path d='M0 0h16v16H0z' fill='gray' fill-opacity='.01'/><path d='M92 355c-3.842 0-7 3.158-7 7s3.158 7 7 7 7-3.158 7-7-3.158-7-7-7zm0 5c1.099 0 2 .901 2 2s-.901 2-2 2-2-.901-2-2 .901-2 2-2z' fill='#FFFFFF' style='text-decoration-line:none;text-indent:0;text-transform:none' transform='translate(-84 -354)'/></g>
    </svg>
    <button class="button-left">CD</button>
      </li></a>
  <a href="produits.php?cat=vinyle"><li class="large-button-left">
    <svg class="icon-left" style="scale:200%;transform: translateY(1px);" width="16px" height="16px" xmlns="http://www.w3.org/2000/svg"><g color="#bebebe" fill="#FFFFFF" font-family="sans-serif" font-weight="400">
      <path d="M8 1C4.158 1 1 4.158 1 8s3.158 7 7 7 7-3.158 7-7-3.158-7-7-7zm0 4c1.68 0 3 1.32 3 3s-1.32 3-3 3-3-1.32-3-3 1.32-3 3-3z" overflow="visible" style="font-feature-settings:normal;font-variant-alternates:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-variant-numeric:normal;font-variant-position:normal;isolation:auto;mix-blend-mode:normal;shape-padding:0;text-decoration-color:#000;text-decoration-line:none;text-decoration-style:solid;text-indent:0;text-orientation:mixed;text-transform:none"/><path d="M8 6c-1.099 0-2 .901-2 2s.901 2 2 2 2-.901 2-2-.901-2-2-2zm0 1c.558 0 1 .442 1 1s-.442 1-1 1-1-.442-1-1 .442-1 1-1z" overflow="visible" style="font-feature-settings:normal;font-variant-alternates:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-variant-numeric:normal;font-variant-position:normal;isolation:auto;mix-blend-mode:normal;shape-padding:0;text-decoration-color:#000;text-decoration-line:none;text-decoration-style:solid;text-indent:0;text-orientation:mixed;text-transform:none"/></g>
    </svg>
    <button class="button-left">Vinyle</button>
      </li></a>
      <a href="produits.php?cat=accessoire"><li class="large-button-left">
    <svg class="icon-left" style="scale:200%;" width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><g fill="#FFFFFF"><path d="m 0 15 h 10.285156 l -5.539062 -8.703125 z m 0 0"/><path d="m 8.933594 3.765625 l -2.078125 3.804687 l 4.714843 7.429688 h 4.429688 z m 0 0"/></g>
    </svg>
      <button class="button-left">Accessoire</button>
          </li></a>
      <a href="produits.php?cat=vetement"><li class="large-button-left">
    <svg class="icon-left" style="scale:200%;" width="16px" height="16px" viewBox='0 0 16 16'  xmlns='http://www.w3.org/2000/svg'><path color='#bebebe' d='M0 0h16v16H0z' fill='gray' fill-opacity='.01'/><path color='#000' d='M413-273a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm0 8c6-.003 6 4.003 6 4.003v1h-12v-1s0-4 6-4.003z' fill='#FFFFFF' style='text-decoration-line:none;text-indent:0;text-transform:none' transform='translate(-405 275)'/>
    </svg>
          <button class="button-left">Vêtement</button>
          </li></a>
      <a href="contact.php"><li class="large-button-left">
    <svg class="icon-left" style="scale:200%;transform: translateY(2px);" width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="m 7.5 0 c -4.128906 0 -7.5 3.371094 -7.5 7.5 s 3.371094 7.5 7.5 7.5 s 7.5 -3.371094 7.5 -7.5 s -3.371094 -7.5 -7.5 -7.5 z m 1.84375 2.3125 c 0.953125 0.335938 1.78125 0.925781 2.40625 1.6875 h -1.226562 c -0.304688 -0.609375 -0.699219 -1.179688 -1.179688 -1.6875 z m -3.71875 0.011719 c -0.472656 0.507812 -0.867188 1.070312 -1.171875 1.675781 h -1.203125 c 0.617188 -0.753906 1.4375 -1.335938 2.375 -1.675781 z m 1.375 0.097656 v 1.578125 h -1.398438 c 0.363282 -0.59375 0.828126 -1.128906 1.398438 -1.578125 z m 1 0.015625 c 0.558594 0.445312 1.019531 0.976562 1.378906 1.5625 h -1.378906 z m -5.402344 2.5625 h 1.441406 c -0.214843 0.644531 -0.347656 1.320312 -0.390624 2 h -1.625 c 0.0625 -0.714844 0.265624 -1.390625 0.574218 -2 z m 2.507813 0 h 1.894531 v 2 h -2.34375 c 0.046875 -0.683594 0.195312 -1.359375 0.449219 -2 z m 2.894531 0 h 1.875 c 0.253906 0.640625 0.402344 1.316406 0.449219 2 h -2.324219 z m 2.941406 0 h 1.460938 c 0.308594 0.609375 0.511718 1.285156 0.574218 2 h -1.644531 c -0.042969 -0.679688 -0.175781 -1.355469 -0.390625 -2 z m -8.917968 3 h 1.625 c 0.046874 0.679688 0.175781 1.355469 0.394531 2 h -1.445313 c -0.308594 -0.609375 -0.511718 -1.285156 -0.574218 -2 z m 2.632812 0 h 2.34375 v 2 h -1.890625 c -0.253906 -0.636719 -0.402344 -1.316406 -0.453125 -2 z m 3.34375 0 h 2.324219 c -0.050781 0.683594 -0.199219 1.363281 -0.453125 2 h -1.871094 z m 3.332031 0 h 1.644531 c -0.0625 0.714844 -0.265624 1.390625 -0.574218 2 h -1.464844 c 0.21875 -0.644531 0.347656 -1.320312 0.394531 -2 z m -8.082031 3 h 1.210938 c 0.3125 0.609375 0.710937 1.179688 1.195312 1.6875 c -0.953125 -0.335938 -1.78125 -0.925781 -2.40625 -1.6875 z m 2.363281 0 h 1.386719 v 1.550781 c -0.5625 -0.441406 -1.027344 -0.96875 -1.386719 -1.550781 z m 2.386719 0 h 1.367188 c -0.355469 0.578125 -0.8125 1.097656 -1.367188 1.535156 z m 2.519531 0 h 1.230469 c -0.632812 0.769531 -1.472656 1.363281 -2.4375 1.695312 c 0.492188 -0.507812 0.894531 -1.082031 1.207031 -1.695312 z m 0 0" fill="#FFFFFF"/>
    </svg>
          <button class="button-left">Contact</button>
          </li></a>
</ul>
</div>