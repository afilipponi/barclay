import{d as p,f as l}from"./format-money-03f73825.js";import{G as f}from"./get-10f1237b.js";import{p as g}from"./parse-downloaded-splits-fb2d62df.js";import{p as m,d as w,e as a,f as y,g as b,h as P,i as S,l as v,a as C,b as A,c as _,s as E,j as D,k as c,m as u}from"./splice-errors-into-transactions-e53c1920.js";import{i as o,m as T}from"./vendor-cc723e37.js";import{d as x}from"./create-empty-split-d82bb341.js";import{P as B}from"./put-d747f13c.js";import"./get-7f8692a5.js";const n=D();let L=function(){return{entries:[],originals:[],formStates:{loadingCurrencies:!0,loadingBudgets:!0,loadingPiggyBanks:!0,loadingSubscriptions:!0,isSubmitting:!1,returnHereButton:!1,saveAsNewButton:!1,resetButton:!0,rulesButton:!0,webhooksButton:!0},formBehaviour:{formType:"edit",foreignCurrencyEnabled:!0},formData:{defaultCurrency:null,enabledCurrencies:[],nativeCurrencies:[],foreignCurrencies:[],budgets:[],piggyBanks:[],subscriptions:[]},groupProperties:{transactionType:"unknown",title:null,editTitle:null,id:null,totalAmount:0},notifications:{error:{show:!1,text:"",url:""},success:{show:!1,text:"",url:""},wait:{show:!1,text:""}},submitTransaction(){this.notifications.error.show=!1,this.notifications.success.show=!1,this.notifications.wait.show=!1;for(let e in this.entries)this.entries.hasOwnProperty(e)&&(this.entries[e].errors=x());this.formStates.isSubmitting=!0;let t=m(this.entries,this.originals,this.groupProperties.transactionType),s={group_title:this.groupProperties.editTitle,fire_webhooks:this.formStates.webhooksButton,apply_rules:this.formStates.rulesButton,transactions:t};this.groupProperties.title===null&&t.length>1&&(s.group_title=t[0].description);let r=new B;console.log(s),r.put(s,{id:this.groupProperties.id}).then(e=>{const i=e.data.data;if(this.groupProperties.id=parseInt(i.id),this.groupProperties.title=i.attributes.group_title??i.attributes.transactions[0].description,w(this.groupProperties.id,i.attributes.transactions)>0){this.notifications.wait.show=!0,this.notifications.wait.text=o.t("firefly.wait_attachments");return}this.showMessageOrRedirectUser()}).catch(e=>{this.submitting=!1,console.log(e),typeof e.response<"u"&&this.parseErrors(e.response.data)})},filters:{source:[],destination:[]},addedSplit(){setTimeout(()=>{const t=function(s,r,e){return s.name_with_balance+'<br><small class="text-muted">'+o.t("firefly.account_type_"+s.type)+"</small>"};a({selector:"input.ac-source",serverUrl:n.account,filters:this.filters.source,onRenderItem:t,onChange:y,onSelectItem:b}),a({selector:"input.ac-dest",serverUrl:n.account,filters:this.filters.destination,onRenderItem:t,onChange:P,onSelectItem:S}),a({selector:"input.ac-category",serverUrl:n.category,valueField:"id",labelField:"name",onChange:c,onSelectItem:c}),a({selector:"input.ac-description",serverUrl:n.description,valueField:"id",labelField:"description",onChange:u,onSelectItem:u})},250)},changedDateTime(t){console.warn("changedDateTime, event is not used")},changedDescription(t){console.warn("changedDescription, event is not used")},changedDestinationAccount(t){console.warn("changedDestinationAccount, event is not used")},changedSourceAccount(t){console.warn("changedSourceAccount, event is not used")},formattedTotalAmount(){return this.entries.length===0?l(this.groupProperties.totalAmount,"EUR"):l(this.groupProperties.totalAmount,this.entries[0].currency_code??"EUR")},getTags(t){return console.log("at get tags "+t),console.log(this.entries[t].tags),this.entries[t].tags??[]},getTransactionGroup(){this.entries=[];const t=window.location.href.split("/"),s=parseInt(t[t.length-1]);new f().show(s,{}).then(e=>{const i=e.data.data;this.groupProperties.id=parseInt(i.id),this.groupProperties.transactionType=i.attributes.transactions[0].type.toLowerCase(),this.groupProperties.title=i.attributes.title??i.attributes.transactions[0].description,this.entries=g(i.attributes.transactions,parseInt(i.id)),this.notifications.wait.show=!1}).then(()=>{this.groupProperties.totalAmount=0;for(let e in this.entries)this.entries.hasOwnProperty(e)&&(this.groupProperties.totalAmount=this.groupProperties.totalAmount+parseFloat(this.entries[e].amount),this.filters.source.push(this.entries[e].source_account.type),this.filters.destination.push(this.entries[e].destination_account.type));console.log(this.filters),setTimeout(()=>{T.init("select.ac-tags",{allowClear:!0,server:n.tag,liveServer:!0,clearEnd:!0,allowNew:!0,notFoundMessage:o.t("firefly.nothing_found"),noCache:!0,fetchOptions:{headers:{"X-CSRF-TOKEN":document.head.querySelector('meta[name="csrf-token"]').content}}})},150)})},init(){this.notifications.wait.show=!0,this.notifications.wait.text=o.t("firefly.wait_loading_transaction"),this.getTransactionGroup(),v().then(t=>{this.formStates.loadingCurrencies=!1,this.formData.defaultCurrency=t.defaultCurrency,this.formData.enabledCurrencies=t.enabledCurrencies,this.formData.nativeCurrencies=t.nativeCurrencies,this.formData.foreignCurrencies=t.foreignCurrencies}),C().then(t=>{this.formData.budgets=t,this.formStates.loadingBudgets=!1}),A().then(t=>{this.formData.piggyBanks=t,this.formStates.loadingPiggyBanks=!1}),_().then(t=>{this.formData.subscriptions=t,this.formStates.loadingSubscriptions=!1}),document.addEventListener("upload-success",t=>{this.processUpload(t),document.querySelectorAll("input[type=file]").value=""}),document.addEventListener("upload-error",t=>{this.processUploadError(t)}),document.addEventListener("location-move",t=>{this.entries[t.detail.index].latitude=t.detail.latitude,this.entries[t.detail.index].longitude=t.detail.longitude}),document.addEventListener("location-set",t=>{this.entries[t.detail.index].hasLocation=!0,this.entries[t.detail.index].latitude=t.detail.latitude,this.entries[t.detail.index].longitude=t.detail.longitude,this.entries[t.detail.index].zoomLevel=t.detail.zoomLevel}),document.addEventListener("location-zoom",t=>{this.entries[t.detail.index].hasLocation=!0,this.entries[t.detail.index].zoomLevel=t.detail.zoomLevel})},changedAmount(t){const s=parseInt(t.target.dataset.index);this.entries[s].amount=parseFloat(t.target.value),this.groupProperties.totalAmount=0;for(let r in this.entries)this.entries.hasOwnProperty(r)&&(this.groupProperties.totalAmount=this.groupProperties.totalAmount+parseFloat(this.entries[r].amount))},showMessageOrRedirectUser(){if(this.notifications.error.show=!1,this.notifications.success.show=!1,this.notifications.wait.show=!1,this.formStates.returnHereButton){this.notifications.success.show=!0,this.notifications.success.url="transactions/show/"+this.groupProperties.id,this.notifications.success.text=o.t("firefly.updated_journal_js",{description:this.groupProperties.title});return}window.location="transactions/show/"+this.groupProperties.id+"?transaction_group_id="+this.groupProperties.id+"&message=updated"},parseErrors(t){this.notifications.error.show=!0,this.notifications.success.show=!1,this.notifications.wait.show=!1,this.formStates.isSubmitting=!1,this.notifications.error.text=o.t("firefly.errors_submission_v2",{errorMessage:t.message}),t.hasOwnProperty("errors")&&(this.entries=E(t.errors,this.entries))},processUpload(t){this.showMessageOrRedirectUser()},processUploadError(t){this.notifications.success.show=!1,this.notifications.wait.show=!1,this.notifications.error.show=!0,this.formStates.isSubmitting=!1,this.notifications.error.text=o.t("firefly.errors_upload"),console.error(t)}}},h={transactions:L,dates:p};function d(){Object.keys(h).forEach(t=>{console.log(`Loading page component "${t}"`);let s=h[t]();Alpine.data(t,()=>s)}),Alpine.start()}document.addEventListener("firefly-iii-bootstrapped",()=>{console.log("Loaded through event listener."),d()});window.bootstrapped&&(console.log("Loaded through window variable."),d());