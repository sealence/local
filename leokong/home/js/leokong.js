$(function() {
    //caching
    var $container = $('#container > div');
    var $fp_overlay			= $('#fp_overlay');
    var $gc0 = $('#gc0');
    var $gc1 = $('#gc1');
    var $gc2 = $('#gc2');

    //font replace
    Cufon.replace('.fb,h1');
  
    //Sealence
    $('#sealence').colorbox({width:"80%", height:"80%", iframe:true});

    // We only want these styles applied when javascript is enabled
    $('div.navigation').css({'width' : '300px', 'float' : 'right'});
    $('div.content').css('display', 'block');

    // Initially set opacity on thumbs and add
    // additional styling for hover effect on thumbs
    var onMouseOutOpacity = 0.67;
    $('.navigation ul.thumbs li').opacityrollover({
      mouseOutOpacity:   onMouseOutOpacity,
      mouseOverOpacity:  1.0,
      fadeSpeed:         'fast',
      exemptionSelector: '.selected'
    });
    
    // Initialize Advanced Galleriffic Gallery
    var gallery0 = $('#thumbs0').galleriffic({
      delay:                     2500,
      numThumbs:                 9,
      preloadAhead:              0,
      enableTopPager:            true,
      enableBottomPager:         true,
      maxPagesToShow:            7,
      imageContainerSel:         '#slideshow0',
      controlsContainerSel:      '#controls0',
      captionContainerSel:       '#caption0',
      loadingContainerSel:       '#loading0',
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
    var gallery1 = $('#thumbs1').galleriffic({
      delay:                     2500,
      numThumbs:                 9,
      preloadAhead:              0,
      enableTopPager:            true,
      enableBottomPager:         true,
      maxPagesToShow:            7,
      imageContainerSel:         '#slideshow1',
      controlsContainerSel:      '#controls1',
      captionContainerSel:       '#caption1',
      loadingContainerSel:       '#loading1',
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
    var gallery2 = $('#thumbs2').galleriffic({
      delay:                     2500,
      numThumbs:                 9,
      preloadAhead:              0,
      enableTopPager:            true,
      enableBottomPager:         true,
      maxPagesToShow:            7,
      imageContainerSel:         '#slideshow2',
      controlsContainerSel:      '#controls2',
      captionContainerSel:       '#caption2',
      loadingContainerSel:       '#loading2',
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

    //the Dock
    var $dock = $('.dock');
    //jqDock
    $dock.jqDock({
      align: 'bottom'
     ,size:48
     ,distance:40
    });

    $container.hide();

    $('#xmas').click(function(){
      $container.hide();
      $gc0.show();
    });

    $('#w2010ss').click(function(){
      $container.hide();
      $gc1.show();
    });

    $('#m2010ss').click(function(){
      $container.hide();
      $gc2.show();
    });

    $('#follow').click(function(){
      $container.hide();
      $.colorbox({width:"80%", height:"80%", inline:true, href:"#follow_content"});
    });

    $('#shops').click(function(){
      $container.hide();
      $.colorbox({width:"80%", height:"80%", inline:true, href:"#shops_content"});
    });

    $('#about').click(function(){
      $container.hide();
      $.colorbox({width:"80%", height:"80%", inline:true, href:"#about_content"});
    });

    //Init complete
    $fp_overlay.hide();

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
