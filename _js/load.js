export default function() {
  let $navLinks = $('a[href*="localhost"], a[href*="ispykenny.com"], a[href*="hyperfitmd.com"] ');

  const routePage = event => {
    event.preventDefault();
    let storeHref = $(event.currentTarget).attr('href');
    $('body').removeClass('site-loaded');
    setTimeout(() => window.location = storeHref, 200)
  }

  $navLinks.on('click', event => routePage(event))
}