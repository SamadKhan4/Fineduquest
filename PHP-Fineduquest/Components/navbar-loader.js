const isRootPage = !window.location.pathname.includes("/PHP-Fineduquest/");
const componentBase = isRootPage ? "PHP-Fineduquest/Components/" : "Components/";
const pageBase = isRootPage ? "PHP-Fineduquest/" : "";
const assetBase = isRootPage ? "assets/" : "../assets/";

if ("scrollRestoration" in window.history) {
  window.history.scrollRestoration = "manual";
}

if (!window.location.hash) {
  window.scrollTo(0, 0);

  window.addEventListener("load", function () {
    window.scrollTo(0, 0);
  });
}

fetch(`${componentBase}Navbar.html`)
  .then(res => res.text())
  .then(html => {
    document.getElementById("navbar").innerHTML = html
      .replaceAll("../assets/", assetBase)
      .replaceAll('href="index.php"', 'href="' + (isRootPage ? "index.php" : "../index.php") + '"')
      .replaceAll('href="About.php"', 'href="' + pageBase + 'About.php"')
      .replaceAll('href="Program.php"', 'href="' + pageBase + 'Program.php"')
      .replaceAll('href="Financials.php"', 'href="' + pageBase + 'Financials.php"')
      .replaceAll('href="Fineduquest.php"', 'href="' + pageBase + 'Fineduquest.php"')
      .replaceAll('href="MoneyMastrey.php"', 'href="' + pageBase + 'MoneyMastrey.php"')
      .replaceAll('href="Awarness.php"', 'href="' + pageBase + 'Awarness.php"')
      .replaceAll('href="Gallery.php"', 'href="' + pageBase + 'Gallery.php"')
      .replaceAll('href="Blog.php"', 'href="' + pageBase + 'Blog.php"')
      .replaceAll('href="Registeration.php"', 'href="' + pageBase + 'Registeration.php"');

    // Navbar.html ke andar ke script ko manually run karo
    const scripts = document.getElementById("navbar").querySelectorAll("script");

    scripts.forEach(oldScript => {
      const newScript = document.createElement("script");

      if (oldScript.src) {
        newScript.src = oldScript.src;
      } else {
        newScript.textContent = oldScript.textContent;
      }

      document.body.appendChild(newScript);
      oldScript.remove();
    });
  });
