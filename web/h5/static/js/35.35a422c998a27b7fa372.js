webpackJsonp([35],{oAQT:function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var a=i("mvHQ"),r=i.n(a),s=i("woOf"),o=i.n(s),n=(i("eqfM"),i("/QYm")),d=i("NyOD"),u=i("1JqO"),c=(i("NYxO"),i("mtWM")),l=i.n(c),v=i("gyMJ"),m=i("Du/2"),h={mixins:[d.a,u.a],data:function(){return{regular:!1,tipShow:!0,failTextShow:!1,imgAddress:"",btnText:"立即开启摄像头",uploadParams:{},requestStartT:"",requestEndT:"",verifiedText:"认证",errorShow:!1,scanCode:this.$route.query.loginToken||""}},mounted:function(){var i=this;1==this.$route.query.faceRegistered&&(this.verifiedText="设置");var e={type:this.$route.query.type,loginField:this.$route.query.loginField,loginToken:this.scanCode};v.a.getSessions({data:e}).then(function(e){i.regular=!0;var t=e.upload.form;i.uploadParams={sessionId:e.id,uploadUrl:t.action,uploadKey:t.params.key,uploadToken:t.params.token}}).catch(function(e){i.errorShow=!0,setTimeout(i.feedbackAction,3e3)})},methods:{polling:function(){var a=this,s=this;v.a.faceSession({query:{sessionId:this.uploadParams.sessionId},params:{loginToken:this.scanCode}}).then(function(e){if("processing"===e.status){if(a.requestStartT?a.requestEndT=new Date:a.requestStartT=new Date,58e3<(a.requestEndT?a.requestEndT-a.requestStartT:0))return void s.recognitionFail();setTimeout(function(){s.polling()},2e3)}else if("successed"===e.status){if(n.a.success({duration:2e3,message:"人脸识别成功"}),a.scanCode)return void setTimeout(a.feedbackAction,3e3);if(e.login){var t={avatar:{large:e.login.largeAvatar,medium:e.login.mediumAvatar,small:e.login.smallAvatar}},i=o()(e.login.user,t);a.$store.commit(m.s,{token:e.login.token,user:i})}a.afterLogin()}else if(1===e.lastFailed){if(n.a.fail({duration:2e3,message:"人脸识别"+a.verifiedText+"失败，多次不通过"}),a.scanCode)return void setTimeout(a.feedbackAction,3e3);a.failTextShow=!0,a.tipShow=!1;setTimeout(function(){a.$router.push({name:"login",query:{redirect:a.$route.query.redirect||""}})},3e3)}else a.recognitionFail()}).catch(function(e){5==e.code&&(a.errorShow=!0,setTimeout(a.feedbackAction,3e3))})},isWeixin:function(){return"micromessenger"==navigator.userAgent.toLowerCase().match(/MicroMessenger/i)},feedbackAction:function(){this.isWeixin()?WeixinJSBridge.call("closeWindow"):this.$router.back(-1)},recognitionFail:function(){n.a.fail({duration:2e3,message:"人脸识别"+this.verifiedText+"失败"}),this.scanCode?setTimeout(this.feedbackAction,3e3):(this.tipShow=!0,this.btnText="重新"+this.verifiedText)},openCamera:function(e){var i=this,t=e.target.files[0],a=new FileReader;a.readAsDataURL(t),a.onloadend=function(e){i.imgAddress=e.target.result,i.tipShow=!1};var s=this.uploadParams.uploadUrl,o=new FormData;o.append("file",t,t.name),o.append("token",this.uploadParams.uploadToken),o.append("key",this.uploadParams.uploadKey),l.a.post(s,o,{headers:{"Content-Type":"multipart/form-data"},interceptor:"end"}).then(function(e){var t={query:{sessionId:i.uploadParams.sessionId},params:{loginToken:i.scanCode},data:{response_body:r()(e.data),response_code:e.status}};v.a.finishUploadResult(t).then(function(e){e.success&&(i.tipShow=!1,i.polling())}).catch(function(e){5==e.code&&(i.errorShow=!0,setTimeout(i.feedbackAction,3e3))})}).catch(function(e){})}}},f={render:function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("div",{staticClass:"login-face-verification"},[e.errorShow?e._e():i("div",{directives:[{name:"show",rawName:"v-show",value:e.regular,expression:"regular"}]},[i("div",{directives:[{name:"show",rawName:"v-show",value:e.tipShow,expression:"tipShow"}],staticClass:"verification-tips"},[i("div",[e._v("即将进行人脸识别"+e._s(e.verifiedText))]),e._v(" "),i("div",{staticClass:"mt5"},[e._v("请将面部正对摄像头")])]),e._v(" "),e.failTextShow?e._e():i("div",{directives:[{name:"show",rawName:"v-show",value:!e.tipShow,expression:"!tipShow"}]},[i("img",{staticClass:"img-content",attrs:{src:e.imgAddress,alt:"人脸照片"}}),e._v(" "),i("div",[e._v(e._s(e.verifiedText)+"中，请稍候...")])]),e._v(" "),i("div",{directives:[{name:"show",rawName:"v-show",value:e.failTextShow,expression:"failTextShow"}]},[e._v("人脸识别多次"+e._s(e.verifiedText)+"不通过"),i("div",{staticClass:"mt5"},[e._v("请改用其它方式"+e._s(e.verifiedText)+"或联系管理员")])]),e._v(" "),i("div",{directives:[{name:"show",rawName:"v-show",value:e.tipShow,expression:"tipShow"}]},[i("label",{staticClass:"btn-open-camera",attrs:{for:"cameraItem"}},[e._v(e._s(e.btnText))]),e._v(" "),i("input",{staticClass:"hide",attrs:{id:"cameraItem",type:"file",accept:"image/*",capture:"user"},on:{change:e.openCamera}})])]),e._v(" "),e.errorShow?i("div",[e._v("\n    此链接已失效"),i("div",{staticClass:"mt5"},[e._v("请确认后再操作")])]):e._e()])},staticRenderFns:[]},p=i("VU/8")(h,f,!1,null,null,null);t.default=p.exports}});