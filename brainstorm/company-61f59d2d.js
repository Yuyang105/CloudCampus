(function(){$(function(){var e,n,o,t,r,i;return n=document.querySelector(".hero"),t=document.querySelector(".hero-overlay"),e=document.querySelector(".hero-copy"),i=Modernizr.prefixed("transform"),r=window.innerWidth<=568,setTimeout(function(){return e.style[Modernizr.prefixed("transition")]="none"},500),r||(o=new ScrollAnimation({el:document.body,offset:function(){return 0},animation:function(n){var o;n>this.end+10||(o=Math.max(Math.min(n/this.end,1),0),t.style.backgroundColor="rgba(0, 0, 0, "+o+")",e.style[i]="translateY("+n/3.6+"px)")}}),ScrollAnimation.register(o)),Modernizr.touch?$(".people .person").on("click",function(){return $(this).toggleClass("active").siblings().removeClass("active")}):void 0})}).call(this);