(()=>{"use strict";var e,o={13:()=>{const e=window.wp.blocks,o=window.wp.i18n,n=window.wp.blockEditor,a=window.wp.components,t=window.ReactJSXRuntime,r=JSON.parse('{"UU":"fwd-blocks/school-aos"}');(0,e.registerBlockType)(r.UU,{edit:function({attributes:e,setAttributes:r}){return(0,t.jsxs)(t.Fragment,{children:[(0,t.jsx)(n.InspectorControls,{children:(0,t.jsx)(a.PanelBody,{title:(0,o.__)("AOS Settings","fwd-blocks"),children:(0,t.jsx)(a.SelectControl,{label:(0,o.__)("Animation Type","fwd-blocks"),value:e.animation,options:[{label:(0,o.__)("Fade Up","fwd-blocks"),value:"fade-up"},{label:(0,o.__)("Fade Down","fwd-blocks"),value:"fade-down"},{label:(0,o.__)("Fade Left","fwd-blocks"),value:"fade-left"},{label:(0,o.__)("Fade Right","fwd-blocks"),value:"fade-right"}],onChange:e=>r({animation:e})})})}),(0,t.jsx)("div",{...(0,n.useBlockProps)(),"data-aos":e.animation||"fade-up",children:(0,t.jsx)(n.InnerBlocks,{})})]})},save:function({attributes:e}){return(0,t.jsx)("div",{...n.useBlockProps.save(),"data-aos":e.animation||"fade-up",children:(0,t.jsx)(n.InnerBlocks.Content,{})})}})}},n={};function a(e){var t=n[e];if(void 0!==t)return t.exports;var r=n[e]={exports:{}};return o[e](r,r.exports,a),r.exports}a.m=o,e=[],a.O=(o,n,t,r)=>{if(!n){var s=1/0;for(c=0;c<e.length;c++){for(var[n,t,r]=e[c],l=!0,i=0;i<n.length;i++)(!1&r||s>=r)&&Object.keys(a.O).every((e=>a.O[e](n[i])))?n.splice(i--,1):(l=!1,r<s&&(s=r));if(l){e.splice(c--,1);var d=t();void 0!==d&&(o=d)}}return o}r=r||0;for(var c=e.length;c>0&&e[c-1][2]>r;c--)e[c]=e[c-1];e[c]=[n,t,r]},a.o=(e,o)=>Object.prototype.hasOwnProperty.call(e,o),(()=>{var e={506:0,462:0};a.O.j=o=>0===e[o];var o=(o,n)=>{var t,r,[s,l,i]=n,d=0;if(s.some((o=>0!==e[o]))){for(t in l)a.o(l,t)&&(a.m[t]=l[t]);if(i)var c=i(a)}for(o&&o(n);d<s.length;d++)r=s[d],a.o(e,r)&&e[r]&&e[r][0](),e[r]=0;return a.O(c)},n=globalThis.webpackChunkschool_aos=globalThis.webpackChunkschool_aos||[];n.forEach(o.bind(null,0)),n.push=o.bind(null,n.push.bind(n))})();var t=a.O(void 0,[462],(()=>a(13)));t=a.O(t)})();