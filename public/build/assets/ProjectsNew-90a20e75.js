import{_ as I}from"./locationIcon-3842aafb.js";import{N as L}from"./Navbar-538375ca.js";import{bG as V,r as k,o,c as i,b as e,F as b,m as g,a as r,w as d,t as a,u as h,d as p,g as x,h as j,i as T,e as w}from"./main-29710174.js";import{b as $,L as y,U as N}from"./flowbite-vue-28b2ef04.js";const P="/build/assets/dark_footer_logo-06458faf.svg",U="/build/assets/dark_footer_linkedin-775b4ac4.svg",B="/build/assets/dark_footer_twitter-e9821aed.svg",M="/build/assets/dark_footer_whatsapp-80ed9c56.svg",C="/build/assets/dark_footer_facebook-a39dc3d7.svg",D={class:"text-white flex flex-col flex-wrap md:flex-nowrap py-10 px-10 rounded-t-2xl w-full bg-blend-multiply bg-dark-footer-image bg-black bg-no-repeat bg-cover bg-fixed"},z={class:"flex justify-between gap-x-36 flex-wrap md:flex-nowrap"},A={class:"flex-auto md:max-w-[15rem] py-5 md:py-10"},E={class:"w-full border-white border-2 mb-5"},G={class:"flex justify-between"},H=["href"],S=["src","alt"],K={class:"flex-auto md:w-64"},O={class:"flex py-5 md:py-0 gap-3"},R=["src"],q={class:"self-center md:px-5"},J={class:"text-dark-footer-text-color py-5 md:py-10 text-justify"},Q={class:"py-2"},W={class:"text-center text-dark-footer-text-color pt-4"},X={__name:"DarkFooter",setup(F){const{t:c}=V(),u=[{name:c("mostImportantProjects"),href:{name:"Projects"}},{name:c("companies"),href:{name:"Companies"}},{name:c("contactUs"),href:{name:"Contact Us"}},{name:c("licenses"),href:{name:"Page",params:{slug:"license-and-agreement"}}}],m=[{image:U,href:"https://www.linkedin.com/company/ladun"},{image:B,href:"https://twitter.com/Ladun_sa"},{image:M,href:"https://wa.me/920011560"},{image:C,href:"https://www.facebook.com/Ladun.KSA"}];return(l,s)=>{const n=k("router-link"),v=k("h");return o(),i("div",D,[e("div",z,[e("div",A,[(o(),i(b,null,g(u,t=>e("div",null,[r(n,{to:t.href},{default:d(()=>[e("button",E,[e("small",null,a(t.name),1)])]),_:2},1032,["to"])])),64)),e("div",G,[(o(),i(b,null,g(m,t=>e("a",{href:t.href,target:"_blank"},[e("img",{src:`${t.image}`,alt:`${t.image}`,class:"w-10 h-10"},null,8,S)],8,H)),64))])]),e("div",K,[e("div",O,[e("img",{src:h(P),alrt:"darkFooterLogo"},null,8,R),p(),e("h3",q,a(l.$t("darkFooterTitle")),1)]),e("p",J,a(l.$t("darkFooterText")),1),r(v,{class:"py-2"},{default:d(()=>[p(a(l.$t("darkFooterPhone"))+": 920011560 ",1)]),_:1}),e("h3",Q,a(l.$t("darkFooterEmail"))+": investor@ladun.sa",1)])]),e("div",W,a(l.$t("copyRights")),1)])}}},Y={class:"bg-light-beige-background mb-4 pt-32 [&>div>div>ul>li>.border-blue-600]:border-black [&>div>div>ul>li>.text-blue-600]:text-black"},Z={class:"relative"},ee=e("div",{class:"absolute w-full h-full top-0 left-0 bg-background-overlay z-20"},null,-1),te=["src","alt"],se={class:"grid grid-cols-1 gap-10 md:grid-cols-3 pt-2 container mx-auto [&>div]:h-[532px]"},le={class:"rounded-xl border-2 border-gray-border-light bg-white relative mx-2"},oe=["src","alt"],ae={class:"flex flex-col items-center"},ne={class:"flex-initial p-2 font-bold"},re={class:"flex-initial flex p-2 text-dark-brown"},ie=e("img",{src:I,alt:"locationIcon",class:"rtl:ml-2 ltr:mr-2"},null,-1),de={class:"flex-initial mb-2 text-dark-brown"},ce={class:"grid grid-cols-4 mb-4"},ue=["innerHTML"],me={class:"flex flex-col justify-end col-start-4 col-end-4"},_e={class:"absolute bottom-0 w-full"},pe={__name:"ProjectsNew",setup(F){const c=s=>Object.values(s).map(n=>({src:n.original_url,alt:n.name})),u=x(""),m=x(""),l=x([]);return j(async()=>{const s=await T.get("/api/departments");l.value=s.data.data,u.value=l.value[0].title.en,m.value=l.value[0].regions[0].title.en,console.log(u.value,"----",m.value)}),(s,n)=>{const v=k("router-link");return o(),i(b,null,[r(L,{class:"bg-black fixed z-50 w-full"}),e("div",Y,[r(h($),{variant:"underline",modelValue:u.value,"onUpdate:modelValue":n[1]||(n[1]=t=>u.value=t)},{default:d(()=>[(o(!0),i(b,null,g(l.value,t=>(o(),w(h(y),{name:t.title.en,title:t.title[s.$i18n.locale],class:"[&>div>div>div>ul]:justify-center [&>div>div>div>ul>li>.text-blue-600]:text-dark-brown [&>div>div>div>ul>li>.border-blue-600]:border-dark-brown"},{default:d(()=>[e("div",Z,[ee,e("img",{src:t.mainImage.src,alt:t.mainImage.alt},null,8,te)]),r(h($),{variant:"underline",modelValue:m.value,"onUpdate:modelValue":n[0]||(n[0]=_=>m.value=_),class:"justify-center py-10"},{default:d(()=>[(o(!0),i(b,null,g(t.regions,_=>(o(),w(h(y),{name:_.title.en,title:_.title[s.$i18n.locale]},{default:d(()=>[e("div",se,[(o(!0),i(b,null,g(_.projects,f=>(o(),i("div",le,[e("img",{class:"w-20 h-20 rounded-full mx-auto my-3 mb-0",src:f.logo.original_url,alt:f.logo.name},null,8,oe),e("div",ae,[e("h3",ne,a(f.title[s.$i18n.locale]),1),e("h4",re,[ie,p(" "+a(_.title[s.$i18n.locale]),1)]),e("small",de,a(t.title[s.$i18n.locale]),1)]),e("div",ce,[e("p",{class:"px-2 text-grey text-xs col-start-1 col-end-4",innerHTML:f.text[s.$i18n.locale].slice(0,110)+" ..."},null,8,ue),e("div",me,[r(v,{class:"bg-dark-brown text-white rounded-md h-6 max-w-20 text-xs text-center flex flex-col justify-center mx-2",to:{name:"Project",params:{id:f.id}}},{default:d(()=>[p(a(s.$t("readMore")),1)]),_:2},1032,["to"])])]),e("div",_e,[r(h(N),{pictures:c(f.gallery),class:"[&>div>div>img]:h-full [&>div:first-child]:h-[243px] [&>div>button]:mx-2 [&>button>span]:group-focus:ring-black [&>button>span]:group-focus:ring-1"},null,8,["pictures"])])]))),256))])]),_:2},1032,["name","title"]))),256))]),_:2},1032,["modelValue"])]),_:2},1032,["name","title"]))),256))]),_:1},8,["modelValue"])]),r(X)],64)}}};export{pe as default};
