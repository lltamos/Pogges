webpackJsonp([44],{"9cC2":function(e,t,s){"use strict";Object.defineProperty(t,"__esModule",{value:!0});s("eqfM");var i=s("/QYm"),n=s("Gu7T"),o=s.n(n),r=s("gyMJ"),a={name:"comment",components:{review:s("GK7I").a},data:function(){return{reviews:[],loading:!1,finished:!1,offset:0,ApiType:{course:"getCourseReviews",classroom:"getClassroomReviews"}}},created:function(){},computed:{isClass:function(){return"classroom"===this.type}},methods:{onLoad:function(){var a=this,e=this.$route.params.id,t=this.$route.query.type,s=this.ApiType;r.a[s[t]]({query:{id:e},params:{offset:this.offset}}).then(function(e){var t=e.data,s=e.paging,i=a.reviews,n=s.total;a.reviews=[].concat(o()(i),o()(t)),a.offset=a.reviews.length,a.reviews.length==n&&(a.finished=!0),a.loading=!1}).catch(function(e){i.a.fail(e.message),a.loading=!1})}}},l={render:function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"comment"},[s("van-list",{staticStyle:{"margin-top":"0"},attrs:{finished:t.finished},on:{load:t.onLoad},model:{value:t.loading,callback:function(e){t.loading=e},expression:"loading"}},[t._l(t.reviews,function(e){return[s("review",{attrs:{isClass:t.isClass,review:e,disableMask:!1,timeFormat:"complete",course:e.course}})]})],2)],1)},staticRenderFns:[]},c=s("VU/8")(a,l,!1,null,null,null);t.default=c.exports}});