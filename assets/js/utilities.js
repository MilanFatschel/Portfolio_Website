  // Href click listeners
  function customHREF(url) {
    window.open(url, '_blank');
  }


  function scrollToTop() {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  }

  