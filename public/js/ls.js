(function(A,B){var E={set:function(F,G){if(this.get(F)!==null){this.remove(F)}B.setItem(F,G)},get:function(F){var G=B.getItem(F);return G===undefined?null:G},remove:function(F){B.removeItem(F)},clear:function(){B.clear()},each:function(I){var H=B.length,G=0,I=I||function(){},F;for(;G<H;G++){F=B.key(G);if(I.call(this,F,this.get(F))===false){break}if(B.length<H){H--;G--}}}},D=A.jQuery,C=A.Core;A.LS=A.LS||E;if(D){D.LS=D.LS||E}if(C){C.LS=C.LS||E}})(window,window.localStorage);