$(function() {
    //caching
    $container = $('#container');
    $slideshow = $('#slideshow');
    $controls  = $('#controls');
    $caption   = $('#caption');
    $loading   = $('#loading');

    //font replace
    Cufon.replace('.fb,h1');
  
    // We only want these styles applied when javascript is enabled
    $('div.navigation').css({'width' : '300px', 'float' : 'right'});
    $('div.content').css('display', 'block');

    // Initially set opacity on thumbs and add
    // additional styling for hover effect on thumbs
    var onMouseOutOpacity = 0.67;
    $('#thumbs ul.thumbs li').opacityrollover({
      mouseOutOpacity:   onMouseOutOpacity,
      mouseOverOpacity:  1.0,
      fadeSpeed:         'fast',
      exemptionSelector: '.selected'
    });
    
    // Initialize Advanced Galleriffic Gallery
    var gallery = $('#thumbs').galleriffic({
      delay:                     2500,
      numThumbs:                 9,
      preloadAhead:              10,
      enableTopPager:            true,
      enableBottomPager:         true,
      maxPagesToShow:            7,
      imageContainerSel:         '#slideshow',
      controlsContainerSel:      '#controls',
      captionContainerSel:       '#caption',
      loadingContainerSel:       '#loading',
      renderSSControls:          true,
      renderNavControls:         true,
      playLinkText:              'Play Slideshow',
      pauseLinkText:             'Pause Slideshow',
      prevLinkText:              '&lsaquo; Prev',
      nextLinkText:              'Next &rsaquo;',
      nextPageLinkText:          'Next &rsaquo;',
      prevPageLinkText:          '&lsaquo; Prev',
      enableHistory:             false,
      autoStart:                 false,
      syncTransitions:           true,
      defaultTransitionDuration: 900,
      onSlideChange:             function(prevIndex, nextIndex) {
        // 'this' refers to the gallery, which is an extension of $('#thumbs')
        this.find('ul.thumbs').children()
          .eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
          .eq(nextIndex).fadeTo('fast', 1.0);
      },
      onPageTransitionOut:       function(callback) {
        this.fadeTo('fast', 0.0, callback);
      },
      onPageTransitionIn:        function() {
        this.fadeTo('fast', 1.0);
      }
    });

    // Initialize Advanced Galleriffic Gallery
    var gallery = $('#thumbs_wfall2010').galleriffic({
      delay:                     2500,
      numThumbs:                 9,
      preloadAhead:              10,
      enableTopPager:            true,
      enableBottomPager:         true,
      maxPagesToShow:            7,
      imageContainerSel:         '#slideshow',
      controlsContainerSel:      '#controls',
      captionContainerSel:       '#caption',
      loadingContainerSel:       '#loading',
      renderSSControls:          true,
      renderNavControls:         true,
      playLinkText:              'Play Slideshow',
      pauseLinkText:             'Pause Slideshow',
      prevLinkText:              '&lsaquo; Prev',
      nextLinkText:              'Next &rsaquo;',
      nextPageLinkText:          'Next &rsaquo;',
      prevPageLinkText:          '&lsaquo; Prev',
      enableHistory:             false,
      autoStart:                 false,
      syncTransitions:           true,
      defaultTransitionDuration: 900,
      onSlideChange:             function(prevIndex, nextIndex) {
        // 'this' refers to the gallery, which is an extension of $('#thumbs')
        this.find('ul.thumbs').children()
          .eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
          .eq(nextIndex).fadeTo('fast', 1.0);
      },
      onPageTransitionOut:       function(callback) {
        this.fadeTo('fast', 0.0, callback);
      },
      onPageTransitionIn:        function() {
        this.fadeTo('fast', 1.0);
      }
    });

    $container.hide();
    $('#w2010show').click(function(){
      $container.show();
      $('#thumbs_wfall2010').hide();
      $('#thumbs').show();
    });

    $('#m2010show').click(function(){
      $container.show();
      $('#thumbs').hide();
      $('#thumbs_wfall2010').show();
    });

/*
  preload([
      'images/loader.gif',
      'images/douban.png',
      'images/sina.png',
      'images/taobao.png',
      'images/mingcuisine.jpg',
      'images/donliang.jpg'
  ]);
*/
  ///////////////////////////////////////////////////
  //
  //     Functions
  //
  ///////////////////////////////////////////////////
 
  //Preload images
  function preload(arrayOfImages) {
      $(arrayOfImages).each(function(){
          $('<img/>')[0].src = this;
          // Alternatively you could use:
          // (new Image()).src = this;
      });
  }

//END jQuery
});
