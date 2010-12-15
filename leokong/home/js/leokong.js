$(function() {
  //caching

  //font replace
	Cufon.replace('.fb');

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
