import{C as te,z as m,g as u,y as p,I as L,H as y,D as be,K as xe,G as ye,B as Q,E as J,x as fe}from"./main-29710174.js";/**
 * Vue 3 Carousel 0.2.12
 * (c) 2023
 * @license MIT
 */const g={itemsToShow:1,itemsToScroll:1,modelValue:0,transition:300,autoplay:0,snapAlign:"center",wrapAround:!1,throttle:16,pauseAutoplayOnHover:!1,mouseDrag:!0,touchDrag:!0,dir:"ltr",breakpoints:void 0},me={itemsToShow:{default:g.itemsToShow,type:Number},itemsToScroll:{default:g.itemsToScroll,type:Number},wrapAround:{default:g.wrapAround,type:Boolean},throttle:{default:g.throttle,type:Number},snapAlign:{default:g.snapAlign,validator(e){return["start","end","center","center-even","center-odd"].includes(e)}},transition:{default:g.transition,type:Number},breakpoints:{default:g.breakpoints,type:Object},autoplay:{default:g.autoplay,type:Number},pauseAutoplayOnHover:{default:g.pauseAutoplayOnHover,type:Boolean},modelValue:{default:void 0,type:Number},mouseDrag:{default:g.mouseDrag,type:Boolean},touchDrag:{default:g.touchDrag,type:Boolean},dir:{default:g.dir,validator(e){return["rtl","ltr"].includes(e)}},settings:{default(){return{}},type:Object}};function we({config:e,slidesCount:n}){const{snapAlign:a,wrapAround:r,itemsToShow:i=1}=e;if(r)return Math.max(n-1,0);let l;switch(a){case"start":l=n-i;break;case"end":l=n-1;break;case"center":case"center-odd":l=n-Math.ceil((i-.5)/2);break;case"center-even":l=n-Math.ceil(i/2);break;default:l=0;break}return Math.max(l,0)}function _e({config:e,slidesCount:n}){const{wrapAround:a,snapAlign:r,itemsToShow:i=1}=e;let l=0;if(a||i>n)return l;switch(r){case"start":l=0;break;case"end":l=i-1;break;case"center":case"center-odd":l=Math.floor((i-1)/2);break;case"center-even":l=Math.floor((i-2)/2);break;default:l=0;break}return l}function Z({val:e,max:n,min:a}){return n<a?e:Math.min(Math.max(e,a),n)}function Te({config:e,currentSlide:n,slidesCount:a}){const{snapAlign:r,wrapAround:i,itemsToShow:l=1}=e;let c=n;switch(r){case"center":case"center-odd":c-=(l-1)/2;break;case"center-even":c-=(l-2)/2;break;case"end":c-=l-1;break}return i?c:Z({val:c,max:a-l,min:0})}function ke(e){var n,a,r,i;return e?((n=e[0])===null||n===void 0?void 0:n.children)==="v-if"||((r=(a=e[0])===null||a===void 0?void 0:a.type)===null||r===void 0?void 0:r.name)==="CarouselSlide"?e.filter(l=>{var c;return((c=l.type)===null||c===void 0?void 0:c.name)==="CarouselSlide"}):((i=e[0])===null||i===void 0?void 0:i.children)||[]:[]}function V({val:e,max:n,min:a=0}){return e>n?V({val:e-(n+1),max:n,min:a}):e<a?V({val:e+(n+1),max:n,min:a}):e}function Ae(e,n){let a;return n?function(...r){const i=this;a||(e.apply(i,r),a=!0,setTimeout(()=>a=!1,n))}:e}function Ce(e,n){let a;return function(...r){a&&clearTimeout(a),a=setTimeout(()=>{e(...r),a=null},n)}}var Me=te({name:"ARIA",setup(){const e=m("currentSlide",u(0)),n=m("slidesCount",u(0));return()=>p("div",{class:["carousel__liveregion","carousel__sr-only"],"aria-live":"polite","aria-atomic":"true"},`Item ${e.value+1} of ${n.value}`)}}),Ie=te({name:"Carousel",props:me,setup(e,{slots:n,emit:a,expose:r}){var i;const l=u(null),c=u([]),h=u(0),v=u(0);let b=u({}),w=Object.assign({},g);const o=L(Object.assign({},w)),s=u((i=e.modelValue)!==null&&i!==void 0?i:0),_=u(0),j=u(0),A=u(0),O=u(0);let C,$;y("config",o),y("slidesCount",v),y("currentSlide",s),y("maxSlide",A),y("minSlide",O),y("slideWidth",h);function z(){const t=Object.assign(Object.assign({},e),e.settings);b=u(Object.assign({},t.breakpoints)),w=Object.assign(Object.assign({},t),{settings:void 0,breakpoints:void 0}),ne(w)}function N(){const t=Object.keys(b.value).map(f=>Number(f)).sort((f,x)=>+x-+f);let d=Object.assign({},w);t.some(f=>window.matchMedia(`(min-width: ${f}px)`).matches?(d=Object.assign(Object.assign({},d),b.value[f]),!0):!1),ne(d)}function ne(t){Object.entries(t).forEach(([d,f])=>o[d]=f)}const ae=Ce(()=>{Object.keys(b.value).length&&(N(),E()),D()},16);function D(){if(!l.value)return;const t=l.value.getBoundingClientRect();h.value=t.width/o.itemsToShow}function E(){v.value<=0||(j.value=Math.ceil((v.value-1)/2),A.value=we({config:o,slidesCount:v.value}),O.value=_e({config:o,slidesCount:v.value}),o.wrapAround||(s.value=Z({val:s.value,max:A.value,min:O.value})))}be(()=>{Object.keys(b.value).length&&N(),xe(()=>{E(),D(),he(),a("init")}),ie(),window.addEventListener("resize",ae,{passive:!0})}),ye(()=>{$&&clearTimeout($),C&&clearInterval(C),window.removeEventListener("resize",ae,{passive:!0})});let S=!1;const B={x:0,y:0},P={x:0,y:0},T=L({x:0,y:0}),X=u(!1),pe=()=>{X.value=!0},ge=()=>{X.value=!1};function le(t){["INPUT","TEXTAREA"].includes(t.target.tagName)||(S=t.type==="touchstart",!(!S&&t.button!==0||M.value)&&(S||t.preventDefault(),B.x=S?t.touches[0].clientX:t.clientX,B.y=S?t.touches[0].clientY:t.clientY,document.addEventListener(S?"touchmove":"mousemove",H,!0),document.addEventListener(S?"touchend":"mouseup",oe,!0)))}let H=()=>{};function he(){var t;H=Ae(d=>{P.x=S?d.touches[0].clientX:d.clientX,P.y=S?d.touches[0].clientY:d.clientY;const f=P.x-B.x,x=P.y-B.y;T.y=x,T.x=f},(t=o.throttle)!==null&&t!==void 0?t:16)}function oe(){const t=o.dir==="rtl"?-1:1,d=Math.sign(T.x)*.4,f=Math.round(T.x/h.value+d)*t;if(f&&!S){const x=G=>{G.stopPropagation(),window.removeEventListener("click",x,!0)};window.addEventListener("click",x,!0)}k(s.value-f),T.x=0,T.y=0,document.removeEventListener(S?"touchmove":"mousemove",H,!0),document.removeEventListener(S?"touchend":"mouseup",oe,!0)}function ie(){!o.autoplay||o.autoplay<=0||(C=setInterval(()=>{o.pauseAutoplayOnHover&&X.value||R()},o.autoplay))}function re(){C&&(clearInterval(C),C=null),ie()}const M=u(!1);function k(t){const d=o.wrapAround?t:Z({val:t,max:A.value,min:O.value});s.value===d||M.value||(a("slide-start",{slidingToIndex:t,currentSlideIndex:s.value,prevSlideIndex:_.value,slidesCount:v.value}),M.value=!0,_.value=s.value,s.value=d,$=setTimeout(()=>{if(o.wrapAround){const f=V({val:d,max:A.value,min:0});f!==s.value&&(s.value=f,a("loop",{currentSlideIndex:s.value,slidingToIndex:t}))}a("update:modelValue",s.value),a("slide-end",{currentSlideIndex:s.value,prevSlideIndex:_.value,slidesCount:v.value}),M.value=!1,re()},o.transition))}function R(){k(s.value+o.itemsToScroll)}function W(){k(s.value-o.itemsToScroll)}const se={slideTo:k,next:R,prev:W};y("nav",se),y("isSliding",M);const ue=Q(()=>Te({config:o,currentSlide:s.value,slidesCount:v.value}));y("slidesToScroll",ue);const Se=Q(()=>{const t=o.dir==="rtl"?-1:1,d=ue.value*h.value*t;return{transform:`translateX(${T.x-d}px)`,transition:`${M.value?o.transition:0}ms`,margin:o.wrapAround?`0 -${v.value*h.value}px`:"",width:"100%"}});function ce(){z(),N(),E(),D(),re()}Object.keys(me).forEach(t=>{["modelValue"].includes(t)||J(()=>e[t],ce)}),J(()=>e.modelValue,t=>{t!==s.value&&k(Number(t))}),J(v,E),z();const de={config:o,slidesCount:v,slideWidth:h,next:R,prev:W,slideTo:k,currentSlide:s,maxSlide:A,minSlide:O,middleSlide:j};r({updateBreakpointsConfigs:N,updateSlidesData:E,updateSlideWidth:D,initDefaultConfigs:z,restartCarousel:ce,slideTo:k,next:R,prev:W,nav:se,data:de});const Y=n.default||n.slides,U=n.addons,ve=L(de);return()=>{const t=ke(Y==null?void 0:Y(ve)),d=(U==null?void 0:U(ve))||[];t.forEach((K,q)=>K.props.index=q);let f=t;if(o.wrapAround){const K=t.map((F,I)=>fe(F,{index:-t.length+I,isClone:!0,key:`clone-before-${I}`})),q=t.map((F,I)=>fe(F,{index:t.length+I,isClone:!0,key:`clone-after-${I}`}));f=[...K,...t,...q]}c.value=t,v.value=Math.max(t.length,1);const x=p("ol",{class:"carousel__track",style:Se.value,onMousedownCapture:o.mouseDrag?le:null,onTouchstartPassiveCapture:o.touchDrag?le:null},f),G=p("div",{class:"carousel__viewport"},x);return p("section",{ref:l,class:{carousel:!0,"carousel--rtl":o.dir==="rtl"},dir:o.dir,"aria-label":"Gallery",tabindex:"0",onMouseenter:pe,onMouseleave:ge},[G,d,p(Me)])}}});const Oe={arrowUp:"M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z",arrowDown:"M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z",arrowRight:"M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z",arrowLeft:"M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"},ee=e=>{const n=e.name;if(!n||typeof n!="string")return;const a=Oe[n],r=p("path",{d:a}),i=e.title||n,l=p("title",i);return p("svg",{class:"carousel__icon",viewBox:"0 0 24 24",role:"img",ariaLabel:i},[l,r])};ee.props={name:String,title:String};const Le=(e,{slots:n,attrs:a})=>{const{next:r,prev:i}=n||{},l=m("config",L(Object.assign({},g))),c=m("maxSlide",u(1)),h=m("minSlide",u(1)),v=m("currentSlide",u(1)),b=m("nav",{}),{dir:w,wrapAround:o}=l,s=w==="rtl",_=p("button",{type:"button",class:["carousel__prev",!o&&v.value<=h.value&&"carousel__prev--disabled",a==null?void 0:a.class],"aria-label":"Navigate to previous slide",onClick:b.prev},(i==null?void 0:i())||p(ee,{name:s?"arrowRight":"arrowLeft"})),j=p("button",{type:"button",class:["carousel__next",!o&&v.value>=c.value&&"carousel__next--disabled",a==null?void 0:a.class],"aria-label":"Navigate to next slide",onClick:b.next},(r==null?void 0:r())||p(ee,{name:s?"arrowLeft":"arrowRight"}));return[_,j]},je=()=>{const e=m("maxSlide",u(1)),n=m("minSlide",u(1)),a=m("currentSlide",u(1)),r=m("nav",{}),i=c=>V({val:a.value,max:e.value,min:0})===c,l=[];for(let c=n.value;c<e.value+1;c++){const h=p("button",{type:"button",class:{"carousel__pagination-button":!0,"carousel__pagination-button--active":i(c)},"aria-label":`Navigate to slide ${c+1}`,onClick:()=>r.slideTo(c)}),v=p("li",{class:"carousel__pagination-item",key:c},h);l.push(v)}return p("ol",{class:"carousel__pagination"},l)};var Ne=te({name:"CarouselSlide",props:{index:{type:Number,default:1},isClone:{type:Boolean,default:!1}},setup(e,{slots:n}){const a=m("config",L(Object.assign({},g))),r=m("currentSlide",u(0)),i=m("slidesToScroll",u(0)),l=m("slideWidth",u(0)),c=m("isSliding",u(!1)),h=Q(()=>({width:l.value?`${l.value}px`:"100%"})),v=()=>e.index===r.value,b=()=>e.index===r.value-1,w=()=>e.index===r.value+1,o=()=>{const s=Math.floor(i.value),_=Math.ceil(i.value+a.itemsToShow-1);return e.index>=s&&e.index<=_};return()=>{var s;return p("li",{style:h.value,class:{carousel__slide:!0,"carousel_slide--clone":e.isClone,"carousel__slide--visible":o(),"carousel__slide--active":v(),"carousel__slide--prev":b(),"carousel__slide--next":w(),"carousel__slide--sliding":c.value},"aria-hidden":!o()},(s=n.default)===null||s===void 0?void 0:s.call(n))}}});export{Ie as C,Le as N,je as P,Ne as S};
