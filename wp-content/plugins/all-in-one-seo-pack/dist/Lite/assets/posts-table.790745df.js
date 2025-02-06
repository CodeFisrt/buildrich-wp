import{o as i,c as m,a as r,v as g,k as u,b as l,l as a,x as d,t as o,C as p,E as h,m as st,G as B,Y as U,h as O}from"./js/runtime-dom.esm-bundler.5c3c7d72.js";import{l as it}from"./js/index.7c01c5f2.js";import{l as ot}from"./js/index.8c70464a.js";import{l as nt}from"./js/index.d80c2c2c.js";import{b as H,u as Z,j as lt,r as j,h as I,l as D,c as F}from"./js/index.62477ee8.js";import{a as rt}from"./js/allowed.c5017e4f.js";import{u as G}from"./js/TruSeoScore.8d32b7a8.js";import{t as q,q as at,i as ct}from"./js/helpers.9b039fd1.js";import{l as z}from"./js/license.20795cf4.js";import{_ as Q,b as X,f as Y}from"./js/Caret.d9cc70ba.js";import{C as J}from"./js/HtmlTagsEditor.744f9f96.js";import{_ as dt}from"./js/ScoreButton.78818232.js";import{C as K}from"./js/Tooltip.73441134.js";import{_ as pt}from"./js/IndexStatus.944af9c5.js";import{S as ut}from"./js/LogoGear.cb664d3b.js";import{_ as A}from"./js/_plugin-vue_export-helper.eefbdd86.js";import"./js/translations.d159963e.js";import{_ as y}from"./js/default-i18n.20001971.js";/* empty css                */import"./js/helpers.c7282833.js";import"./js/metabox.8dab9766.js";import"./js/cleanForSlug.c4a9e111.js";import"./js/toString.a2dfb892.js";import"./js/_baseTrim.11b89ad9.js";import"./js/_stringToArray.f9ddb970.js";import"./js/_baseSet.ab668497.js";import"./js/regex.8a6101c0.js";import"./js/upperFirst.eac3a366.js";import"./js/Editor.34061631.js";import"./js/isEqual.4981d166.js";import"./js/_baseIsEqual.44a599a3.js";import"./js/_getTag.805e37e1.js";import"./js/_baseClone.04585615.js";import"./js/_arrayEach.6af5abac.js";import"./js/UnfilteredHtml.8cfccf1f.js";import"./js/constants.24c44c43.js";import"./js/CheckSolid.a0a6d7e0.js";const mt={},ht={viewBox:"0 0 16 17",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"aioseo-headline-analyzer"},gt=r("path",{"fill-rule":"evenodd","clip-rule":"evenodd",d:"M10.5448 1.76771H14.6665V1.79272L10.5448 4.61008V1.76771ZM5.46515 8.08232V1.76779H1.34351V4.8899L1.34378 4.71192L5.42731 8.10819L5.46515 8.08232ZM1.34351 11.4568L5.46515 14.2652V15.0999H1.34351V11.4568ZM10.5448 10.8851L14.6665 8.14027V15.0982H10.5448V10.8851Z",fill:"currentColor"},null,-1),_t=r("path",{"fill-rule":"evenodd","clip-rule":"evenodd",d:"M5.46515 8.05739L5.42731 8.08325L1.34378 4.68698L1.34351 4.86412V1.76779H5.46515V8.05739ZM5.46515 14.2083L1.34351 11.3998V15.0999H5.46515V14.2083ZM10.5448 10.8281L14.6665 8.08332V15.0982H10.5448V10.8281ZM14.6665 1.76778L10.5448 4.58515V1.76771H14.6665V1.76778Z",fill:"currentColor"},null,-1),ft=r("path",{d:"M5.42725 9.45857L14.6665 3.14303V6.76487L5.46703 12.8912L1.33325 10.0745L1.34372 6.06231L5.42725 9.45857Z",fill:"currentColor"},null,-1),wt=[gt,_t,ft];function yt(e,s){return i(),m("svg",ht,wt)}const Tt=A(mt,[["render",yt]]),b="all-in-one-seo-pack",vt={setup(){const{runAnalysis:e,strings:s}=G();return{composableStrings:s,optionsStore:H(),rootStore:Z(),runAnalysis:e,searchStatisticsStore:lt()}},components:{BaseButton:Q,CoreHtmlTagsEditor:J,CoreLoader:X,CoreScoreButton:dt,CoreTooltip:K,IndexStatus:pt,SvgAioseoLogoGear:ut,SvgHeadlineAnalyzer:Tt,SvgPencil:Y},props:{post:Object,posts:Array},data(){return{allowed:rt,postId:null,columnName:null,value:null,title:null,titleParsed:null,postDescription:null,descriptionParsed:null,imageTitle:null,imageAltTag:null,showEditTitle:!1,showEditDescription:!1,showEditImageTitle:!1,showEditImageAltTag:!1,showTruSeo:!1,isSpecialPage:!1,inspectionResult:!1,inspectionResultLoading:!0,postLoading:!1,strings:j(this.composableStrings,{title:y("Title",b),description:y("Description",b),imageTitle:y("Image Title",b),imageAltTag:y("Image Alt Tag",b),saveChanges:y("Save Changes",b),discardChanges:y("Discard Changes",b),truSeoScore:y("TruSEO Score",b),headlineScore:y("Headline Score",b)}),license:z}},computed:{showIndexStatus(){var f,t,n;if(!this.rootStore.isPro||!z.hasCoreFeature("search-statistics","index-status"))return!1;const e=!this.searchStatisticsStore.unverifiedSite,s=typeof((n=(t=(f=this.optionsStore.internalOptions.internal)==null?void 0:f.searchStatistics)==null?void 0:t.profile)==null?void 0:n.key)=="string",c=this.allowed("aioseo_search_statistics_settings");return e&&s&&c},showHeadlineAnalyzer(){return this.rootStore.aioseo.data.isClassicEditorActive||this.post.postType==="product"||this.post.postType==="web-story"?!1:this.optionsStore.options.advanced.headlineAnalyzer}},methods:{save(){this.showEditTitle=!1,this.showEditDescription=!1,this.post.title=this.title,this.post.description=this.postDescription,this.postLoading=!0,I.post(D.restUrl("posts-list/update-details-column")).send({postId:this.post.id,title:this.post.title,description:this.post.description}).then(e=>{this.titleParsed=e.body.title,this.descriptionParsed=e.body.description,this.post.titleParsed=e.body.title,this.post.descriptionParsed=e.body.description,this.$root.$data.screen.base!=="upload"&&this.runAnalysis(this.post.id)}).catch(e=>{console.error(`Unable to update post with ID ${this.post.id}: ${e}`)}).finally(()=>{this.postLoading=!1})},saveColumn(){this.showEditImageTitle=!1,this.showEditImageAltTag=!1,this.post.title=this.title,this.post.description=this.postDescription,this.post.imageTitle=this.imageTitle,this.post.imageAltTag=this.imageAltTag,I.post(D.restUrl("posts-list/update-details-column")).send({postId:this.post.id,isMedia:!0,title:this.post.title,description:this.post.description,imageTitle:this.post.imageTitle,imageAltTag:this.post.imageAltTag}).then(()=>{this.updatePostTitle(this.post.id,this.post.imageTitle)}).catch(e=>{console.error(`Unable to update attachment with ID ${this.post.id}: ${e}`)})},cancel(){this.value=this.post.value,this.showEditTitle=!1,this.showEditDescription=!1,this.showEditImageTitle=!1,this.showEditImageAltTag=!1},editTitle(){this.showEditTitle=!0},editDescription(){this.showEditDescription=!0},editImageTitle(){this.showEditImageTitle=!0},editImageAlt(){this.showEditImageAltTag=!0},truncate:q,updatePostTitle(e,s){const c=document.getElementById(`post-${e}`);if(!c)return;const f=c.getElementsByClassName("title")[0].getElementsByTagName("a")[0];if(!f)return;const t=f.getElementsByTagName("span")[0];f.innerText=s,f.prepend(t)},updateInspectionResult(e){const{inspectionResult:s,inspectionResultLoading:c}=e;this.inspectionResult=s,this.inspectionResultLoading=c}},mounted(){this.postId=this.post.id,this.columnName=this.post.columnName,this.value=this.post.value,this.imageTitle=this.post.imageTitle,this.imageAltTag=this.post.imageAltTag,this.isSpecialPage=this.post.isSpecialPage,this.title=this.post.title||this.post.defaultTitle,this.titleParsed=this.post.titleParsed,this.postDescription=this.post.description||this.post.defaultDescription,this.descriptionParsed=this.post.descriptionParsed,this.inspectionResult=this.post.inspectionResult,this.inspectionResultLoading=this.post.inspectionResultLoading,this.post.reload&&this.save(),window.aioseoBus.$on("updateInspectionResult"+this.postId,this.updateInspectionResult)},beforeUnmount(){window.aioseoBus.$off("updateInspectionResult"+this.postId,this.updateInspectionResult)},async created(){this.showTruSeo=at()}},Ct={key:0,class:"edit-row scores"},kt={class:"edit-row edit-title"},bt={key:0},St=r("strong",null,":",-1),Et={key:1,class:"edit-row"},It={class:"edit-row edit-description"},Dt=["id"],At=r("strong",null,":",-1),Pt={key:2,class:"edit-row"},Lt={class:"edit-row edit-image-title"},Vt=["id"],xt=r("strong",null,":",-1),Nt={key:3,class:"edit-row"},Rt={class:"edit-row edit-image-alt"},zt=["id"],Mt=r("strong",null,":",-1),Bt={key:4,class:"edit-row"};function Ut(e,s,c,f,t,n){var N,R;const T=g("index-status"),C=g("svg-headline-analyzer"),v=g("core-score-button"),_=g("core-tooltip"),w=g("svg-aioseo-logo-gear"),E=g("core-loader"),P=g("svg-pencil"),L=g("core-html-tags-editor"),k=g("base-button");return i(),m("div",{class:B(["aioseo-details-column",{editing:t.showEditTitle||t.showEditDescription||t.showEditImageTitle||t.showEditImageAltTag}])},[r("div",null,[e.$root.$data.screen.base==="edit"&&!t.isSpecialPage?(i(),m("div",Ct,[n.showIndexStatus?(i(),u(T,{key:0,result:(N=t.inspectionResult)==null?void 0:N.indexStatusResult,"result-link":(R=t.inspectionResult)==null?void 0:R.inspectionResultLink,loading:t.inspectionResultLoading,viewable:c.post.isPostVisible,"tooltip-offset":"-150px,0"},null,8,["result","result-link","loading","viewable"])):l("",!0),n.showHeadlineAnalyzer?(i(),u(_,{key:1,type:"action"},{tooltip:a(()=>[d(o(t.strings.headlineScore),1)]),default:a(()=>[p(v,{score:c.post.headlineScore,postId:t.postId},{icon:a(()=>[p(C)]),_:1},8,["score","postId"])]),_:1})):l("",!0),t.showTruSeo&&t.allowed("aioseo_page_analysis")?(i(),u(_,{key:2,type:"action"},{tooltip:a(()=>[d(o(t.strings.truSeoScore),1)]),default:a(()=>[p(v,{score:c.post.value,postId:t.postId},{icon:a(()=>[p(w)]),_:1},8,["score","postId"])]),_:1})):l("",!0)])):l("",!0),r("div",null,[t.allowed("aioseo_page_general_settings")&&c.post.showTitle?(i(),u(_,{key:0,class:"aioseo-details-column__tooltip",disabled:t.showEditTitle},{tooltip:a(()=>[r("strong",null,o(t.strings.title)+":",1),d(" "+o(t.titleParsed),1)]),default:a(()=>[r("div",kt,[r("strong",null,o(t.strings.title),1),t.showEditTitle?l("",!0):(i(),m("span",bt,[St,d(" "+o(n.truncate(t.titleParsed,100)),1)])),t.postLoading?(i(),u(E,{key:1,dark:""})):l("",!0),t.showEditTitle?l("",!0):(i(),u(P,{key:2,class:"pencil-icon",onClick:h(n.editTitle,["prevent"])},null,8,["onClick"]))])]),_:1},8,["disabled"])):l("",!0)]),t.showEditTitle?(i(),m("div",Et,[p(L,{modelValue:t.title,"onUpdate:modelValue":s[0]||(s[0]=S=>t.title=S),"line-numbers":!1,single:"","tags-context":"postTitle",defaultMenuOrientation:"bottom",tagsDescription:"","default-tags":["post_title"]},null,8,["modelValue"]),p(k,{type:"gray",size:"small",onClick:h(n.cancel,["prevent"])},{default:a(()=>[d(o(t.strings.discardChanges),1)]),_:1},8,["onClick"]),p(k,{type:"blue",size:"small",onClick:h(n.save,["prevent"])},{default:a(()=>[d(o(t.strings.saveChanges),1)]),_:1},8,["onClick"])])):l("",!0),r("div",null,[t.allowed("aioseo_page_general_settings")&&c.post.showDescription?(i(),u(_,{key:0,class:"aioseo-details-column__tooltip",disabled:t.showEditDescription},{tooltip:a(()=>[r("strong",null,o(t.strings.description)+":",1),d(" "+o(n.truncate(t.descriptionParsed)),1)]),default:a(()=>[r("div",It,[r("strong",null,o(t.strings.description),1),t.showEditDescription?l("",!0):(i(),m("span",{key:0,id:`aioseo-${t.columnName}-${t.postId}-value`},[At,d(" "+o(n.truncate(t.descriptionParsed)),1)],8,Dt)),t.postLoading?(i(),u(E,{key:1,dark:""})):l("",!0),t.showEditDescription?l("",!0):(i(),u(P,{key:2,class:"pencil-icon",onClick:h(n.editDescription,["prevent"])},null,8,["onClick"]))])]),_:1},8,["disabled"])):l("",!0)]),t.showEditDescription?(i(),m("div",Pt,[p(L,{modelValue:t.postDescription,"onUpdate:modelValue":s[1]||(s[1]=S=>t.postDescription=S),"line-numbers":!1,"tags-context":"postDescription",defaultMenuOrientation:"bottom",tagsDescription:"","default-tags":["post_excerpt"]},null,8,["modelValue"]),p(k,{type:"gray",size:"small",onClick:h(n.cancel,["prevent"])},{default:a(()=>[d(o(t.strings.discardChanges),1)]),_:1},8,["onClick"]),p(k,{type:"blue",size:"small",onClick:h(n.save,["prevent"])},{default:a(()=>[d(o(t.strings.saveChanges),1)]),_:1},8,["onClick"])])):l("",!0),st(e.$slots,"default"),r("div",null,[e.$root.$data.screen.base==="upload"&&c.post.showMedia?(i(),u(_,{key:0,class:"aioseo-details-column__tooltip",disabled:t.showEditImageTitle},{tooltip:a(()=>[r("strong",null,o(t.strings.imageTitle)+":",1),d(" "+o(t.imageTitle),1)]),default:a(()=>[r("div",Lt,[r("strong",null,o(t.strings.imageTitle),1),t.showEditImageTitle?l("",!0):(i(),m("span",{key:0,id:`aioseo-${t.columnName}-${t.postId}-value`},[xt,d(" "+o(t.imageTitle),1)],8,Vt)),t.showEditImageTitle?l("",!0):(i(),u(P,{key:1,class:"pencil-icon",onClick:h(n.editImageTitle,["prevent"])},null,8,["onClick"]))])]),_:1},8,["disabled"])):l("",!0)]),t.showEditImageTitle?(i(),m("div",Nt,[p(L,{modelValue:t.imageTitle,"onUpdate:modelValue":s[2]||(s[2]=S=>t.imageTitle=S),"line-numbers":!1,single:"","tags-context":"imageSeoTitleColumn",defaultMenuOrientation:"bottom",tagsDescription:"","default-tags":[]},null,8,["modelValue"]),p(k,{type:"gray",size:"small",onClick:h(n.cancel,["prevent"])},{default:a(()=>[d(o(t.strings.discardChanges),1)]),_:1},8,["onClick"]),p(k,{type:"blue",size:"small",onClick:h(n.saveColumn,["prevent"])},{default:a(()=>[d(o(t.strings.saveChanges),1)]),_:1},8,["onClick"])])):l("",!0),r("div",null,[e.$root.$data.screen.base==="upload"&&c.post.showMedia?(i(),u(_,{key:0,class:"aioseo-details-column__tooltip",disabled:t.showEditImageAltTag},{tooltip:a(()=>[r("strong",null,o(t.strings.imageAltTag)+":",1),d(" "+o(t.imageAltTag),1)]),default:a(()=>[r("div",Rt,[r("strong",null,o(t.strings.imageAltTag),1),t.showEditImageAltTag?l("",!0):(i(),m("span",{key:0,id:`aioseo-${t.columnName}-${t.postId}-value`},[Mt,d(" "+o(t.imageAltTag),1)],8,zt)),t.showEditImageAltTag?l("",!0):(i(),u(P,{key:1,class:"pencil-icon",onClick:h(n.editImageAlt,["prevent"])},null,8,["onClick"]))])]),_:1},8,["disabled"])):l("",!0)]),t.showEditImageAltTag?(i(),m("div",Bt,[p(L,{modelValue:t.imageAltTag,"onUpdate:modelValue":s[3]||(s[3]=S=>t.imageAltTag=S),"line-numbers":!1,single:"","tags-context":"imageSeoAltColumn",defaultMenuOrientation:"bottom",tagsDescription:"","default-tags":[]},null,8,["modelValue"]),p(k,{type:"gray",size:"small",onClick:h(n.cancel,["prevent"])},{default:a(()=>[d(o(t.strings.discardChanges),1)]),_:1},8,["onClick"]),p(k,{type:"blue",size:"small",onClick:h(n.saveColumn,["prevent"])},{default:a(()=>[d(o(t.strings.saveChanges),1)]),_:1},8,["onClick"])])):l("",!0)])],2)}const Ot=A(vt,[["render",Ut]]),Ht={components:{CorePostColumn:Ot},props:{post:Object}};function Zt(e,s,c,f,t,n){const T=g("core-post-column");return i(),u(T,{post:c.post},null,8,["post"])}const M=A(Ht,[["render",Zt]]),jt={setup(){return{rootStore:Z()}},components:{PostColumn:M,PostColumnLite:M},props:{post:Object}},Ft={class:"aioseo-app"};function Gt(e,s,c,f,t,n){const T=g("PostColumn"),C=g("PostColumnLite");return i(),m("div",Ft,[f.rootStore.isPro?(i(),u(T,{key:0,post:c.post},null,8,["post"])):l("",!0),f.rootStore.isPro?l("",!0):(i(),u(C,{key:1,post:c.post},null,8,["post"]))])}const qt=A(jt,[["render",Gt]]),V="all-in-one-seo-pack",Qt={setup(){const{strings:e}=G();return{composableStrings:e}},components:{BaseButton:Q,CoreHtmlTagsEditor:J,CoreLoader:X,CoreTooltip:K,SvgPencil:Y},props:{term:Object,terms:Array,index:Number},data(){return{termId:null,columnName:null,title:null,titleParsed:null,termDescription:null,descriptionParsed:null,showEditTitle:!1,showEditDescription:!1,showTruSeo:!1,termLoading:!1,showTitle:!0,showDescription:!0,strings:j(this.composableStrings,{title:y("Title",V),description:y("Description",V),saveChanges:y("Save Changes",V),discardChanges:y("Discard Changes",V)})}},methods:{save(){this.showEditTitle=!1,this.showEditDescription=!1,this.term.title=this.title,this.term.description=this.termDescription,this.termLoading=!0,I.post(D.restUrl("terms-list/update-details-column")).send({termId:this.term.id,title:this.term.title,description:this.term.description}).then(e=>{this.titleParsed=e.body.title,this.descriptionParsed=e.body.description,this.term.titleParsed=e.body.title,this.term.descriptionParsed=e.body.description,this.showTitle=e.body.showTitle,this.showDescription=e.body.showDescription}).catch(e=>{console.error(`Unable to update term with ID ${this.term.id}: ${e}`)}).finally(()=>{this.termLoading=!1})},cancel(){this.showEditTitle=!1,this.showEditDescription=!1},editTitle(){this.showEditTitle=!0},editDescription(){this.showEditDescription=!0},truncate:q},mounted(){this.termId=this.term.id,this.columnName=this.term.columnName,this.title=this.term.title,this.titleParsed=this.term.titleParsed,this.termDescription=this.term.description,this.descriptionParsed=this.term.descriptionParsed,this.showTitle=this.term.showTitle,this.showDescription=this.term.showDescription,this.term.reload&&this.save()},async created(){this.showTruSeo=ct()}},Xt={class:"aioseo-app"},Yt={key:0},Jt={class:"edit-row edit-title"},Kt={key:0},Wt=r("strong",null,":",-1),$t={key:1,class:"edit-row"},te={key:2},ee={class:"edit-row edit-description"},se={key:0},ie=r("strong",null,":",-1),oe={key:3,class:"edit-row"};function ne(e,s,c,f,t,n){const T=g("core-loader"),C=g("svg-pencil"),v=g("core-tooltip"),_=g("core-html-tags-editor"),w=g("base-button");return i(),m("div",Xt,[r("div",{class:B(["aioseo-details-column",{editing:t.showEditTitle||t.showEditDescription}])},[r("div",null,[t.showTitle?(i(),m("div",Yt,[p(v,{class:"aioseo-details-column__tooltip"},{tooltip:a(()=>[r("strong",null,o(t.strings.title)+":",1),d(" "+o(t.titleParsed),1)]),default:a(()=>[r("div",Jt,[r("strong",null,o(t.strings.title),1),t.showEditTitle?l("",!0):(i(),m("span",Kt,[Wt,d(" "+o(n.truncate(t.titleParsed,100)),1)])),t.termLoading?(i(),u(T,{key:1,dark:""})):l("",!0),t.showEditTitle?l("",!0):(i(),u(C,{key:2,class:"pencil-icon",onClick:h(n.editTitle,["prevent"])},null,8,["onClick"]))])]),_:1})])):l("",!0),t.showEditTitle?(i(),m("div",$t,[p(_,{modelValue:t.title,"onUpdate:modelValue":s[0]||(s[0]=E=>t.title=E),"line-numbers":!1,single:"","tags-context":"taxonomyTitle",defaultMenuOrientation:"bottom",tagsDescription:"","default-tags":["taxonomy_title"]},null,8,["modelValue"]),p(w,{type:"gray",size:"small",onClick:h(n.cancel,["prevent"])},{default:a(()=>[d(o(t.strings.discardChanges),1)]),_:1},8,["onClick"]),p(w,{type:"blue",size:"small",onClick:h(n.save,["prevent"])},{default:a(()=>[d(o(t.strings.saveChanges),1)]),_:1},8,["onClick"])])):l("",!0),t.showDescription?(i(),m("div",te,[p(v,{class:"aioseo-details-column__tooltip"},{tooltip:a(()=>[r("strong",null,o(t.strings.description)+":",1),d(" "+o(t.descriptionParsed),1)]),default:a(()=>[r("div",ee,[r("strong",null,o(t.strings.description),1),t.showEditDescription?l("",!0):(i(),m("span",se,[ie,d(" "+o(n.truncate(t.descriptionParsed)),1)])),t.termLoading?(i(),u(T,{key:1,dark:""})):l("",!0),t.showEditDescription?l("",!0):(i(),u(C,{key:2,class:"pencil-icon",onClick:h(n.editDescription,["prevent"])},null,8,["onClick"]))])]),_:1})])):l("",!0),t.showEditDescription?(i(),m("div",oe,[p(_,{modelValue:t.termDescription,"onUpdate:modelValue":s[1]||(s[1]=E=>t.termDescription=E),"line-numbers":!1,"tags-context":"taxonomyDescription",defaultMenuOrientation:"bottom",tagsDescription:"","default-tags":["taxonomy_description"]},null,8,["modelValue"]),p(w,{type:"gray",size:"small",onClick:h(n.cancel,["prevent"])},{default:a(()=>[d(o(t.strings.discardChanges),1)]),_:1},8,["onClick"]),p(w,{type:"blue",size:"small",onClick:h(n.save,["prevent"])},{default:a(()=>[d(o(t.strings.saveChanges),1)]),_:1},8,["onClick"])])):l("",!0)])],2)])}const le=A(Qt,[["render",ne]]);F();const W=e=>(e=it(e),e=ot(e),e=nt(e),F(e),e),$=e=>{const s=document.getElementById(e);s!=null&&s.__vue_app__&&s.__vue_app__.unmount()},tt=e=>{$(`${e.columnName}-${e.id}`),W(U({name:"Standalone/PostsTable/"+e.id,data(){return{screen:window.aioseo.screen}},render:()=>O(qt)},{post:e})).mount(`#${e.columnName}-${e.id}`)},et=e=>{if(!e)return;const s=document.createElement("input");s.setAttribute("type","hidden"),s.setAttribute("name","aioseo-has-details-column"),s.setAttribute("value",!0),e.append(s)};window.aioseo.posts&&0<window.aioseo.posts.length&&I.post(D.restUrl("posts-list/load-details-column")).send({ids:window.aioseo.posts.map(e=>e.id)}).then(e=>{window.aioseo.posts=window.aioseo.posts.map(s=>({...s,...e.body.posts.find(c=>c.id===s.id)})),window.aioseo.posts.forEach(s=>{tt(s)})});const x=e=>{$(`${e.columnName}-${e.id}`),W(U({name:"Standalone/TermsTable/"+e.id,data(){return{screen:window.aioseo.screen}},render:()=>O(le)},{term:e})).mount(`#${e.columnName}-${e.id}`)};window.aioseo.terms&&0<window.aioseo.terms.length&&window.aioseo.posts.length===0&&I.post(D.restUrl("terms-list/load-details-column")).send({ids:window.aioseo.terms.map(e=>e.id)}).then(e=>{window.aioseo.terms=window.aioseo.terms.map(s=>({...s,...e.body.terms.find(c=>c.id===s.id)})),window.aioseo.terms.forEach(s=>{x(s)})});et(document.querySelector("#inline-edit div"));et(document.getElementById("addtag"));(function(e){e(document).on("ajaxComplete",(s,c,f)=>{var T,C;const t=new URLSearchParams(f.data),n=t==null?void 0:t.get("action");if(!(!t||!n)){if(n==="inline-save"){const{post_ID:v}=Object.fromEntries(t.entries()),_=window.aioseo.posts.find(w=>w.id===parseInt(v));tt({..._,reload:!0})}if(n==="inline-save-tax"){const{tax_ID:v}=Object.fromEntries(t.entries()),_=window.aioseo.terms.find(w=>w.id===parseInt(v));x({..._,reload:!0})}if(n==="add-tag"){const v=e(c.responseXML).find("term_id").text(),_=e(c.responseXML).find("term taxonomy").text(),w=H();x({id:parseInt(v),columnName:"aioseo-details",title:(T=w.dynamicOptions.searchAppearance.taxonomies[_])==null?void 0:T.title,description:(C=w.dynamicOptions.searchAppearance.taxonomies[_])==null?void 0:C.metaDescription,reload:!0})}}})})(window.jQuery);
