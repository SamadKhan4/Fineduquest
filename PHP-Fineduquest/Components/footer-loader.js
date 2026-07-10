async function loadFooter() {

    const footer = document.getElementById("footer");

    if (!footer) return;

    const isRootPage = !window.location.pathname.includes("/PHP-Fineduquest/");
    const componentBase = isRootPage ? "PHP-Fineduquest/Components/" : "Components/";
    const pageBase = isRootPage ? "PHP-Fineduquest/" : "";
    const assetBase = isRootPage ? "assets/" : "../assets/";

    const response = await fetch(`${componentBase}Footer.html`);

    const html = await response.text();

    footer.innerHTML = html
        .replaceAll("../assets/", assetBase)
        .replaceAll('href="index.php"', 'href="' + (isRootPage ? "index.php" : "../index.php") + '"')
        .replaceAll('href="About.php"', 'href="' + pageBase + 'About.php"')
        .replaceAll('href="Program.php"', 'href="' + pageBase + 'Program.php"')
        .replaceAll('href="Gallery.php"', 'href="' + pageBase + 'Gallery.php"')
        .replaceAll('href="Blog.php"', 'href="' + pageBase + 'Blog.php"');

}

loadFooter();
