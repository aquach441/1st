this.wp=this.wp||{},this.wp.viewport=function(t){var e={};function n(r){if(e[r])return e[r].exports;var i=e[r]={i:r,l:!1,exports:{}};return t[r].call(i.exports,i,i.exports,n),i.l=!0,i.exports}return n.m=t,n.c=e,n.d=function(t,e,r){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:r})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var i in t)n.d(r,i,function(e){return t[e]}.bind(null,i));return r},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=314)}({2:function(t,e){!function(){t.exports=this.lodash}()},314:function(t,e,n){"use strict";n.r(e);var r={};n.r(r),n.d(r,"setIsMatching",(function(){return u}));var i={};n.r(i),n.d(i,"isViewportMatch",(function(){return a}));var o=n(4);var c=function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},e=arguments.length>1?arguments[1]:void 0;switch(e.type){case"SET_IS_MATCHING":return e.values}return t};function u(t){return{type:"SET_IS_MATCHING",values:t}}function a(t,e){return-1===e.indexOf(" ")&&(e=">= "+e),!!t[e]}Object(o.registerStore)("core/viewport",{reducer:c,actions:r,selectors:i});var f=n(2),s=function(t,e){var n=Object(f.debounce)((function(){var t=Object(f.mapValues)(r,(function(t){return t.matches}));Object(o.dispatch)("core/viewport").setIsMatching(t)}),{leading:!0}),r=Object(f.reduce)(t,(function(t,r,i){return Object(f.forEach)(e,(function(e,o){var c=window.matchMedia("(".concat(e,": ").concat(r,"px)"));c.addListener(n);var u=[o,i].join(" ");t[u]=c})),t}),{});window.addEventListener("orientationchange",n),n(),n.flush()},p=n(8),d=function(t){return Object(p.createHigherOrderComponent)(Object(o.withSelect)((function(e){return Object(f.mapValues)(t,(function(t){return e("core/viewport").isViewportMatch(t)}))})),"withViewportMatch")},l=function(t){return Object(p.createHigherOrderComponent)(Object(p.compose)([d({isViewportMatch:t}),Object(p.ifCondition)((function(t){return t.isViewportMatch}))]),"ifViewportMatches")};n.d(e,"ifViewportMatches",(function(){return l})),n.d(e,"withViewportMatch",(function(){return d}));s({huge:1440,wide:1280,large:960,medium:782,small:600,mobile:480},{"<":"max-width",">=":"min-width"})},4:function(t,e){!function(){t.exports=this.wp.data}()},8:function(t,e){!function(){t.exports=this.wp.compose}()}});