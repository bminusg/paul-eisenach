// GENERAL VARS
  var iframe, img, teaser, closeBtn,video,expandFacts,expandFactsLayer; 
	var factsRaw = [];


// forEach IE Prototype
	if (!NodeList.prototype.forEach) {
		NodeList.prototype.forEach = Array.prototype.forEach;
	}
 

  // EXPAND FUNCTION
  function expand() {
    var factList = document.querySelector('#factList');
    var expandFactsLayer = document.querySelector('expand-facts-layer');
    var teaser = document.querySelectorAll('.teaser');
    var closeBtn = document.querySelector('#close');
    var expandHeadline = document.querySelector('expand-facts > h1');
    var expandSubtitle = document.querySelector('#expandSubInfos > subtitle');
    var expandJob = document.querySelector('#expandSubInfos > job');
    var img = document.querySelector('#imageFrame');
    var iframe = document.querySelector("#videoFrame");

    // RESET EXPAND FUNCTION
    function reset(type) {
      // remove expand layer
      if (document.querySelector('.expand')) {
        document.querySelector('.expand').classList.remove('expand');
      }
      document.querySelector('body').style.overflow = "visible";

      // remove factList items
      while (factList.hasChildNodes()) {
        factList.removeChild(factList.lastChild);
      }
      // reset subinfos
      expandSubtitle.innerHTML = '';
      expandJob.innerHTML = '';
      //remove iframe
      iframe.removeAttribute("src");
      iframe.style.display = "none"
      //remove image
      img.style.display = "none";
      //remove scrollbar
      if (expandFactsLayer.className = 'scroll-y') {
        expandFactsLayer.classList.remove('scroll-y');
      }
      
    }

    teaser.forEach(function(elem) {
      elem.onclick = function() {
        var data = elem.dataset;
        var dataArray = Object.keys(data);
        var link, url;

        // before start reset all
        reset();

        
        // fill the factList
        for (i = 0; i < dataArray.length; i++){

          var name = dataArray[i];
          var value = elem.getAttribute("data-" + name);

          if (value != "") {
            var label;
            var li = document.createElement('li');
            li.setAttribute("id", name);            

            function createLink() {
              if (label != undefined) {
                link = document.createElement("a");
                link.setAttribute("href", value);
                link.setAttribute("target", "_blank");
                link.innerHTML = label;
                li.appendChild(link);
                factList.appendChild(li);
              }
            }
            
            
            switch (name) {
              case "title":
                expandHeadline.innerHTML = value;
                break;
              case "subtitle":
                expandSubtitle.innerHTML = value;
                break;
              case "job":
                expandJob.innerHTML = value;
                break;
              case "link":
                createLink(value,label);
                break;
              case "linklabel":
                  label = value;
                break;
              case "link2":
                createLink(value,label);
                break;
              case "linklabel2":
                  label = value;
                break;
              case "link3":
                createLink(value,label);
                break;
              case "linklabel3":
                  label = value;
                break;
              case "videosrc":
                break;
              case "previewtype":
                break;
              default:
                li.appendChild(document.createTextNode(value));
                factList.appendChild(li);
                //appendFact(name,value);
            }
            
          }
                    
        }

        var preview = elem.dataset.previewtype;
        var source = elem.dataset.videosrc;

        switch (preview) {
          case "video":            
            iframe.setAttribute("id", "videoFrame");
            iframe.setAttribute("src", source);
            iframe.style.display = "block";
            break;
          case "image":
            img.style.backgroundImage = "url(" + source + ")";
            img.style.display = "block";
            break;
          }

          document.querySelector('body').style.overflow = "hidden";
          document.querySelector('body').classList.add('expand');
          
          // check if expandFacts need a scrollbar
          var windowHeight = window.innerHeight;
   
          console.log("windowHeight: " + windowHeight);
          console.log("expandFactsLayerHeight: " + expandFactsLayer.scrollHeight);
          if (expandFactsLayer.scrollHeight >= windowHeight) {
            expandFactsLayer.classList.add('scroll-y');
          }
        
      }
    });

    
    closeBtn = document.querySelector("#close");
    if(closeBtn) {
      closeBtn.onclick = function() {
        reset();
      }
    }
    
  }








// SMOOTH-SCROLL

/*
function smoothScroll() {
    var target = document.querySelector('section[name=' + window.location.hash.slice(1) + ']')  ;
    console.log(target.scrollHeight);
    //target = target.length ? target : $('[name=' + this.hash.slice(1) + ']') ;
    tarOff = target.scrollHeight - 70;
    if (target.length) {
      $('html,body').animate({
        scrollTop: tarOff
      }, 1000); // The number here represents the speed of the scroll in milliseconds
      return false;
    }
}
*/


$(function() {
  // This will select everything with the class smoothScroll
  // This should prevent problems with carousel, scrollspy, etc...
  $('.smoothScroll').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash) ;
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']') ;
      tarOff = target.offset().top - 70;
      if (target.length) {
        $('html,body').animate({
          scrollTop: tarOff
        }, 1000); // The number here represents the speed of the scroll in milliseconds
        return false;
      }
    }
  });
});




// IMPRINT TOOGLE
	function addImprint() {
		imprint = document.querySelector('#imprint');
		imprint.classList.add('active');
	}

	function removeImprint() {
		imprint = document.querySelector('#imprint');
		imprint.classList.remove('active');
	}


// SAFARI HEIGHT 
  function safariHeight() {
    elem = document.querySelector('#etageWrapper');
    CSSheight = window.getComputedStyle(elem,null).getPropertyValue("height");
    bg = document.querySelectorAll('.background-place');

    for (var i = 0; i < bg.length; i++) {
      bg[i].style.height = CSSheight;
    };

  }

// RESIZE
	function resizeME() {
    safariHeight();
	}



// INIT
function init() {


	// NAV TOUCH-FRIENDLY
		checkViewport = window.matchMedia("(max-width:850px)").matches;
		navActive = document.querySelector(".nav-active");

		if (checkViewport) {
			document.querySelectorAll('.updateNav').forEach(function(elem){
				elem.onclick = function() {
					document.querySelector('trigger-mobil').classList.toggle("btn-active");
					document.querySelector('body').classList.toggle("nav-active");
				}
			});
			document.querySelectorAll('.updateNav-delay').forEach(function(elem){
				elem.onclick = function() {
					document.querySelector('trigger-mobil').classList.toggle("btn-active");
					setTimeout(function() {
						document.querySelector('body').classList.toggle("nav-active");
					}, 800);
				}
			});
		}

	// EXPAND FUNCTION
		expand();

	// Imprint Toggle
		callImprint = document.querySelector('.toggleImprint');
		callImprint.addEventListener('click', addImprint);
		resetImprint = document.querySelector('.toggleImprint-close');
		resetImprint.addEventListener('click', removeImprint);

  // SAFARI HEIGHT WORKAROUND
    safariHeight();

  // INIT SMOOTH SCROLL
  /*
  smoothScroll();

  var scrollTrigger = document.querySelectorAll('.smoothScroll');
  console.log(scrollTrigger);
  scrollTrigger.forEach(function(elem){
    elem.onclick = smoothScroll();
  });
  */

}
