"use strict";(self["webpackChunkfirefly_iii"]=self["webpackChunkfirefly_iii"]||[]).push([[5439],{1673:(t,e,a)=>{a.r(e),a.d(e,{default:()=>v});var l=a(9835);const s={class:"row q-mx-md"},d={class:"col-4"},n=(0,l._)("div",{class:"text-h6"},"Reports",-1);function o(t,e,a,o,i,u){const c=(0,l.up)("q-card-section"),r=(0,l.up)("q-select"),p=(0,l.up)("q-input"),m=(0,l.up)("q-btn"),b=(0,l.up)("q-card-actions"),h=(0,l.up)("q-card"),f=(0,l.up)("q-page");return(0,l.wg)(),(0,l.j4)(f,null,{default:(0,l.w5)((()=>[(0,l._)("div",s,[(0,l._)("div",d,[(0,l.Wm)(h,{bordered:""},{default:(0,l.w5)((()=>[(0,l.Wm)(c,null,{default:(0,l.w5)((()=>[n])),_:1}),(0,l.Wm)(c,null,{default:(0,l.w5)((()=>[(0,l.Wm)(r,{"bottom-slots":"",outlined:"",modelValue:i.type,"onUpdate:modelValue":e[0]||(e[0]=t=>i.type=t),"emit-value":"",class:"q-pr-xs","map-options":"",options:i.types,label:"Report type"},null,8,["modelValue","options"]),(0,l.Wm)(r,{"bottom-slots":"",outlined:"",disable:i.loading,modelValue:i.selectedAccounts,"onUpdate:modelValue":e[1]||(e[1]=t=>i.selectedAccounts=t),class:"q-pr-xs",multiple:"","emit-value":"","use-chips":"","map-options":"",options:i.accounts,label:"Included accounts"},null,8,["disable","modelValue","options"]),(0,l.Wm)(p,{"bottom-slots":"",type:"date",modelValue:i.start_date,"onUpdate:modelValue":e[2]||(e[2]=t=>i.start_date=t),label:t.$t("form.start_date"),hint:"Start date",outlined:""},null,8,["modelValue","label"]),(0,l.Wm)(p,{"bottom-slots":"",type:"date",modelValue:i.end_date,"onUpdate:modelValue":e[3]||(e[3]=t=>i.end_date=t),label:t.$t("form.start_date"),hint:"Start date",outlined:""},null,8,["modelValue","label"])])),_:1}),(0,l.Wm)(b,null,{default:(0,l.w5)((()=>[(0,l.Wm)(m,{disable:i.loading||i.selectedAccounts.length<1,onClick:u.submit,color:"primary",label:"View report"},null,8,["disable","onClick"])])),_:1})])),_:1})])])])),_:1})}a(8964);var i=a(3836),u=a(7164),c=a(8898),r=a(5057);const p={name:"Index",created(){this.getAccounts(),this.start_date=(0,c.Z)((0,u.Z)(new Date),"yyyy-MM-dd"),this.end_date=(0,c.Z)((0,r.Z)(new Date),"yyyy-MM-dd")},data(){return{loading:!1,type:"default",selectedAccounts:[],accounts:[],start_date:"",end_date:"",types:[{value:"default",label:"Default financial report"}]}},methods:{submit:function(){let t=this.start_date.replace("-",""),e=this.end_date.replace("-",""),a=this.selectedAccounts.join(",");"default"===this.type&&this.$router.push({name:"reports.default",params:{accounts:a,start:t,end:e}})},getAccounts:function(){this.loading=!0,this.getPage(1)},getPage:function(t){(new i.Z).list("all",t,this.getCacheKey).then((e=>{let a=parseInt(e.data.meta.pagination.total_pages);for(let t in e.data.data)if(e.data.data.hasOwnProperty(t)){let a=e.data.data[t];"liabilities"!==a.attributes.type&&"asset"!==a.attributes.type||this.accounts.push({value:parseInt(a.id),label:a.attributes.type+": "+a.attributes.name,decimal_places:parseInt(a.attributes.currency_decimal_places)})}t<a&&this.getPage(t+1),t===a&&(this.loading=!1,this.accounts.sort(((t,e)=>t.label>e.label?1:e.label>t.label?-1:0)))}))}}};var m=a(1639),b=a(9885),h=a(4458),f=a(3190),y=a(7887),_=a(6611),g=a(1821),w=a(8879),V=a(9984),Z=a.n(V);const q=(0,m.Z)(p,[["render",o]]),v=q;Z()(p,"components",{QPage:b.Z,QCard:h.Z,QCardSection:f.Z,QSelect:y.Z,QInput:_.Z,QCardActions:g.Z,QBtn:w.Z})}}]);