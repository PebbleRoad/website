/**
 * PebbleRoad JS
 */
var PR = (function(app){

    /**
     * Mobile menu
     */
    
    document.getElementsByClassName('hamburger')[0].addEventListener('click', function(e){

        document.body.classList.toggle('menu-open');

        e.preventDefault();
    });

    /**
     * Share links
     */
    
    var shareLinks  = document.getElementsByClassName('js-share');

    for(var i = 0; i < shareLinks.length; i++){

        shareLinks[i].addEventListener('click', function(e){

            app.openPopup(e.target.href)

            e.preventDefault();
        })
    }

    app.openPopup = function(href, title){

        var w  = 620;
        var h = 360;
        var title = 'PebbleRoad';
        
        var wLeft = window.screenLeft ? window.screenLeft : window.screenX,
            wTop = window.screenTop ? window.screenTop : window.screenY;

        var left = wLeft + (window.innerWidth / 2) - (w / 2);
        var top = wTop + (window.innerHeight / 2) - (h / 2);

        return window.open(href, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

    }



    return app;

})(PR || {})