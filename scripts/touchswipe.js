(function(b){function c(d){if(d&&d.allowPageScroll==void 0&&(d.swipe!=void 0||d.swipeStatus!=void 0))d.allowPageScroll=h;d||(d={});d=b.extend({},b.fn.swipe.defaults,d);return this.each(function(){var f=b(this),g=f.data(E);g||(g=new a(this,d),f.data(E,g))})}function a(a,c){function I(a){var d=a,a=a.originalEvent,b,f=q?a.touches[0]:a;r=l;q?z=a.touches.length:a.preventDefault();distance=0;direction=null;duration=0;A=null;!q||z==c.fingers?(v.x=t.x=f.pageX,v.y=t.y=f.pageY,F=(new Date).getTime(),c.swipeStatus&&
(b=x(a,r))):C(a);if(b===!1)return r=p,x(a,r),b;else y.bind(B,J),y.bind(w,K),d.stopImmediatePropagation()}function J(a){a=a.originalEvent;if(!(r==o||r==p)){var b,l=q?a.touches[0]:a;t.x=l.pageX;t.y=l.pageY;D=(new Date).getTime();direction=N();if(q)z=a.touches.length;r=n;var l=a,s=direction;if(c.allowPageScroll==h)l.preventDefault();else{var w=c.allowPageScroll==m;switch(s){case d:(c.swipeLeft&&w||!w&&c.allowPageScroll!=j)&&l.preventDefault();break;case f:(c.swipeRight&&w||!w&&c.allowPageScroll!=j)&&
l.preventDefault();break;case g:(c.swipeUp&&w||!w&&c.allowPageScroll!=k)&&l.preventDefault();break;case i:(c.swipeDown&&w||!w&&c.allowPageScroll!=k)&&l.preventDefault()}}z==c.fingers||!q?(distance=O(),duration=D-F,A===null&&r==n&&distance>4&&(A=direction==d||direction==f?L:M),c.swipeStatus&&(b=x(a,r,direction,distance,duration)),c.triggerOnTouchEnd||(l=!(c.maxTimeThreshold?!(duration>=c.maxTimeThreshold):1),G()===!0?(r=o,b=x(a,r)):l&&(r=p,x(a,r)))):(r=p,x(a,r));b===!1&&(r=p,x(a,r))}}function K(a){a=
a.originalEvent;D=(new Date).getTime();distance=O();direction=N();duration=D-F;if(c.triggerOnTouchEnd||c.triggerOnTouchEnd==!1&&r==n)if(r=o,(z==c.fingers||!q)&&t.x!=0){var d=!(c.maxTimeThreshold?!(duration>=c.maxTimeThreshold):1);if((G()===!0||G()===null)&&!d)x(a,r);else if(d||G()===!1)r=p,x(a,r)}else r=p,x(a,r);else r==n&&(r=p,x(a,r));y.unbind(B,J,!1);y.unbind(w,K,!1)}function C(){z=0;v.x=0;v.y=0;t.x=0;F=D=t.y=0}function x(a,b){var h;c.swipeStatus&&(h=c.swipeStatus.call(u,a,b,direction||null,distance||
0,duration||0));if(b==p&&c.click&&(z==1||!q)&&(isNaN(distance)||distance==0))h=c.click.call(u,a,a.target);if(b==o)switch(c.swipe&&(h=c.swipe.call(u,a,direction,distance,duration)),direction){case d:c.swipeLeft&&(h=c.swipeLeft.call(u,a,direction,distance,duration));break;case f:c.swipeRight&&(h=c.swipeRight.call(u,a,direction,distance,duration));break;case g:c.swipeUp&&(h=c.swipeUp.call(u,a,direction,distance,duration));break;case i:c.swipeDown&&(h=c.swipeDown.call(u,a,direction,distance,duration))}(b==
p||b==o)&&C(a);if(h!==void 0)return h}function G(){return c.threshold!==null?distance>=c.threshold:null}function O(){return A==L?Math.abs(t.x-v.x):A==M?Math.abs(t.y-v.y):Math.round(Math.sqrt(Math.pow(t.x-v.x,2)+Math.pow(t.y-v.y,2)))}function N(){if(A==L)return t.x-v.x>0?f:d;else if(A==M)return t.y-v.y>0?i:g;var a;a=Math.round(Math.atan2(t.y-v.y,v.x-t.x)*180/Math.PI);a<0&&(a=360-Math.abs(a));return a<=45&&a>=0?d:a<=360&&a>=315?d:a>=135&&a<=225?f:a>45&&a<135?i:g}function P(){u.unbind(s,I);y.unbind(H,
C);y.unbind(B,J);y.unbind(w,K)}var u=b(a),r="start",z=0,v={x:0,y:0},t={x:0,y:0},F=0,D=0,y=b(document),A=null,L="xaxis",M="yaxis";try{u.bind(s,I),y.bind(H,C)}catch(Q){b.error("events not supported "+s+","+H+" on jQuery.swipe")}this.enable=function(){u.bind(s,I);y.bind(H,C);return u};this.disable=function(){P();return u};this.destroy=function(){P();u.data(E,null);return u}}var d="left",f="right",g="up",i="down",h="none",j="horizontal",k="vertical",m="auto",l="start",n="move",o="end",p="cancel",q="ontouchstart"in
window,s=q?"touchstart":"mousedown",B=q?"touchmove":"mousemove",w=q?"touchend":"mouseup",H="touchcancel",E="TouchSwipe";b.fn.swipe=function(a){$this=b(this);var d=$this.data(E);if(d&&typeof a==="string")if(d[a])return d[a].apply(this,Array.prototype.slice.call(arguments,1));else b.error("Method "+a+" does not exist on jQuery.swipe");else if(!d&&(typeof a==="object"||!a))return c.apply(this,arguments)};b.fn.swipe.defaults={fingers:1,threshold:75,maxTimeThreshold:null,swipe:null,swipeLeft:null,swipeRight:null,
swipeUp:null,swipeDown:null,swipeStatus:null,click:null,triggerOnTouchEnd:!0,allowPageScroll:"auto"};b.fn.swipe.phases={PHASE_START:l,PHASE_MOVE:n,PHASE_END:o,PHASE_CANCEL:p};b.fn.swipe.directions={LEFT:d,RIGHT:f,UP:g,DOWN:i};b.fn.swipe.pageScroll={NONE:h,HORIZONTAL:j,VERTICAL:k,AUTO:m}})(jQuery);
