
        var myScroll,
                pullDownEl, pullDownOffset,
                generatedCount = 0;

        function pullDownAction () {
                setTimeout(function () {	
                        var el, li, i;
                        el = document.getElementById('newlist');

                        if ( el.hasChildNodes() ) {
                                while ( el.childNodes.length >= 1 ) {
                                        el.removeChild( el.firstChild );       
                                } 
                        }

                        for (i=0; i<6; i++) {
                                li = document.createElement('li');
                                li.innerText = 'Generated row ' + (++generatedCount);
                                el.insertBefore(li, el.childNodes[0]);
                        }

                        myScroll.refresh();		
                }, 1000);	
        }

        function loaded() {
                pullDownEl = document.getElementById('pullDown');
                pullDownOffset = pullDownEl.offsetHeight;

                myScroll = new iScroll('wrapper', {
                        //hideScrollbar: false,
                        //hScrollbar: false, vScrollbar: false, vScroll: false,
                        useTransition: true,
                        topOffset: pullDownOffset,
                        onRefresh: function () {
                                if (pullDownEl.className.match('loading')) {
                                        pullDownEl.className = '';
                                        pullDownEl.querySelector('.pullDownLabel').innerHTML = 'Pull down to refresh...';
                                        $('#pullDown').css('display', 'inherit');
                                        $('#pullDown').css('display', 'none');
                                        $('#thelist').css('display', 'none');
                                        $('#newlist').css('display', 'inherit');
                                } 
                        },
                        onScrollMove: function () {
                                if (this.y > 5 && !pullDownEl.className.match('flip')) {
                                        pullDownEl.className = 'flip';
                                        pullDownEl.querySelector('.pullDownLabel').innerHTML = 'Release to refresh...';
                                        $('#pullDown').css('display', 'inherit');
                                        this.minScrollY = 0;
                                } else if (this.y < 5 && pullDownEl.className.match('flip')) {
                                        pullDownEl.className = '';
                                        pullDownEl.querySelector('.pullDownLabel').innerHTML = 'Pull down to refresh...';
                                        $('#pullDown').css('display', 'inherit');
                                        this.minScrollY = -pullDownOffset;
                                } 
                        },
                        onScrollEnd: function () {
                                if (pullDownEl.className.match('flip')) {
                                        pullDownEl.className = 'loading';
                                        pullDownEl.querySelector('.pullDownLabel').innerHTML = 'Loading...';
                                        pullDownAction();	
                                } 
                        }
                });

                setTimeout(function () { document.getElementById('wrapper').style.left = '0'; }, 800);
        }

        document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);

        document.addEventListener('DOMContentLoaded', function () { setTimeout(loaded, 200); }, false);
