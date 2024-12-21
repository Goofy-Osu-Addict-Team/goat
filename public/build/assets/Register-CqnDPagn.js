import{C as p,c,w as n,o as w,a,u as s,d as g,b as t,e as d,P as _,n as V,f as y}from"./app-DHStF8I6.js";import{_ as v}from"./GuestLayout-CzeuQGmP.js";import{_ as l,a as m,b as i}from"./TextInput-CYyW-Y6Z.js";import{P as b}from"./PrimaryButton-DWy7zjOt.js";import"./ApplicationLogo-D83vkW-U.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const x={class:"mt-4"},k={class:"mt-4"},P={class:"mt-4"},q={class:"mt-4 flex items-center justify-end"},z={__name:"Register",setup(B){const e=p({name:"",email:"",password:"",password_confirmation:""}),u=()=>{e.post(route("register"),{onFinish:()=>e.reset("password","password_confirmation")})};return(f,o)=>(w(),c(v,null,{default:n(()=>[a(s(g),{title:"Register"}),t("form",{onSubmit:y(u,["prevent"])},[t("div",null,[a(l,{for:"name",value:"Name"}),a(m,{id:"name",type:"text",class:"mt-1 block w-full",modelValue:s(e).name,"onUpdate:modelValue":o[0]||(o[0]=r=>s(e).name=r),required:"",autofocus:"",autocomplete:"name"},null,8,["modelValue"]),a(i,{class:"mt-2",message:s(e).errors.name},null,8,["message"])]),t("div",x,[a(l,{for:"email",value:"Email"}),a(m,{id:"email",type:"email",class:"mt-1 block w-full",modelValue:s(e).email,"onUpdate:modelValue":o[1]||(o[1]=r=>s(e).email=r),required:"",autocomplete:"username"},null,8,["modelValue"]),a(i,{class:"mt-2",message:s(e).errors.email},null,8,["message"])]),t("div",k,[a(l,{for:"password",value:"Password"}),a(m,{id:"password",type:"password",class:"mt-1 block w-full",modelValue:s(e).password,"onUpdate:modelValue":o[2]||(o[2]=r=>s(e).password=r),required:"",autocomplete:"new-password"},null,8,["modelValue"]),a(i,{class:"mt-2",message:s(e).errors.password},null,8,["message"])]),t("div",P,[a(l,{for:"password_confirmation",value:"Confirm Password"}),a(m,{id:"password_confirmation",type:"password",class:"mt-1 block w-full",modelValue:s(e).password_confirmation,"onUpdate:modelValue":o[3]||(o[3]=r=>s(e).password_confirmation=r),required:"",autocomplete:"new-password"},null,8,["modelValue"]),a(i,{class:"mt-2",message:s(e).errors.password_confirmation},null,8,["message"])]),t("div",q,[a(s(_),{href:f.route("login"),class:"rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800"},{default:n(()=>o[4]||(o[4]=[d(" Already registered? ")])),_:1},8,["href"]),a(b,{class:V(["ms-4",{"opacity-25":s(e).processing}]),disabled:s(e).processing},{default:n(()=>o[5]||(o[5]=[d(" Register ")])),_:1},8,["class","disabled"])])],32)]),_:1}))}};export{z as default};