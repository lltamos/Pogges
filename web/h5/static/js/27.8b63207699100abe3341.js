webpackJsonp([27],{GQcO:function(e,a,t){"use strict";Object.defineProperty(a,"__esModule",{value:!0});t("eqfM");var s=t("/QYm"),i=t("Dd8w"),n=t.n(i),r=t("gyMJ"),c=(t("mtWM"),t("NYxO")),d={data:function(){return{detail:{}}},computed:n()({},Object(c.mapState)(["wechatSwitch","isLoading"])),mounted:function(){var e=this.$route.query,a=e.pay_amount,t=e.title,s=e.sn,i=e.openid;this.detail={pay_amount:a,title:t,sn:s,openid:i}},methods:{handlePay:function(){var t=this;r.a.createTrade({data:{gateway:"WechatPay_JsH5",type:"purchase",orderSn:this.detail.sn,openid:this.detail.openid}}).then(function(a){WeixinJSBridge.invoke("getBrandWCPayRequest",a.platformCreatedResult,function(e){if("get_brand_wcpay_request:ok"==e.err_msg){if(t.wechatSwitch)return void t.$router.replace({path:"/pay_success",query:{paidUrl:a.paidSuccessUrlH5}});location.href=a.paidSuccessUrlH5}else"get_brand_wcpay_request:fail"==e.err_msg?alert("支付失败"):"get_brand_wcpay_request:cancel"==e.err_msg&&alert("支付已失败")})}).catch(function(e){s.a.fail(e.message)})}}},l={render:function(){var e=this,a=e.$createElement,t=e._self._c||a;return t("div",{staticClass:"payPage"},[e.isLoading?t("e-loading"):e._e(),e._v(" "),t("div",{staticClass:"payPage__order"},[t("div",{staticClass:"order__head"},[e._v("\n      "+e._s(e.detail.title)+"\n    ")]),e._v(" "),t("div",{staticClass:"order__infomation"},[t("div",{staticClass:"sum"},[t("span",[e._v("待支付")]),e._v(" "),t("span",{staticClass:"sum__price"},[e._v("¥ "),t("span",{staticClass:"num"},[e._v(e._s(e._f("toMoney")(e.detail.pay_amount)))])])])])]),e._v(" "),t("div",{staticClass:"payPage__payBtn",on:{click:e.handlePay}},[e._v("\n    立即支付\n  ")])],1)},staticRenderFns:[]},_=t("VU/8")(d,l,!1,null,null,null);a.default=_.exports}});