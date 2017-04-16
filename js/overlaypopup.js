window.onclick = function(event) {
  if (event.target.className == 'overlay') {
    $(event.target).fadeOut();
  }
}

function closeOverlay(overlayID) {
  $('#' + overlayID).fadeOut();
}

function openOverlay(overlayID) {
  event.preventDefault();
  $('#' + overlayID).fadeIn();
}
