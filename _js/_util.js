export default function() {
  let $socialBtn = $('.btn-social');

  $.centeredPopup = function(options) {
    var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left,
    dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top,
    width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width,
    height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height,
    left = ((width / 2) - (options.width / 2)) + dualScreenLeft,
    top = ((height / 2) - (options.height / 2)) + dualScreenTop,
    newWindow = window.open(options.url, options.title, 'scrollbars=yes, width='+options.width+', height='+options.height+', top=' + top + ', left=' + left);
    if (window.focus) { newWindow.focus(); }
  };

  let shareSocial = event => {
    console.log("working")
    event.preventDefault();
    var $t = $(event.currentTarget);
    
    $.centeredPopup({
      url: $(this).attr('href'),
      title: 'Share',
      width: 400,
      height: 400
    });
  }

  $socialBtn.on('click', event => shareSocial(event))
}