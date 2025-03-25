/* ==========================================================================
   main.js : daft club
   ========================================================================== */

function cacher() {
  const stocks = document.querySelectorAll(".stock-item");
  stocks.forEach(stock => {
    if (stock.hidden) {

      for (const item of document.querySelectorAll(".rectangle-item")) {
        item.style.marginRight = "150px";
      }
      setTimeout(() => {stock.hidden = false;}, 150);
    } else {
      stock.hidden = true;
      for (const item of document.querySelectorAll(".rectangle-item")) {
        item.style.marginRight = "400px";
      }
    }
  });
}

function loadingItems() {
  const items = document.querySelectorAll(".rectangle-item");
  for (let i=0; i<items.length; i++){
    setTimeout(() => {items[i].style.translate = "0"}, 50);
  }
}

function loadingBanner() {
  const banner = document.getElementById("baniere-accueil");
  if(!((typeof banner === 'undefined') || (banner === null))) {
    banner.style.translate = "0 0";
    banner.style.scale = "100%";
    banner.style.opacity = "100%";
  }
}

function sign(event, signe) {
  // Récupérer la div parent
  const parentDiv = event.target.closest('.rectangle-item');

  // Récupérer tout les éléments input dans la div parent
  const commande = parentDiv.querySelector('.number-item');
  const stocks = parentDiv.querySelector('.stock_button');

  if (signe.value==="-" && parseInt(commande.value) > 0) {
    commande.value--;
  } else if (signe.value==="+" && parseInt(commande.value) < parseInt(stocks.value)) {
    commande.value++;
  }
}

function changeSupValue() {
  document.getElementById('supValue').value="1";
  document.getElementById("viderPanier").submit();
}
