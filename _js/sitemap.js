export default function() {
  let $nav = $('nav');
  let $siteMap = $('.sitemap');

  if($siteMap.length >= 1) {
    let $newNav = $nav.clone();
    $siteMap.append($newNav.find('li'))
  }
}