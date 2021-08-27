(()=>{"use strict";(()=>{const e=JSON.parse('{"apiVersion":"2","name":"jet-forms/form-block","title":"JetForm","keywords":["jetform","form","builder","crocoblock"],"textdomain":"jet-form-builder","supports":{"html":false,"className":true},"editorScript":"","editorStyle":"","category":"layout","icon":"feedback","attributes":{"form_id":{"type":"number","default":0},"submit_type":{"type":"string","default":"reload"},"required_mark":{"type":"string","default":"*"},"fields_layout":{"type":"string","default":"column"},"enable_progress":{"type":"boolean","default":false}}}');var t=[{value:"reload",label:"Page Reload"},{value:"ajax",label:"AJAX"}],r=[{value:"column",label:"Column"},{value:"row",label:"Row"}];function o(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);t&&(o=o.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,o)}return r}function l(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?o(Object(r),!0).forEach((function(t){n(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):o(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}function n(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}function a(){return(a=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var o in r)Object.prototype.hasOwnProperty.call(r,o)&&(e[o]=r[o])}return e}).apply(this,arguments)}var i=wp.blocks.registerBlockType,c=wp.i18n.__,s=wp.blockEditor?wp.blockEditor:wp.editor,p=s.InspectorControls,m=s.useBlockProps,u=wp.components,b=u.PanelBody,f=u.SelectControl,d=u.TextControl,w=u.ToggleControl,y=wp.serverSideRender,h=function(t){return"".concat(e.name,"/").concat(t)};i(e.name,l(l({},e),{},{title:c("JetForm"),icon:wp.element.createElement("svg",{width:"64",height:"64",viewBox:"0 0 64 64",fill:"none",xmlns:"http://www.w3.org/2000/svg"},wp.element.createElement("rect",{width:"42",height:"2",rx:"1",fill:"#162B40"}),wp.element.createElement("path",{d:"M0 5C0 4.44772 0.447715 4 1 4H20C20.5523 4 21 4.44772 21 5C21 5.55228 20.5523 6 20 6H1C0.447715 6 0 5.55228 0 5Z",fill:"#162B40"}),wp.element.createElement("rect",{x:"1",y:"2",width:"62",height:"61",rx:"3",fill:"white",stroke:"#162B40","stroke-width":"2"}),wp.element.createElement("rect",{x:"7",y:"19",width:"50",height:"11",rx:"2",fill:"#6F8CFF",stroke:"#162B40","stroke-width":"2"}),wp.element.createElement("rect",{x:"7",y:"35",width:"50",height:"11",rx:"2",fill:"#4AF3BA",stroke:"#162B40","stroke-width":"2"}),wp.element.createElement("rect",{x:"39",y:"51",width:"18",height:"7",rx:"2",fill:"white",stroke:"#162B40","stroke-width":"2"})),attributes:e.attributes,edit:function(o){var l=o.attributes,n=o.setAttributes,i=o.isSelected,s=window.JetFormData,u=m();return[i&&wp.element.createElement(p,{key:h("InspectorControls")},wp.element.createElement(b,{title:c("Form Settings"),key:h("PanelBody")},wp.element.createElement(f,{key:"form_id",label:c("Choose Form"),labelposition:"top",value:l.form_id,onChange:function(e){n({form_id:Number(e)})},options:s.forms_list}),Boolean(l.form_id)&&wp.element.createElement(React.Fragment,null,wp.element.createElement(f,{label:"Fields Layout",value:l.fields_layout,options:r,onChange:function(e){n({fields_layout:e})}}),wp.element.createElement(d,{label:"Required Mark",value:l.required_mark,onChange:function(e){n({required_mark:e})}}),wp.element.createElement(f,{label:"Submit Type",value:l.submit_type,options:t,onChange:function(e){n({submit_type:e})}}),wp.element.createElement(w,{key:"enable_progress",label:c("Enable form pages progress"),checked:l.enable_progress,onChange:function(e){n({enable_progress:Boolean(e)})}})))),wp.element.createElement("div",a({key:h("viewBlock")},u),wp.element.createElement(y,{block:e.name,attributes:l,httpMethod:"POST"}))]}}))})()})();
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiZm9ybS1ibG9jay5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9mb3JtLWJsb2NrLmpzIl0sIm1hcHBpbmdzIjoiQUFBQSIsInNvdXJjZVJvb3QiOiIifQ==