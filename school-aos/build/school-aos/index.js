(()=>{"use strict";var e,o={13:()=>{const e=window.wp.blocks,o=window.wp.i18n,a=window.wp.blockEditor,n=window.wp.components,t=window.ReactJSXRuntime,r=JSON.parse('{"UU":"fwd-blocks/school-aos"}');(0,e.registerBlockType)(r.UU,{edit:function({attributes:e,setAttributes:r}){return(0,t.jsxs)(t.Fragment,{children:[(0,t.jsx)(a.InspectorControls,{children:(0,t.jsx)(n.PanelBody,{title:(0,o.__)("AOS Settings","fwd-blocks"),children:(0,t.jsx)(n.SelectControl,{label:(0,o.__)("Animation Type","fwd-blocks"),value:e.animation,options:[{label:(0,o.__)("Fade Up","fwd-blocks"),value:"fade-up"},{label:(0,o.__)("Fade Down","fwd-blocks"),value:"fade-down"},{label:(0,o.__)("Fade Left","fwd-blocks"),value:"fade-left"},{label:(0,o.__)("Fade Right","fwd-blocks"),value:"fade-right"}],onChange:e=>r({animation:e})})})}),(0,t.jsx)("div",{...(0,a.useBlockProps)(),"data-aos":e.animation||"fade-up",children:(0,t.jsx)(a.InnerBlocks,{defaultBlock:"core/paragraph"})})]})},save:function({attributes:e}){return(0,t.jsx)("div",{...a.useBlockProps.save(),"data-aos":e.animation||"fade-up",children:(0,t.jsx)(a.InnerBlocks.Content,{})})}})}},a={};function n(e){var t=a[e];if(void 0!==t)return t.exports;var r=a[e]={exports:{}};return o[e](r,r.exports,n),r.exports}n.m=o,e=[],n.O=(o,a,t,r)=>{if(!a){var l=1/0;for(c=0;c<e.length;c++){for(var[a,t,r]=e[c],s=!0,i=0;i<a.length;i++)(!1&r||l>=r)&&Object.keys(n.O).every((e=>n.O[e](a[i])))?a.splice(i--,1):(s=!1,r<l&&(l=r));if(s){e.splice(c--,1);var d=t();void 0!==d&&(o=d)}}return o}r=r||0;for(var c=e.length;c>0&&e[c-1][2]>r;c--)e[c]=e[c-1];e[c]=[a,t,r]},n.o=(e,o)=>Object.prototype.hasOwnProperty.call(e,o),(()=>{var e={506:0,462:0};n.O.j=o=>0===e[o];var o=(o,a)=>{var t,r,[l,s,i]=a,d=0;if(l.some((o=>0!==e[o]))){for(t in s)n.o(s,t)&&(n.m[t]=s[t]);if(i)var c=i(n)}for(o&&o(a);d<l.length;d++)r=l[d],n.o(e,r)&&e[r]&&e[r][0](),e[r]=0;return n.O(c)},a=globalThis.webpackChunkschool_aos=globalThis.webpackChunkschool_aos||[];a.forEach(o.bind(null,0)),a.push=o.bind(null,a.push.bind(a))})();var t=n.O(void 0,[462],(()=>n(13)));t=n.O(t)})();