	  function getSelect(s) {
	    return s.options[s.selectedIndex].value
	  }
	  function toggle(id) {
  		'use strict';
  		var e = document.getElementById(id);
  		if (e.style.display == '')
    		e.style.display = 'none';
  		else
    		e.style.display = '';
	}
	function toggle2(id, link) {
  		'use strict';
  		var e = document.getElementById(id);
  		if (e.style.display == '') {
    		e.style.display = 'none';
    		link.innerHTML = 'dw';
  		} else {
    			e.style.display = '';
    			link.innerHTML = 'up';
  		}
	}
	document.createElement("article");
	document.createElement("audio");
	document.createElement("video");
	document.createElement("header");
	document.createElement("footer");
	document.createElement("header");
	document.createElement("hgroup");
	document.createElement("nav");


    function hasClassName(inElement, inClassName)
    {
        var regExp = new RegExp('(?:^|\\s+)' + inClassName + '(?:\\s+|$)');
        return regExp.test(inElement.className);
    }

    function addClassName(inElement, inClassName)
    {
        if (!hasClassName(inElement, inClassName))
            inElement.className = [inElement.className, inClassName].join(' ');
    }

    function removeClassName(inElement, inClassName)
    {
        if (hasClassName(inElement, inClassName)) {
            var regExp = new RegExp('(?:^|\\s+)' + inClassName + '(?:\\s+|$)', 'g');
            var curClasses = inElement.className;
            inElement.className = curClasses.replace(regExp, ' ');
        }
    }

    function toggleClassName(inElement, inClassName)
    {
        if (hasClassName(inElement, inClassName))
            removeClassName(inElement, inClassName);
        else
            addClassName(inElement, inClassName);
    }

    function toggleShape()
    {
      var shape = document.getElementById('shape');
      if (hasClassName(shape, 'ring')) {
        removeClassName(shape, 'ring');
        addClassName(shape, 'cube');
      } else {
        removeClassName(shape, 'cube');
        addClassName(shape, 'ring');
      }
      
      // Move the ring back in Z so it's not so in-your-face.
      var stage = document.getElementById('stage');
      if (hasClassName(shape, 'ring'))
        stage.style.webkitTransform = 'translateZ(-200px)';
      else
        stage.style.webkitTransform = '';
    }
    
    function toggleBackfaces()
    {
      var backfacesVisible = document.getElementById('backfaces').checked;
      var shape = document.getElementById('shape');
      if (backfacesVisible)
        addClassName(shape, 'backfaces');
      else
        removeClassName(shape, 'backfaces');
    }
  
