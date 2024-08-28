(()=>{"use strict";const e=window.ReactJSXRuntime,{registerBlockType:i}=wp.blocks,{MediaUpload:c,MediaUploadCheck:t,RichText:s}=wp.blockEditor,{Button:l}=wp.components,{withSelect:d}=wp.data,{__}=wp.i18n;i("cgb/custom-card",{title:"Custom card block",icon:"index-card",category:"widgets",attributes:{media_id:{type:"number",default:0},media_url:{type:"string"},block_title:{type:"string",source:"html",selector:"h2"},block_subtitle:{type:"string",source:"html",selector:"h4"},block_description:{type:"string",soource:"html",selector:"p"}},edit:d(((e,i)=>({media:i?.attributes?.media_id?e("core").getMedia(i.attributes.media_id):void 0})))((i=>{const{attributes:d,setAttributes:a}=i;return(0,e.jsxs)("div",{id:"ikp-cc-card",children:[(0,e.jsx)("div",{class:"ikp-cc-card__left-side",children:(0,e.jsx)("div",{class:"ikp-cc-img-wrapper",children:(0,e.jsx)(t,{children:(0,e.jsx)(c,{onSelect:e=>{a({media_id:e.id,media_url:e.url})},value:d.media_id,allowedTypes:["image"],render:({open:c})=>(0,e.jsxs)(l,{className:0==d.media_id?"editor-post-featured-image__toggle":"editor-post-featured-image__preview",onClick:c,children:[0==d.media_id&&__("Choose an image","awp"),null!=i.media&&(0,e.jsx)("img",{src:i.media.source_url})]})})})})}),(0,e.jsx)("div",{class:"ikp-cc-card__right-side",children:(0,e.jsxs)("div",{class:"ikp-cc-content-wrapper",children:[(0,e.jsx)("div",{class:"ikp-cc-block-title",children:(0,e.jsx)(s,{tagName:"h2",value:d.block_title,onChange:e=>a({block_title:e}),placeholder:"Enter block title ..."})}),(0,e.jsx)("div",{class:"ikp-cc-block-subtitle",children:(0,e.jsx)(s,{tagName:"h4",value:d.block_subtitle,onChange:e=>a({block_subtitle:e}),placeholder:"Enter block subtitle ..."})}),(0,e.jsx)("div",{class:"ikp-cc-block-description",children:(0,e.jsx)(s,{tagName:"p",value:d.block_description,onChange:e=>a({block_description:e}),placeholder:"Enter block description ..."})})]})})]})})),save:i=>{const{attributes:c}=i;return(0,e.jsxs)("div",{id:"ikp-cc-card",children:[(0,e.jsx)("div",{class:"ikp-cc-card__left-side",children:(0,e.jsx)("div",{class:"ikp-cc-img-wrapper",children:(0,e.jsx)("img",{src:""!=c.media_url?c.media_url:Assets.default_image,alt:"Image"})})}),(0,e.jsx)("div",{class:"ikp-cc-card__right-side",children:(0,e.jsxs)("div",{class:"ikp-cc-content-wrapper",children:[(0,e.jsx)("div",{class:"ikp-cc-block-title",children:(0,e.jsx)(s.Content,{tagName:"h2",value:c.block_title})}),(0,e.jsx)("div",{class:"ikp-cc-block-subtitle",children:(0,e.jsx)(s.Content,{tagName:"h4",value:c.block_subtitle})}),(0,e.jsx)("div",{class:"ikp-cc-block-description",children:(0,e.jsx)(s.Content,{tagName:"p",value:c.block_description})})]})})]})}})})();