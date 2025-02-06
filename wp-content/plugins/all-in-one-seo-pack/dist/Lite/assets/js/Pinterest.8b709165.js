import{b as f,l as g}from"./index.62477ee8.js";import{u as y}from"./MetaTags.6b7ac1de.js";import{C as b}from"./Card.da4d4921.js";import{C as k}from"./SettingsRow.9f92e269.js";import"./translations.d159963e.js";import{_ as w}from"./_plugin-vue_export-helper.eefbdd86.js";import{_ as t}from"./default-i18n.20001971.js";import{c as h,C as i,l,v as a,o as C,a as n,x,t as u}from"./runtime-dom.esm-bundler.5c3c7d72.js";import"./helpers.c7282833.js";import"./Tooltip.73441134.js";import"./Caret.d9cc70ba.js";import"./index.8c70464a.js";import"./Slide.39c07c03.js";import"./Row.df38a5f6.js";const o="all-in-one-seo-pack",P={setup(){const{maybeUpdateId:p}=y();return{maybeUpdateId:p,optionsStore:f(),links:g}},components:{CoreCard:b,CoreSettingsRow:k},data(){return{pagePostOptions:[],strings:{pinterest:t("Pinterest",o),description:t("Pinterest uses Open Graph metadata just like Facebook, so be sure to keep Open Graph enabled on the Facebook tab checked if you want to optimize your site for Pinterest.",o),learnHowToGetPinterestTag:t("Learn how to get your Pinterest Verification Code",o),skipStep:t("If you have already confirmed your website with Pinterest, you can skip the step below.",o),pinterestVerificationCode:t("Pinterest Verification Code",o)}}}},V={class:"aioseo-pinterest"},T={class:"aioseo-settings-row aioseo-section-description"},S=["innerHTML"],v=n("br",null,null,-1),L=n("br",null,null,-1);function B(p,s,G,r,e,H){const m=a("base-input"),_=a("core-settings-row"),d=a("core-card");return C(),h("div",V,[i(d,{slug:"pinterest","header-text":e.strings.pinterest},{default:l(()=>[n("div",T,[x(u(e.strings.description)+" ",1),n("span",{innerHTML:r.links.getDocLink(e.strings.learnHowToGetPinterestTag,"pinterestSiteVerification",!0)},null,8,S),v,L,n("strong",null,u(e.strings.skipStep),1)]),i(_,{name:e.strings.pinterestVerificationCode,align:""},{content:l(()=>[i(m,{size:"medium",modelValue:r.optionsStore.options.webmasterTools.pinterest,"onUpdate:modelValue":s[0]||(s[0]=c=>r.optionsStore.options.webmasterTools.pinterest=c),onBlur:s[1]||(s[1]=c=>r.maybeUpdateId("pinterest"))},null,8,["modelValue"])]),_:1},8,["name"])]),_:1},8,["header-text"])])}const K=w(P,[["render",B]]);export{K as default};
